<!DOCTYPE html>
<html lang="sv-SE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	<title><?php bloginfo('title'); ?></title>
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/favicon.png' ?>">

	<?php wp_head() ?>
</head>
<body>
	<div class="site-wrapper container">
		<header class="site-header">
			<div class="container">
				<a href="<?php echo get_home_url() ?>" class="logo">
					<span>R</span>
				</a>
				
				<nav class="site-nav">
					<?php
						wp_nav_menu( [
							'menu' => 'Main navigation',
							'menu_class' => 'site-nav',
						] );
					?> 
					<button id="toggle-nav"><span>Meny</span></button>
				</nav> <!-- end site-nav -->
			</div> <!-- end container -->
		</header> <!-- end site-header -->

		<section class="page-header">
			<?php if ($title = get_field('page_title')): ?>
				<h1><?php echo $title ?></h1>
			<?php else: ?>
				<h1><?php the_title() ?></h1>
			<?php endif ?>
		</section> <!-- end page-header -->