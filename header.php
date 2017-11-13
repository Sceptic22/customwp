<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ConicIT
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'conicit' ); ?><!--</a>-->


	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#home"></a>
                          <?php the_custom_logo(); ?>
                        </div>


                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <?php
                            $args = array(
                              'theme_location' => 'menu-1',
                              'menu_class'      => 'nav navbar-nav navbar-right',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                              'walker'          => new WP_Bootstrap_Navwalker(),
                            );
                            wp_nav_menu($args);?>
<!--                            <ul class="nav navbar-nav navbar-right">-->
<!--                                <li><a href="#">Home</a></li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions <span class="caret"></span></a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Action</a></li>-->
<!--                                        <li><a href="#">Another action</a></li>-->
<!--                                        <li><a href="#">Something else here</a></li>-->
<!--                                        <li><a href="#">Separated link</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Design <span class="caret"></span></a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Action</a></li>-->
<!--                                        <li><a href="#">Another action</a></li>-->
<!--                                        <li><a href="#">Something else here</a></li>-->
<!--                                        <li><a href="#">Separated link</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="#">Contact Us</a></li>-->
<!--                                <li><a href="#">News</a></li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="#">Action</a></li>-->
<!--                                        <li><a href="#">Another action</a></li>-->
<!--                                        <li><a href="#">Something else here</a></li>-->
<!--                                        <li><a href="#">Separated link</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                </nav>
            </div>
        </div>

	</header>

	<div id="content" class="site-content">
