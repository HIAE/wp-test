<?php
/**
 * @author              Angelo Rocha <contato@angelorocha.com.br>
 * @link                https://angelorocha.com.br
 * @copyleft            2020
 * @license             GNU GPL 3 (https://www.gnu.org/licenses/gpl-3.0.html)
 * @package             WordPress
 * @subpackage          angelorocha
 * @since 1.0.0
 * @author              Angelo Rocha
 *
 * @param bool $hide
 * Define display none in small devices
 */

function wpss_social_links($hide = true){
    $facebook = get_social_link('_op_facebook');
    $instagram = get_social_link('_op_instagram');
    $twitter = get_social_link('_op_twitter');
    $linkedin = get_social_link('_op_linkedin');
    $behance = get_social_link('_op_wbehance');
    $fb = (empty($facebook) ? 'javascript:' : $facebook);
    $ig = (empty($instagram) ? 'javascript:' : $instagram);
    $tt = (empty($twitter) ? 'javascript:' : $twitter);
    $in = (empty($linkedin) ? 'javascript:' : $linkedin);
    $be = (empty($behance) ? 'javascript:' : $behance);

    $d_none = ($hide ? ' d-none d-sm-block' : '');
    ?>
    <div class="social-links navbar-right<?= $d_none ?>">
        <ul class="list-unstyled m-0">
            <li><a class="facebook" href="<?= $fb; ?>" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
            <li><a class="instagram" href="<?= $ig; ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a class="twitter" href="<?= $tt; ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="<?= $in; ?>" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="behance" href="<?= $be; ?>" title="Behance"><i class="fa fa-behance"></i></a></li>
        </ul>
    </div><!-- .social-links -->
    <?php
}