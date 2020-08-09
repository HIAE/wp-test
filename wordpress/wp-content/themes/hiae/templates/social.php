<?php
if( class_exists( 'SocialMedia' ) ) {

	$facebook = get_option('social_option_name')['facebook'];
	$google = get_option('social_option_name')['google'];
	$twitter = get_option('social_option_name')['twitter'];
	$instagram = get_option('social_option_name')['instagram'];
	$behance = get_option('social_option_name')['behance'];
	?>

	<div class="social">
		<?php if($facebook): ?><a href="<?= $facebook; ?>" target="blank"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
		<?php if($google): ?><a href="<?= $google; ?>" target="blank"><i class="fab fa-google-plus-g"></i></a><?php endif; ?>
		<?php if($twitter): ?><a href="<?= $twitter; ?>" target="blank"><i class="fab fa-twitter"></i></a><?php endif; ?>
		<?php if($instagram): ?><a href="<?= $instagram; ?>" target="blank"><i class="fab fa-instagram"></i></a><?php endif; ?>
		<?php if($behance): ?><a href="<?= $behance; ?>" target="blank"><i class="fab fa-behance"></i></a><?php endif; ?>
	</div>

	<?php } ?>