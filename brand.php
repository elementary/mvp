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
    <p>The elementary brand belongs to elementary, Inc., the company that guides and supports development of elementary products. These guidelines describe when and how the elementary brand should be used.</p>
</div>

<div class="row docs">
    <h2>Company and Product Names</h2>
    <p>The word <strong>elementary</strong> is a trademark of elementary, Inc. to refer to the company itself. It is always lower-case, even when beginning sentences. It may also be used along with product names (i.e. “elementary OS”) to refer to a specific product of elementary, Inc.</p>
    <p>The primary product of elementary, Inc. is <strong>elementary OS</strong>. For clarity, elementary OS should never be shortened to “elementary” or any abbreviation.</p>
</div>

<div class="row docs">
    <h2>Brand Marks</h2>
    <p>elementary, Inc. claims two marks: the <strong>“e” logomark</strong> and the <strong>“elementary” logotype</strong>. Both are considered trademarks and represent elementary, Inc.</p>
    <p>Both should be used with the following in mind:</p>
    <ul>
        <li><p>Do not stretch, skew, rotate, flip, or otherwise alter the marks.</p></li>
        <li><p>Do not use the marks on an overly-busy background; solid colors work best.</p></li>
        <li><p>The marks should be monochromatic; e.g. white on a dark background or black on a light background.</p></li>
    </ul>

    <div class="logomarks">
        <figure>
            <img src="https://raw.githubusercontent.com/elementary/brand/master/logomark.svg" alt="elementary Logomark" />
            <figcaption>Default logomark</figcaption>
        </figure>
        <figure>
            <img src="https://raw.githubusercontent.com/elementary/brand/master/logomark-alt.svg" alt="Alternate elementary Logomark" />
            <figcaption>Alternate logomark</figcaption>
        </figure>
    </div>
    <p>The “e” logomark is to be used to refer to elementary, Inc., especially when a square ratio is required. It should be used at larger sizes and when alongside similarly-weighted logos. The thinner, alternate logomark may be used in smaller contexts or when the default logomark feels too heavy.</p>

    <figure>
        <img src="https://raw.githubusercontent.com/elementary/brand/master/logotype.svg" alt="elementary Logotype" />
        <figcaption>Logotype</figcaption>
    </figure>

    <p>The “elementary” logotype is to be used when space allows to refer to elementary, Inc. It may also be used before a product name to refer to a specific product of elementary, Inc.</p>
    <p>The logotype should always be used under the following guidelines:</p>
    <ul>
        <li><p>Do not attempt to recreate the logotype by writing “elementary” in a specific font; always use the provided graphic.</p></li>
        <li><p>Do not use the logotype at small sizes; if it is not clear, use the logomark instead.</p></li>
    </ul>
</div>

<div class="row docs">
    <h2 id="color">Color</h2>
    <p>We employ the use of color combined with our name and marks to establish our brand. We use the following palette:</p>
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
            <div class="color-palette-header" style="background: #f37329; color: #4D0F00;">
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
            <div class="color-palette-header" style="background-color:#68b723; color: #0B2400;">
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
            <div class="color-palette-header" style="background-color:#28bca3; color: #003933;">
                <span>Mint</span>
                <span class="hex" data-l10n-off="1">28bca3</span>
            </div>
            <div class="color-palette-item" style="background-color:#89ffdd; color: #003933;">
                <span>Mint 100</span>
                <span class="hex" data-l10n-off="1">89ffdd</span>
            </div>
            <div class="color-palette-item" style="background-color:#43d6b5; color: #003933;">
                <span>Mint 300</span>
                <span class="hex" data-l10n-off="1">43d6b5</span>
            </div>
            <div class="color-palette-item" style="background-color:#28bca3; color: #003933;">
                <span>Mint 500</span>
                <span class="hex" data-l10n-off="1">28bca3</span>
            </div>
            <div class="color-palette-item" style="background-color:#0e9a83;">
                <span>Mint 700</span>
                <span class="hex" data-l10n-off="1">0e9a83</span>
            </div>
            <div class="color-palette-item" style="background-color:#007367;">
                <span>Mint 900</span>
                <span class="hex" data-l10n-off="1">007367</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color:#3689e6; color: #000F33">
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
            <div class="color-palette-header" style="background-color:#de3e80;">
                <span>Bubblegum</span>
                <span class="hex" data-l10n-off="1">de3e80</span>
            </div>
            <div class="color-palette-item" style="background-color:#fe9ab8; color: #5b0823;">
                <span>Bubblegum 100</span>
                <span class="hex" data-l10n-off="1">fe9ab8</span>
            </div>
            <div class="color-palette-item" style="background-color:#f4679d; color: #5b0823;">
                <span>Bubblegum 300</span>
                <span class="hex" data-l10n-off="1">f4679d</span>
            </div>
            <div class="color-palette-item" style="background-color:#de3e80;">
                <span>Bubblegum 500</span>
                <span class="hex" data-l10n-off="1">de3e80</span>
            </div>
            <div class="color-palette-item" style="background-color:#bc245d;">
                <span>Bubblegum 700</span>
                <span class="hex" data-l10n-off="1">bc245d</span>
            </div>
            <div class="color-palette-item" style="background-color:#910e38;">
                <span>Bubblegum 900</span>
                <span class="hex" data-l10n-off="1">910e38</span>
            </div>
        </div>
        <div class="color-palette-box">
            <div class="color-palette-header" style="background-color: #cfa25e; color: #3d211b;">
                <span>Latte</span>
                <span class="hex" data-l10n-off="1">cfa25e</span>
            </div>
            <div class="color-palette-item" style="background-color: #efdfc4; color: #3d211b;">
                <span>Latte 100</span>
                <span class="hex" data-l10n-off="1">efdfc4</span>
            </div>
            <div class="color-palette-item" style="background-color: #e7c591; color: #3d211b;">
                <span>Latte 300</span>
                <span class="hex" data-l10n-off="1">e7c591</span>
            </div>
            <div class="color-palette-item" style="background-color: #cfa25e; color: #3d211b;">
                <span>Latte 500</span>
                <span class="hex" data-l10n-off="1">cfa25e</span>
            </div>
            <div class="color-palette-item" style="background-color: #b6802e; color: #3d211b;">
                <span>Latte 700</span>
                <span class="hex" data-l10n-off="1">b6802e</span>
            </div>
            <div class="color-palette-item" style="background-color: #804b00;">
                <span>Latte 900</span>
                <span class="hex" data-l10n-off="1">804b00</span>
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
                <span class="hex" data-l10n-off="1">8a715e</span>
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
</div>

