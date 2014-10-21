<?php
/*
Template Name: Store Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page store-page" <?php if get_field('background_image') echo "data-bg='".get_field('background_image')."'";?> >
  <h1>sorry! please come back later</h1>
</div>
<?php get_footer(); ?>
