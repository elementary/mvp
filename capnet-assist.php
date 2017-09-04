<?php
    require_once __DIR__.'/_backend/preload.php';

    $page['name'] = 'capnet-assist';
    $page['title'] = 'You\'re connected! &sdot; elementary';

    $page['styles'] = array(
        'styles/capnet-assist.css'
    );

    $scriptless = true;
    include $template['header'];
?>

<div class="row">
		<h1>Automatic connection to the Internet established.</h1>
		<p>Gaining access on this network may have required logging in, but it was possible to do without anyhow.</p>
</div>

<?php
    include $template['footer'];
?>
