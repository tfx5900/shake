<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<div class="wrapper page about-page" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?>>
  <div class="nav-menu">
    <ul>
      <li><a href="#about" class="selected">our purpose</a></li>
      <li><a href="#philosophy">our philosophy</a></li>
      <li><a href="#the-shakers">our shakerz</a></li>
      <li><a href="#our-believers">our believers</a></li>

    </ul>
    <div class="clear"></div>
  </div>
  <div class="tabs">
    <div class="tab" id="about">
      <div class="content">
        <?php the_field('about');?>
      </div>
    </div>
    <div class="tab" id="story">
      <div class="content">
        <?php the_field('story');?>
      </div>
    </div>
    <div class="tab" id="philosophy">
      <div class="content">
        <?php the_field('philosophy');?>
      </div>
    </div>
    <div class="tab" id="our-believers">
      <div class="content">
        <?php the_field('our-believers');?>
      </div>
    </div>
  </div>


</div>

<div class="tab hide" id="the-shakers">

  <div class="people-list">
    <ul>
    	<?php $posts = get_posts(array(
			'nopaging' => true,
			'post_type' => 'shaker',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'suppress_filters'=>0
		));

    foreach ( $posts as $post ): setup_postdata( $post );
        $thumbnailUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'shaker-thumbnail' ); 
        ?><li class="person">
            <img style="width: 100%;" src="<?php echo $thumbnailUrl[0]; ?>" alt="">
            <div class="detail-person">
                <h2><?php the_title();?></h2><br>
                <h3><?php the_field('job_title'); ?></h3><br><br>
                <?php htmlentities(the_content());?>    
            </div>
        </li><?php endforeach;?>
    </ul>
    <div class="clear"></div>
  </div>
</div>


<?php get_footer(); ?>
