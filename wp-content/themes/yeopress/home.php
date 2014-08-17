<?php get_header(); ?>
<div class="homepage">
    <div class="slides" data-current="1">
        <?php $posts = get_posts(array(
            'nopaging' => true,
            'post_type' => 'homeslide',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'suppress_filters'=>0
        ));
        $i = 0;
        foreach ( $posts as $post ): setup_postdata( $post );
            $i++;
            $type = get_field('slide_type');?>
            <div class="slide" data-no="<?php echo $i?>" data-type="<?php echo $type;?>"
                <?php if (strcmp($type,'image') == 0) {
                    $image_link = get_field('image_link');
                    echo "style='background:url($image_link) no-repeat;background-size: cover;'";
                }?>
                >
                <?php if (strcmp($type,'video') == 0):?>
                    <video autoplay="autoplay" muted="muted" poster="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),'full' )[0];?>" loop="loop">
                        <source src="<?php the_field('video_link');?>" type="video/mp4">
                    </video>
                <?php endif;?>
                <h1>
                    <?php the_content();?>
                </h1>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php get_footer(); ?>
