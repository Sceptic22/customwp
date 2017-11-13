<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ConicIT
 */

?>

	</div><!-- #content -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12 menu">
              <?php
              $args = array(
                'theme_location' => 'menu-2',
                'menu_class'      => 'footer-menu',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              );
              wp_nav_menu($args);?>
<!--                <ul class="footer-menu">-->
<!--                    <li class="menu-list"><a href="#">Home</a></li>-->
<!--                    <li class="menu-list"><a href="#">Solutions</a>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Success Stories</a></li>-->
<!--                            <li><a href="#">Conicit For Mainframe</a></li>-->
<!--                            <li><a href="#">Conicit For Splunk</a></li>-->
<!--                            <li><a href="#">Conicit-Strobe</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="menu-list"><a href="#">Design</a>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Conicit User Interface</a></li>-->
<!--                            <li><a href="#">Architecture</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="menu-list"><a href="#">Contact us</a></li>-->
<!--                    <li class="menu-list"><a href="#">news</a></li>-->
<!--                    <li class="menu-list"><a href="#">about</a>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Rerources</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 social">
              <?php if (get_theme_mod('facebook_social') != ''):?>
                  <a class="fb" href="<?php echo get_theme_mod('facebook_social'); ?>"></a>
              <?php endif; ?>
              <?php if (get_theme_mod('google_social') != ''):?>
                  <a class="google" href="<?php echo get_theme_mod('google_social'); ?>"></a>
              <?php endif; ?>
              <?php if (get_theme_mod('skype_social') != ''):?>
                  <a class="skype" href="<?php echo get_theme_mod('skype_social'); ?>"></a>
              <?php endif; ?>
<!--                <a class="fb" href="#"></a>-->
<!--                <a class="google" href="#"></a>-->
<!--                <a class="skype" href="#"></a>-->

            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
