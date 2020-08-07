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
    class="_hero d-flex align-items-center py-10 lozad <?php echo $class; ?>"
    data-background-image="<?php echo $background_image; ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h1 class="title text-uppercasa pt-4 mb-6 top-line-decoration"><?php echo $title; ?></h1>
                <div class="description text-muted mb-8 pb-2 bottom-line-decoration"><?php echo $description; ?></div>
                <?php echo new Components\LinkButton( $button ); ?>
            </div>
        </div>
    </div>
</section>