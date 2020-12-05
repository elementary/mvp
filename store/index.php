<?php
    require_once __DIR__.'/../_backend/preload.php';
    require_once __DIR__.'/../_backend/config.loader.php';
    require_once __DIR__.'/../_backend/store/product.php';

    $page['title'] = 'Store &sdot; elementary';

    $page['styles'] = array(
        'styles/store.css'
    );

    $page['script-plugins'] = array(
        'https://cdn.jsdelivr.net/gh/eustasy/jquery.leanmodal2@2.5/jQuery.leanModal2.min.js'
    );

    $page['scripts'] = array(
        'scripts/store/index.js' => array(
            'async' => false
        ),
    );

    include $template['header'];
    include $template['alert'];

    $products = \Store\Product\get_products();

    $categories = [];
    foreach ($products as $product) {
        if (!isset($categories[$product['type']])) {
            $categories[$product['type']] = [$product];
        } else {
            $categories[$product['type']][] = $product;
        }
    }

    if (getenv('PHPENV') !== 'production' && (
        !isset($config['printful_key']) ||
        !isset($config['google_map_key']) ||
        $config['printful_key'] === 'printful_key' ||
        $config['google_map_key'] === 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
    )) {

        $l10n->set_domain('layout');
?>
    <div class="row alert warning">
        <div class="column alert">
            <div class="icon">
                <i class="warning fas fa-4x fa-exclamation-triangle"></i>
            </div>
            <div class="icon-text">
                <h3>You are missing API keys</h3>
                <p>You are viewing a development version of the store without configuring API keys. This will lead to false positives and incorrect errors. Please set your keys to testing configuration.</p>
            </div>
        </div>
    </div>
<?php
        $l10n->set_domain($page['name']);
    }
?>

<section class="grid">
    <div class="two-thirds">
        <h1>
            Support Development.<br />
            Get Gear. Win/Win.
        </h1>
        <p>Every purchase goes towards developing elementary OS, its apps, and its services. We're a small <a href="/team">team</a>, mostly volunteer, working constantly to make elementary better—your support helps make elementary OS more sustainable.</p>
    </div>
</section>

<section class="grid" id="devices">
    <div class="third device">
        <img src="/images/store/devices/star-labtop-mk-iv.png" />
        <h4><strong>Star LabTop Mk IV</strong> by Star Labs</h4>
        <span class="price">From $791</span>
        <p>Thin, light, and powerful. Incredible multi-touch glass trackpad. 13.3&Prime; ARC display for vivid color without glare. <a href="https://starlabs.systems/pages/labtop-mk-iv?rfsn=4227837.e8f025" class="read-more">Learn More</a></p>
        <a href="https://starlabs.systems/products/labtop-mk-iv?rfsn=4227837.e8f025" class="button suggested-action">Buy Now</a>
    </div>

    <div class="grid" id="retailers">
        <div class="two-thirds">
            <h3>Retailers</h3>
            <p>Hardware that comes with elementary OS can also be purchased from the following retailers.</p>
        </div>

        <div class="grid">
            <div class="third">
                <h4><a class="read-more" href="https://laptopwithlinux.com/?ref=36&utm_source=referral&utm_medium=elementary&utm_campaign=elementary" target="_blank" title="Visit Laptop With Linux">Laptop With Linux</a></h4>
                <ul>
                    <li>Laptops, mini desktops</li>
                    <li>Based in the Netherlands</li>
                    <li>Free shipping within EU</li>
                </ul>
            </div>
            <div class="third">
                <h4><a class="read-more" href="https://slimbook.es?utm_source=referral&utm_medium=elementary&utm_campaign=elementary" target="_blank" title="Visit Slimbook">Slimbook</a></h4>
                <ul>
                    <li>Laptops, desktops, mini desktops, all-in-ones</li>
                    <li>Based in Spain</li>
                    <li>International shipping</li>
                </ul>
            </div>
            <div class="third">
                <h4><a class="read-more" href="https://starlabs.systems/?rfsn=4227837.e8f025" target="_blank" title="Visit Star Labs">Star Labs</a></h4>
                <ul>
                    <li>Laptops</li>
                    <li>Based in the United Kingdom</li>
                    <li>International shipping</li>
                </ul>
            </div>
        </div>

        <div class="two-thirds">
            <p><small>Hardware and software support for these devices are provided by the retailer.</small></p>
        </div>
    </div>
