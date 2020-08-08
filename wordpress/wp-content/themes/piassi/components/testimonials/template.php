<?php
/**
 * Testimonials template file
 *
 * @see Theme\Components\Testimonials
 *
 * @package piassi
 */

use Theme\Components;
use Theme\Helpers\Utils;

?>
<section class="_testimonials mt-10 <?php echo $class; ?>" id="opinioes">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                echo new Components\SectionHeader(
                    array(
						'title_class' => 'centered-line-decoration',
						'title'       => $title,
						'subtitle'    => $subtitle,
                    )
                )
				?>
            </div>

            <?php if ( $testimonials ) : ?>
            <div class="col-12">
                <div class="row">
                    <?php foreach ( $testimonials as $testimonial ) : ?>
                    <div class="testimonial col-12 col-lg-4 mt-6 text-center">
                        <?php if ( $testimonial['image'] ) : ?>
                        <img
                            class="lozad rounded-circle"
                            src="<?php echo Utils::image_placeholder(); ?>"
                            data-src="<?php echo $testimonial['image']->size( 'SIZE_105_105' )->src; ?>"
                            width="<?php echo $testimonial['image']->size( 'SIZE_105_105' )->width; ?>"
                            height="<?php echo $testimonial['image']->size( 'SIZE_105_105' )->height; ?>"
                            alt="<?php echo $testimonial['client']; ?>">
                        <?php endif; ?>

                        <div class="description text-muted mt-4">
                            <?php echo $testimonial['description']; ?>
                        </div>

                        <div class="mt-4 pt-4 top-line-decoration centered-line-decoration">
                            <?php echo $testimonial['client']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
