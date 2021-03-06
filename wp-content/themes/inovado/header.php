<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<!-- Basic Page Needs 
========================================================= -->
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php global $data; ?>

<!-- Mobile Specific Metas & Favicons
========================================================= -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<link rel="shortcut icon" href="wp-content/uploads/2015/10/focusconlaw_favicon.gif">

<?php if($data['media_favicon_iphone'] != "") { ?><link rel="apple-touch-icon" href="<?php echo $data['media_favicon_iphone']; ?>"><?php } ?>

<?php if($data['media_favicon_iphone_retina'] != "") { ?><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $data['media_favicon_iphone_retina']; ?>"><?php } ?>

<?php if($data['media_favicon_ipad'] != "") { ?><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $data['media_favicon_ipad']; ?>"><?php } ?>

<?php if($data['media_favicon_ipad_retina'] != "") { ?><link rel="apple-touch-icon" sizes="144x144" href="<?php echo $data['media_favicon_ipad_retina']; ?>"><?php } ?>

<link rel="stylesheet" type="text/css" id="bootstrap-css "href="<?php home_url(); ?>/wp-content/themes/inovado/framework/css/bootstrap.min.css">

<!-- WordPress Stuff
========================================================= -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script src="<?php home_url(); ?>/wp-content/themes/inovado/framework/js/bootstrap.min.js"></script>

</head>

<body <?php body_class(); ?>>

        <?php include_once('analyticstracking.php') ?>

	<div class="container">

	<div class="wrapall">
	
                <header id="header" class="header clearfix">
                
                                        <div class="col-xs-9 logo">
                
                
					        <a href="<?php echo home_url(); ?>/"><img src="<?php echo home_url(); ?>/wp-content/uploads/2015/10/focusconlaw_logo.png" alt="<?php bloginfo('name'); ?>" class="logo_standard" /></a>
					       
                                                <?php if($data['media_logo_retina'] != '') { ?><a href="<?php echo home_url(); ?>/"><img src="<?php echo $data['media_logo_retina'] ?>" width="<?php echo $data['logo_width']; ?>" height="<?php echo $data['logo_height']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_retina" /></a><?php } ?>
					</div>
                                        <div class="col-xs-1 social-icons">
                                        </div>
					<div class="col-xs-2 search-form">
                                                <form action="<?php echo home_url(); ?>/" id="header-searchform" method="get">
                                                        <input type="text" id="header-s" name="s" value="" autocomplete="off" />
                                                        <input type="submit" value="Search" id="header-searchsubmit" />
                                                </form>
                                        </div> 
                
                        <!--<div id="navigation" class="clearfix">
                                <div class="col-xs-3 col-md-12 nav-container">
                                        <?php //wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'nav')); ?>
                                </div>
			</div>-->

                        <nav id="nav-toggle-button" class="col-xs-3 navbar navbar-default row visible-xs-inline">
                                        <div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
					</div>
                        </nav>
                        <nav id="navigation" class="navbar navbar-default col-xs-12">
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <?php wp_nav_menu(array(
					          'theme_location' => 'main_navigation',
						  'menu_id' => 'nav',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav',
						  'fallback_cb' => 'wp_page_menu',
						  'walker' => new wp_bootstrap_navwalker()
					      )); ?>
                                        </div>
                        </nav>
                </header>
