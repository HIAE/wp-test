			<?php
			$args = array (
				'post_type'              => 'portfolio',
				'post_status'            => 'publish',
				'posts_per_page'         => '6',
				'orderby'                => 'rand',
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { ?>
				

				<section id="portfolio" class="portfolio">

					<div class="container">

						<div class="content">

							<?php 
								$cont = 1;
								while ( $query->have_posts() ) {
								$query->the_post();	
								$img_url = get_the_post_thumbnail_url(get_the_ID(),'portfolio');					
								?>

								<div class="job job<?= $cont; ?>" data-count="<?= $cont; ?>">
									<figure>
										<a href="<?php echo $img_url; ?>" title="<?php the_title(); ?>">
											<img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</figure>
								</div>

								<?php $cont++;
							}
							?>

						</div>

					</div>


					<div class="lightbox">
						<span class="close fas fa-times"></span>
						<div class="content">

							<span class="arrow arrow-left fas fa-angle-left"></span>

							<div class="img">
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/portfolio.jpg" alt="Portfolio 6">
								</figure>
							</div>

							<span class="arrow arrow-right fas fa-angle-right"></span>

						</div>
					</div>


				</section>


				<?php	
			} else {
			}
			wp_reset_postdata();
			?>	