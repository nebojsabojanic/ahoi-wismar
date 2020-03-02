<!--
 **********************************************
 * Project: Theme Name Republic Serbia
 **********************************************
 * Developed by: Mediavuk
   + web: mediavuk.com
   + e-mail: <info@mediavuk.com>
   + html, css, jquery, vanilla & php
   + responsive page
 *********************************************
-->

<!DOCTYPE html>
<html lang="sr">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="UTF-8">
	<title><?php wp_title(' &mdash; ',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSS Styles -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

	<!-- Apple Devices Settings
	================================================== -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-touch-fullscreen" content="yes" />

	<!-- Remove all auto-formatting for telephone number -->
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no"/>


	<!-- Cookie Law -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="body-wrap">

<?php 
	$logo 		= get_field('logo', 'option');
	$graphic 	= get_field('bg_graphic_1', 'option');
	$waves 		= get_field('waves', 'option');

	$headerBg 	= get_field('header_image', 'option');
	$headerTitle= get_field('header_title', 'option')
?>

	<header class="header">
		
		<figure class="graphics graphics--header">
			<img src="<?php echo $graphic['url']; ?>" alt="<?php echo $graphic['alt']; ?>">
		</figure>

		<figure class="waves waves--header">
			<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['url']; ?>">
		</figure>



		<div class="header__content grid-1340">
			
			<figure class="logo logo--header">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
				</a>
			</figure>


			<figure class="header__image pad-l-10">
				<img src="<?php echo $headerBg['url']; ?>">
				<figcaption class="header__image-caption"><?php echo $headerTitle; ?></figcaption>
			</figure>

		</div><!-- End: header__content -->


	</header>
