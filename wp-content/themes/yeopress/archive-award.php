<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page award-page wrapper">
  <div class="content">
    <h1>shakes’s <span class='red'>Award</span></h1>
    <div class="half">
      <?php the_content(); ?>
    </div>

  </div>
  <div class="award-list">
    <?php
      $posts = get_posts(array(
              'nopaging' => true,
              'post_type' => 'award',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'suppress_filters'=>0
            ));

    ?>
    <?php foreach ( $posts as $post ): setup_postdata( $post );?>
      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('full',array('title'=>''));?>
      </a>
    <?php endforeach; ?>
  </div>
</div>
<?php get_footer(); ?>
