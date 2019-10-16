<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Open Source &sdot; elementary';

    $page['styles'] = array(
        'styles/open-source.css'
    );

    include $template['header'];
    include $template['alert'];
?>

<div class="grid">
    <div class="two-thirds">
        <h1>We're Built on Open Source</h1>
        <h4>The elementary OS platform is built upon a strong foundation of Free &amp; Open Source software. Without projects such as these, elementary OS would not exist.</h4>
    </div>
    <div class="half">
        <h3>Security &amp; Privacy</h3>
        <p>By being Open Source, elementary OS can benefit from superior security and privacy over closed source software. When the source code is available to audit, anyone in the community — whether a security researcher, a concerned user, or an OEM shipping the OS on their hardware — can ensure the software is secure and not collecting or leaking personal information.</p>
    </div>
    <div class="half">
        <h3>Better for Developers</h3>
        <p>If your app could benefit from a system API or feature that’s not yet available, you can help write that feature into the OS. Similarly, you might be curious as to how a feature or design pattern in elementary OS was made. Instead of guessing or trying to reimplement it on your own, you can just look at the underlying source code for a definitive answer.</p>
    </div>
    <a class="button suggested-action" href="get-involved#desktop-development">Get Involved</a>
</div>
<div class="grid">
    <div class="platform-item full">
        <a href="get-involved#desktop-development">
            <img class="oss-logo" src="images/icons/places/64/distributor-logo.svg" alt="Applications">
            <p class="oss-title">elementary OS Applications</p>
        </a>
        <div>
            <a class="button sub-item" href="https://github.com/elementary/appcenter" target="_blank" rel="noopener"><span>AppCenter</span></a>
            <a class="button sub-item" href="https://github.com/elementary/calculator" target="_blank" rel="noopener"><span>Calculator</span></a>
            <a class="button sub-item" href="https://github.com/elementary/calendar" target="_blank" rel="noopener"><span>Calendar</span></a>
            <a class="button sub-item" href="https://github.com/elementary/camera" target="_blank" rel="noopener"><span>Camera</span></a>
            <a class="button sub-item" href="https://github.com/elementary/files" target="_blank" rel="noopener"><span>Files</span></a>
            <a class="button sub-item" href="https://github.com/elementary/mail" target="_blank" rel="noopener"><span>Mail</span></a>
            <a class="button sub-item" href="https://github.com/elementary/music" target="_blank" rel="noopener"><span>Music</span></a>
            <a class="button sub-item" href="https://github.com/elementary/photos" target="_blank" rel="noopener"><span>Photos</span></a>
            <a class="button sub-item" href="https://github.com/elementary/code" target="_blank" rel="noopener"><span>Code</span></a>
            <a class="button sub-item" href="https://github.com/elementary/screenshot" target="_blank" rel="noopener"><span>Screenshot</span></a>
            <a class="button sub-item" href="https://github.com/elementary/terminal" target="_blank" rel="noopener"><span>Terminal</span></a>
            <a class="button sub-item" href="https://github.com/elementary/videos" target="_blank" rel="noopener"><span>Videos</span></a>
        </div>
    </div>
    <div class="platform-item half">
        <a href="get-involved#desktop-development">
            <img class="oss-logo" src="images/icons/categories/64/preferences-desktop-wallpaper.svg" alt="Desktop Shell">
            <p class="oss-title">Pantheon Desktop Shell</p>
        </a>
        <div>
            <a class="button sub-item" href="https://github.com/elementary/stylesheet" target="_blank" rel="noopener"><span>GTK+ Stylesheet</span></a>
            <a class="button sub-item" href="https://github.com/elementary/icons" target="_blank" rel="noopener"><span>Icon Theme</span></a>
            <a class="button sub-item" href="https://github.com/elementary/gala" target="_blank" rel="noopener"><span>Gala</span></a>
            <a class="button sub-item" href="https://launchpad.net/plank" target="_blank" rel="noopener"><span>Plank</span></a>
            <a class="button sub-item" href="https://github.com/elementary/applications-menu" target="_blank" rel="noopener"><span>Slingshot</span></a>
            <a class="button sub-item" href="https://github.com/elementary/switchboard" target="_blank" rel="noopener"><span>Switchboard</span></a>
            <a class="button sub-item" href="https://github.com/elementary/wingpanel" target="_blank" rel="noopener"><span>Wingpanel</span></a>
        </div>
    </div>
    <div class="platform-item half">
        <a href="get-involved#desktop-development">
            <img class="oss-logo" src="images/open-source/platform.svg" alt="Platform">
            <p class="oss-title">Pantheon Platform</p>
        </a>
        <div>
            <a class="button sub-item" href="https://github.com/elementary/contractor" target="_blank" rel="noopener"><span>Contractor</span></a>
            <a class="button sub-item" href="https://github.com/elementary/granite" target="_blank" rel="noopener"><span>Granite</span></a>
            <a class="button sub-item" href="https://github.com/elementary/capnet-assist" target="_blank" rel="noopener"><span>Captive Portal Assistant</span></a>
            <a class="button sub-item" href="https://launchpad.net/pantheon-online-accounts" target="_blank" rel="noopener"><span>Pantheon Online Accounts</span></a>
            <a class="button sub-item" href="https://github.com/elementary/pantheon-agent-polkit" target="_blank" rel="noopener"><span>Polkit Agent</span></a>
        </div>
    </div>
    <hr class="dotted full">
    <div class="platform-item third" id="ubuntu">
        <a href="https://ubuntu.com/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/ubuntu.svg" alt="Ubuntu">
            <h3 class="oss-title">Ubuntu</h3>
            <p class="oss-subtitle">Desktop Libraries &amp; Repositories</p>
        </a>
        <div>
            <a class="button sub-item" href="https://launchpad.net/bamf" target="_blank" rel="noopener"><span>BAMF</span></a>
            <a class="button sub-item" href="https://launchpad.net/libunity" target="_blank" rel="noopener"><span>libunity</span></a>
            <a class="button sub-item" href="https://launchpad.net/ubiquity" target="_blank" rel="noopener"><span>Ubiquity</span></a>
        </div>
    </div>
    <div class="platform-item third" id="gtk">
        <a href="https://gtk.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/gtk.svg" alt="GTK+">
            <h3 class="oss-title">GTK+</h3>
            <p class="oss-subtitle">User Interface Toolkit</p>
        </a>
        <div>
            <a class="button sub-item" href="https://wiki.gnome.org/Accessibility" target="_blank" rel="noopener"><span>ATK</span></a>
            <a class="button sub-item" href="https://www.gtk.org/" target="_blank" rel="noopener"><span>GTK+</span></a>
            <a class="button sub-item" href="http://www.pango.org/" target="_blank" rel="noopener"><span>Pango</span></a>
            <a class="button sub-item" href="https://cairographics.org/" target="_blank" rel="noopener"><span>Cairo</span></a>
        </div>
    </div>
    <div class="platform-item third" id="gnome">
        <a href="https://gnome.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/gnome.svg" alt="GNOME">
            <h3 class="oss-title">GNOME</h3>
            <p class="oss-subtitle">Desktop Libraries</p>
        </a>
        <div>
            <a class="button sub-item" href="https://wiki.gnome.org/Projects/dconf" target="_blank" rel="noopener"><span>dconf</span></a>
            <a class="button sub-item" href="https://wiki.gnome.org/Projects/GLib" target="_blank" rel="noopener"><span>GLib</span></a>
            <a class="button sub-item" href="https://wiki.gnome.org/Projects/PolicyKit" target="_blank" rel="noopener"><span>PolicyKit</span></a>
            <a class="button sub-item" href="https://wiki.gnome.org/Projects/Vala" target="_blank" rel="noopener"><span>Vala</span></a>
        </div>
    </div>
    <div class="platform-item two-thirds" id="fdo">
        <a href="https://freedesktop.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/freedesktop.svg" alt="FreeDesktop">
            <h3 class="oss-title">FreeDesktop.org</h3>
            <p class="oss-subtitle">Base Technology</p>
        </a>
        <div>
            <a class="button sub-item" href="https://www.freedesktop.org/wiki/Software/dbus/" target="_blank" rel="noopener"><span>D-Bus</span></a>
            <a class="button sub-item" href="https://gitlab.freedesktop.org/geoclue/geoclue/wikis/home" target="_blank" rel="noopener"><span>GeoClue</span></a>
            <a class="button sub-item" href="https://gstreamer.freedesktop.org/" target="_blank" rel="noopener"><span>GStreamer</span></a>
            <a class="button sub-item" href="https://www.freedesktop.org/wiki/Software/libinput/" target="_blank" rel="noopener"><span>libinput</span></a>
            <a class="button sub-item" href="https://www.freedesktop.org/wiki/Software/LightDM/" target="_blank" rel="noopener"><span>LightDM</span></a>
            <a class="button sub-item" href="https://www.freedesktop.org/wiki/Software/PulseAudio/" target="_blank" rel="noopener"><span>PulseAudio</span></a>
            <a class="button sub-item" href="https://www.freedesktop.org/wiki/Software/systemd/" target="_blank" rel="noopener"><span>systemd</span></a>
        </div>
    </div>
    <div class="platform-item third" id="xorg">
        <a href="https://x.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/xorg.svg" alt="X.Org">
            <h3 class="oss-title">X.Org</h3>
            <p class="oss-subtitle">Display Server &amp; Windowing System</p>
        </a>
        <div>
            <a class="button sub-item" href="https://www.x.org/" target="_blank" rel="noopener"><span>X11</span></a>
            <a class="button sub-item" href="https://www.x.org/wiki/XServer/" target="_blank" rel="noopener"><span>XServer</span></a>
        </div>
    </div>
    <div class="platform-item half" id="gnu">
        <a href="https://gnu.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/gnu.svg" alt="GNU">
            <h3 class="oss-title">GNU</h3>
            <p class="oss-subtitle">Compiler &amp; Core Utilities</p>
        </a>
        <div>
            <a class="button sub-item" href="https://www.gnu.org/software/bash/" target="_blank" rel="noopener"><span>Bash</span></a>
            <a class="button sub-item" href="https://www.gnu.org/software/gcc/" target="_blank" rel="noopener"><span>GCC</span></a>
            <a class="button sub-item" href="https://www.gnu.org/software/libc/" target="_blank" rel="noopener"><span>GNU C Library</span></a>
            <a class="button sub-item" href="https://www.gnu.org/software/coreutils/" target="_blank" rel="noopener"><span>Coreutils</span></a>
        </div>
    </div>
    <div class="platform-item half" id="linux">
        <a href="https://kernel.org/" target="_blank" rel="noopener">
            <img class="oss-logo" src="images/open-source/linux.svg" alt="Linux">
            <h3 class="oss-title">Linux</h3>
            <p class="oss-subtitle">Filesystem, Hardware, Networking &amp; Drivers</p>
        </a>
        <div>
            <a class="button sub-item" href="https://kernel.org/" target="_blank" rel="noopener"><span>Kernel</span></a>
        </div>
    </div>
