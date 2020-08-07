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
<div class="bg-white m-4 animate__animated animate__fadeIn">
    <header
        id="masthead"
        class="_header sticky-top bg-white shadow-sm animate__animated animate__fadeInDown">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div>
                    <div class="site-branding lead">
                        <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title">
                            <?php endif; ?>
                            <?php has_custom_logo() ? the_custom_logo() : bloginfo( 'name' ); ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                        </h1>
                        <?php endif; ?>
                    </div>

                    <button
                        class="toggle-menu text-primary d-block d-lg-none p-0 m-0">
                        <i class="icon icon-menu"></i>
                    </button>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
					wp_nav_menu(
						array(
							'container'      => false,
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
							'menu_class'     => 'main-menu d-none d-lg-flex justify-content-end list-unstyled m-0 p-0',
						)
					);

					wp_nav_menu(
						array(
							'container'      => false,
							'theme_location' => 'mobile-menu',
							'menu_id'        => 'mobile-menu',
							'menu_class'     => 'mobile-menu d-lg-none list-unstyled text-right p-0 m-0',
						)
					);
					?>
                </nav>

                <?php echo new Components\SocialNetworks(); ?>
            </div>
        </div>
    </header>