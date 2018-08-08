<?php
/**
 * The template for displaying the header
 * 
 * @author Vtrois <seaton@vtrois.com>
 * @license GPL-3.0
 */
?><!DOCTYPE HTML>
<html class="no-js">
	<head>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="format-detection" content="telphone=no, email=no">
		<meta name="description" content="<?php kratos_description(); ?>" />
		<meta name="keywords" content="<?php kratos_keywords();?>" />
		<meta itemprop="image" content="<?php echo kratos_thumbnail_url(); ?>"/>
		<meta name="description" itemprop="description" content="<?php kratos_description(); ?>" />
		<?php wp_head(); ?>
		<?php wp_print_scripts('jquery'); ?>
		<?php if ( kratos_option('site_bw')==1 ) : ?>
			<style type="text/css">html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }
			</style>
		<?php endif; ?>
		<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?b57a2a15997077a03a05258ac5d99c84";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
		</script>
	</head>
	<?php flush(); ?>
	<body data-spy="scroll" data-target=".scrollspy">
		<div id="kratos-wrapper">
			<div id="kratos-page">
				<div id="kratos-header">
					<header id="kratos-header-section">
						<div class="container">
							<div class="nav-header">
								<?php if ( has_nav_menu('header_menu') ) :?>
									<a href="#" class="js-kratos-nav-toggle kratos-nav-toggle"><i></i></a>
								<?php endif; ?>
								<?php $site_logo = kratos_option('site_logo');?>
								<?php if ( !empty( $site_logo ) ) {?>
									<a href="<?php echo get_option('home'); ?>">
									<h1 id="kratos-logo-img"><img src="<?php echo $site_logo; ?>"></h1>
									</a>
								<?php }else{?>
									<h1 id="kratos-logo"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
								<?php }?>
								<?php $defaults = array('theme_location' => 'header_menu', 'container' => 'nav', 'container_id' => 'kratos-menu-wrap', 'menu_class' => 'sf-menu', 'menu_id' => 'kratos-primary-menu', ); ?>
								<?php wp_nav_menu($defaults); ?>
								<span id="search_blog">
									<i class="ic_search">
										<svg aria-hidden="true" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-3x"  width="30" height="30"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
									</i>
								</span>
								<span id="user_login">
									<?php if ( is_user_logged_in() ) { ?> 
										<a class="avatars" href="<?php echo admin_url(); ?>">
										<?php if(!empty($imgurl)) {?>
										<img class="about-photo" src="<?php echo $imgurl; ?>" />
										<?php } else {
											global $current_user; wp_get_current_user(); echo get_avatar( $current_user->user_email ); 
										}?>
										</a>
									<?php } else { ?> 
										<a href="<?php echo wp_login_url( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );?>">
											<svg aria-hidden="true" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-3x" width="30" height="30"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
										</a>
									<?php }?>
								<span>
							</div>
							<div id="mobile_search_box" class="visible-xs visible-sm">
								<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
									<div class="form-group">
										 <input type="text" name='s' id='sm' placeholder="Search…" class="form-control" placeholder="" x-webkit-speech>
									</div>
								</form>
							</div>
						</div>
					</header>
				</div>
