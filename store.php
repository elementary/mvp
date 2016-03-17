<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Store &sdot; elementary';
    $page['scripts'] = '<link rel="stylesheet" type="text/css" media="all" href="styles/store.css">';
    include $template['header'];
    include $template['alert'];
?>
            <div class="row">
                <h1>US Store</h1>
                <h4>This store only supports US-based orders.</h4>
                <h4>Not in the US? Check out our <a href="international-store">international store</a>.</h4>
            </div>
            <div class="row">
                <a href='https://mkt.com/elementary-llc' class='sq-embed-menu' data-menu-item-images='large' data-menu-accent-color='04a9dc' data-menu-template='column' data-menu-border='hide' data-menu-item-descriptions='show'>Order Online</a>
                <script src="https://cdn.sq-api.com/market/embed.js" charset="utf-8"></script>
            </div>
            <div class="row">
                <h4>All apparel is in US sizes. Tees run a bit snug; for sizing details, see American Apparel&rsquo;s <a href="http://www.americanapparel.net/sizing/default.asp?chart=mu.shirts" target="_blank">sizing chart</a>.</h4>
            </div>

<?php
    include $template['footer'];
?>
