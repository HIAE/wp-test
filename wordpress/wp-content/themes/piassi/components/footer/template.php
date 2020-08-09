<?php
/**
 * Footer template
 *
 * @see Theme\Components\Footer
 *
 * @package piassi
 */

use Theme\Components;
?>

<footer class="_footer">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between py-3">
            <p class="m-0 text-muted text-sm">Feito com amor por <?php bloginfo( 'title' ); ?></p>

            <?php echo new Components\SocialNetworks( array( 'class' => 'd-flex' ) ); ?>
        </div>
    </div>
</footer>
</div>
