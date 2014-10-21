<?php
/*
Template Name: Work Page
*/
?>
<?php get_header(); ?>
<div class="page work-page" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
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
    <?php foreach ( $posts as $post ): setup_postdata( $post );?>
    <a href="<?php the_permalink();?>" class="work <?php echo implode(" ", wp_get_post_terms($post->ID, 'work_category', array("fields" => "slugs")));?>">
      <?php the_post_thumbnail('work-thumbnail',array('title'=>''));?>
    </a>
  <?php endforeach; ?>

    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>
