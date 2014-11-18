<?php get_header();
$domainUrl = get_site_url();
?>
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
            echo "<li style='width: 20%; float: left;' class='nav-menu-holder $term->name $term->slug'>
<div slug='#$term->slug' class='work nav-menu'>$term->name</div>
<img style='width: 100%' src='$domainUrl/wp-content/themes/yeopress/images/how-we-do-dump.png'/>

</li>";
        }?>
        <?php foreach ( $posts as $post ):
//            $classes = implode(" ", wp_get_post_terms($post->ID, 'work_category', array("fields" => "slugs")));
            $classes = array_shift(wp_get_post_terms($post->ID, 'work_category', array("fields" => "slugs")));
            $classes = array_shift(explode('-', $classes));
            setup_postdata( $post );
            $thumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?><li class='work <?php echo $classes ?>'>
            <a href="<?php the_permalink();?>">
                <div class="text">
                    <h2><?php echo get_the_title(); ?></h2><br/>
                    <?php echo $classes ?>
                </div>
                <img style="width: 100%;" src="<?php echo $thumbnailUrl; ?>" alt="">

            </a></li><?php endforeach; ?>
    </ul>

    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>

