<!--
 **********************************************
 * Project: Theme Name Republic Serbia
 **********************************************
 * Developed by: Strahinja Djukic
   + web: mediavuk.com
   + e-mail: <strahinja.djukic@gmail.com>
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

	<!-- Apple Devices Settings
	================================================== -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-touch-fullscreen" content="yes" />

	<!-- Remove all auto-formatting for telephone number -->
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no"/> 

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


