<?php

if (!isset($l10n)) {
   $l10n = new \App\Lib\L10n();
}
$page['lang'] = $l10n->lang();
if (!isset($page['lang'])) $page['lang'] = 'en';

$page['lang-root'] = $sitewide['root'];
if ($page['lang'] != 'en') {
    $page['lang-root'] .= $page['lang'].'/';
}
if (!isset($page['path'])) {
    $page['path'] = str_replace($sitewide['root'], '/', $sitewide['path']);
    $page['path'] = str_replace('/'.$page['lang'].'/', '/', $page['path']);
}
if (!isset($page['name'])) {
    $page['name'] = trim(preg_replace('#\.php$#', '', $page['path']), '/');
    if (empty($page['name'])) {
        $page['name'] = 'index';
    }
}
if (isset($page['title'])) {
    $page['title'] = $l10n->translate($page['title'], $page['name']);
}

if (!isset($page['styles'])) $page['styles'] = array();
if (!isset($page['script-plugins'])) $page['script-plugins'] = array();
if (!isset($page['scripts'])) $page['scripts'] = array();

$stylesManifest = json_decode(file_get_contents('styles/manifest.json'), true);
$scriptsManifest = json_decode(file_get_contents('scripts/manifest.json'), true);

$l10n->init();
$l10n->set_domain('layout');
$l10n->begin_html_translation();

?>

<!doctype html>
<!--[if IE]><html lang="<?php echo $page['lang']; ?>" class="ie-legacy"><![endif]-->
<!--[if !IE]><!--><html lang="<?php echo $page['lang']; ?>"><!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <meta name="description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>">
        <meta name="author"      content="<?php echo !empty($page['author']) ? $page['author'] : $sitewide['author']; ?>">
        <meta name="theme-color" content="<?php echo !empty($page['theme-color']) ? $page['theme-color'] : $sitewide['theme-color']; ?>">

        <meta name="twitter:card"        content="summary_large_image">
        <meta name="twitter:site"        content="@elementary">
        <meta name="twitter:creator"     content="@elementary">

        <meta property="og:title"       content="<?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?>" />
        <meta property="og:description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>" />
        <meta property="og:image"       content="<?php echo !empty($page['image']) ? $page['image'] : $sitewide['image']; ?>" />

        <meta itemprop="name"        content="<?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?>" />
        <meta itemprop="description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>" />
        <meta itemprop="image"       content="<?php echo !empty($page['image']) ? $page['image'] : $sitewide['image']; ?>" />

        <meta name="apple-mobile-web-app-title" content="elementary">
        <link rel="manifest" href="/manifest.json">

        <title><?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?></title>

        <base href="<?php echo $sitewide['root']; ?>">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="images/launcher-icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="256x256">

        <?php if ($page['lang']) { ?>
        <link rel="alternate" type="text/html" hreflang="en" href="<?php echo $sitewide['root'].(($page['name'] == 'index') ? '' : $page['name']); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="https://fonts.googleapis.com/css?family=Raleway:800|Open+Sans:300,400,600,700,300italic,400italic|Roboto+Mono&subset=latin,greek,vietnamese,greek-ext,latin-ext,cyrillic,cyrillic-ext">
        <?php } else { ?>
        <link rel="alternate" type="text/html" hreflang="en" href="<?php echo $sitewide['root'].(($page['name'] == 'index') ? '' : $page['name']); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="https://fonts.googleapis.com/css?family=Raleway:800|Open+Sans:300,400,600,700,300italic,400italic|Roboto+Mono">
        <?php } ?>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $stylesManifest["styles/main"] ?>">

        <?php foreach ($page['styles'] as $style) { ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $stylesManifest[$style] ?>">
        <?php } ?>

        <?php if (!isset($scriptless) || $scriptless === false) { ?>
        <script src=<?php echo $scriptsManifest["scripts/common.js"]?>></script>
        <script src=<?php echo $scriptsManifest["scripts/main.js"]?> async></script>
        <script async defer data-domain="elementary.io" src="https://stats.elementary.io/js/index.js"></script>
        <script>window.plausible = window.plausible || function() { (window.plausible.q = window.plausible.q || []).push(arguments) }</script> 

        <?php
            // loads all async javascript tags here
            foreach ($page['scripts'] as $one => $two) {
                $src = (!is_string($one)) ? $two : $one;
                $atr = (is_array($two)) ? $two : array();

                if (!isset($atr['async'])) $atr['async'] = true;

                $atr_string = "";
                foreach ($atr as $name => $setting) {
                    if (is_bool($setting) && $setting === true) {
                        $atr_string .= ' ' . $name;
                    } else if (!is_bool($setting)) {
                        $atr_string .= ' ' . $name . '="' . $setting . '"';
                    }
                }
        ?>
        <script src="<?php echo $scriptsManifest[$src] ?>"<?php echo $atr_string ?>></script>
        <?php } ?>
        <?php } ?>
    </head>
    <body class="page-<?php echo $page['name']; ?>">
        <nav>
            <div class="nav-content">
                <ul>
                    <li><a href="<?php echo $page['lang-root']; ?>" class="logomark"><?php include __DIR__.'/../images/logomark.svg'; ?></a></li>
                    <li><a href="<?php echo $page['lang-root'].'support'; ?>">Support</a></li>
                    <li><a href="https://developer.elementary.io" target="_self">Developer</a></li>
                    <li><a href="<?php echo $page['lang-root'].'get-involved'; ?>">Get Involved</a></li>
                    <li><a href="<?php echo $page['lang-root'].'store/'; ?>">Store</a></li>
                    <li><a href="https://blog.elementary.io" target="_self">Blog</a></li>
                    <?php if (isset($_COOKIE['cart']) || substr($page['name'], 0, 5) === 'store') { ?>
                    <li><a href="<?php echo $page['lang-root'].'store/cart'; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                    <?php } ?>
                </ul>
                <ul class="right">
                    <li><a href="https://www.facebook.com/elementaryos" target="_blank" rel="noopener" data-l10n-off title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://mastodon.social/@elementary" target="_blank" rel="noopener" data-l10n-off title="Mastodon"><i class="fab fa-mastodon"></i></a></li>
                    <li><a href="https://www.reddit.com/r/elementaryos" target="_blank" rel="noopener" data-l10n-off title="Reddit"><i class="fab fa-reddit"></i></a></li>
                    <li><a href="https://elementaryos.stackexchange.com" target="_blank" rel="noopener" data-l10n-off title="Stack Exchange"><i class="fab fa-stack-exchange"></i></a></li>
                    <li><a href="https://twitter.com/elementary" target="_blank" rel="noopener" data-l10n-off title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://community-slack.elementary.io/" target="_blank" rel="noopener" data-l10n-off title="Slack"><i class="fab fa-slack"></i></a></li>
                </ul>
            </div>
        </nav>

        <?php require __DIR__ . '/event.php'; ?>

    <?php if (event_active('indiegogo appcenter 2/7')) { ?>
        <div class="overlay">
            <div class="overlay__content toast">
                <div class="toast__close"><i class="fas fa-times"></i></div>
                <span class="toast__text">We're Crowdfunding on IndieGoGo</span>
                <a href="https://igg.me/at/appcenter-for-everyone" class="toast__button">Back Us</a>
            </div>
        </div>
    <?php } ?>

        <div id="content-container">

<?php

$l10n->set_domain($page['name']);
