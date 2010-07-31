<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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
<body id="home">


<!--cwru main header-->

<div><iframe src="http://case.edu/cwruheader/cwru-header.html" width="100%" height="55" frameborder="0" scrolling="no" id="cwruHeader"></iframe></div> 
	
				<!--feature-->
               	<div id="feature">
                <div id="featureHolder">
                
		<div class="featureImg"><?php if(function_exists('meteor_slideshow')) { meteor_slideshow(); } ?></div>
                        
</div><!--end of feature holder-->
</div><!--end of feature wrapper-->


<!--[if IE]><style type="text/css">.topNav ul ul {position:absolute; left:0; top:31px;}</style><![endif]-->
<div id="umcNav">
<div id="topNavWrapper">
				<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'topnav' ) ); ?>
</div>
</div>

<div class="breadcrumb"><div class="breadcrumbHome"><div class="breadcrumbC"><h2><strong><?php bloginfo( 'name' ); ?></strong></h2></div><div class="sideLink">&raquo; <?php bloginfo('description'); ?></div></div></div>



<!--content wrapper-->
<div id="contentWrapper">

