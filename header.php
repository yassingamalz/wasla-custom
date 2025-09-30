<?php
/**
 * The header for Wasla Theme (Child of Astra)
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * Includes the beautiful Wasla custom header with logo transitions, RTL navigation, and mobile menu
 *
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	<link rel="profile" href="https://gmpg.org/xfn/11"> 
	<?php
}
?>

<!-- Google Fonts & Bootstrap Icons for Wasla -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Tajawal:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<!-- Accessibility Skip Link -->
<a class="skip-link screen-reader-text" href="#content" title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
	<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div <?php
	echo wp_kses_post(
		astra_attr(
			'site',
			array(
				'id'    => 'page',
				'class' => 'hfeed site',
			)
		)
	);
?>>

	<?php astra_header_before(); ?>

	<!-- Wasla Custom Header -->
	<header class="wasla-header" role="banner">
		<div class="wasla-container">
			<div class="header-content">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wasla-logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<?php
					// Use custom logos from Customizer if set, otherwise use uploaded logos
					$logo_white = get_theme_mod( 'wasla_logo_white', 'https://wasla-eg.com/wp-content/uploads/2025/08/شعار-وصلة-white-1.png' );
					$logo_dark = get_theme_mod( 'wasla_logo_dark', 'https://wasla-eg.com/wp-content/uploads/2025/08/شعار-وصلة-white.png' );
					
					// Check if logos exist in theme directory
					$theme_logo_white = get_stylesheet_directory() . '/assets/images/logo-white.png';
					$theme_logo_dark = get_stylesheet_directory() . '/assets/images/logo-dark.png';
					
					if ( file_exists( $theme_logo_white ) ) {
						$logo_white = get_stylesheet_directory_uri() . '/assets/images/logo-white.png';
					}
					if ( file_exists( $theme_logo_dark ) ) {
						$logo_dark = get_stylesheet_directory_uri() . '/assets/images/logo-dark.png';
					}
					?>
					<img src="<?php echo esc_url( $logo_white ); ?>" 
					     alt="<?php echo esc_attr( get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) ); ?>" 
					     class="logo-white"
					     onerror="this.style.display='none'">
					<img src="<?php echo esc_url( $logo_dark ); ?>" 
					     alt="<?php echo esc_attr( get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) ); ?>" 
					     class="logo-dark"
					     onerror="this.style.display='none'">
				</a>
				
				<nav class="wasla-nav" role="navigation" aria-label="<?php esc_attr_e('القائمة الرئيسية', 'wasla'); ?>">
					<?php
					if (has_nav_menu('wasla-main-menu')) {
						wp_nav_menu(array(
							'theme_location' => 'wasla-main-menu',
							'menu_class' => 'nav-menu',
							'container' => false,
							'fallback_cb' => 'wasla_fallback_menu',
							'walker' => new Wasla_Nav_Walker(),
							'depth' => 3,
						));
					} else {
						wasla_fallback_menu();
					}
					?>
					<button class="mobile-menu-toggle" 
					        type="button"
					        aria-label="<?php esc_attr_e('فتح القائمة', 'wasla'); ?>" 
					        aria-expanded="false"
					        aria-controls="mobile-menu">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</nav>
			</div>
		</div>
	</header>

	<?php astra_header_after(); ?>
	
	<?php astra_content_before(); ?>
	
	<!-- Content Wrapper -->
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>