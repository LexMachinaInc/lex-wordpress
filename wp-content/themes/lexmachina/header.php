<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="/images/favicon.ico" />
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: 57 × 57 -->
		<link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon-precomposed.png">
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/apple-touch-icon-72x72-precomposed.png">
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/apple-touch-icon-114x114-precomposed.png">
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/apple-touch-icon-144x144-precomposed.png">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/stylesheets/font-awesome.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=8"> <![endif]-->
		<!--[if lt IE 10]><link rel="stylesheet" href="/stylesheets/ie.css"> <![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php
			/* We add some JavaScript to pages with the comment form
			* to support sites with threaded comments (when in use).
			*/
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
		?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrap">
			<div id="page" class="container">
				<header class="navbar">
  <div class="navbar-inner">
    <div class="container">
    	
    	<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        </a>
    
    	<div class="row-fluid">
    		<div class="logoContainer span6">
				<a class="brand logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			<div class="span6">
				<a class="login btn" href="https://lexmachina.com/members"><i class="icon-user"></i> Login</a>
			</div>
    	</div>
    	<div class="nav-collapse">
			<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<a id="skip" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>          
		</div><!--/.nav-collapse -->
    </div>
  </div>
</header>
			<?php
				if ( has_post_thumbnail() ) {
				// the current post has a thumbnail
				} else {
				// the current post lacks a thumbnail
				}
			?>
	
			<section id="content" role="main">