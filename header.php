<?php
/*
 * @package WordPress
 * @subpackage Beisance-Intelix Custom Theme For Beisance-ARK
 */
?>

<!DOCTYPE html>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon.png"/>
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-iphone-114x114.png" rel="apple-touch-icon" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-normal-128x128.png" rel="icon" sizes="128x128" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-ipad-152x152.png" rel="apple-touch-icon" sizes="152x152" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-ipad-retina-167x167.png" rel="apple-touch-icon" sizes="167x167" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-iphone-retina-180x180.png" rel="apple-touch-icon" sizes="180x180" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-hires-192x192.png" rel="icon" sizes="192x192" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
<!-- our foray into web type/fonts -->
<link href="https://fonts.googleapis.com/css?family=Abel-Open+Sans-Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
<!-- social sharing -->
<?php 
	if (is_page()) {
		echo '<meta property="og:title" content="';echo bloginfo('name');echo' - ';echo bloginfo('description');echo'"/>
				 <meta property="og:description" content="';echo bloginfo('name'); wp_title("-");echo'"/>
				 <meta property="og:type" content="image/png">
				 <meta property="og:url" content="';echo get_permalink();echo'">
				 <meta property="og:image" content="';
				 echo get_template_directory_uri();echo'/img/social-media/social-sharing/social-sharing.png"/>
				 <meta property="og:image:url" content="';
				 echo get_template_directory_uri();echo'/img/social-media/social-sharing/social-sharing.png"/>
				 <meta property="og:image:width" content="1920">
				 <meta property="og:image:height" content="1920">
				 <meta property="og:image:alt" content="';echo the_title();echo' logo"/>';
	}	
	else {
		echo '<meta property="og:title" content="';echo bloginfo('name');echo' - ';echo bloginfo('description');echo'"/>
				 <meta property="og:description" content="';
				 if(have_posts()) : while(have_posts()) : the_post();
				 echo get_character_limited_excerpt_social_sharing();
				 endwhile;
				 endif; 
				 
				 echo'"
				 <meta property="og:type" content="image/png">
				 <meta property="og:url" content="';echo get_permalink();echo'"/>
				 <meta property="og:image" content="';
				 if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail_url();echo'"/>';
				} 
				else { 
					echo get_template_directory_uri();echo'/img/social-media/social-sharing/social-sharing.png"/>';
				}	
				echo'
				 <meta property="og:image:url" content="';
				 if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail_url();echo'"/>';
				} 
				else { 
					echo get_template_directory_uri();echo'/img/social-media/social-sharing/social-sharing.png"/>';
				}
				 echo'
				 <meta property="og:image:width" content="1920">
				 <meta property="og:image:height" content="1920">
				 <meta property="og:image:alt" content="';echo the_title(); echo' thumbnail"/>';
	}
?>
<!-- other -->
<!-- browser header color customization -->
<meta name="viewport" content="minimum-scale=1">
<meta name="theme-color" content="#ffffff" />
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="ARK">
<meta name="author" content="Beisance Intelix">
<meta name="keywords" content="connect, group, church, christ, word of God, networking, giving, christain, faith, uae, ras al-khaimah, rak"/>
<meta name="format-detection" content="telephone=no">
<title>
<?php 
	//selectors for page titles when viewing category pages.
	 if (is_category(array('messages'))) {
		echo 'ARK - Messages';
	}
	else if (is_category(array('testimonies'))) {
		echo 'ARK - Testimonies';
	}
	else if (is_category(array('events'))) {
		echo 'ARK - Events';
	}
	else if (is_category(array('news'))) {
		echo 'ARK - News';
	}
	else if (is_category(array('thoughts'))) {
		echo 'ARK - Thoughts';
	}
	//default blog page
	else if (is_home()) {
		echo 'ARK - Messages';
	}
	//else, normal code.
	else {
		bloginfo('name'); wp_title("-");
	}
 ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
<?php wp_head(); ?>

</head>

<body class="mb">

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/transition.min.js" integrity="sha384-NPE7kZ78ILrFxabO0opdsBBAelo+t0qkXxFuRayJWG/P7Oi4xo45O2JiQYZaSgSl" crossorigin="anonymous"></script>

<?php include("inc/js-window-resize.php"); ?>

<?php include("inc/js-mobile-menu-open.php"); ?>

<?php include("inc/js-mobile-menu-close.php"); ?>

<?php include("inc/js-search-menu-open.php"); ?>

<?php include("inc/js-search-menu-close.php"); ?>

<?php include("inc/js-outside-popup-click-search.php"); ?>

<?php include("inc/js-outside-popup-click-mobile-menu.php"); ?>

<?php include("inc/topnav.php"); ?>