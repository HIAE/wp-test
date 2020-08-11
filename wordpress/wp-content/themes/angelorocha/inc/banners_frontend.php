<?php
/**
 * @author              Angelo Rocha
 * @author              Angelo Rocha <contato@angelorocha.com.br>
 * @link                https://angelorocha.com.br
 * @copyleft            2020
 * @license             GNU GPL 3 (https://www.gnu.org/licenses/gpl-3.0.html)
 * @package             WordPress
 * @subpackage          angelorocha
 * @since 1.0.0
 */

function wpss_banner_frontend(){
    $banners = get_site_banners('_op_banner_group');
    $count = 0;
    ?>
    <div class="site-carousel">
        <div id="site-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach($banners as $key => $banner): ?>
                    <li data-target="#site-carousel" data-slide-to="<?= $count ?>" class="<?= ($count == 0 ? 'active' : ''); ?>"></li>
                    <?php $count++; ?>
                <?php endforeach; $count = 0;?>
            </ol>

            <div class="carousel-inner">

                <?php
                foreach($banners as $key => $banner):
                    $image = wpss_image_src($banner['_banner_image_id'], 'container_cover', null);
                    $title = $banner['_banner_title'];
                    $text = $banner['_banner_text'];
                    $button = $banner['_banner_button'];
                    $button_link = $banner['_banner_link'];
                    ?>
                    <div class="carousel-item <?= ($count == 0 ? 'active' : ''); ?>">
                        <img src="<?= $image; ?>" class="d-block w-100" alt="<?= $title; ?>">
                        <div class="container">
                            <div class="carousel-caption">
                                <h3><?= $title; ?></h3>
                                <p class="text-justify"><?= $text; ?></p>
                                <a href="<?= $button_link ?>" class="btn btn-outline-dark"><?= $button; ?></a>
                            </div><!-- .carousel-caption -->
                        </div><!-- .container -->
                    </div><!-- .carousel-item -->
                    <?php
                    $count++;
                endforeach; $count = 0;?>

            </div><!-- .carousel -->
        </div><!-- .carousel -->
    </div><!-- .site-carousel -->
    <?php
}