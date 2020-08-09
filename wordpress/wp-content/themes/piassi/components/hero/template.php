<?php
/**
 * Hero template file
 *
 * @see Theme\Components\Hero
 *
 * @package piassi
 */

use Theme\Components;
?>
<section
    class="_hero d-flex align-items-center py-8 py-lg-10 lozad <?php echo $class; ?>"
    data-background-image="<?php echo $background_image; ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h1 class="title text-uppercasa pt-4 mb-6 top-line-decoration"><?php echo $title; ?></h1>
                <h2 class="description text-muted mb-8 pb-4 bottom-line-decoration">
                    <?php echo wp_strip_all_tags( $description ); ?>
                </h2>
                <?php echo new Components\LinkButton( $button ); ?>
            </div>
        </div>
    </div>
</section>