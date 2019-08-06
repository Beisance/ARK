<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 */
?>

<!DOCTYPE html>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-ark.png"/>
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-iphone-114x114-ark.png" rel="apple-touch-icon" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-normal-128x128-ark.png" rel="icon" sizes="128x128" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-ipad-152x152-ark.png" rel="apple-touch-icon" sizes="152x152" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-ipad-retina-167x167-ark.png" rel="apple-touch-icon" sizes="167x167" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-touch-icon-iphone-retina-180x180-ark.png" rel="apple-touch-icon" sizes="180x180" />
<link href="<?php echo get_template_directory_uri(); ?>/img/header/favicons/favicon-hires-192x192-ark.png" rel="icon" sizes="192x192" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
<!-- our foray into web type/fonts -->
<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<!-- social sharing -->
<?php 
	if (is_page()) {
		echo '<meta property="og:title" content="';echo bloginfo('name');echo' | ';echo bloginfo('description');echo'"/>
				 <meta property="og:description" content="';echo bloginfo('name'); wp_title("|");echo'"/>
				 <meta property="og:type" content="image/png">
				 <meta property="og:url" content="';echo get_permalink();echo'">
				 <meta property="og:image" content="';
				 echo get_template_directory_uri();echo'/img/social-media/social-sharing/img-social-sharing-ark.png"/>
				 <meta property="og:image:url" content="';
				 echo get_template_directory_uri();echo'/img/social-media/social-sharing/img-social-sharing-ark.png"/>
				 <meta property="og:image:width" content="1920">
				 <meta property="og:image:height" content="1920">
				 <meta property="og:image:alt" content="';echo the_title();echo' logo"/>';
	}	
	else {
		echo '<meta property="og:title" content="';echo bloginfo('name');echo' | ';echo bloginfo('description');echo'"/>
				 <meta property="og:description" content="';
				 global $post;
				 $postcat = get_the_category( $post->ID );
				 // try print_r($postcat) ;  
			     if ( ! empty( $postcat ) ) {
					echo esc_html( $postcat[0]->name );   
				}
				 wp_title("|"); echo'"/>
				 <meta property="og:type" content="image/png">
				 <meta property="og:url" content="';echo get_permalink();echo'">
				 <meta property="og:image" content="';
				 if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail_url();echo'"/>';
				} 
				else { 
					echo get_template_directory_uri();echo'/img/social-media/social-sharing/img-social-sharing-ark.png"/>';
				}	
				echo'
				 <meta property="og:image:url" content="';
				 if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail_url();echo'"/>';
				} 
				else { 
					echo get_template_directory_uri();echo'/img/social-media/social-sharing/img-social-sharing-ark.png"/>';
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
<meta name="theme-color" content="#e6e6e6" />
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
		echo 'ARK | Messages';
	}
	else if (is_category(array('testimonies'))) {
		echo 'ARK | Testimonies';
	}
	else if (is_category(array('events'))) {
		echo 'ARK | Events';
	}
	else if (is_category(array('news'))) {
		echo 'ARK | News';
	}
	//default blog page
	else if (is_home()) {
		echo 'ARK | Messages';
	}
	//else, normal code.
	else {
		bloginfo('name'); wp_title("|");
	}
 ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
<?php wp_head(); ?>
</head>

<body class="mb">

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/image-hover.js" integrity="sha384-XdPauhRV0czGESkUFIcI6uCoZMji6LCPs49ILccFlhhtIA7oFfVGBSBAqkHsmGur" crossorigin="anonymous"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/transition.min.js" integrity="sha384-NPE7kZ78ILrFxabO0opdsBBAelo+t0qkXxFuRayJWG/P7Oi4xo45O2JiQYZaSgSl" crossorigin="anonymous"></script>

<?php include("inc/js-window-resize-ark.php"); ?>

<?php include("inc/js-mobile-menu-topnav-ark.php"); ?>

<?php include("inc/js-mobile-menu-subnav-ark.php"); ?>

<?php include("inc/js-mobile-menu-subnav-thoughts-ark.php"); ?>

<div id="header-container"><!-- start #header-->
	<div id="header-container-content" class="hcc hcc-m hcc-d">
		<div id="topnav-menu-button" class="tnmb tnmb-m tnmb-d">
			<img id="topnav-menu-button-img" onclick="mobileMenuTopnav()" class="tnmb-m" src="<?php echo get_template_directory_uri(); ?>/img/header/img-topnav-menu-button-ark.png">
		</div>
		<div id="logo" class="tnl tnl-m tnl-d"><!-- start #logo-->
			<a href ="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header/img-ark-logo-icon-ark.png" id="img1" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(1,1,/*id*/'img1',/*url*/'<?php echo get_template_directory_uri(); ?>/img/header/img-ark-logo-icon-mouseover-ark.png')"/>
			</a>
		</div><!-- end #logo-->
		<div id="topnav" class="tnm tnm-m tnm-d"><!-- start #topnav-->
			<?php wp_nav_menu( array(
				'menu' => 'topnav-ark',
				'class' => 'menu',
				'container' => 'topnav'
				)
			);
			?>
		</div><!-- end #topnav-->
		<div id="search" class="tns tns-m tns-d"><!-- start #search-->
			<?php include(TEMPLATEPATH . '/searchform-desktop.php'); ?>
		</div><!-- end #search-->
		<div id="custom-mobile-right-icon" class="crmi crmi-m crmi-d">
		<a href ="<?php echo esc_url( home_url( '/' ) ); ?>messages">
			<img id="custom-mobile-right-icon-img" class="mmb-m" src="<?php echo get_template_directory_uri(); ?>/img/header/img-messages-icon-mobile-ark.png">
		</a>
		</div>
	</div>
	<div id="topnav-mobile-menu" class="tmm tmm-m tmm-d"><!-- start #topnav-mobile-menu-->
		<div id="search-mobile-container" class="smc smc-m smc-d">
			<div id="search-mobile-container-content">
				<div id="search-mobile" class="tnsm tnsm-m tnsm-d">
					<?php include(TEMPLATEPATH . '/searchform-mobile.php'); ?>
				</div>
			</div>
		</div>
		<div id="topnav-mobile-container" class="tnmc tnmc-m tnmc-d">
			<div id="topnav-mobile-container-content" class="tnmcc tnmcc-m tnmcc-d">	
				<div id="topnav-mobile" class="tnmm tnmm-m tnmm-d">
					<?php wp_nav_menu( array(
						'menu' => 'topnav-ark',
						'class' => 'menu',
						'container' => 'topnav-mobile'
						)
					);
					?>
				</div>
			</div>	
		</div>
	</div><!-- end #topnav-mobile-menu-->	
</div><!-- end #header-container-->
