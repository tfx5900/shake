<?php
/*
Template Name: Award Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page award-page wrapper" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
  <div class="content">
    <h1>Regconition</h1>


    <div class="award-list" style="float: right;">
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
    
    <div class="half">
        <p style="color: red;">2014</p>
        <p>
            1x Gold at International A’ Design Award 
            Chanwanich Immigration Terminal    
        </p>
        <p>
            2x Silver at International A’ Design Award
            Chanwanich Immigration Terminal
            SNF a-maze knife block        
        </p>
        <p>
            1x German Design Award Nominee
            SNF a-maze knife block              
        </p>
        <br>      
        <p style="color: red;">2013</p>
        <p>
            Asian Regional Winner of BASF International Car Seat
            Design competition
        </p>
    </div>


  </div>
</div>
<?php get_footer(); ?>
