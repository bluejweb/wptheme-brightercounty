<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description', 'display' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
     <div class="topbar">
        <div id="exampleNotice" class="topbar--notice">
           Free shipping on orders over $75.
           <span class="topbar--notice-close">&#x2716;</span>
        </div>
        <div class="wrapper">
           <div class="topbar--title">
              <h1>Brighter County Candles</h1>
           </div>
           <nav class="topbar--nav">
              <a href="#candles">Candles</a>
              <a href="#candles">Collections</a>
              <!--<a href="#stockists">Stockists</a>-->
              <a href="#about">About</a>
           </nav>
        </div>
     </div>
  </header>
