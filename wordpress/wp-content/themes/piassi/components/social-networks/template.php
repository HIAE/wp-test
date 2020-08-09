<?php
/**
 * SocialNetworks template file
 *
 * @see Theme\Components\SocialNetworks
 *
 * @package piassi
 */

?>
<?php if ( $social_networks ) : ?>
<ul class="_social-networks m-0 list-unstyled <?php echo $class; ?>">
    <?php foreach ( $social_networks as $social_network ) : ?>
    <li class="ml-3">
        <a
            class="flex-center"
            title="<?php echo $social_network['name']; ?>"
            href="<?php echo $social_network['address']; ?>"
            target="_blank"
            rel="noopener noreferrer">
            <i class="icon icon-<?php echo $social_network['icon']; ?>"></i>
        </a>
    </li>
    <?php endforeach ?>
</ul>
<?php endif; ?>