<?php
/**
 * About template file
 *
 * @see Theme\Components\About
 *
 * @package piassi
 */

?>
<div class="_section-header <?php echo $class; ?>">
    <h3 class="subtitle h3 text-light text-uppercase mb-2"><?php echo $subtitle; ?></h3>
    <h2 class="title text-uppercasa bottom-line-decoration pb-4 mb-4 <?php echo $title_class; ?>">
        <?php echo $title; ?>
    </h2>
    <div class="description <?php echo $description_class; ?>"><?php echo $description; ?></div>
</div>