</div>

<div class="grid">
    <div class="whole">
        <div class="two-thirds">
            <h2>We Support Open Source Projects</h2>
            <p>elementary makes a point to send funds back to the projects we rely on. When you purchase a copy of elementary OS, you're also supporting great projects like these.</p>
        </div>
    </div>
    <div class="donation-grid">
        <a class="oss-logo" href="https://salt.bountysource.com/teams/bountysource" title="Bountysource">
            <?php include __DIR__.'/images/open-source/bountysource.svg'; ?>
        </a>
        <a class="oss-logo" href="https://www.debian.org/donations" title="Debian">
            <?php include __DIR__.'/images/open-source/debian.svg'; ?>
        </a>
        <a class="oss-logo" href="https://fontawesome.com/" title="Font Awesome">
            <?php include __DIR__.'/images/open-source/fontawesome.svg'; ?>
        </a>
        <a class="oss-logo" href="https://inkscape.org/support-us/donate/" title="Inkscape">
            <?php include __DIR__.'/images/open-source/inkscape.svg'; ?>
        </a>
        <a class="oss-logo" href="https://letsencrypt.org/donate/" title="Let’s Encrypt">
            <?php include __DIR__.'/images/open-source/letsencrypt.svg'; ?>
        </a>
        <a class="oss-logo" href="https://wiki.osmfoundation.org/wiki/Donate" title="OpenStreetMap">
            <?php include __DIR__.'/images/open-source/osm.svg'; ?>
        </a>
        <a class="oss-logo" href="https://www.rodsbooks.com/refind/" title="rEFInd">
            <?php include __DIR__.'/images/open-source/refind.svg'; ?>
        </a>
        <a class="oss-logo" href="https://sfconservancy.org/donate/" title="Software Freedom Conservancy">
            <?php include __DIR__.'/images/open-source/sfc.svg'; ?>
        </a>
        <a class="oss-logo" href="https://weblate.org/en/donate/" title="Weblate">
            <?php include __DIR__.'/images/open-source/weblate.svg'; ?>
        </a>
    </div>
</div>

<p class="small-label">All logos featured here are trademarks of their respective projects.</p>

<?php
    include $template['footer'];
?>
