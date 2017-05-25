<?php

/**
 * api/download.php
 * Sets payment cookie from stripe charge
 */

require_once __DIR__ . '/../_backend/bootstrap.php';

require_once __DIR__.'/../_backend/preload.php';
require_once __DIR__.'/../_backend/os-payment.php';

\Stripe\Stripe::setApiKey($config['stripe_sk']);

/**
 * go_home
 * Sets header to redirect home
 *
 * @return {Void}
 */
function go_home() {
    global $sitewide;

    header("Location: " . $sitewide['root']);
    die();
}

// everything else falls into a great pyrimid of php ifs
$charge_id = $_GET['charge'];

if (substr($charge_id, 0, 3) !== 'ch_') {
    return go_home();
}

try {
    $charge = \Stripe\Charge::retrieve($charge_id);
} catch (Exception $e) {
    return go_home();
}

$products = array();
if (isset($charge['metadata']['products'])) {
    try {
        $products = json_decode($charge['metadata']['products']);
    } catch (Exception $e) {
        return go_home();
    }
}

$isoVersion = false;
foreach ($products as $product) {
    if (substr($product, 0, 3) === 'ISO') {
        // Set $isoVersion to the ISO Version number like '0.4.1' from the purchased product string 'ISO_0.4.1'
        $isoVersion = substr($product, 4);
        // Set $isoMajor as the first number from $isoVersion
        list($isoMajor) = explode('.', $isoVersion);
        // If that worked
        if ($isoMajor != null) {
            // Set $currentMajor as the first number from the current release version
            list($currentMajor) = explode('.', $config['release_version']);
            // If the purchased major matches the current major
            if ($isoMajor == $currentMajor) {
                // Override $isoVersion to match the current release,
                // so long as it's only a minor upgrade.
                $isoVersion = $config['release_version'];
            }
        }
    }
}

// $isoVersion is either:
// 1. an outdated product that was purchased
// 2. a minor upgrade version to a product that was purchased
if ($isoVersion !== false) {
    os_payment_setcookie($isoVersion, $charge['amount']);
}

return go_home();
