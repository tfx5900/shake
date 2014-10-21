<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post(); ?>
<div class="page contact-page">
    <div class="bg">
        <?php if (strcmp(get_field('background_type'), 'image')==0) { ?>
            <span data-type="image" data-url="<?php the_field('image_url');?>"></span>
        <?php } else { ?>
            <span data-type="video" data-url="<?php echo get_field('video_url');?>"></span>
            <video autoplay="autoplay" muted="muted" poster="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),'full' )[0];?>" loop="loop">
                <source src="<?php the_field('video_url');?>" type="video/mp4">
            </video>
        <?php }?>
    </div>
    <div class="content">
        <div class="top">
            <h2>bangkok branch</h2>

            <p class="prefix-location">Oasis Pattanakarn, 358 Muangthong Village 2/3, Pattanakarn 53,
                Suanluang Bangkok 10250, Thailand</p>

            <p>E: <a href="mailto:info@shakesbkk.com">info@shakesbkk.com</a> <br>
                T: +66.2320.2889
            </p>
            <br/>

            <h2>shanghai branch</h2>

            <p class="prefix-location">Room 1703, No. 228 Xinjian Rd., Minhang Dis, Shanghai 201100, China</p>

            <p>T: +86-21-64880084​<br>
                Maggie Wang <span>•</span> email: <a href="mailto:wang.m@shakesbkk.com">wang.m@shakesbkk.com</a> <br>
                Jeff Zhang <span>•</span> email: <a href="mailto:zhang.j@shakesbkk.com">zhang.j@shakesbkk.com</a>​ <br>
                Ducati Ni <span>•</span> email: <a href="mailto:ni.d@shakesbkk.com">ni.d@shakesbkk.com</a>
            </p>
        </div>
        <div class="bottom">
            <?php echo do_shortcode('[contact-form-7 id="58" title="Contact Form"]'); ?>
        </div>
        <div class="clear"></div>
    </div>

</div>
<?php get_footer(); ?>
