<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) the_post();?>
<div class="page contact-page wrapper">
  <div class="content">
    <div class="top">
      <h2>BANGKOK BRANCH</h2>
  ​
      <p>Oasis Pattanakarn, 358 Muangthong Village 2/3, Pattanakarn 53,
        Suanluang Bangkok 10250, Thailand</p>
      ​
      <p>E: info@shakesbkk.com <br>
        T: +66.2320.2889
        </p>​
      <h2>SHANGHAI BRANCH</h2>
      ​
      <p>Room 1703, No. 228 Xinjian Rd., Minhang Dis, Shanghai 201100, China</p>

      <p>T: +86-21-64880084​</p>

      <p>Maggie Wang, email: <a href="mailto:wang.m@shakesbkk.com">wang.m@shakesbkk.com​</a> <br>
        Jeff Zhang, email: <a href="mailto:zhang.j@shakesbkk.com">zhang.j@shakesbkk.com</a>​ <br>
        Ducati Ni, email: <a href="mailto:ni.d@shakesbkk.com">ni.d@shakesbkk.com</a>
        </p>
    </div>
    <div class="bottom">
      <?php echo do_shortcode('[contact-form-7 id="6" title="Contact Form"]' );?>
    </div>
  </div>

</div>
<?php get_footer(); ?>
