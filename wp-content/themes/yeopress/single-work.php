<?php if (have_posts()) the_post(); ?>
<?php get_header(); ?>
<div class="page work-page">
  <div class="wrapper single-work">
    <div class="left">
      <div class="content">
        <h2><?php the_title();?></h2>
        <h4><?php echo implode(", ", wp_get_post_terms($post->ID, 'work_category', array("fields" => "names")));?></h4>
      </div>
    </div>
    <div class="right">
      <div class="content">
          <?php the_content();?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="photos">
        <?php 
            $arg = array(
				'post_type' => 'attachment',
				'numberposts' => null,
				'post_status' => null,
				'post_parent' => $post->ID,
				'orderby'	=> 'menu_order',
				'order'	=> 'ASC',
				'nopaging' => true,
				'exclude' => get_post_thumbnail_id($post->ID)
			);
			$images = get_posts($arg);
			foreach ( $images as $attachment ) :
				if (wp_attachment_is_image($attachment->ID)) {
				    $x = wp_get_attachment_image_src( $attachment->ID, 'work-full'); ?>
	               <img src="<?php  echo $x[0];?>" data-id="<?php echo $attachment->ID;?>" data-width="<?php echo $x[1];?>" data-caption="<?php echo $attachment->post_content;?>"/>

<?php
				}
			endforeach; ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
