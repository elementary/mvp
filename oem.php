<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Information for OEMs &sdot; elementary';

    $page['styles'] = array(
        'styles/oem.css'
    );

    include $template['header'];
    include $template['alert'];
?>

<div class="grid flex">
    <div class="two-thirds">
        <h1>Information for OEMs</h1>
        <h4>Give your customers the best experience with elementary&nbsp;OS.</h4>
    </div>
</div>

<div class="grid flex">
    <div class="two-thirds">
        <h2>Partners &amp; Retailers</h2>
        <p>We offer two ways to be listed as an OEM of elementary OS in <a href="<?php echo $page['lang-root'].'store/'; ?>">our store</a>, with differing requirements and benefits.</p>
    </div>
    <div class="half copy">
        <h3>Partner</h3>
        <p>Model-by-model approval with those specific models featured in <a href="<?php echo $page['lang-root'].'store/'; ?>">our store</a>.</p>
        <p>Requirements:</p>
        <ul>
            <li>Official involvement from elementary, Inc.</li>
            <li>Negotiable per-device royalty</li>
            <li>Strict software guidelines</li>
            <li><a href="<?php echo $page['lang-root'].'brand'; ?>">Trademark compliance</a></li>
        </ul>
    </div>
    <div class="half copy">
        <h3>Retailer</h3>
        <p>A link to your website or landing page listed in <a href="<?php echo $page['lang-root'].'store/'; ?>">our store</a>.</p>
        <p>Requirements:</p>
        <ul>
            <li>Selling devices with elementary OS</li>
            <li>Per-device royalty encouraged</li>
            <li><a href="<?php echo $page['lang-root'].'brand'; ?>">Trademark compliance</a></li>
        </ul>
    </div>
</div>

<div class="grid flex">
    <div class="two-thirds">
        <h2>Resources</h2>
        <p>Documentation and tips for integrating elementary OS with your hardware.</p>
    </div>
    <div class="two-thirds copy">
        <h3 id="installation">Installation</h3>
        <p>We recommend using the built-in OEM installation procedure provided by the Ubuntu installer. OEMs can install the OS, configure anything necessary, and then prepare the device for shipping to end users.</p>
        <p><a href="https://help.ubuntu.com/community/Ubuntu_OEM_Installer_Overview" target="_blank" rel="noopener" class="read-more">Ubuntu Instructions</a>
        <p><strong>Note:</strong> a new installer is being developed that will simplify the installation process.</p>
        <p><a href="https://github.com/elementary/installer" target="_blank" rel="noopener" class="read-more">New Installer</a>

        <h3 id="system-settings">System Settings</h3>
        <p>System Settings offers several advantages to OEMs shipping elementary OS. From its pluggable architecture to easily-provided branding, System Settings was designed with OEMs in mind.</p>

        <h4 id="plugs">Plugs</h4>
        <p>System Settings (codenamed <a href="https://github.com/elementary/switchboard" target="_blank" rel="noopener">Switchboard</a>) uses a concept of “Plugs” to provide pluggable settings for various hardware and software concerns. For example, <a href="https://github.com/elementary/switchboard-plug-mouse-touchpad/" target="_blank" rel="noopener">Mouse & Touchpad settings</a> are provided by a plug.</p>
        <img src="images/oem/switchboard.png" alt="Switchboard" />
        <p>OEMs are able to develop and ship custom plugs if there is special or unique hardware in the machine that would require configuration outside of what is available by default in elementary OS; for example, special sensors or input methods that are not present in most hardware and therefor not implemented by default. Of course if this configuration could be relevant to a broader set of users, contributing upstream to the <a href="https://github.com/elementary?q=switchboard-plug" target="_blank" rel="noopener">existing plugs</a> is heavily encouraged.</p>
        <a href="https://valadoc.org/switchboard-2.0/Switchboard.Plug.html" target="_blank" rel="noopener" class="read-more">Documentation</a>

        <h4 id="oem-info">OEM Info in About</h4>
        <p>The <a href="https://github.com/elementary/switchboard-plug-about/" target="_blank" rel="noopener">About</a> plug displays system information to the user and provides several system-wide actions, such as restoring settings, reporting issues, and getting help. In addition to software information (like the OS version), it also provides a space for hardware information. By default, this is filled in with a generic image and the system’s hostname. However, OEMs can provide custom branded data for this section.</p>
        <img src="images/oem/switchboard-about.png" alt="Switchboard About" />
        <p>By providing an <code>oem.conf</code> file, OEMs can fill in the manufacturer name, product name, model number, and manufacturer URL. An image can also be provided which replaces the generic hardware icon.</p>
        <a href="https://github.com/elementary/switchboard-plug-about/#oem-configuration" target="_blank" rel="noopener" class="read-more">Learn More</a>

        <h3 id="third-party-repos">Third-Party Repositories</h3>
        <p>It is highly discouraged to ship elementary OS with software repositories other than the defaults in elementary OS plus a single repository provided and controlled by the OEM. <strong>Third-party repos effectively give root access and the ability to overwrite any system packages to potentially untrusted third parties.</strong> Even if the party is trustworthy, an OEM’s customer’s security and privacy are now at stake if third parties are compromised, reuse their password on multiple services, etc.</p>
        <p>Further, if a third-party repository ever becomes unmaintained or unpublished, <strong>it may prevent normal system upgrades.</strong> This could hold back potentially serious security and stability updates from reaching the OEM’s customers.</p>
    </div>
</div>

<div class="grid flex">
    <div class="third">
        <h3>News &amp; Announcements</h3>
        <p>We share frequent updates on development, major announcements, tips for developers, featured apps, and other new content via our Blog.</p>
        <a class="button" href="https://blog.elementary.io/" target="_blank" rel="noopener">Visit our Blog</a>
    </div>

    <div class="third">
        <h3>Brand Resources</h3>
        <p>View the elementary logos, brand usage guidelines, color palette, and community logo. Plus download the official high-resolution and vector elementary logo assets.</p>
        <a class="button" href="brand">View Brand Resources</a>
    </div>

    <div class="third">
        <h3>Get in Touch</h3>
        <p>Talk directly with the team by emailing us at <a href="mailto:oem@elementary.io">oem@elementary.io</a>. Whether you’re an existing partner or want to explore offering elementary OS, we look forward to chatting.</p>
        <a class="button" href="mailto:oem@elementary.io">Send an Email</a>
    </div>
</div>

<?php
    include $template['footer'];
?>
