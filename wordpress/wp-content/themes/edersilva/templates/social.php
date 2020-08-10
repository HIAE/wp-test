<?php
if( class_exists( 'SocialMedia' ) ) {

	?>

	<div class="social">
		
		<?php

		$social = get_option('social_option_name');

		foreach ($social as $key => $value) {
			if($value){
				echo '<a title="'.ucfirst($key).'" href="'.$value.'" target="blank"><i class="fab fa-'.$key.'"></i></a>';
			}
		}

		?>

	</div>

	<?php } ?>