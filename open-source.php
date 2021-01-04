<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Open Source &sdot; elementary';

    $page['styles'] = array(
        'styles/open-source.css'
    );

    include $template['header'];
    include $template['alert'];
?>

<div class="grid flex">
    <div class="two-thirds">
        <h1>Everything We Do is Open&nbsp;Source</h1>
        <p>The elementary OS platform is itself entirely open source, and it’s built upon a strong foundation of Free &amp; Open Source software. Plus, we actively collaborate within the ecosystem to improve it for everyone.</p>
        <a class="button suggested-action" href="get-involved#desktop-development">Get Involved</a>
    </div>
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
        <a href="https://salt.bountysource.com/teams/bountysource" title="Bountysource">
            <img class="oss-logo" src="images/open-source/bountysource.svg" alt="Bountysource" />
        </a>
        <a href="https://www.debian.org/donations" title="Debian">
            <img class="oss-logo" src="images/open-source/debian.svg" alt="Debian" />
        </a>
        <a href="https://fontawesome.com/" title="Font Awesome">
            <img class="oss-logo" src="images/open-source/fontawesome.svg" alt="Font Awesome" />
        </a>
        <a href="https://inkscape.org/support-us/donate/" title="Inkscape">
            <img class="oss-logo" src="images/open-source/inkscape.svg" alt="Inkscape" />
        </a>
        <a href="https://letsencrypt.org/donate/" title="Let’s Encrypt">
            <img class="oss-logo" src="images/open-source/letsencrypt.svg" alt="Let’s Encrypt" />
        </a>
        <a href="https://wiki.osmfoundation.org/wiki/Donate" title="OpenStreetMap">
            <img class="oss-logo" src="images/open-source/osm.svg" alt="OpenStreetMap" />
        </a>
        <a href="https://www.rodsbooks.com/refind/" title="rEFInd">
            <img class="oss-logo" src="images/open-source/refind.svg" alt="rEFInd" />
        </a>
        <a href="https://sfconservancy.org/donate/" title="Software Freedom Conservancy">
            <img class="oss-logo" src="images/open-source/sfc.svg" alt="Software Freedom Conservancy" />
        </a>
        <a href="https://weblate.org/en/donate/" title="Weblate">
            <img class="oss-logo" src="images/open-source/weblate.svg" alt="Weblate" />
        </a>
    </div>
</div>

<p class="small-label">All logos featured here are trademarks of their respective projects.</p>

<?php
    include $template['footer'];
?>
