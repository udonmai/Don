<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/prettify.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/sunburst.css" />
	<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/prettify.js"></script>
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>" onload="prettyPrint()">

<div id="wrapper" class="hfeed">

		<div id="header">
			<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
			<div id="blog-description"><?php bloginfo('description') ?></div>
			<div id="head-pic" class="avator"><img src="<?php echo home_url(); ?>/wp-content/themes/Don/imgs/avatar.jpg" alt="udonmai" class="size64"></div>
			<?php sandbox_globalnav() ?>
		</div><!--  #header -->
