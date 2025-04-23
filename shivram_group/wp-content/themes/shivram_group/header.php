<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivram_group
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>shivram_group</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/shivram_group_logo.jpg" type="image/x-icon">

	<!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Owl Carousel JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cs-select.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sass/style.scss">



	<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ex_css/owl.carousel.css"> -->



	<!-- Modernizr JS -->
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	

</head>

<body>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo">
						<a href="index.html">
							<img src="<?php bloginfo('template_directory'); ?>/images/shivram_group_logo.jpg" alt="Shivram Group" style="height: 60px;" />
						</a>
					</h1>
				<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="About.html">About</a></li>
							<li>
								<a href="properties.html" class="fh5co-sub-ddown">Properties</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">1 BHK</a></li>
									<li><a href="#">2 BHK</a></li>
									<li><a href="#">3 BHK</a></li>
									<li><a href="#">4 BHK</a></li>
								</ul>
							</li>
							<!-- <li>
								<a href="project.html" class="fh5co-sub-ddown">Project</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li> -->
							<li><a href="agent.html">Agent</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
    <!-- Search End -->
    <div class="clearfix"></div>
	