<?php if (have_posts()) the_post();?>
<?php get_header(); ?>
<div class="page award-page wrapper">
    <div class="content">
        <h1><?php the_title();?> <span class="red">Award</span></h1>
        <div class="half">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="photo-list">

    </div>
</div>
<?php get_footer(); ?>
