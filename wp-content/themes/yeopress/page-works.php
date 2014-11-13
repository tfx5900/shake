<?php
/*
Template Name: Work Page
*/
?>
<?php get_header(); ?>
<?php $terms = get_terms('work_category',array('hide_empty'=>false));?>
<div class="page work-page" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
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
    <ul>
        <?php foreach ($terms as $term) {
            echo "<li><a href='#$term->slug' class='work nav-menu $term->name'>$term->name</a></li>";
        }?>
        <?php foreach ( $posts as $post ): setup_postdata( $post ); $thumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?><li>
            <a href="<?php the_permalink();?>" class="work <?php echo implode(" ", wp_get_post_terms($post->ID, 'work_category', array("fields" => "slugs")));?>">
                <img style="width: 100%;" src="<?php echo $thumbnailUrl; ?>" alt="">

            </a></li><?php endforeach; ?>
    </ul>

    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>

