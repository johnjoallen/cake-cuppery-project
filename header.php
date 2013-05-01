<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title>
	<?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) {  bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { bloginfo('name'); print ' | '; the_title(); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; get_page_number(); }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?>
	</title>
<!--Cake Cuppery CSS-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/bx_styles/bx_styles.css" media="screen" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--CaKe Cuppery JS-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cakecuppery.js"></script>
</head>
<body>
<div id="wrapper" class="hfeed">
	<div id="container">
		<div id="header">
			<div id="top-border">
				&nbsp;
			</div>
			<div id="logo">
				<a href="<?php echo(site_url()); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" height="154px" width="278px" alt="Cake Cuppery - Boutique Bakery" /></a>
			</div>
			<div id="social">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-media.png" height="143px" width="264px" alt="Follow Us on Twiiter and Facebook" usemap="#twitter" />
			</div>
			<div id="illustration">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-baker.png" height="293px" width="304px" alt="The Cake Cuppery" title="The Cake Cuppery" />
			</div>
			<div id="nav">
				<?php wp_page_menu("exclude=1"); ?>			
			</div>
		</div>
		<div id="content">