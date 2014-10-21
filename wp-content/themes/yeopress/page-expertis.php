<?php
/*
Template Name: Expertis Page
*/
?>
<?php get_header(); ?>
<div class="page expertis-page" <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
  <div class="wrapper expertis-list">
    <div class="content">
      <h2>Our toolbox of creative and strategic business development tools provides
fresh ideas and insights, archetypal brand attitudes, technology intelligence,
and compelling user and brand experiences.</h2>
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
      <!-- <h2><?php the_field('branding_big_text');?></h2>
      <p><?php the_field('branding_small_text');?></p>
      <span class="big-close-button"></span> -->
    </div>
    <div class="expertis" id="industrial">
      <h1>Industrial</h1>
      <!-- <h2><?php the_field('industrial_big_text');?></h2>
      <p><?php the_field('industrial_small_text');?></p>
      <span class="big-close-button"></span> -->
    </div>
    <div class="expertis" id="engineering">
      <h1>Engineering</h1>
      <p>
          Our in-house engineers are capable of supporting any of our Design decisions and transform vision into reality. We are fully equipped to co-work with third party engineers on multiple 3D platforms including ProEngineer, Solidworks and Rhinoceros. We also respect all of our client’s need for confidentiality and follow international guidelines to protect your intellectual property. If required you can also entrust us with preparing documentation, legal text and technical drawings for patent application.
      </p>
      <p>
          We are also able to 3D print rapid prototypes on our Makerbot for client presentation, testing and development. For a product’s final prototyping stage we work with a reliable Australian prototype maker in China, proven trustworthy throughout many of our projects.
      </p>
      <p>
          You can consult us on production issues, complex 3D surfacing, mechanical assembly, and electrical components. Our engineers are always up to date on the latest technical advancements in all industrial fields.
      </p>
      <!-- <h2><?php the_field('engineering_big_text');?></h2>
      <p><?php the_field('engineering_small_text');?></p> -->
      <!-- <span class="big-close-button"></span> -->
    </div>
    <div class="expertis" id="packaging">
      <h1>Packaging</h1>
      <!-- <h2><?php the_field('packaging_big_text');?></h2>
      <p><?php the_field('packaging_small_text');?></p>
      <span class="big-close-button"></span> -->
    </div>
  </div>
</div>
<?php get_footer(); ?>
