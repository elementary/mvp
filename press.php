<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Press &sdot; elementary';

    $page['styles'] = array(
        'styles/press.css'
    );

    include $template['header'];
    include $template['alert'];
?>

<div class="grid flex">
    <div class="two-thirds">
        <h1>Press Resources</h1>
        <p>We love working with press—both within the Linux world and the greater tech and culture beats—to share our story and what we are working on.</p>
    </div>
</div>

<div class="grid flex">
    <div class="two-thirds">
        <h2>Join Our Press List</h2>
        <p>Be the first to know about new releases and significant developments. We send early access to press releases and press kits, including high resolution screenshots. This is a <strong>very low volume</strong> list; we send you the biggest news around once a year.</p>

        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="https://elementary.us14.list-manage.com/subscribe/post?u=6815d99e5893b4e213cdb00d2&amp;id=142e260a91" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email <span class="asterisk">*</span>
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name <span class="asterisk">*</span>
                    </label>
                        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" value="" name="LNAME" id="mce-LNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-PUBNAME">Publication <span class="asterisk">*</span>
                    </label>
                        <input type="text" value="" name="PUBNAME" class="required" id="mce-PUBNAME">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_6815d99e5893b4e213cdb00d2_142e260a91" tabindex="-1" value="">
                    </div>
                    <div class="clear text-center">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button suggested-action">
                    </div>
                </div>
            </form>
        </div>
        <!-- End MailChimp Signup Form -->
    </div>
</div>

<div class="grey">
    <div class="grid flex">
        <div class="two-thirds">
            <h2>elementary OS 5.1 Hera</h2>
            <p>Hera is a major update on a solid foundation. Featuring a completely redesigned login and lockscreen greeter, a new onboarding experience, new ways to sideload and install apps, major System Settings updates, improved core apps, and desktop refinements.</p>
            <div class="text-center">
                <a class="button" href="https://blog.elementary.io/introducing-elementary-os-5-1-hera/" target="_blank" rel="noopener" class="read-more">Read Announcement</a>
                <a class="button" href="https://github.com/elementary/press-kit/archive/5.1-hera.zip" target="_blank" rel="noopener" class="read-more">Download Press Kit</a>
            </div>
        </div>
    </div>
</div>

<div class="grid flex">
    <div class="third">
        <h3>News &amp; Announcements</h3>
        <p>We share frequent updates on development, major announcements, tips for developers, featured apps, and other new content via our official blog.</p>
        <div class="text-center">
            <a class="button" href="https://blog.elementary.io/" target="_blank" rel="noopener">Visit Our Blog</a>
        </div>
    </div>

    <div class="third">
        <h3>Brand Resources</h3>
        <p>View the elementary logos, brand usage guidelines, color palette, and community logo. Plus download the official high-resolution and vector elementary logo assets.</p>
        <div class="text-center">
            <a class="button" href="brand">View Brand Resources</a>
        </div>
    </div>

    <div class="third">
        <h3>Get in Touch</h3>
        <p>Talk directly with the team by emailing us at <a href="mailto:press@elementary.io">press@elementary.io</a>. We welcome requests for interviews, podcast appearances, or just general press inquiries.</p>
        <div class="text-center">
            <a class="button" href="mailto:press@elementary.io">Send an Email</a>
        </div>
    </div>
</div>

<?php
    include $template['footer'];
?>
