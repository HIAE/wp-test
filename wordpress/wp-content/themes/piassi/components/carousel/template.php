<?php
/**
 * Template for the Carousel component
 *
 * @see Theme\Components\Carousel
 *
 * @package piassi
 */

?>

<div
    class="_carousel <?php echo isset( $class ) ? $class : ''; ?>"
    id="<?php echo $id; ?>"
    data-slides-per-view="<?php echo $slides_per_view; ?>"
    data-slides-per-group="<?php echo $slides_per_group; ?>"
    data-loop="<?php echo $loop; ?>">
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ( $items as $item ) : ?>
            <div class="swiper-slide">
                <?php echo $item; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ( $show_indicators ) : ?>
    <!-- If we need pagination -->
    <div class="swiper-pagination w-100 mt-6 d-flex justify-content-center"></div>
    <?php endif; ?>

    <?php if ( $show_navigators ) : ?>
    <!-- If we need navigation buttons -->
    <div role="button"
        class="swiper-button d-none d-lg-flex align-items-center justify-content-center swiper-button-prev">
        <i class="icon icon-arrow"></i>
        <span class="sr-only">Previous</span>
    </div>

    <div role="button"
        class="swiper-button d-none d-lg-flex align-items-center justify-content-center swiper-button-next">
        <i class="icon icon-arrow"></i>
        <span class="sr-only">Next</span>
    </div>
    <?php endif; ?>
</div>