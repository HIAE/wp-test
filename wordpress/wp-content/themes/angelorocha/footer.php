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

wp_footer(); ?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="p-0 col-6">
                <p class="m-0 text-muted">
                    <small><?= get_footer_text('_op_footer_text'); ?></small>
                </p>
            </div>
            <div class="p-0 col-6 text-right">
                <?php wpss_social_links(false); ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
