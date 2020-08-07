<?php
/**
 * Gallery template file
 *
 * @see Theme\Components\Gallery
 *
 * @package piassi
 */

if ( ! $gallery ) {
	return '';
}
?>

<section class="_gallery pb-10 <?php echo $class; ?>">
    <?php foreach ( $gallery as $image ) : ?>
    <a href="">
        <?php print_r( $image ); ?>
    </a>
    <?php endforeach; ?>
</section>