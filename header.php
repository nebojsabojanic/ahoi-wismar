<!--
 **********************************************
 * Project: Theme Name Republic Serbia
 **********************************************
 * Developed by: Mediavuk  + web: mediavuk.com
 + e-mail: <info@mediavuk.com>  + html, css, jquery, vanilla & php  + responsive page
 ********************************************* -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="UTF-8">
	<title><?php wp_title(' &mdash; ',true,'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php 
		$description = get_bloginfo('description');
		if ($description){echo '<meta name="description" content="' . $description . '">';}else{echo '<meta name="description" content="Sie suchen eine neue Wohnung? Eine Wohnung, die modern und doch bezahlbar ist? Die zentral und doch im Grünen liegt? Dann sind Sie bei Ahoi Wismar im Stadtteil Friedenshof genau richtig!">';}
	?>

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

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/oqg7vbm.css">

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
	$seagull 	= get_field('graphics_seagull', 'option');

	// echo '<pre>' . var_dump($waves) . '</pre>';
	// echo '<pre>' . var_dump($seagull) . '</pre>';

	$headerBg 	= get_field('header_image', 'option');
	$headerTitle= get_field('header_title', 'option');
?>

	<header class="header <?php if(is_front_page() || is_page('startseite')){echo 'header--home';}else{echo 'header--alt';} ?>">

		<figure class="graphics graphics--header">
			<img src="<?php echo $graphic['url']; ?>" alt="<?php echo $graphic['alt']; ?>">
		</figure>

		<div class="header__content grid-1340">
		
			<figure class="waves waves--header">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>
			
			<figure class="logo logo--header">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
				</a>
			</figure>



			<?php if(is_front_page() || is_page('startseite')){ ?>

				<figure class="header__image pad-l-10">
					<img src="<?php echo $headerBg['url']; ?>" alt="<?php echo $headerBg['alt']; ?>">
					<figcaption class="header__image-caption"><?php echo $headerTitle; ?></figcaption>
				</figure>

			<?php } else { ?>

				<!-- Breadcrumb -->
				<?php the_breadcrumb(); ?>

				<div class="header__title">
					<h1 class="header__heading"><?php the_title(); ?></h1>
				</div>

			<?php } ?>

		</div><!-- End: header__content -->


		<?php if(is_front_page() || is_page('startseite')){ ?>

			<div class="circle circle--header circle--orange"></div>

		<?php } ?>


	</header>
	
