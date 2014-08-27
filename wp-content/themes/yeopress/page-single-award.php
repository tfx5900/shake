<?php
/*
Template Name: Single Award Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page award-page wrapper">
  <div class="content">
    <h1><?php the_title();?> <span class="red">Award</span></h1>
    <div class="half">
      <?php the_content(); ?>
    </div>

  </div>
  <div class="photo-list">

  </div>
</div>
<?php get_footer(); ?>
