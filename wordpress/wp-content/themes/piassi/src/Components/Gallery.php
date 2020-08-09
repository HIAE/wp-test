<?php
/**
 * Gallery component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;
use Theme\Models\Image;
use WP_Query;

/**
 * Display ACF Gallery with thumbnails and lightbox
 *
 * @param string class - CSS class for the root element
 * @param array gallery - ACF Gallery field
 */
class Gallery extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/gallery/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class' => '',
	);

	/**
	 * Query for portfolio items and return their thumbnails
	 *
	 * @return array
	 */
	public function get_props(): array {
		$gallery = array();

		$portfolio_query = new WP_Query(
            array(
				'post_type'      => 'portfolio-item',
				'posts_per_page' => -1,
            )
        );

		while ( $portfolio_query->have_posts() ) :
			$portfolio_query->the_post();

			$gallery[] = Image::from_post_thumbnail();
		endwhile;

		return array(
			'gallery' => $gallery,
		);
	}
}