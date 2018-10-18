<?php

if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['REMOTE_ADDR'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
} else {
    $ip = false;
}

// DEVELOPER OVERRIDE
// Override IP here
if (
    !$ip ||
    $ip == '127.0.0.1' ||
    isset($_GET['ip_override'])
) {
    $ip = '78.148.208.61';
}
