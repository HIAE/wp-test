<?php
/**
 * Gallery template file
 *
 * @see Theme\Components\Gallery
 *
 * @package piassi
 */

use Theme\Helpers\Utils;

if ( ! $gallery ) {
	return '';
}
?>

<div class="container" id="portfolio">
    <section class="_gallery mt-10 <?php echo $class; ?>">
        <?php foreach ( $gallery as $image ) : ?>
        <a
            class="animate-in-view"
            href="<?php echo $image->src; ?>"
            data-lightbox="gallery"
            data-animations="animate__animated animate__fadeIn">
            <img
                class="lozad"
                src="<?php echo Utils::image_placeholder(); ?>"
                data-src="<?php echo $image->size( 'SIZE_680_380' )->src; ?>"
                width="<?php echo $image->size( 'SIZE_680_380' )->width; ?>"
                width="<?php echo $image->size( 'SIZE_680_380' )->height; ?>"
                alt="<?php echo $image->size( 'SIZE_680_380' )->alt; ?>">
        </a>
        <?php endforeach; ?>
    </section>
</div>