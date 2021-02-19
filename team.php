<?php

require_once __DIR__.'/_backend/preload.php';

use App\Lib\Cache\Cache;
use App\Lib\Cache\Store\FileStore;
use App\Service\Slack;

$page['description'] = 'Meet the people behind elementary.';
$page['title'] = 'Team &sdot; elementary';

$page['styles'] = array(
    'styles/team.css'
);

$cacheStore = new FileStore();
$cache = new Cache($cacheStore);

$slack = new Slack($config['slack_token']);

$memebers = $cache->remember('team.php@users', 10, function () use ($slack) {
    return $slack->users();
});
$communities = $cache->remember('team.php@communities', 10, function () use ($slack) {
    return $slack->community();
});

include $template['header'];
include $template['alert'];
?>
<!-- ending php and starting html code -->
<section class="grid">
    <div class="two-thirds">
        <h1>Meet the Team</h1>
        <p>We believe in the unique combination of top-notch UX and the world-changing power of Open Source.</p>
        <p>elementary was founded in 2007 by a small group of passionate volunteers. Over the years, we&rsquo;ve been able to grow into a tiny company and fund the development of open source software. We&rsquo;re a dedicated team of developers, designers, writers, and everyday computer users crafting an incredible open computing experience. We are elementary.</p>
    </div>
</section>

<section class="grid">
    <div class="whole">
        <div class="team-directory">

            <?php foreach ($memebers as $member) { ?>

                <div class="member">
                    <div class="member_photo" style="background-image:url(<?php echo $member['profile']['image_192'] ?>)"></div>
                    <h5 class="member_name" data-l10n-off="1"><?php echo $member['name'] ?></h5>
                    <span class="member_title" data-l10n-off="1"><?php echo $member['profile']['title'] ?></span>
                    <span class="member_time"><?php echo $member['tz_label'] ?></span>
                </div>

            <?php } ?>

        </div>
    </div>
</section>

<section class="grid">
    <div class="two-thirds">
        <h2>Community &amp; Collaborators</h2>
        <p>elementary would not exist without the involvement of dedicated community members and collaborators from other free and open source projects.</p>
    </div>
    <div class="whole">
        <div class="team-directory">

            <?php foreach ($communities as $member) { ?>

                <div class="member">
                    <div class="member_photo" style="background-image:url(<?php echo $member['profile']['image_192'] ?>)"></div>
                    <h5 class="member_name" data-l10n-off="1"><?php echo $member['name'] ?></h5>
                    <span class="member_title" data-l10n-off="1"><?php echo $member['profile']['title'] ?></span>
                    <span class="member_time"><?php echo $member['tz_label'] ?></span>
                </div>

            <?php } ?>

        </div>

        <a class="button suggested-action" href="get-involved">Get Involved</a>
        <p class="small-label"><i class="fab fa-slack-hash"></i> Powered by Slack</p>
    </div>
</section>
<!-- End of the html -->
<?php
include $template['footer'];
?>
<!-- End of the code -->
