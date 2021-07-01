# Installation {#installation}

## Download elementary OS {#download-elementary-os}

If you haven't already, you will need to <a href="/" target="_blank" rel="noopener">download elementary OS from our home page</a>. You will need to copy the downloaded ISO file to a USB flash drive using the instructions below.

## Recommended System Specifications {#recommended-system-specifications}

While we don't have a strict set of minimum system requirements, we recommend at least the following specifications for the best experience:

* Recent Intel i3 or comparable dual-core 64-bit processor
* 4 GB of system memory (RAM)
* Solid state drive (SSD) with 15 GB of free space
* Internet access
* 1024×768 display

You will also need a USB flash drive with at least 2 GB of free space for installation.

<div class="row alert warning" markdown="1">
<div class="column alert">
<div class="icon">
<i class="warning fas fa-4x fa-exclamation-triangle"></i>
</div>
<div class="icon-text" markdown="1">

##### Back Up Your Data {#back-up-your-data}

Make sure to back your important data up to an external location such as a cloud service or an external hard drive. Installing a new operating system may overwrite your existing data.

</div>
</div>
</div>

## Choose your current Operating System {#choose-operating-system}

Select the operating system you are currently using to view tailored installation instructions.

<div class="operating-system-choices-container text-center">
<div id="operating-system-choices" class="column linked">
<a class="button install-on-windows" href="#install-on-windows"><i class="fab fa-windows"></i> Windows</a>
<a class="button install-on-macos" href="#install-on-macos"><i class="fab fa-apple"></i> macOS</a>
<a class="button install-on-ubuntu" href="#install-on-ubuntu"><i class="fab fa-linux"></i> Ubuntu</a>
</div>
</div>

***

<div class="slide-container" id="installation-instructions-slide-container" markdown="1">

<div id="install-on-windows" class="slide" markdown="1">

## Creating an Install Drive {#creating-an-installation-medium .clear-float}

You'll need a USB flash drive with at least 2 GB of free space and a program called Rufus.

<a href="https://rufus.akeo.ie/" class="button suggested-action">Download Rufus</a>

![Rufus - select ISO](images/docs/installation/rufus_select_iso.png) {.float-left}

1. Open Rufus
2. Insert your USB drive and select it in the "Device" list
3. Select "Disk or ISO image" in the "Boot selection" list
4. Click "SELECT" to choose the ISO that you downloaded previously.
5. We generate a checksum (or hash sum) for elementary OS images so you can verify your downloaded file. This ensures that you've received the full, complete download and that your install image is not corrupted in any way. Click  ![the checksum icon](images/docs/installation/rufus_checksum_icon.png) {.inline}  next to "SELECT" and verify that the text next to "SHA256" matches the following hash:

```bash nohighlight
{#release_sha256}
```

6. If the hashes match, click "START" and wait for the process to finish.

## Booting from the Install Drive {#booting-from-the-installation-medium .clear-float}

In order to start the installation process, you must boot your computer from the install drive.

* Assuming that your computer is still on, start by inserting your install drive and restarting your computer.
* Most computers will briefly allow you to change the boot order for this boot only by pressing a special key — usually <kbd>F12</kbd>, but sometimes <kbd>Esc</kbd> or another function key. Refer to the screen or your computer's documentation to be sure.
* Press <kbd>F12</kbd> (or the appropriate key) and select the install drive&mdash;usually "USB-HDD" or something containing the word "USB", but the wording may vary. If you choose the incorrect drive, your computer will likely continue to boot as normal. Just restart your computer and pick a different drive in that menu.
* Shortly after selecting the appropriate boot drive, you should be presented with the elementary OS splash screen. You may now follow the on-screen instructions which will guide you through the rest of the process.

## Default LiveCD login credentials

* Enter <kbd>elementary</kbd> as the username and leave the password field blank in order to log into the LiveCD instance

</div>

<div id="install-on-macos" class="slide" markdown="1">

## Verify your Download {#verify-your-download}

Verifying your download is an important, but optional step. We generate a checksum (or hash sum) for elementary OS images and we recommend that you verify that your download matches that checksum before trying to install. This ensures that you've received the full, complete download and that your install image is not corrupted in any way.


Running the following command in your Terminal:

```bash nohighlight
shasum -a 256 ~/Downloads/{#release_filename}
```

Should produce the output:

```bash nohighlight
{#release_sha256}
```

