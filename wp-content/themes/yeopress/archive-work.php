<?php get_header(); ?>
<div class="page work-page">
  <div class="nav-menu">
    <?php $terms = get_terms('work_category',array('hide_empty'=>false));?>
      <h2>
        <?php foreach ($terms as $term) {
            echo "<a href='#$term->slug'>$term->name</a>";
          }?>
      </h2>
  </div>
  <div class="works">
    <?php
      $posts = get_posts(array(
              'nopaging' => true,
              'post_type' => 'work',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'suppress_filters'=>0
            ));

    ?>
    <?php foreach ( $posts as $post ): setup_postdata( $post );
        $thumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <a href="<?php the_permalink();?>" class="work <?php echo implode(" ", wp_get_post_terms($post->ID, 'work_category', array("fields" => "slugs")));?>">
            <img style="width: 100%;" src="<?php echo $thumbnailUrl; ?>" alt="">
            <h3><?php the_title();?></h3>
        </a>
    <?php endforeach; ?>

    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>
