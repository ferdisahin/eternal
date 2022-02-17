<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eternal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-full">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class('bg-white h-full antialised'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="h-full flex flex-col">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eternal' ); ?></a>

	<header id="masthead" class="site-header py-20">
		<div class="container mx-auto">
			<div class="site-branding text-center">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title text-4xl font-bold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title text-4xl font-bold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$eternal_description = get_bloginfo( 'description', 'display' );
				if ( $eternal_description || is_customize_preview() ) :
					?>
					<p class="site-description text-gray-600 mt-3"><?php echo $eternal_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<input type="search" class="search-field"
						placeholder="<?php echo __( 'Search…', 'eternal' ) ?>"
						value="<?php echo get_search_query() ?>" name="s" />
				<button>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
					</svg>					
				</button>
			</form>			
		</div>
	</header><!-- #masthead -->