Note: This is assuming that you have downloaded the .iso file to your Downloads folder.
In case you have downloaded it elsewhere, please specify the correct path to the downloaded file, as shown below

```bash nohighlight
shasum -a 256 <Path to the Downloaded Folder>/{#release_filename}
```

## Creating an Install Drive {#creating-an-installation-medium .clear-float}

To create an elementary OS install drive on macOS you'll need a USB flash drive that is at least 2 GB in capacity and an app called "Etcher".

<a href="https://www.etcher.io/" class="button suggested-action">Download Etcher</a>


![etcher steps](images/docs/installation/etcher.gif)


1. Insert the spare USB drive, and select the ISO file you've just downloaded.
2. Open "Etcher" and select your downloaded elementary OS image file using the "Select image" button.
3. Etcher should automatically detect your USB drive, but check to see if it has selected the correct target.
4. Start the flashing process by clicking the "Flash!" button. It will take a moment to get started.
5. When complete it will be safe to remove the drive and attempt to boot to install elementary OS.

The following dialog may appear during the flashing process, it is safe to ignore.

![Not readable warning](images/docs/installation/osx_warning.png)


## Booting from the Install Drive {#booting-from-the-installation-medium .clear-float}

In order to start the installation process, you must boot your computer from the install drive.

* Assuming that your computer is still on, start by inserting your install drive and restarting your computer.
* After you hear the chime, press and hold <kbd>Option</kbd>. Then, select the appropriate boot drive. Note that it may be incorrectly identified as "Windows", but this is normal.
* Shortly after selecting the appropriate boot drive, you should be presented with the elementary OS splash screen. You may now follow the on-screen instructions which will guide you through the rest of the process.

#### Boot Errors

If your Mac doesn't recognize your elementary OS USB Install Drive in the boot menu, you may need to create an elementary OS Install DVD instead. To create one, insert a blank DVD, right click on the ISO file in Finder, and select "Burn {#release_filename} to Disc". When complete, attempt to boot again from the Install DVD.

</div>


<div id="install-on-ubuntu" class="slide" markdown="1">

## Verify your Download {#verify-your-download}

Verifying your download is an important, but optional step. We generate a checksum (or hash sum) for elementary OS images and we recommend that you verify that your download matches that checksum before trying to install. This ensures that you've received the full, complete download and that your install image is not corrupted in any way.


Running the following command in your terminal:

```bash nohighlight
sha256sum {#release_filename}
```

should produce the output:

```bash nohighlight
{#release_sha256}
```

## Creating an Install Drive {#creating-an-installation-medium .clear-float}

You'll need a USB flash drive with at least 2 GB of free space and a program called UNetbootin.

<a href="https://unetbootin.github.io/" class="button suggested-action">Download UNetbootin</a>


1. Open UNetbootin from the Dash. It will open a window like the one below:

    ![UNetbootin](images/docs/installation/unetbootin.png)

2. Select "Diskimage"
2. Click "&#8230;" to select the ISO that you downloaded previously.
3. Unplug all USB memory devices apart from the one you want to use.
4. Click "OK" and wait for the process to finish.

## Booting from the Install Drive {#booting-from-the-installation-medium .clear-float}

In order to start the installation process, you must boot your computer from the install drive.

* Assuming that your computer is still on, start by inserting your install drive and restarting your computer.
* Most computers will briefly allow you to change the boot order for this boot only by pressing a special key — usually <kbd>F12</kbd>, but sometimes <kbd>Esc</kbd> or another function key. Refer to the screen or your computer's documentation to be sure.
* Press <kbd>F12</kbd> (or the appropriate key) and select the install drive&mdash;usually "USB-HDD" or something containing the word "USB", but the wording may vary. If you choose the incorrect drive, your computer will likely continue to boot as normal. Just restart your computer and pick a different drive in that menu.
* Shortly after selecting the appropriate boot drive, you should be presented with the elementary OS splash screen. You may now follow the on-screen instructions which will guide you through the rest of the process.

</div>

</div>

## After Installation {#after-installation .clear-float}

Take this time to read the <a href="/docs/learning-the-basics">getting started</a> guide to learn about your new operating system.

<!--[if lt IE 10]><script type="text/javascript" src="https://cdn.jsdelivr.net/gh/eligrey/classList.js@1.1.20170427/classList.min.js"></script><![endif]-->
<script type="text/javascript" src="scripts/docs/installation.js" async></script>
