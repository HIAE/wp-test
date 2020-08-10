<?php

get_header(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-content">
			<?php the_content(); ?>
		</header>

	</article>

<?php get_footer(); ?>