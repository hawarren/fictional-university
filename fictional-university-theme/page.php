<?php
//page.php defines the behavior for a single PAGE (similar to single.php)
while(have_posts()) {
    the_post(); ?>
    <h1>This is really just a page</h1>
    <h2>  <?php the_title() ?></h2>
    <?php the_content() ?>
<hr>
<?php }

?>
