<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<div class="wrapper page about-page">
  <div class="nav-menu">
    <ul>
      <li><a href="#about" class="selected">about shakes</a></li>
      <li><a href="#story">shakes's story</a></li>
      <li><a href="#philosophy">shakes philosophy</a></li>
      <li><a href="#the-shakers">the shakers</a></li>
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
  <div class="content wrapper">
    <h1 class="red">
      Hi! We are the shakes team <br>
      Nice to meet you :)
    </h1>
  </div>

  <div class="people-list">
    	<?php $posts = get_posts(array(
								'nopaging' => true,
								'post_type' => 'shaker',
								'orderby' => 'menu_order',
								'order' => 'ASC',
								'suppress_filters'=>0
							));

					foreach ( $posts as $post ): setup_postdata( $post );?>
    <a href="#s<?php echo $post->ID;?>" class="person">
      <?php the_post_thumbnail('shaker-thumbnail',array('title'=>''));?>
      <h3><?php the_title();?></h3>
    </a>
    <?php endforeach;?>

    <div class="clear"></div>
  </div>

  <div class="people-full-list">
    <?php foreach ( $posts as $post ): setup_postdata( $post );?>
      <div class="person wrapper" id="s<?php echo $post->ID;?>">
        <div class="left photo">
          <?php the_post_thumbnail('shaker-full',array('title'=>''));?>
        </div>
        <div class="right description content">
          <h2><?php the_title();?></h2>
          <h3><?php the_field('job_title'); ?></h3>
          <?php the_content();?>
        </div>
        <span class="close-button"><span></span></span>
        <div class="clear"></div>
      </div>
    <?php endforeach;?>
  </div>
</div>


<?php get_footer(); ?>
