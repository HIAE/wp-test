<?php
/**
 * Contact form template file
 *
 * @see Theme\Components\ContactForm
 *
 * @package piassi
 */

?>

<form
    action="<?php echo admin_url( 'admin-ajax.php' ); ?>"
    class="_contact-form bg-white p-4 <?php echo $class; ?>">
    <input type="hidden" name="page_id" value="<?php the_ID(); ?>" />
    <?php wp_nonce_field( 'send_contact_email', 'send_contact_email_nonce' ); ?>

    <div class="form-group">
        <label for="name_input"><?php _e( 'Name', 'piassi' ); ?></label>
        <input
            name="name"
            type="text"
            class="form-control"
            id="name_input"
            placeholder="<?php _e( 'Type in your name', 'piassi' ); ?>"
            aria-labelledby="name_input"
            required />
    </div>

    <div class="form-group">
        <label for="email_input"><?php _e( 'Email', 'piassi' ); ?></label>
        <input
            name="email"
            type="text"
            class="form-control"
            id="email_input"
            placeholder="<?php _e( 'Type in your email', 'piassi' ); ?>"
            aria-labelledby="email_input"
            required />
    </div>

    <div class="form-group">
        <label for="subject_input"><?php _e( 'Subject', 'piassi' ); ?></label>
        <input
            name="subject"
            type="text"
            class="form-control"
            id="subject_input"
            placeholder="<?php _e( 'Mail subject', 'piassi' ); ?>"
            aria-labelledby="subject_input"
            required />
    </div>

    <div class="form-group">
        <label for="message_input"><?php _e( 'Message', 'piassi' ); ?></label>
        <textarea
            name="message"
            type="text"
            class="form-control"
            id="message_input"
            placeholder="<?php _e( 'Type in your message', 'piassi' ); ?>"
            aria-labelledby="message_input"
            required></textarea>
    </div>

    <div class="alert alert-primary d-none form-alert" role="alert"></div>

    <button type="submit" class="btn btn-outline-dark flex-center">
        <?php _e( 'Send message', 'piassi' ); ?>
        <div class="form-spinner spinner-border spinner-border-sm d-none ml-2" role="status"></div>
    </button>
</form>