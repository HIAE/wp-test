<?php
/**
 * FrontPage template file
 *
 * @see Theme\Components\FrontPage
 *
 * @package piassi
 */

use Theme\Components;
?>

<div id="front-page" class="page">
    <?php
		echo new Components\Hero( $hero );

		echo new Components\About( $about );

		echo new Components\Gallery( array( 'gallery' => $gallery ) );
	?>
</div>