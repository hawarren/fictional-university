<?php
//single.php defines theme behavior for a single post (but not pages)
while(have_posts()) {
    the_post(); ?>
    <h2>  <?php the_title() ?></h2>
    <?php the_content() ?>
<hr>
<?php }

?>
