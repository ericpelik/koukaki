<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                </ul>
                <button class="menu-hamburger" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

		</nav><!-- #site-navigation -->
        <section class="menuList">
            <img id='flower' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'?>' alt='image flower'>
            <img id='flower_1' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'?>' alt='image orchid'>
            <img id='flower_2' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'?>' alt='image random flower'>
            <img id='flower_3' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'?>' alt='image Sunflower'>
            <img id='flower_4' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'?>' alt='image hibiscus'>
            <img id='flower_5' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/Image-logo-en-paralax.png'?>' alt='image logo'>
            <img id='flower_6' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/cat.png'?>' alt='image cat'>
            <img id='flower_7' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/cat-1.png'?>' alt='image cat 1'>
            <img id='flower_8' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/cat-2.png'?>' alt='image cat 2'>
            <img id='flower_9' src='<?php echo get_stylesheet_directory_uri() . '/assets/images/Studio-Koukaki.png'?>' alt='image Studio Koukaki'>
            <ul>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
        </section>
	</header><!-- #masthead -->
