<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Page Not Found | elementary OS';
    include '_templates/header.php';
?>

<div class="row">
    <div class="column alert">
        <i class="warning fa fa-warning"></i>
    </div>
    <div class="column alert">
        <h1>The page you’re looking for can’t be found</h1>
        <h2>There isn’t anything located here. Check the web address for mispelled words and try again.</h2>
    </div>
    <div class="row">
        <a class="button suggested-action" href="/">Go to Home Page</a>
    </div>
</div>

<?php
    include '_templates/footer.html';
?>
