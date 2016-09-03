<?php
    include __DIR__.'/../_templates/sitewide.php';

    require_once __DIR__.'/../backend/config.loader.php';
    require_once __DIR__.'/../backend/store/product.php';

    $page['title'] = 'Store &sdot; elementary';

    $page['styles'] = array(
        'styles/store.css'
    );

    $page['script-plugins'] = array(
        'https://cdn.jsdelivr.net/g/jquery.leanmodal2@2.5'
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
?>

    <script>ga('send', 'event', 'Store', 'Store Visit')</script>

    <div class="row alert warning">
        <div class="column alert">
            <div class="icon">
                <i class="warning fa fa-warning"></i>
            </div>
            <div class="icon-text">
                <h3>You are missing API keys</h3>
                <p>You are viewing a developmental version of the store without configuring api keys. This will lead to false positives and incorrect errors. Please set your keys to testing configuration.</p>
            </div>
        </div>
    </div>
<?php } ?>

<div class="row">
    <h1>Store</h1>
</div>

<?php foreach ($categories as $category => $products) { ?>

    <div class="grid grid--product">
        <h2 class="grid__title"><?php echo $category ?></h2>

        <?php foreach ($products as $product) { ?>

            <div class="grid__item" id="product-<?php echo $product['id'] ?>" data-product-name="<?php echo $product['name']; ?>">
                <img src="<?php echo $product['image'] ?>"/>
                <h2><?php echo $product['name'] ?></h2>
                <?php if ($product['price_min'] !== $product['price_max']) { ?>
                    <h4>$<?php echo number_format($product['price_min'], 2) ?> - $<?php echo number_format($product['price_max'], 2) ?></h4>
                <?php } else { ?>
                    <h4>$<?php echo number_format($product['price_min'], 2) ?></h4>
                <?php } ?>
                <a style="display:none;" class="open-modal" href="#product-<?php echo $product['id'] ?>-overview"></a>
            </div>

        <?php } ?>

    </div>

<?php } ?>

<?php foreach ($products as $product) { ?>

    <div id="product-<?php echo $product['id'] ?>-overview" class="modal modal--product"  data-product-name="<?php echo $product['name']; ?>">
        <i class="fa fa-close close-modal"></i>
        <div class="grid">
            <div class="half">
                <img src="<?php echo $product['image'] ?>"/>
            </div>
            <form action="<?php echo $sitewide['root'] ?>store/inventory" class="half">
                <h2><?php echo $product['name'] ?></h2>
                <h4 class="modal__price">$<?php echo number_format($product['price_min'], 2) ?></h4>
                <p><?php echo $product['description'] ?></p>

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

<script>window.products = <?php echo json_encode($products) ?></script>

<?php
    include $template['footer'];
?>
