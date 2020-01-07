<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
<div class="cookie-bar">    
  <div class="container">
    <div class="cookie-bar__inner"> 
        <button class="cookie-bar__close">Dismiss</button>
        <p>This website uses cookies. By continuing to use this website, you consent to our use of these cookies.</p>

    </div>
</div>
</div>
<header class="header  ">
<div class=" container"> 
    <a href="<?php echo home_url()?>"  class="header__logo active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></img>
</a>
    <nav class="main-nav">
    <div class="main-nav__inner">
        <?php 

$defaults = array(
'container' =>  false,
'echo' => false, 
'items_wrap'      => '%3$s',
'depth'           => 0,
'theme_location'  => 'header-main-menu',
);

echo strip_tags(wp_nav_menu( $defaults ), '<a>' );
?>
</div>
    </nav>
    <a href="#" class="nav-toggle">Menu</a>
</div>  
</header> 
<div class="liquid-container">
    <div class="liquid-child">
        <div class="flexible-blocks">
 
