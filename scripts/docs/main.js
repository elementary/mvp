$(document).ready(function() {
    // Code blocks highlighting
    $('pre code').each(function(i, block) {
        // Remove newline from CloudFlare's e-mail protection script
        $(this).find('script').each(function () {
            $(this).text($(this).text().trim());
        });

        // Add line numbers, unless it's bash or doesn't want to be highlighted
        if (!$(this).is('.language-bash') && !$(this).hasClass('nohighlight')) {
            var lines = $(this).text().trim().split('\n').length;
            var $numbering = $('<ul/>').addClass('pre-numbering');
            $(this).parent().addClass('has-numbering').prepend($numbering);

            for (var i = 1; i <= lines; i++){
                $numbering.append($('<li/>').text(i));
            }
        }

        $(this).parent().addClass('highlighted');

        if (!$(this).hasClass('nohighlight')) {
          // Highlight code block
          hljs.highlightBlock(block);
        } else {
          // Fake highlighting for stylesheet things
          $(this).addClass('hljs');
        }
    });

    // Anchor headings
    $('h1[id], h2[id], h3[id], h4[id], h5[id], h6[id]').each(function() {
        $(this).wrapInner('<a class="heading-link" href="'+window.location.pathname+'#'+$(this).attr('id')+'"></a>');
    });

    // Sidebar
    var $headings = $('h1');
    var $sidebar = $('<div class="sidebar"></ul>');
    if ($headings.length > 1) {
        var $index = $('<ul class="index"></ul>');
        $headings.each(function () {
            $index.append('<li><a href="#'+$(this).attr('id')+'">'+$(this).text()+'</a></li>');
            var $subHeadings = $(this).nextUntil('h1', 'h2');
            if ($subHeadings.length > 0) {
                var $subMenu = $('<ul></ul>');
                $subHeadings.each(function () {
                    $subMenu.append('<li><a href="#'+$(this).attr('id')+'">'+$(this).text()+'</a></li>');
                });
                $index.append($subMenu);
            }
        });
        $index.prependTo($sidebar);

        var $sidebarItems = $index.children('li');

        var navHeight = $('nav.nav:first').height();
        var footerScrollTop = $('footer:last').offset().top;
        var prevTarget = 0,
            nextTarget = 0;

        var $actions = $('<ul class="actions"></ul>');
        $('<li><a href="https://github.com/elementary/mvp/blob/master/docs' + window.location.pathname.split('/docs')[1] + '.md" id="edit"><i class="fa fa-pencil"></i> Edit</a></li>').appendTo($actions);
        $actions.appendTo($sidebar);

        var secondUp = window.location.pathname.split('/')[1];
        var transifexTitle = window.location.pathname.split('/docs/')[1].split('#')[0].replace('/', '_')
        if (secondUp !== 'docs' && secondUp !== 'en') {
            $('<li><a href="https://www.transifex.com/elementary/elementary-mvp/translate/#' + secondUp + '/docs_' + transifexTitle + '" id="translate"><i class="fa fa-globe"></i> Translate</a></li>').appendTo($actions);
          $actions.appendTo($sidebar);
        }

        $sidebar.prependTo('#content-container');
    }

    // Update javascript variable currentSection
    var docElements = $('h1[id], h2[id]', '.docs');

    var currentSection = null;
    if (location.hash && docElements.is("#" + location.hash.substr(1).split("#")[0])) {
        currentSection = $("#" + location.hash.substr(1).split("#")[0], docElements);
    } else {
        currentSection = docElements[0];
    };

    // Scrolling function to run
    function scrollHandle() {
        // Check to see what is on screen right now
        for (var i = 0; i < docElements.length; i++) {
            var docViewTop = $(window).scrollTop();
            var elemTop = $(docElements[i]).offset().top;

            // Sets currentSection if element is top most visible element
            if ((elemTop <= docViewTop)) {
                currentSection = docElements[i];
            // Sets currentSection if element is more than 1/3 from the top
            } else if (elemTop <= (docViewTop + ($(window).height() / 6) )) {
                currentSection = docElements[i];
            // Catch when the it's the first element and below the 'current' area
            } else if (docElements[i - 1] == null) {
                currentSection = docElements[i]
            } else {
                break
            };
        };

        // Changes browser hash without adding to history
        if (currentSection.id !== location.hash.substr(1)) {
            history.replaceState(undefined, undefined, location.href.split("#")[0]+"#"+currentSection.id);
        }

        var scrollTop = $(this).scrollTop();

        $sidebar.toggleClass('nav-visible', (scrollTop < navHeight));
        $sidebar.toggleClass('footer-visible', (scrollTop + $(window).height() > footerScrollTop));

        $('.sidebar .index .active').removeClass('active');
        var $currentLink = $('.sidebar .index a[href$="#'+currentSection.id+'"]')
        if ($currentLink.parent().parent().is('.index')) {
            $currentLink.parent().addClass('active');
        } else {
          ($currentLink.parent().parent().prev('li').addClass('active'));
        };
    }

    // Scroll timeout handling
    var repositionedAt = new Date()
    var repositionTimer = null

    $(window).scroll(function () {
        var diff = new Date().getTime() - repositionedAt;

        if (repositionedAt == null || diff >= 500) {
            repositionedAt = new Date().getTime();
            scrollHandle();
        } else {
            clearTimeout(repositionTimer)
            repositionTimer = setTimeout(scrollHandle, 100)
        }
    });

    // Run scrolling function at first load
    scrollHandle();
});
