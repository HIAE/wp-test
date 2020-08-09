<?php
/**
 * Services template file
 *
 * @see Theme\Components\Services
 *
 * @package piassi
 */

use Theme\Components;
use Theme\Helpers\Utils;

?>
<section class="_services mt-10 <?php echo $class; ?>" id="servicos">
    <div class="container">
        <div class="row">
            <?php if ( $testimonials ) : ?>
            <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                <?php
                echo new Components\Carousel(
                    array(
						'items'           => $testimonials,
						'id'              => 'testimonials-carousel',
						'show_navigators' => false,
						'show_indicators' => false,
                    )
                );
				?>
            </div>
            <?php endif; ?>

            <div class="col-12 col-lg-4 pr-lg-6 mb-8 mb-lg-0">
                <?php
                echo new Components\SectionHeader(
                    array(
						'class'       => 'mb-6',
						'title'       => $title,
						'subtitle'    => $subtitle,
						'description' => $description,
                    )
                );

				echo new Components\LinkButton( $button );
				?>
            </div>

            <?php if ( $image ) : ?>
            <div class="col-12 col-lg-4 d-flex align-items-end">
                <img
                    class="lozad"
                    src="<?php echo Utils::image_placeholder(); ?>"
                    data-src="<?php echo $image->src; ?>"
                    width="<?php echo $image->width; ?>"
                    width="<?php echo $image->height; ?>"
                    alt="Dancer" />
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
