<?php
    require_once __DIR__.'/_backend/preload.php';
    $page['title'] = 'Thank You for Downloading elementary OS';
    $page['theme-color'] = '#3E4E54';

    include $template['header'];
    include $template['alert'];
?>

<section class="hero">
    <div class="grid flex">
        <div class="two-thirds">
            <h1>Thank You for Downloading elementary OS</h1>
            <p>For help and more info, read the <a href="<?php echo $page['lang-root'];?>/docs/installation#installation">installation guide</a>. If you purchased elementary OS, check your email for a receipt that includes your link to download elementary OS again for free.</p>
            <a class="button suggested-action" href="<?php echo $page['lang-root'];?>/docs/installation#installation">Read Installation Guide</a>
        </div>
    </div>
</section>

<?php
    include $template['footer'];
?>