<div class="row docs">
    <h2>Fonts</h2>
    <p>For web and print, we use Inter for headings and body copy. For code blocks, we use Roboto Mono.</p>
</div>

<div class="row docs">
    <section id="community">
        <h2>Third Parties &amp; Community</h2>
        <p>We invite third-party developers creating products for elementary OS to adopt certain elements of the elementary brand for consistency:</p>
        <ul>
            <li>Color</li>
            <li>Fonts</li>
            <li>Voice/tone</li>
        </ul>
        <p>However, to avoid user confusion, we do restrict the usage of the elementary name and marks:</p>
        <ul>
            <li><p>You are encouraged to say that your app or service is “designed for elementary OS,” but do not use the elementary name or marks as part of the name of your company, application, product, or service—or in any logo you create.</p></li>
            <li><p>Only use the elementary name or marks to refer to elementary, Inc. or its products (i.e. elementary OS).</p></li>
        </ul>

        <h3>Community</h3>
        <p>Community products (sites, fan clubs, etc.) are encouraged to use the elementary Community logo:</p>
        <img src="<?php echo $sitewide['root'];?>images/brand/community-color.png" alt="elementary Community Logo with color"/>
        <img src="<?php echo $sitewide['root'];?>images/brand/community-black.png" alt="elementary Community Logo in black"/>
        <p>This helps establish the product as part of the overall community while reducing confusion that can arise from using the elementary, Inc. logomark.</p>
    </section>
</div>

<div class="row docs">
    <section id="hardware">
        <h2>Hardware Distributors</h2>
        <p>As long as our software carries the elementary branding, the experience must be consistent—whether the OS was downloaded from our website or pre-installed on a hardware product.</p>
        <p>The software components of elementary OS may be modified and redistributed according to the open source terms of the software’s licensing; however, the above branding and trademarks may only be redistributed under one or more of the following conditions:</p>
        <ol>
            <li><p>The software remains substantially unchanged; including default apps, stylesheet and iconography, etc., or</p></li>
            <li><p>Software modifications are approved by elementary, Inc.</p></li>
        </ol>
        <p>Drivers and hardware enablement are of course acceptable. We understand that distributor branding (i.e. default wallpapers) can be important for distributors, so these modifications will typically be approved. If in doubt, email <a href="mailto:brand@elementary.io">brand@elementary.io</a> for clarification or direction.</p>
        <p>If you’re unable or unwilling to follow the elementary, Inc. trademark redistribution terms, removing our trademarks from the OS is simple and straightforward:</p>
        <ol>
            <li><p>Modify the <code>DISTRIB_DESCRIPTION</code> line in the file <code>/etc/lsb-release</code> to exclude our trademarks.</p></li>
            <li><p>Replace the iconography such that the icon <code>distributor-logo</code> present in <code>/usr/share/icons/elementary/places/</code> in each of the provided sizes does not appear in the OS.</p></li>
            <li><p>Remove or replace the packages <code>plymouth-theme-elementary</code> and <code>plymouth-theme-elementary-text</code>.</p></li>
        </ol>
        <p>For more information about OEMs and hardware distributors, see our <a href="<?php echo $page['lang-root'].'oem'; ?>">information for OEMs</a>.</p>
    </section>
</div>

<div class="row docs">
    <h2>Merchandise</h2>
    <p>We do not authorize our branding (including our name or brand marks) to be used on third-party merchandise without explicit written approval.</p>
</div>

<div class="row docs">
    <h2>Assets &amp; More Info</h2>
    <a class="button suggested-action" href="https://github.com/elementary/brand"><i class="fab fa-github"></i> Download on GitHub</a>
    <p>For further information regarding the use of the elementary name, branding, and trademarks, please email <a href="mailto:brand@elementary.io">brand@elementary.io</a>.</p>
</div>

<?php
    include $template['footer'];
?>
