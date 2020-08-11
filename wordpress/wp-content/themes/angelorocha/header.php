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
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="navbar-brand" href="<?= _WPSS_SITE_URL; ?>">
                    <?= _WPSS_SITENAME; ?>
                </a>
            </div><!-- .col-md-4 -->

            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-nav" aria-controls="home-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="home-nav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= _WPSS_SITE_URL; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-section">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Portfólio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services-section">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feedback">Opniões</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#clients">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contato</a>
                            </li>
                        </ul>
                        <?php wpss_social_links(); ?>
                    </div><!-- .navbar-collapse -->
                </nav><!-- .navbar -->
            </div><!-- .col-md-9 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .top-menu -->