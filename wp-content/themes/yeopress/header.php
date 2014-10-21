<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- <meta name="viewport" content="width=device-width"> -->
    <title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' );?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <header>
    <div class="wrapper">
      <div class="left">
        <a href="<?php bloginfo('url');?>" class="main-logo">Shakes</a>
      </div>
      <div class="right nav-menu">
        <ul>
          <li><a href="<?php bloginfo('url');?>/about">who we are</a></li>
          <li><a href="<?php bloginfo('url');?>/expertis">what we do</a></li>
          <li><a href="<?php bloginfo('url');?>/work">how we do it</a></li>
          <li><a href="<?php bloginfo('url');?>/awards">things we won</a></li>
          <li><a href="<?php bloginfo('url');?>/careers">we want you</a></li>
          <!-- <li><a href="javascript:void(0);">store</a></li> -->
          <li><a href="<?php bloginfo('url');?>/contact">get in touch</a></li>
        </ul>
        <div class="social-icons">
          <a href="#" class="facebook icon" target="_blank"></a>
          <a href="#" class="twitter icon" target="_blank"></a>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </header>
  <div class="main-content">
