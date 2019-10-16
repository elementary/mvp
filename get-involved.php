<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['title'] = 'Get Involved with elementary OS';
    $page['theme-color'] = '#3E4E54';

    $page['styles'] = array(
        'https://fonts.googleapis.com/css?family=Marck+Script',
        'styles/get-involved.css'
    );

    if ($config['chart_enable']) {
        $page['scripts'] = array(
            'scripts/get-involved.js'
        );
    }

    include $template['header'];
    include $template['alert'];
?>
<section class="hero">
    <div class="grid">
        <div class="two-thirds">
            <h1>Be a Part of Something Bigger</h1>
            <p>Everything that we make is 100% open source and developed collaboratively by people from all over the world. Even if you're not a programmer, you can get involved and make a difference.</p>
        </div>
    </div>
    <div class="grid">
        <div class="whole" id="sections-menu">
            <a class="button flat suggested-action" href="#funding">Funding</a>
            <a class="button flat suggested-action" href="#translations">Translations</a>
            <a class="button flat suggested-action" href="#support">Support</a>
            <a class="button flat suggested-action" href="#web-development">Web</a>
            <a class="button flat suggested-action" href="#desktop-development">Desktop</a>
            <a class="button flat suggested-action" href="#design">Design</a>
        </div>
    </div>
</section>

<section id="funding" class="grey">
    <div class="grid">
        <div class="two-thirds">
            <h2>Funding</h2>
            <p class="text-center">With your help, we've been able to grow from a small group of passionate volunteers into a tiny company. Every little bit of help is one step closer to hiring another full-time developer.</p>
        </div>
    </div>

    <section class="grid">
        <div class="third">
            <?php include __DIR__.'/images/get-involved/patreon.svg'; ?>
            <p>Patreon works like an ongoing crowdfunding campaign. Choose an amount, get rewards, and help us reach our goals. <a class="read-more" href="https://www.patreon.com/" target="_blank" rel="noopener">Learn More</a></p>
            <a class="button flat" href="https://www.patreon.com/elementary" target="_blank" rel="noopener">Become a Patron</a>
        </div>
        <div class="third">
            <i class="fab fa-paypal"></i>
            <p>Easily use a debit card, credit card, or PayPal account. You can choose a one-time payment or set up recurring payments.</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" id="paypalform" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="LG382EHQVTDYN">
            <input type="submit" value="Use PayPal" name="submit" title="PayPal - The safer, easier way to pay online!" class="button flat">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
        <div class="third">
            <i class="fa fa-shopping-cart"></i>
            <p>Help us financially, plus get some exclusive elementary gear to show your support to friends, family, and coworkers.</p>
            <a class="button flat" href="<?php echo $page['lang-root'].'store/'; ?>" target="_blank" rel="noopener">Visit Store</a>
        </div>
    </section>

    <div class="grid">
        <div class="two-thirds">
            <?php include __DIR__.'/images/open-source/bountysource.svg'; ?>
            <p>Bountysource puts funds directly in the hands of developers by rewarding them for committing fixes or creating new features. Set a bounty on the issues that matter to you most or fund a specific app. You can also set up a recurring subscription. <a class="read-more" href="https://github.com/bountysource/frontend/wiki/Frequently-Asked-Questions" target="_blank" rel="noopener">Learn More</a></p>

            <div class="actions">
                <a class="button flat" href="https://github.com/search?utf8=%E2%9C%93&q=is%3Aopen+is%3Aissue+user%3Aelementary+label%3A%22bounty%22&type=">Bountied Bugs</a>
                <a class="button flat suggested-action" href="https://www.bountysource.com/teams/elementary">BountySource</a>
            </div>
        </div>
    </div>
</section>

