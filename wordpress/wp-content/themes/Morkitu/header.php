<?php
/**
 * Header file for the Composition WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Composition
 * @since Composition 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11%22%3E">

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header id="site-header" class="header-footer-group" role="banner">
<?php
get_template_part( 'template-parts/modal-menu' );

wp_nav_menu(
                              array(
                                    'menu' => 'Menu Principal',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                              )
                        );
?>
</header><!-- #site-header -->

      <?php
      // Output the menu modal.