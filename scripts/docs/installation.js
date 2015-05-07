(function () {
    // Parse user-agent to detect current plateform
    function detectOS() {
        var ua = window.navigator.userAgent;
        if (ua.indexOf('Windows') >= 0) {
            return 'windows';
        }
        if (ua.indexOf('Mac_PowerPC') >= 0 || ua.indexOf('Macintosh') >= 0) {
            return 'osx';
        }
        if (ua.indexOf('Linux') >= 0) {
            return 'linux';
        }
        return false;
    }

    // Setup sliders
    var createUsbSlider = new Slider({
        id: 'creating-a-usb-choices',
        choices: ['creating-a-usb-on-windows', 'creating-a-usb-on-others'],
        hideHeadings: true
    });
    var bootSlider = new Slider({
        id: 'booting-choices',
        choices: ['booting-on-a-pc', 'booting-on-a-mac'],
        hideHeadings: true
    });

    // Show instructions for the current platform
    var currentOs = detectOS();
    if (currentOs == 'windows' || !currentOs) {
        createUsbSlider.slideTo('creating-a-usb-on-windows');
    } else {
        createUsbSlider.slideTo('creating-a-usb-on-others');
    }

    if (currentOs == 'osx') {
        bootSlider.slideTo('booting-on-a-mac');
    } else {
        bootSlider.slideTo('booting-on-a-pc');
    }
})();