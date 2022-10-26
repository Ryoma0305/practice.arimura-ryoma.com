<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="/assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--lightbox
<link rel="stylesheet" href="css/lightbox.min.css">
<script src="js/lightbox.min.js"></script>
-->
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
<!--/ drawer.css -->
<!-- jquery & iScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--/ jquery & iScroll -->
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
<!--/ drawer.js -->
<!-- slick -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/slick-theme.css">
<!--/ slick -->
<!-- swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--/ swiper -->
<?php
wp_enqueue_script('jquery');
wp_head();
?>
</head>

<body>
	<!--
	<div id="is-loading">
 <div id="loading">
  <img src="<?php echo get_template_directory_uri() ?>/
images/Pulse-1s-200px.gif" alt="loading" />
 </div>
</div>
	-->

	<section class="mainvisual" <?php body_class(); ?>>
		 <header>
			 <div class="header-content">
				 <h1 class="header-content-logo robot"><a href="<?php echo home_url('/'); ?>">RYOMA ARIMURA</a></h1>
				 <nav class="header-content-menu robot">
					 <ul>
						<li><a href="/#about">ABOUT</a></li>
						<li><a href="<?php echo home_url('/blog'); ?>">BLOG</a></li>
						<li><a href="<?php echo home_url('/contact'); ?>">CONTACT</a></li>
					 </ul>
				 </nav>
			</div>
    <div class="nav-drawer inner">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
		<h1 class="header-content-logo robot"><a href="<?php echo home_url('/'); ?>">RYOMA ARIMURA</a></h1>
      <div id="nav-content">
		  <ul class="robot">
			  <li><a href="/#about">ABOUT</a></li>
			  <li><a href="<?php echo home_url('/blog'); ?>">BLOG</a></li>
			  <li><a href="<?php echo home_url('/contact'); ?>">CONTACT</a></li>
		  </ul>
		</div>
  </div>
  </header>
