<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' );?></title>
<meta name="author" content="">
<link rel="author" href="">
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
          <li><a href="<?php bloginfo('url');?>/about">about</a></li>
          <li><a href="<?php bloginfo('url');?>/works">works</a></li>
          <li><a href="<?php bloginfo('url');?>/experts">experts</a></li>
          <li><a href="<?php bloginfo('url');?>/award">award</a></li>
          <li><a href="<?php bloginfo('url');?>/careers">careers</a></li>
          <li><a href="<?php bloginfo('url');?>/store">store</a></li>
          <li><a href="<?php bloginfo('url');?>/contact">contact</a></li>
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
