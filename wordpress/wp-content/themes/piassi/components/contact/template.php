<?php
/**
 * Contact template file
 *
 * @see Theme\Components\Contact
 *
 * @package piassi
 */

use Theme\Components;
?>
<section class="_contact mt-10 py-8 bg-gray <?php echo $class; ?>" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <?php
                echo new Components\SectionHeader(
                    array(
						'title_class'       => 'centered-line-decoration',
						'description_class' => 'text-muted',
						'title'             => $title,
						'subtitle'          => $subtitle,
                    )
                )
				?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <?php echo new Components\ContactForm(); ?>
            </div>

            <div class="map col-12 col-lg-8">
                <?php echo $map; ?>
            </div>
        </div>
    </div>
</section>
