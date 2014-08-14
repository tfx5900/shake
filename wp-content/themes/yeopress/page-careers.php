<?php
/*
Template Name: Careers Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page careers-page wrapper content">
  <div class="banner">
    <img src="<?php bloginfo('template_url');?>/images/careers-banner.jpg" alt="">
  </div>
  <h1 class="red">Be a Shakes</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec libero mauris.
Donec consequat malesuada eros in volutpat. Mauris feugiat elit id convallis dictum.
Pellentesque suscipit lorem eu hendrerit consectetur.</p>
  <h1 class="red">Who we're looking for</h1>
  <div class="job-list">
    <?php
      $posts = get_posts(array(
              'nopaging' => true,
              'post_type' => 'job',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'suppress_filters'=>0
            ));
    ?>
    <?php foreach ( $posts as $post ): setup_postdata( $post );?>
      <a class="job" href="#j<?php $post->ID?>">
        <?php the_title();?>
        <span><?php the_field("job_number")?></span>
      </a>
    <?php endforeach; ?>

    <div class="clear"></div>
  </div>
  <div class="note">
    <p>Please accumsan, turpis vel lacinia vestibulum, quam justo mollis  turpis  vel lacinia vestibulum, quam justo mollis.</p>
  </div>

</div>
<div class="job-full-list">
  <?php foreach ( $posts as $post ): setup_postdata( $post );?>
    <div class="job" id="j<?php $post->ID?>">
      <h2 class="red">Position</h2>
      <h1><?php the_title();?></h1>
      <div class="content">
        <?php the_content();?>
      </div>
      <span class="close-button"><span></span></span>
    </div>
  <?php endforeach; ?>


</div>
<?php get_footer(); ?>
