<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Download Link Expired &sdot; elementary';

    include $template['header'];
    include $template['alert'];
?>

<script>window.statusCode = '410: Download Link Expired'</script>
<script src="scripts/error.js" async></script>

<div class="row">
    <div class="column alert">
        <i class="warning fa fa-clock-o"></i>
    </div>
    <div class="column alert">
        <h3>Whoops! That link has expired.</h3>
        <p>If you're trying to download elementary OS, please head back to the home page. If you were looking for something else, feel free to <a href="https://github.com/elementary/website/issues/new">file an issue on our GitHub</a>.</p>
    </div>
    <div class="row">
        <a class="button suggested-action" href="/">Go to Home Page</a>
    </div>
</div>

<?php
    include $template['footer'];
?>
