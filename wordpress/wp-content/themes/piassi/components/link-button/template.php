<?php
/**
 * Link button template file
 *
 * @see Theme\Components\LinkButton
 *
 * @package piassi
 */

?>

<a
    class="_link-button btn btn-outline-dark text-uppercase <?php echo $class; ?>"
    target="<?php echo $target; ?>"
    href="<?php echo $url; ?>"
    title="<?php echo $title; ?>"
    <?php echo $target === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
    <?php echo $title; ?>
</a>