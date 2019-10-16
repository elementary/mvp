<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Brand &sdot; elementary';

    $page['styles'] = array(
        'styles/brand.css'
    );

    include $template['header'];
    include $template['alert'];
?>

<div class="row docs">
    <h1>Brand</h1>
    <p>The elementary brand is unique: technically it belongs to elementary, Inc., the company that guides and supports development of elementary products. However, we have a great community and don’t want to be too overbearing with legal requirements and technicalities. As such, we have written up some guidelines to make it easier to understand when and how the elementary brand should be used.</p>

    <h2>Name</h2>
    <p>The word "elementary" refers to and is a trademark of elementary, Inc. elementary is always lower-case, even when beginning sentences such as this. It is also used along with product names (i.e. "elementary OS") to refer to a specific product of elementary.</p>

    <h2>Brand Marks</h2>
    <p>elementary owns two marks: the "elementary" logotype and the "e" logomark. Both are considered trademarks and represent elementary—the company—and its products.</p>
    <p>Both should be used with the following in mind:</p>
    <ul>
        <li>Do not stretch, skew, rotate, flip, or otherwise alter the marks.</li>
        <li>Do not use the marks on an overly-busy background; solid colors work best.</li>
        <li>The marks should always be monochromatic; typically white if on a dark background, or black if on a light background.</li>
    </ul>

    <h3>Logotype</h3>
    <img src="<?php echo $sitewide['root'];?>images/brand/logotype.png" alt="elementary Logotype"/>
    <p>The logotype is to be used when space allows to refer to elementary the company. It can be used before a product name to refer to a specific product of elementary.</p>
    <p>The logotype should always be used under the following guidelines:</p>
    <ul>
        <li>Do not attempt to recreate the logotype. It is a meticulously-designed brand mark, not simply "elementary" written in a specific font.</li>
        <li>Do not use the logotype at small sizes; if it is not clear, use the logomark instead.</li>
    </ul>

    <h3>Logomark</h3>
    <img id="logomark" src="<?php echo $sitewide['root'];?>images/brand/logomark.png" alt="elementary Logomark"/>
    <p>The "e" logomark is to be used to refer to elementary the company when space is constrained or a square ratio is required.</p>

    <h2>Color</h2>
    <p>elementary employs the use of color combined with our name and marks to establish our brand. We use the following palette:</p>
    <div class="color-palette-section">
        <div class="color-palette-box">
            <div class="color-palette-header" style="background: #c6262e; color: #ffffff;">
                <span>Strawberry</span>
                <span class="hex" data-l10n-off="1">c6262e</span>
            </div>
            <div class="color-palette-item" style="background: #ff8c82; color: #330000;">
                <span>Strawberry 100</span>
                <span class="hex" data-l10n-off="1">ff8c82</span>
            </div>
            <div class="color-palette-item" style="background: #ed5353; color: #330000;">
                <span>Strawberry 300</span>
                <span class="hex" data-l10n-off="1">ed5353</span>
            </div>
            <div class="color-palette-item" style="background: #c6262e;">
                <span>Strawberry 500</span>
                <span class="hex" data-l10n-off="1">c6262e</span>
            </div>
            <div class="color-palette-item" style="background: #a10705;">
                <span>Strawberry 700</span>
                <span class="hex" data-l10n-off="1">a10705</span>
            </div>
            <div class="color-palette-item" style="background: #7a0000;">
                <span>Strawberry 900</span>
                <span class="hex" data-l10n-off="1">7a0000</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background: #f37329; color: #ffffff;">
                <span>Orange</span>
                <span class="hex" data-l10n-off="1">f37329</span>
            </div>
            <div class="color-palette-item" style="background: #ffc27d; color: #4D0F00;">
                <span>Orange 100</span>
                <span class="hex" data-l10n-off="1">ffc27d</span>
            </div>
            <div class="color-palette-item" style="background: #ffa154; color: #4D0F00;">
                <span>Orange 300</span>
                <span class="hex" data-l10n-off="1">ffa154</span>
            </div>
            <div class="color-palette-item" style="background: #f37329; color: #4D0F00;">
                <span>Orange 500</span>
                <span class="hex" data-l10n-off="1">f37329</span>
            </div>
            <div class="color-palette-item" style="background: #cc3b02;">
                <span>Orange 700</span>
                <span class="hex" data-l10n-off="1">cc3b02</span>
            </div>
            <div class="color-palette-item" style="background: #a62100;">
                <span> Orange 900</span>
                <span class="hex" data-l10n-off="1">a62100</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#f9c440; color: #381F00;">
                <span>Banana</span>
                <span class="hex" data-l10n-off="1">f9c440</span>
            </div>
            <div class="color-palette-item" style="background-color:#fff394; color: #381F00;">
                <span>Banana 100</span>
                <span class="hex" data-l10n-off="1">fff394</span>
            </div>
            <div class="color-palette-item" style="background-color:#ffe16b; color: #381F00;">
                <span>Banana 300</span>
                <span class="hex" data-l10n-off="1">ffe16b</span>
            </div>
            <div class="color-palette-item" style="background-color:#f9c440; color: #381F00;">
                <span>Banana 500</span>
                <span class="hex" data-l10n-off="1">f9c440</span>
            </div>
            <div class="color-palette-item" style="background-color:#d48e15; color: #381F00;">
                <span>Banana 700</span>
                <span class="hex" data-l10n-off="1">d48e15</span>
            </div>
            <div class="color-palette-item" style="background-color:#ad5f00;">
                <span>Banana 900</span>
                <span class="hex" data-l10n-off="1">ad5f00</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#68b723;">
                <span>Lime</span>
                <span class="hex" data-l10n-off="1">68b723</span>
            </div>
            <div class="color-palette-item" style="background-color:#d1ff82; color: #0B2400;">
                <span>Lime 100</span>
                <span class="hex" data-l10n-off="1">d1ff82</span>
            </div>
            <div class="color-palette-item" style="background-color:#9bdb4d; color: #0B2400;">
                <span>Lime 300</span>
                <span class="hex" data-l10n-off="1">9bdb4d</span>
            </div>
            <div class="color-palette-item" style="background-color:#68b723; color: #0B2400;">
                <span>Lime 500</span>
                <span class="hex" data-l10n-off="1">68b723</span>
            </div>
            <div class="color-palette-item" style="background-color:#3a9104;">
                <span>Lime 700</span>
                <span class="hex" data-l10n-off="1">3a9104</span>
            </div>
            <div class="color-palette-item" style="background-color:#206b00;">
                <span>Lime 900</span>
                <span class="hex" data-l10n-off="1">206b00</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#3689e6;">
                <span>Blueberry</span>
                <span class="hex" data-l10n-off="1">3689e6</span>
            </div>
            <div class="color-palette-item" style="background-color:#8cd5ff; color:#000F33;">
                <span>Blueberry 100</span>
                <span class="hex" data-l10n-off="1">8cd5ff</span>
            </div>
            <div class="color-palette-item" style="background-color:#64baff; color:#000F33;">
                <span>Blueberry 300</span>
                <span class="hex" data-l10n-off="1">64baff</span>
            </div>
            <div class="color-palette-item" style="background-color:#3689e6; color: #000F33">
                <span>Blueberry 500</span>
                <span class="hex" data-l10n-off="1">3689e6</span>
            </div>
            <div class="color-palette-item" style="background-color:#0d52bf;">
                <span>Blueberry 700</span>
                <span class="hex" data-l10n-off="1">0d52bf</span>
            </div>
            <div class="color-palette-item" style="background-color:#002e99;">
                <span>Blueberry 900</span>
                <span class="hex" data-l10n-off="1">002e99</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#a56de2;">
                <span>Grape</span>
                <span class="hex" data-l10n-off="1">a56de2</span>
            </div>
            <div class="color-palette-item" style="background-color:#e4c6fa; color: #160038;">
                <span>Grape 100</span>
                <span class="hex" data-l10n-off="1">e4c6fa</span>
            </div>
            <div class="color-palette-item" style="background-color:#cd9ef7; color: #160038;">
                <span>Grape 300</span>
                <span class="hex" data-l10n-off="1">cd9ef7</span>
            </div>
            <div class="color-palette-item" style="background-color:#a56de2;">
                <span>Grape 500</span>
                <span class="hex" data-l10n-off="1">a56de2</span>
            </div>
            <div class="color-palette-item" style="background-color:#7239b3;">
                <span>Grape 700</span>
                <span class="hex" data-l10n-off="1">7239b3</span>
            </div>
            <div class="color-palette-item" style="background-color:#452981;">
                <span>Grape 900</span>
                <span class="hex" data-l10n-off="1">452981</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#715344;">
                <span>Cocoa</span>
                <span class="hex" data-l10n-off="1">715344</span>
            </div>
            <div class="color-palette-item" style="background-color:#a3907c;">
                <span>Cocoa 100</span>
                <span class="hex" data-l10n-off="1">a3907c</span>
            </div>
            <div class="color-palette-item" style="background-color:#8a715e;">
                <span>Cocoa 300</span>
                <span class="hex" data-l10n-off="1">8a715e </span>
            </div>
            <div class="color-palette-item" style="background-color:#715344;">
                <span>Cocoa 500</span>
                <span class="hex" data-l10n-off="1">715344</span>
            </div>
            <div class="color-palette-item" style="background-color:#57392d;">
                <span>Cocoa 700</span>
                <span class="hex" data-l10n-off="1">57392d</span>
            </div>
            <div class="color-palette-item" style="background-color:#3d211b;">
                <span>Cocoa 900</span>
                <span class="hex" data-l10n-off="1">3d211b</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#abacae; color: #1a1a1a;">
                <span>Silver</span>
                <span class="hex" data-l10n-off="1">abacae</span>
            </div>
            <div class="color-palette-item" style="background-color:#fafafa; color: #1a1a1a;">
                <span>Silver 100</span>
                <span class="hex" data-l10n-off="1">fafafa</span>
            </div>
            <div class="color-palette-item" style="background-color:#d4d4d4; color: #1a1a1a;">
                <span>Silver 300</span>
                <span class="hex" data-l10n-off="1">d4d4d4</span>
            </div>
            <div class="color-palette-item" style="background-color:#abacae; color: #1a1a1a;">
                <span>Silver 500</span>
                <span class="hex" data-l10n-off="1">abacae</span>
            </div>
            <div class="color-palette-item" style="background-color:#7e8087;">
                <span>Silver 700</span>
                <span class="hex" data-l10n-off="1">7e8087</span>
            </div>
            <div class="color-palette-item" style="background-color:#555761;">
                <span>Silver 900</span>
                <span class="hex" data-l10n-off="1">555761</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#485a6c;">
                <span>Slate</span>
                <span class="hex" data-l10n-off="1">485a6c</span>
            </div>
            <div class="color-palette-item" style="background-color:#95a3ab; color: #0e141f;">
                <span>Slate 100</span>
                <span class="hex" data-l10n-off="1">95a3ab</span>
            </div>
            <div class="color-palette-item" style="background-color:#667885;">
                <span>Slate 300</span>
                <span class="hex" data-l10n-off="1">667885</span>
            </div>
            <div class="color-palette-item" style="background-color:#485a6c;">
                <span>Slate 500</span>
                <span class="hex" data-l10n-off="1">485a6c</span>
            </div>
            <div class="color-palette-item" style="background-color:#273445;">
                <span>Slate 700</span>
                <span class="hex" data-l10n-off="1">273445</span>
            </div>
            <div class="color-palette-item" style="background-color:#0e141f;">
                <span>Slate 900</span>
                <span class="hex" data-l10n-off="1">0e141f</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#333333;">
                <span>Black</span>
                <span class="hex" data-l10n-off="1">333333</span>
            </div>
            <div class="color-palette-item" style="background-color:#666666;">
                <span>Black 100</span>
                <span class="hex" data-l10n-off="1">666666</span>
            </div>
            <div class="color-palette-item" style="background-color:#4d4d4d;">
                <span>Black 300</span>
                <span class="hex" data-l10n-off="1">4d4d4d</span>
            </div>
            <div class="color-palette-item" style="background-color:#333333;">
                <span>Black 500</span>
                <span class="hex" data-l10n-off="1">333333</span>
            </div>
            <div class="color-palette-item" style="background-color:#1a1a1a;">
                <span>Black 700</span>
                <span class="hex" data-l10n-off="1">1a1a1a</span>
            </div>
            <div class="color-palette-item" style="background-color:#000000;">
                <span>Black 900</span>
                <span class="hex" data-l10n-off="1">000000</span>
            </div>
        </div>
    </div>

    <h2>Fonts</h2>
    <p>For web and print, we use Raleway for headings and Open Sans for body copy. For code blocks, we use Roboto Mono.</p>

    <section id="community">
        <h2>Third Parties &amp; Community</h2>
        <p>We encourage third party developers creating products for elementary OS to adopt certain elements of the elementary brand to achieve consistency:</p>
        <ul>
            <li>Color</li>
            <li>Fonts</li>
            <li>Voice/tone</li>
        </ul>
        <p>However, to avoid user confusion, we do restrict the usage of the elementary name and marks:</p>
        <ul>
            <li>You are encouraged to say that your app or service is designed for elementary OS, but please don't use the elementary name or marks as part of the name of your company, application, product, service, or in any logo you create.</li>
            <li>Only use the elementary name or marks to refer to elementary, Inc. or its products (i.e. elementary OS).</li>
        </ul>

        <h3>Community</h3>
        <p>Community products (sites, fan clubs, etc.) are encouraged to use the elementary Community logo:</p>
        <img src="<?php echo $sitewide['root'];?>images/brand/community-color.png" alt="elementary Community Logo with color"/>
        <img src="<?php echo $sitewide['root'];?>images/brand/community-black.png" alt="elementary Community Logo in black"/>
        <p>This helps establish the product as part of the overall elementary community while reducing confusion that can arise from using the main logomark.</p>
    </section>

    <section id="hardware">
        <h2>Hardware Distributors</h2>
        <p>We want to ensure that as long as our software carries the elementary branding, the experience will be consistent whether it was downloaded from our website or pre-installed on a hardware product.</p>
        <p>The software components of elementary OS may be modified and redistributed according to the terms of the software’s licensing. However, our brand marks may only be redistributed under one or more of the following conditions:</p>
        <ol>
            <li>The software remains unchanged, including pre-installed applications, stylesheets and iconography, configuration files, etc., or</li>
            <li>The modifications are approved in writing by elementary.</li>
        </ol>
        <p>We understand that including drivers, hardware enablement, and distributor branding is important for distributors, so these modifications will almost always be approved by elementary. If in doubt, please email <a href="mailto:brand@elementary.io">brand@elementary.io</a> for clarification or direction.</p>
        <p>If you’re unable or unwilling to follow these trademark redistribution terms, removing elementary’s trademarks from the OS should be simple and straightforward:</p>
        <ol>
            <li>Modify the <code>DISTRIB_DESCRIPTION</code> line in the file <code>/etc/lsb-release</code> to exclude our trademarks.</li>
            <li>Replace the iconography such that the icon <code>distributor-logo</code> present in <code>/usr/share/icons/elementary/places/</code> in each of the provided sizes does not appear in the OS.</li>
            <li>Remove the packages <code>plymouth-theme-elementary</code> and <code>plymouth-theme-elementary-text</code>.</li>
        </ol>
    </section>

    <h2>Merchandise</h2>
    <p>We do not typically allow our branding (including our name or brand marks) to be used on third-party merchandise.</p>

    <h2>Assets &amp; More Info</h2>
    <a class="button suggested-action" href="https://github.com/elementary/brand"><i class="fab fa-github"></i> Download on GitHub</a>
    <p>For further information regarding the use of the elementary name, branding, and trademarks, please email <a href="mailto:brand@elementary.io">brand@elementary.io</a>.</p>
</div>

<?php
    include $template['footer'];
?>
