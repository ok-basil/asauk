<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asauk_new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'asauk' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="nav-menu" id="nav-menu">
			<div class="container" id="container">
				<div class="site-wrapper">
					<div class="top-nav" id="top-nav">
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Member's Login</a></li>
							<li><a href="#">Search</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="new-container" id="new-container" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/main-background.png')">
				<div class="site-wrapper">
					<div class="menu-container">
						<div class="site-branding">
							<?php
								the_custom_logo();
							?>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation navbar">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'asauk' ); ?></button>
							<?php
								wp_nav_menu(
									array(
										'theme_location' 	=> 'primary-menu',
										'container'			=> 'div',
										'container_class'	=> 'navbar-list',
										'container_id'		=> 'navbar-list',
										'menu_id'        	=> 'primary-menu',
										'items_wrap' 		=> '<ul class="menu-list">%3$s</ul'
									)
								);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>		
			</div>
		</div>
	</header><!-- #masthead -->
