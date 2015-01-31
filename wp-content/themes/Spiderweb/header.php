<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Style Sheets -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

		<!-- Humanstxt -->
		<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>humans.txt" />


	</head>
	<body <?php body_class(); ?>>
