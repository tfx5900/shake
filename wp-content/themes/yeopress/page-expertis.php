<?php
/*
Template Name: Expertis Page
*/
?>1111
<?php get_header(); ?>
<div class="page expertis-page" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
  <div class="wrapper expertis-list">
    <div class="content">
      <h1>At shakes we can provide a variety of resources
  to suit your needs</h1>
    </div>

    <div class="icons">
      <a href="#branding" class="branding"><span>Branding</span></a>
      <a href="#industrial" class="industrial"><span>Industrial</span></a>
      <a href="#engineering" class="engineering"><span>Engineering</span></a>
      <a href="#packaging" class="packaging"><span>Packaging</span></a>
      <div class="clear"></div>
    </div>

  </div>

  <div class="expertis-full-list">
    <div class="expertis" id="branding">
      <h1>Branding</h1>
      <h2><?php the_field('branding_big_text');?></h2>
      <p><?php the_field('branding_small_text');?></p>
      <span class="big-close-button"></span>
    </div>
    <div class="expertis" id="industrial">
      <h1>Industrial</h1>
      <h2><?php the_field('industrial_big_text');?></h2>
      <p><?php the_field('industrial_small_text');?></p>
      <span class="big-close-button"></span>
    </div>
    <div class="expertis" id="engineering">
      <h1>Engineering</h1>
      <h2><?php the_field('engineering_big_text');?></h2>
      <p><?php the_field('engineering_small_text');?></p>
      <span class="big-close-button"></span>
    </div>
    <div class="expertis" id="packaging">
      <h1>Packaging</h1>
      <h2><?php the_field('packaging_big_text');?></h2>
      <p><?php the_field('packaging_small_text');?></p>
      <span class="big-close-button"></span>
    </div>
  </div>
</div>
<?php get_footer(); ?>