<section id="translations">
    <div class="grid">
        <div class="whole">
            <h2>Translations</h2>
        </div>
        <div class="half">
            <p>elementary OS is created and used by people from all around the World; help us make the experience even better by translating it into more languages.</p>
            <p>Both elementary OS and our website are openly translated using an online platform called Weblate. <a href="/docs/translation-guide" class="read-more">Learn More</a></p>

            <div class="actions">
                <a class="button flat" href="https://join.slack.com/t/ele-l10n/shared_invite/enQtNDkyOTA1MTEzMTQxLWQ1N2YyNDkwYTQwMjA4NWI1MTA5Mzk3MTQyNmMzNmMwODgyYWRjOWQwZDFkZjY5MzVjMTlmMDBlZGJlYmNiNWE" target="_blank" rel="noopener">Join Chat</a>
                <a class="button flat suggested-action" href="https://l10n.elementary.io/projects/" target="_blank" rel="noopener">Suggest Translations</a>
            </div>
        </div>
        <div class="half">
            <img src="images/get-involved/translations.svg" alt="World map">
        </div>
    </div>
</section>

<section id="support" class="grey">
    <div class="grid">
        <div class="two-thirds">
            <h2>Support</h2>
            <p></p>
        </div>
        <div class="half">
            <h3>Question &amp; Answer</h3>
            <p>Stack Exchange is a Q&amp;A website built around finding the best answers to common questions. Anyone can create an account to start asking and answering.</p>

            <div class="actions actions--column">
                <a class="button flat suggested-action" href="https://elementaryos.stackexchange.com/unanswered">Unanswered Questions</a>
                <a class="button flat" href="https://elementaryos.stackexchange.com/questions?sort=newest">New Questions</a>
            </div>
        </div>
        <div class="half">
            <h3>Documentation</h3>
            <p>elementary provides basic documentation for both users and developers. All of our documentation is written in Markdown and hosted on GitHub, so submitting a change or a new section is a piece of cake.</p>

            <div class="actions actions--column">
                <a class="button flat suggested-action" href="https://github.com/elementary/website/blob/master/docs/learning-the-basics.md" target="_blank" rel="noopener">Learning The Basics Guide</a>
                <a class="button flat" href="https://github.com/elementary/website/blob/master/docs/code/getting-started.md" target="_blank" rel="noopener">Developer Docs</a>
            </div>
        </div>
    </div>
</section>

<section id="web-development">
    <div class="web-browser">
        <div id="toolbar">
            <img src="images/get-involved/browser-left.svg">
            <div id="search-bar"></div>
            <img src="images/icons/actions/symbolic/window-maximize-symbolic.svg">
        </div>
        <h2>Web Development</h2>
        <p>Our website is built using HTML, CSS, PHP, and JavaScript. We're always looking for people experienced in those areas who would like to contribute and make it even better.</p>
        <div class="actions">
            <a class="button flat suggested-action" href="https://github.com/elementary/website" target="_blank" rel="noopener">Fork Our Website on GitHub</a>
            <a class="button flat" href="https://github.com/elementary/website/issues" target="_blank" rel="noopener">Report a Website Issue</a>
        </div>
    </div>
</section>

