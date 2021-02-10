<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrap">
		<div id="page" class="site">
			<header id="masthead" class="site-header">
				<div class="header-wrap">
					<div class="nav_logo">
						<div class="logoSably tabButton button-home">
							
						</div>
					</div>
					<div class="nav_buttons">
						<div><a class="tabButton button-about" href="#">A propos</a></div>
						<div><a class="tabButton button-contact" href="#">Contact</a></div>
					</div>
					<div class="nav_login">
						<a class="tabButton button-login" href="#">Connexion/Inscription</a>
					</div>
				</div>
			</header><!-- #masthead -->