</section>

<?php foreach ($categories as $category => $products) { ?>

    <div class="grid grid--product">
        <h3 class="grid__title"><?php echo $category ?></h3>

        <?php foreach ($products as $product) { ?>

            <div class="grid__item" id="product-<?php echo $product['id'] ?>" data-product-name="<?php echo $product['name']; ?>" data-printful-id="<?php echo $product['printful_id'][0] ?>">
                <img src="<?php echo $product['image'] ?>"/>
                <h4><?php echo $product['name'] ?></h4>
                <?php if ($product['price_min'] !== $product['price_max']) { ?>
                    <p data-l10n-off="1" class="text-center">$<?php echo number_format($product['price_min'], 2) ?> - $<?php echo number_format($product['price_max'], 2) ?></p>
                <?php } else { ?>
                    <p data-l10n-off="1" class="text-center">$<?php echo number_format($product['price_min'], 2) ?></p>
                <?php } ?>
                <a style="display:none;" class="open-modal" href="#product-<?php echo $product['id'] ?>-overview"></a>
            </div>

        <?php } ?>

    </div>

<?php } ?>

<?php foreach (\Store\Product\get_products() as $product) { ?>

    <div id="product-<?php echo $product['id'] ?>-overview" class="modal modal--product"  data-product-name="<?php echo $product['name']; ?>">
        <i class="fa fa-times close-modal"></i>
        <div class="grid">
            <div class="half">
                <img src="<?php echo $product['image'] ?>"/>
            </div>
            <form action="<?php echo $page['lang-root'] ?>store/inventory" class="half">
                <h2><?php echo $product['name'] ?></h2>
                <h4 data-l10n-off="1"><strong class="modal__price">$<?php echo number_format($product['price_min'], 2) ?></strong> <span class="modal__shipping" data-l10n-off="1"></span></h4>
                <p><?php echo $product['description'] ?></p>

                <?php if (event_active('covid-19')) { ?>
                  <p><?php echo $config['covid_estimate'] ?></p>
                <?php } ?>

                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <input type="hidden" name="variant" value="<?php echo $product['variants'][0]['id'] ?>">
                <input type="hidden" name="math" value="add">

                <div>
                    <?php if (count($product['color']) > 1) { ?>
                        <h4 class="label">Color</h4>
                        <select name="color">
                            <?php foreach ($product['color'] as $value) { ?>
                                <option value="<?php echo $value ?>"><?php echo $value ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>

                    <?php if (count($product['size']) > 1) { ?>
                        <h4 class="label">Size</h4>
                        <div class="size-select">
                            <input type="hidden" name="size" value="<?php echo $product['size'][0] ?>">
                            <?php
                                foreach ($product['size'] as $i => $value) {
                                    $o = ($i === 0) ? 'checked' : '';
                            ?>
                                <button type="button" value="<?php echo $value ?>"  class="small-button target-amount <?php echo $o ?>"><?php echo $value ?></button>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <h4 class="label">Quantity</h4>
                    <input type="number" step="1" min="1" value="1" name="quantity">
                </div>

                <span class="alert--error"></span>

                <input type="submit" class="button small-button suggested-action" value="Add to Cart">
            </form>
        </div>
    </div>

<?php } ?>

<section class="grid">
    <div class="two-thirds">
        <h3>Worldwide Shipping</h3>
        <p>We ship apparel and accessories all around the world! Orders are made on-demand typically within 2–7 days and will be shipped with the method you choose at checkout. <?php if (event_active('covid-19')) { ?><?php echo $config['covid_estimate'] ?><?php } ?></p>

        <p><small>Crimea, Cuba, Iran, Syria, and North Korea excluded. Shipping methods, prices, and times vary by country. Shipments outside of the USA may incur customs fees depending on the origin and destination countries.</small></p>
    </div>
</section>

<script>window.products = <?php echo json_encode(\Store\Product\get_products()) ?></script>

<?php
    include $template['footer'];
?>
