<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width">

</head>
<body <?php body_class(); ?>>

<div class="header-mobile visible-xs">
  <div class="row">
    <div class="col-xs-3">
      <a href="#" title="Mobile navigation" id="showMenu">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="col-xs-9">
      <a href="<?php echo site_url(); ?>" title="Firebox.com - Not for Everyone blog">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/logo-1.png" class="header__logo" alt="Firebox.com - Logo" title="Firebox.com - Logo">
      </a>
    </div>
  </div>

    <div class="nav-mobile__container">
      <?php wp_nav_menu( array(
      				'menu'              => 'primary',
      				'theme_location'    => 'header-menu',
      				'depth'             => 4,
      				'container'         => 'nav',
      				'menu_class'        => 'nav-mobile')
      		); ?>

    <div class="nav-mobile__bottom">
      <div class="nav-mobile__shop">
        <a href="#">Shop Firebox</a>
      </div>

      <div class="nav-mobile__social">
        <a href="https://facebook.com/firebox" title="Firebox.com Facebook">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_fb.png" height="24">
        </a>
        <a href="https://twitter.com/firebox" title="Firebox.com Twitter">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_tw.png" height="24">
        </a>
        <a href="https://www.instagram.com/firebox/" title="Firebox.com Instagram">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/icon-ig.png" height="24">
        </a>
        <a href="https://uk.pinterest.com/firebox/" title="Firebox.com Pinterest">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_pt.png" height="24">
        </a>
        <a href="https://plus.google.com/+Firebox" title="Firebox.com Google Plus">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_gp.png" height="24">
        </a>
      </div>
    </div>

  </div>


</div>

<header class="header hidden-xs">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="https://firebox.com?via=blog" alt="Shop Firebox.com main store" title="Shop Firebox.com main store">Shop Firebox</a>
      </div>
      <div class="col-md-4 tac">
        <a href="<?php echo site_url(); ?>" title="Firebox.com - Not for Everyone blog">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/logo-1.png" class="header__logo" alt="Firebox.com - Logo" title="Firebox.com - Logo">
        </a>
      </div>
      <div class="col-md-3 col-md-offset-1 tar">
        <div class="social-links__header">
          <a href="https://facebook.com/firebox" title="Firebox.com Facebook">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_fb.png" height="16">
          </a>
          <a href="https://twitter.com/firebox" title="Firebox.com Twitter">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_tw.png" height="16">
          </a>
          <a href="https://www.instagram.com/firebox/" title="Firebox.com Instagram">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/icon-ig.png" height="16">
          </a>
          <a href="https://uk.pinterest.com/firebox/" title="Firebox.com Pinterest">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_pt.png" height="16">
          </a>
          <a href="https://plus.google.com/+Firebox" title="Firebox.com Google Plus">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/icon_gp.png" height="16">
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 tac">
      <?php wp_nav_menu( array(
      				'menu'              => 'primary',
      				'theme_location'    => 'header-menu',
      				'depth'             => 4,
      				'container'         => 'nav',
      				'menu_class'        => 'nav')
      		); ?>
        </div>
    </div>

  </div>

</header>
