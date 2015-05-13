<?php
    $page['title'] = 'Download elementary OS';
    $page['image'] = 'https://elementary.io/images/notebook.png';
    $page['scripts'] = '<script src="https://checkout.stripe.com/checkout.js"></script>';
    $page['scripts'] .= '<link rel="stylesheet" type="text/css" media="all" href="styles/home.css">';
    include '_templates/sitewide.php';
    include $template['header'];

    $filesize = (int) file_get_contents(__DIR__.'/backend/iso-size.txt');
?>
            <script src="scripts/slider.js"></script>
            <script>var stripe_key = "<?php include __DIR__.'/backend/payment.php'; ?>";</script>
            <script>
                jQl.loadjQdep('scripts/jQuery.leanModal2.js');
                jQl.loadjQdep('scripts/homepage.js');
            </script>

            <div class="row">
                <div id="logotype">

                    <?php
                        // Embed the SVG to fix scaling in WebKit 1.x,
                        // while preserving CSS options for the image.
                        include('images/logotype.svg');
                    ?>

                </div>
                <h4>A fast and open replacement for Windows and OS X</h4>
            </div>

            <img class="hero" src="images/notebook.png">

            <div class="row">
                <div id="amounts">
                    <?php
                        if ( isset($_COOKIE['has_paid_freya']) && $_COOKIE['has_paid_freya'] ) {
                            ?>
                    <input type="hidden" id="amount-twenty-five" value="0">
                            <?php
                        } else {
                            ?>
                    <button id="amount-zero"        value="0"  class="small-button payment-button target-amount">0</button>
                    <button id="amount-five"        value="5"  class="small-button payment-button target-amount">5</button>
                    <button id="amount-ten"         value="10" class="small-button payment-button target-amount checked">10</button>
                    <button id="amount-twenty-five" value="25" class="small-button payment-button target-amount">25</button>
                    <div class="column">
                        <sup class="pre-amount">$</sup>
                        <input type="number" step="0.01" min="0" max="999999.99" id="amount-custom" class="button small-button target-amount" placeholder="Custom">
                        <p class="small-label focus-reveal text-center">Enter any dollar amount.</p>
                    </div>
                    <div style="clear:both;"></div>
                            <?php
                        }
                    ?>
                </div>
                <button type="submit" id="download" class="suggested-action">Download Freya</button>
                <p class="small-label"><?php echo round($filesize / 1000 / 1000); ?> MB (for PC or Mac)</p>
            </div>
            <div class="row">
                <h4 id="the-press">What the press is saying about elementary OS:</h4>
                <div class="column third">
                    <a href="http://www.wired.com/2013/11/elementaryos/" target="_blank"><img class="h1" src="images/thirdparty-logos/wired.svg" data-l10n-off alt="WIRED" /></a>
                    <a class="inline-tweet" href="http://twitter.com/home/?status=&ldquo;elementary OS is different… a beautiful and powerful operating system that will run well even on old PCs&rdquo; —@WIRED http://elementary.io" target="_blank">&ldquo;elementary OS is different… a beautiful and powerful operating system that will run well even on old PCs&rdquo;</a>
                </div>
                <div class="column third">
                    <a href="http://www.maclife.com/article/columns/future_os_x_may_be_more_elementary_ios_7" target="_blank"><img class="h1" src="images/thirdparty-logos/maclife.svg" data-l10n-off alt="Mac|Life" /></a>
                    <a class="inline-tweet" href="http://twitter.com/home/?status=&ldquo;a fast, low-maintenance platform that can be installed virtually anywhere&rdquo; —@MacLife http://elementary.io" target="_blank">&ldquo;a fast, low-maintenance platform that can be installed virtually anywhere&rdquo;</a>
                </div>
                <div class="column third">
                    <a href="http://lifehacker.com/how-to-move-on-after-windows-xp-without-giving-up-your-1556573928" target="_blank"><img class="h1" src="images/thirdparty-logos/lifehacker.svg" data-l10n-off alt="Lifehacker" /></a>
                    <a class="inline-tweet" href="http://twitter.com/home/?status=&ldquo;Lightweight and fast… Completely community-based, and has a real flair for design and appearances.&rdquo; —@lifehacker http://elementary.io" target="_blank">&ldquo;Lightweight and fast… Completely community-based, and has a real flair for design and appearances.&rdquo;</a>
                </div>
            </div>
            <div id="carousel" class="slide-container slide-fixed-height light">
                <div class="row">
                    <h1>Meet Our Apps</h1>
                    <div id="carousel-choices" class="column linked">
                        <a class="button flat photos" href="#photos">Photos</a>
                        <a class="button flat music" href="#music">Music</a>
                        <a class="button flat videos" href="#videos">Videos</a>
                        <a class="button flat midori" href="#midori">Midori</a>
                    </div>
                </div>
                <div id="photos" class="slide row">
                    <div class="column">
                        <img src="images/screenshots/photos.png" />
                    </div>
                    <div class="column">
                        <div class="column alert">
                            <img src="images/support/multimedia-photo-manager.svg" />
                        </div>
                        <div class="column alert">
                            <h3>Photos</h3>
                            <p>Import, organize, and edit photos. Make a slideshow. Share with Facebook or Flickr.</p>
                        </div>
                    </div>
                </div>
                <div id="music" class="slide row">
                    <div class="column">
                        <img src="images/screenshots/music.png" />
                    </div>
                    <div class="column">
                        <div class="column alert">
                            <img src="images/support/multimedia-audio-player.svg" />
                        </div>
                        <div class="column alert">
                            <h3>Music</h3>
                            <p>Organize and listen to your music. Browse by albums, use lightning-fast search, and build playlists of your favorites.</p>
                        </div>
                    </div>
                </div>
                <div id="videos" class="slide row">
                    <div class="column">
                        <img src="images/screenshots/videos.png" />
                    </div>
                    <div class="column">
                        <div class="column alert">
                            <img src="images/support/multimedia-video-player.svg" />
                        </div>
                        <div class="column alert">
                            <h3>Videos</h3>
                            <p>Watch movies and videos with a minimal interface. The slim, dark frame fades away so you can see more of your movie.</p>
                        </div>
                    </div>
                </div>
                <div id="midori" class="slide row">
                    <div class="column">
                        <img src="images/screenshots/midori.png" />
                    </div>
                    <div class="column">
                        <div class="column alert">
                            <img src="images/support/midori.svg" />
                        </div>
                        <div class="column alert">
                            <h3>Midori</h3>
                            <p>Surf the web with a fast &amp; lightweight web browser. Midori lets you use HTML5 websites and web apps while being lighter on battery life.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column third">
                    <h2>Open Source</h2>
                    <p>Our code is available for review, scrutiny, modification, and redistribution by anyone. <a class="read-more" href="/get-involved#desktop-development">Learn More</a></p>
                </div>
                <div class="column third">
                    <h2>No Ads. No Spying.</h2>
                    <p>We don't make advertising deals and we don't collect sensitive personal data. Our only income is directly from our users.</p>
                </div>
                <div class="column third">
                    <h2>Safe &amp; Secure</h2>
                    <p>We're built on Linux: the same software powering the U.S Department of Defense, the Bank of China, and more.</p>
                </div>
            </div>
            <div id="download-modal" class="modal">
                <i class="fa fa-close close-modal"></i>
                <h3>Choose a Download</h3>
                <p>We recommend 64-bit for most modern computers. For help and more info, see the <a class="read-more" href="docs/installation" target="_blank">installation guide</a></p>
                <div class="row actions">
                    <div class="column linked">
                        <a class="button close-modal" target="_blank" href="http://sourceforge.net/projects/elementaryos/files/stable/elementaryos-freya-i386.20150411.iso/download">Freya 32-bit</a>
                        <a class="button close-modal" title="Torrent Magnet Link" href="magnet:?xt=urn:btih:0a36a61cb46fc1444c95eb62185b777d65362ca9&dn=elementaryos-freya-i386.20150411.iso&tr=https%3A%2F%2Fashrise.com%3A443%2Fphoenix%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.ccc.de%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.publicbt.com%3A80%2Fannounce&ws=http%3A%2F%2Fsuberb-sea2.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-i386.20150411.iso&ws=http%3A%2F%2Fignum.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-i386.20150411.iso&ws=http%3A%2F%2Fheanet.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-i386.20150411.iso&ws=http%3A%2F%2Fcitylan.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-i386.20150411.iso"><i class="fa fa-magnet"></i></a>
                    </div>
                    <div class="column linked">
                        <a class="button suggested-action close-modal" target="_blank" href="http://sourceforge.net/projects/elementaryos/files/stable/elementaryos-freya-amd64.20150411.iso/download">Freya 64-bit</a>
                        <a class="button suggested-action close-modal" title="Torrent Magnet Link" href="magnet:?xt=urn:btih:fc85dc999730a42de3924444aadbcfa183b5f388&dn=elementaryos-freya-amd64.20150411.iso&tr=https%3A%2F%2Fashrise.com%3A443%2Fphoenix%2Fannounce&tr=udp%3A%2F%2Fopen.demonii.com%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.ccc.de%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.publicbt.com%3A80%2Fannounce&ws=http%3A%2F%2Fsuberb-sea2.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-amd64.20150411.iso&ws=http%3A%2F%2Fignum.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-amd64.20150411.iso&ws=http%3A%2F%2Fheanet.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-amd64.20150411.iso&ws=http%3A%2F%2Fcitylan.dl.sourceforge.net%2Fproject%2Felementaryos%2Fstable%2Felementaryos-freya-amd64.20150411.iso"><i class="fa fa-magnet"></i></a>
                    </div>
                </div>
            </div>
            <a style="display:none;" class="open-modal" href="#download-modal"></a>
            <!--[if lt IE 10]><script type="text/javascript" src="https://cdn.jsdelivr.net/g/classlist"></script><![endif]-->
<?php
    include $template['footer'];
?>
