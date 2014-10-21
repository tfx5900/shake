<?php
/*
Template Name: Careers Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page careers-page wrapper content" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
  <h1 class="red">Be a Shakes</h1>
  <p>At shakes we’re looking for talented people that like to be different and don’t really care about it. Call us misfits but we love a bunch of weirdos that share the same passion. However, what we value most is a healthy portion of self-criticism for your own work and the drive for excellence beyond your limits. So if you think you have what it takes to shake then give us a shout and send us your portfolio.</p>
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
      <a class="job" href="#j<?php echo $post->ID?>">
        <?php the_title();?>
        <span><?php the_field("job_number")?></span>
      </a>
    <?php endforeach; ?>

    <div class="clear"></div>
  </div>
  <div class="note">
    <p>Send your application with portfolio and resume to info@shakesbkk.com.</p>
  </div>

</div>
<div class="job-full-list">
  <?php foreach ( $posts as $post ): setup_postdata( $post );?>
    <div class="job" id="j<?php echo $post->ID?>">
      <h2 class="red">Position</h2>
      <h1><?php the_title();?></h1>
        <div class="nano">
            <div class="content nano-content">
                <?php the_content();?>
            </div>
        </div>
      <span class="close-button"><span></span></span>
    </div>
  <?php endforeach; ?>


</div>
<?php get_footer(); ?>
