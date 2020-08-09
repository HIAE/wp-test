<?php
/**
 * Header template file
 *
 * @see Theme\Components\Header
 *
 * @package piassi
 */

 use Theme\Components;
?>
<div class="bg-white m-0 m-lg-4 animate__animated animate__fadeIn">
    <header
        id="masthead"
        class="_header py-4 py-lg-0 sticky-top bg-white shadow-sm animate__animated animate__fadeInDown">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="site-branding lead position-relative">
                        <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title">
                            <?php endif; ?>
                            <?php has_custom_logo() ? the_custom_logo() : bloginfo( 'name' ); ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                        </h1>
                        <?php endif; ?>
                    </div>
                </div>

                <nav id="site-navigation" class="main-navigation bg-white pt-8 pt-lg-0">
                    <?php
					wp_nav_menu(
						array(
							'container'      => false,
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
							'menu_class'     => 'main-menu d-lg-flex justify-content-end list-unstyled m-2 m-lg-0 p-0',
						)
					);
					?>
                </nav>

                <?php echo new Components\SocialNetworks( array( 'class' => 'd-none d-lg-flex' ) ); ?>

                <button class="toggle-menu text-sm d-block d-lg-none p-0 m-0">
                    <i class="icon icon-menu"></i>
                    <i class="icon icon-close"></i>
                </button>
            </div>
        </div>
    </header>