<section id="desktop-development" class="grey">
    <div class="grid">
        <div class="two-thirds">
            <h2>Desktop Development</h2>
            <p>Our desktop environment and all its apps are built using Vala, GTK+, Granite, and a number of other open libraries. We host our desktop code on GitHub, a free service for open source projects. If you've never developed for elementary OS before, we recommend you check out our Getting Started guide. <a href="/docs/code/getting-started" class="read-more">Learn More</a></p>
            <?php
                if ($config['chart_enable']) {
                    echo'<p>This burndown chart shows our progress for the <a href="https://bugs.launchpad.net/'.$config['chart_link_project'].'/+milestone/'.$config['chart_link_milestone'].'">'.$config['chart_link_name'].'</a>, which is our current development focus. Soon after that milestone is reached, Loki will be publically released and work on the next version of elementary OS will begin. <a href="https://launchpad.net/elementaryos/+series" class="read-more">Learn More</a></p>';
                }
            ?>
        </div>
        <?php
            if ($config['chart_enable']) {
        ?>
        <div class="whole">
            <div class="charts">
                <div class="barchart-ctn">
                    <canvas width="750" height="400"></canvas>
                </div>
                <div class="doughnuts-ctn">
                    <div id="date"></div>
                    <div class="doughnut fixed">
                        <canvas id="fixed-chart" width="90" height="90"></canvas>
                        <div class="doughnut-label">
                            <span class="doughnut-count">0</span><br>
                            Fixed
                        </div>
                    </div>
                    <div class="doughnut in-progress">
                        <canvas id="in-progress-chart" width="90" height="90"></canvas>
                        <div class="doughnut-label">
                            <span class="doughnut-count">0</span><br>
                            In Progress
                        </div>
                    </div>
                    <div class="doughnut created">
                        <canvas id="created-chart" width="90" height="90"></canvas>
                        <div class="doughnut-label">
                            <span class="doughnut-count">0</span><br>
                            Unfixed
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <div class="whole">
            <div class="actions">
                <a class="button flat suggested-action" href="https://github.com/elementary" target="_blank" rel="noopener">Browse Our Code</a>
            </div>
        </div>
        <div class="third">
            <h3>Report issues</h3>
            <p>Help out by tracking down issues and reporting them, or by clarifying and cleaning up existing issues. <a class="read-more" href="/docs/code/reference#reporting-bugs" target="_blank" rel="noopener">Learn More</a></p>
        </div>
        <div class="third">
            <h3>Fix issues</h3>
            <p>Contribute to elementary OS by fixing issues, improving functionality or by implementing new features. <a class="read-more" href="/docs/code/os-dev" target="_blank" rel="noopener">Learn More</a></p>
            <div class="actions">
                <a class="button flat" href="https://github.com/search?utf8=%E2%9C%93&q=is%3Aopen+is%3Aissue+user%3Aelementary+label%3A%22bitesize%22&type=" target="_blank" rel="noopener">Bitesized Bugs</a>
                <a class="button flat" href="https://github.com/search?utf8=%E2%9C%93&q=is%3Aopen+is%3Aissue+user%3Aelementary+label%3A%22bounty%22&type=" target="_blank" rel="noopener">Bountied Bugs</a>
            </div>
        </div>
        <div class="third">
            <h3>Create apps</h3>
            <p>Improve the overall elementary OS ecosystem by creating great apps. <a class="read-more" href="/docs/code/os-dev" target="_blank" rel="noopener">Learn More</a></p>
            <div class="actions">
                <a class="button flat suggested-action" href="https://developer.elementary.io/" target="_blank" rel="noopener">Publish on AppCenter</a>
            </div>
        </div>
    </div>
</section>

<section id="design">
    <div class="grid">
        <div class="two-thirds">
            <h2>Design</h2>
            <p class="text-center">Our Design Team turns ideas into clear issue reports and deliverable assets. Before diving in, it's recommended to read about our design workflow. <a class="read-more" href="/docs/code/reference#proposing-design-changes" target="_blank" rel="noopener">Learn More</a></p>
        </div>
    </div>
    <div class="design-links">
        <div>
            <img src="images/get-involved/stylesheet.svg">
            <p>elementary OS uses a system stylesheet written in CSS. It defines how everything is drawn, from buttons and toolbars to the panel and menus.</p>
            <a class="button flat" href="https://github.com/elementary/stylesheet" target="_blank" rel="noopener">Browse Our Stylesheet</a>
        </div>
        <div>
            <img src="images/get-involved/icons.svg">
            <p>elementary OS comes with a set of vector icons that are used across all pre-installed apps and are available to third party developers too.</p>
            <a class="button flat" href="https://github.com/elementary/icons" target="_blank" rel="noopener">Browse Our Icons</a>
        </div>
        <div>
            <img src="images/get-involved/bugs.svg">
            <p>Our design team tracks "Needs Design" issues in GitHub. These might need further design discussion, wireframes, or deliverable assets.</p>
            <a class="button flat suggested-action" href="https://github.com/search?utf8=%E2%9C%93&q=is%3Aopen+is%3Aissue+user%3Aelementary+label%3A%22Needs+Design%22" target="_blank" rel="noopener">Browse 'Needs Design' Issues</a>
        </div>
    </div>
</section>

<?php
    include $template['footer'];
?>
