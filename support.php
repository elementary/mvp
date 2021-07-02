<?php

require_once __DIR__.'/_backend/preload.php';

$page['title'] = 'Support &sdot; elementary';

$page['styles'] = array(
    'styles/support.css'
);

include $template['header'];
include $template['alert'];
?>

<section class="grid">
    <div class="two-thirds">
        <h1>Get Support</h1>
        <p>We rely on our <a href="https://elementaryos.stackexchange.com" target="_blank" rel="noopener">community-powered Stack Exchange</a> for support. Search for common questions, ask your own, or help out by answering some. Pick an app below to jump to questions about it specifically.</p>
    </div>
</section>

<div class="row apps">
    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/appcenter" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/system-software-install.svg" alt="AppCenter"/>
        <span>AppCenter</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/calendar" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/office-calendar.svg" alt="Calendar"/>
        <span>Calendar</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/camera" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/accessories-camera.svg" alt="Camera"/>
        <span>Camera</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/pantheon-files" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/system-file-manager.svg" alt="Files"/>
        <span>Files</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/pantheon-mail" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/internet-mail.svg" alt="Mail"/>
        <span>Mail</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/epiphany" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/web-browser.svg" alt="Epiphany"/>
        <span>Epiphany</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/music" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/multimedia-audio-player.svg" alt="Music"/>
        <span>Music</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/photos" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/multimedia-photo-manager.svg" alt="Photos"/>
        <span>Photos</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/code" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/thirdparty-icons/apps/64/io.elementary.code.svg" alt="Code"/>
        <span>Code</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/settings" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/preferences-desktop.svg" alt="System Settings"/>
        <span>System Settings</span>
    </a>

    <a class="app" href="https://elementaryos.stackexchange.com/questions/tagged/videos" target="_blank" rel="noopener">
        <img width="64" height="64" src="images/icons/apps/64/multimedia-video-player.svg" alt="Videos"/>
        <span>Videos</span>
    </a>
</div>
<section>
    <div class="grid">
        <h2>Guides</h2>
        <a class="third" href="/docs/installation">
            <h4>
                <i class="fa fa-download"></i>
                Installation
            </h4>
            <p>Get help installing elementary OS with our step-by-step guide.</p>
        </a>
        <a class="third" href="/docs/learning-the-basics">
            <h4>
                <i class="fa fa-book"></i>
                Learning the Basics
            </h4>
            <p>Walk through the desktop, multi-tasking, keyboard shortcuts and more</p>
        </a>
    </div>
</section>

<?php
include $template['footer'];
?>
