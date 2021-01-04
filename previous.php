<?php
    require_once __DIR__.'/_backend/classify.current.php';
    require_once __DIR__.'/_backend/preload.php';
    require_once __DIR__.'/_backend/os-payment.php';
    $page['title'] = 'Thank You for Downloading elementary OS';
    $page['theme-color'] = '#3E4E54';

    $page['scripts'] = array(
        'scripts/download.js',
    );

    $already_paid = (os_payment_getcookie($config['previous_version']) > 0);
    if (!$already_paid) {
        header("Location: " . $sitewide['root']);
        exit;
    }

    include $template['header'];
    include $template['alert'];
?>

<section>
    <div class="row alert warning">
        <div class="column alert">
            <div class="icon">
                <i class="warning fas fa-4x fa-exclamation-triangle"></i>
            </div>
            <div class="icon-text">
                <h3>The release you are downloading is outdated.</h3>
                <p>You are attempting to download an outdated release of elementary OS that you have purchased. For the latest updates and extended support please go to <a href="https://elementary.io">elementary.io</a></p>
            </div>
        </div>
    </div>
    <div class="grid flex">
        <div class="two-thirds">
            <h1>Thank You for Downloading elementary OS</h1>
            <div class="action-area">
                <div class="linked">
                    <a class="button suggested-action download-link http" href="<?php echo $download_link.$config['previous_filename']; ?>">Download</a>
                    <a class="button suggested-action download-link magnet" title="Torrent Magnet Link" href="<?php echo 'magnet:?xt=urn:btih:'.$config['previous_magnet'].'&dn='.$config['previous_filename']; ?>&tr=https%3A%2F%2Fashrise.com%3A443%2Fphoenix%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.ccc.de%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.publicbt.com%3A80%2Fannounce&ws=http:<?php echo $download_link.$config['previous_filename']; ?>"><i class="fa fa-magnet"></i></a>
                </div>
            </div>
            <p>For help and more info, read the <a href="<?php echo $page['lang-root'];?>/docs/installation#installation">installation guide</a>. If you purchased elementary OS, check your email for a receipt that includes your link to download elementary OS again for free.</p>
            <a class="button suggested-action" href="<?php echo $page['lang-root'];?>/docs/installation#installation">Read Installation Guide</a>
        </div>
    </div>
</section>

<?php
    include $template['footer'];
