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

get_header(); ?>

<?php wpss_banner_frontend(); ?>

    <div id="about-section" class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 about-intro">
                <h5 class="title-min"><?= _WPSS_SITENAME; ?></h5>
                <h3><?= get_about('op_about_titulo'); ?></h3>
                <p class="text-justify"><?= get_about('op_about_desc'); ?></p>
            </div><!-- .about-intro -->
            <div class="col-md-8 about-skills">
                <?php
                $skills = get_about('_op_about_group');
                ?>
                <div class="row">
                    <?php foreach($skills as $skill): ?>
                        <div class="col-md-6 skill-box">
                            <i class="fa <?= $skill['_skill_icon'] ?>"></i>
                            <h4><?= $skill['_skill_title'] ?></h4>
                            <p class="text-justify"><?= $skill['_skill_desc'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div><!-- .row -->
            </div><!-- .about-skills -->
        </div><!-- .row -->
    </div><!-- #about-section .container -->

    <div id="portfolio" class="container mt-5 mb-5">
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'portfolio',
                'posts_per_page' => '6'
            );
            $jobs = new WP_Query($args);
            if($jobs->have_posts()):
                while($jobs->have_posts()): $jobs->the_post();
                    $job_title = get_the_title();
                    $job_image = wpss_image_src(get_post_meta(get_the_ID(), 'wpss_post_image_id', true), 'post-thumbnail', null);
                    $job_image_full = wpss_image_src(get_post_meta(get_the_ID(), 'wpss_post_image_id', true), 'full', null);
                    $job_link = get_post_meta(get_the_ID(), 'wpss_post_image_link', true);
                    $modal_id = 'modal-' . get_the_ID();
                    echo "<div class='job-box col-md-4 p-0'>";
                    echo "<a href='#' data-toggle='modal' data-target='#$modal_id' title='$job_title'>$job_title</a>";
                    echo "<img src='$job_image' alt='$job_title'>";
                    echo "</div>";
                    ?>
                    <div class="modal fade" id="<?= $modal_id; ?>" tabindex="-1" aria-labelledby="<?= $modal_id; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="<?= $modal_id; ?>"><?= $job_title; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?= $job_image_full; ?>" alt="<?= $job_title; ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar
                                    </button>
                                    <button type="button" class="btn btn-outline-success">Ver Projeto</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else:
                echo "<h3>Nenhum trabalho cadastrado!</h3>";
            endif;
            ?>
        </div><!-- .row -->
    </div><!-- #portfolio .container -->

    <div id="services-section" class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <?php
                $last_feedback = get_feedback('_op_feedback_group');
                foreach($last_feedback as $key => $item):
                    if($key === 0):
                        ?>
                        <blockquote class="blockquote text-right">
                            <p class="mb-0"><small>"<?= $item['_feedback_text']; ?></small>"</p>
                            <footer class="blockquote-footer"><?= $item['_feedback_title']; ?></footer>
                        </blockquote>
                    <?php
                    endif;
                endforeach;
                ?>
            </div><!-- .col-md-4 -->
            <div class="col-md-4 service-box">
                <h5 class="title-min">Serviços</h5>
                <h4><?= get_service('op_serv_titulo') ?></h4>
                <p class="text-justify">
                    <?= get_service('op_serv_desc') ?>
                </p>

                <ul class="list-unstyled">
                    <?php
                    $service = get_service('op_service');
                    foreach((array)$service as $serv):
                        echo "<li class='mb-4 text-justify'>$serv</li>";
                    endforeach;
                    ?>
                </ul>
                <a href="#contato" title="Entre em Contato" class="btn btn-outline-dark">Entre em Contato</a>
            </div><!-- .col-md-4 -->
            <div class="col-md-4">
                <img src="<?= _WPSS_THEME_DIR_URI; ?>/images/services.jpg" alt="Serviços">
            </div><!-- .col-md-4 -->
        </div><!-- .row -->
    </div><!-- #services-section .container -->

    <div id="feedback" class="container feedback-box mb-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h5 class="title-min">Opiniões</h5>
                <h4><?= get_feedback('op_feedback_titulo'); ?></h4>
                <span></span>
            </div><!-- .col-md-12 -->

            <?php
            $feedbacks = get_feedback('_op_feedback_group');
            foreach($feedbacks as $feedback):
                $image = $image = wpss_image_src($feedback['_feedback_image_id'], 'feedback_cover', null);
                $author = $feedback['_feedback_title'];
                $feedback = $feedback['_feedback_text'];
                ?>
                <div class="col-md-4 feedback-item text-center">
                    <span>
                        <img src="<?= $image; ?>" alt="<?= $image; ?>">
                    </span>
                    <p>"<?= $feedback; ?>"</p>
                    <h6><?= $author; ?></h6>
                </div><!-- .col-md-4 -->
            <?php endforeach; ?>

        </div><!-- .row -->
    </div><!-- #feedback .container -->

    <div id="clients" class="container mt-5">
        <div class="row">
            <div class="col-md-4 about-intro">
                <h5 class="title-min">Clientes</h5>
                <h3><?= get_clients('op_clients_title'); ?></h3>
                <p class="text-justify"><?= get_clients('op_clients_desc'); ?></p>
            </div><!-- .col-md-4 -->
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $clients = get_clients('op_client');
                    foreach($clients as $client):
                        ?>
                        <div class="col-4 mb-5 text-center client-box">
                            <i class="fa <?= $client; ?>"></i>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div><!-- .row -->
            </div><!-- .col-md-8 -->
        </div><!-- .row -->
    </div><!-- #clients .container -->

    <div id="contact" class="contact mt-5">
        <div class="container">
            <div class="row feedback-box">

                <div class="col-md-12 text-center mb-5">
                    <h5 class="title-min">Contato</h5>
                    <h4><?= get_contact('op_contact_head'); ?></h4>
                    <span></span>
                </div><!-- .col-md-12 -->

                <div class="col-md-4 contact-form-box pt-3 pb-3">
                    <form method="post" action="">
                        <label for="nome">Nome:</label>
                        <input class="form-control mb-3" type="text" name="nome" id="nome" placeholder="Digite seu nome" required="required">

                        <label for="sender_email">Email:</label>
                        <input class="form-control mb-3" type="email" name="sender_email" id="sender_email" placeholder="Digite seu email" required="required">

                        <label for="assunto">Assunto:</label>
                        <input class="form-control mb-3" type="text" name="assunto" id="assunto" placeholder="Digite o assunto" required="required">

                        <label for="mensagem">Mensagem:</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" required="required"></textarea>
                        <input type="submit" name="send_mail_to" class="btn btn-outline-dark mt-4" value="Enviar Mensagem">
                    </form>
                </div>
                <div class="col-md-8">
                    <?php
                    echo get_contact('op_contact_map');
                    ?>
                </div>

                <div class="col-md-12">
                    <?php
                    if(isset($_POST['send_mail_to'])):
                        $nome = $_POST['nome'];
                        $email = $_POST['sender_email'];
                        $subject = $_POST['assunto'];
                        $msg = "Nome: " . $nome . "\n\r" . $_POST['mensagem'];

                        wp_mail($email, $subject, $msg);
                        echo "<div class='alert alert-success text-center mt-3 p-3'><h3>Sua mensagem foi enviada com sucesso!</h3></div>";
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div><!-- #contact .contact -->

<?php get_footer(); ?>