<?php
/**
 * Header template file
 *
 * @see App\Components\Header
 *
 * @package _solidpress
 */

?>

<header
    id="masthead"
    class="_header py-3 sticky-top animate__animated animate__fadeInDown bg-<?php echo $background; ?>">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-lg-3 align-items-center justify-content-between d-flex">
                <div class="site-branding">
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

            <div class="col">
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
            </div>
        </div>
    </div>
</header>