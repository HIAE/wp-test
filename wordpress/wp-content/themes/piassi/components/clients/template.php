<?php
/**
 * Clients template file
 *
 * @see Theme\Components\Clients
 *
 * @package piassi
 */

use Theme\Components;
use Theme\Helpers\Utils;

?>
<section class="_clients mt-10 mb-n4 <?php echo $class; ?>" id="clientes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                <?php
                echo new Components\SectionHeader(
                    array(
						'description_class' => 'text-muted',
						'title'             => $title,
						'subtitle'          => $subtitle,
						'description'       => $description,
                    )
                )
				?>
            </div>

            <?php if ( $clients ) : ?>
            <div class="col-12 col-lg-8">
                <div class="logos">
                    <?php foreach ( $clients as $client ) : ?>
                    <div>
                        <div class="p-1 flex-center h-100">
                            <img
                                class="lozad rounded-circle animate-in-view"
                                src="<?php echo Utils::image_placeholder(); ?>"
                                data-src="<?php echo $client['logo']->src; ?>"
                                width="<?php echo $client['logo']->width; ?>"
                                height="<?php echo $client['logo']->height; ?>"
                                alt="<?php echo $client['name']; ?>"
                                data-animations="animate__animated animate__fadeIn">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>