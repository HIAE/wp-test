<?php
/**
 * About template file
 *
 * @see Theme\Components\About
 *
 * @package piassi
 */

use Theme\Components;
?>
<section class="_about mt-10 <?php echo $class; ?>" id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 mb-8 mb-lg-0">
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

            <?php if ( $cards ) : ?>
            <div class="col-12 col-lg-8 pl-lg-7 mb-n7">
                <div class="row">
                    <?php foreach ( $cards as $card ) : ?>
                    <div class="card col-12 col-lg-6 mb-7">
                        <i class="text-primary icon icon-<?php echo $card['icon']; ?>"></i>
                        <h4 class="title mt-4 mb-2"><?php echo $card['title']; ?></h4>
                        <div class="description pr-2"><?php echo $card['description']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>