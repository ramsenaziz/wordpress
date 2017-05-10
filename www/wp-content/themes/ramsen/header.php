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
				<a href="?nav=start" class="logo">
					<span>R</span>
				</a>
				
				<?php
					wp_nav_menu( [
						'menu' => 'Main navigation',
						'menu_class' => 'site-nav',
					] );
				?> 
				<button id="toggle-nav"><span>Meny</span></button>
				<nav class="site-nav">
					<ul>
						<li><a href="?nav=start">Hem</a></li>
						<li><a href="?nav=portfolio">Portfolio</a></li>
						<li><a href="?nav=cv">CV</a></li>
						<li><a href="?nav=kontakt">Kontakt</a></li>
					</ul>
				</nav> <!-- end site-nav -->
				<div class='login-form'>
				<?php echo "
						<form method='post' action='admin/index.php'>
							<input class='input-password' type='password' name='password' placeholder='Lösenord'>
							<button class='login-button' type='submit'>Logga in</button>
						</form>"
					;?>
			</div>
			</div> <!-- end container -->
		</header> <!-- end site-header -->

		<section class="page-header">
			<h1><?php the_title() ?></h1>
		</section> <!-- end page-header -->