<?php if (have_posts()) the_post();?>
<?php get_header(); ?>
<div class="page award-page award-single-page wrapper" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
    <div class="thumbnail">
        <?php the_post_thumbnail('full',array('title'=>''));?>
    </div>
    <div class="content">
        <h1><?php the_title();?> <span class="red">Award</span></h1>
        <div class="nano half">
            <div class="nano-content ">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="award-photos">
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
            $x = wp_get_attachment_image_src( $attachment->ID, 'work-thumbnail'); ?>
            <div><img src="<?php  echo $x[0];?>" data-id="<?php echo $attachment->ID;?>" data-width="<?php echo $x[1];?>" data-caption="<?php echo $attachment->post_content;?>"/></div>

        <?php
        }
    endforeach; ?>
</div>
<?php get_footer(); ?>
