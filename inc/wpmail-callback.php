<?php

function enqueue_contact_form_scripts()
{
    if (is_front_page()) {
        wp_localize_script(
            'main-js',
            'contactForm',
            array(
                'nonce' => wp_create_nonce('contact-form-nonce'),
            )
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_contact_form_scripts');

function contactForms($data)
{
    // Check nonce
    $nonce = $data->get_param('nonce');
    if (!wp_verify_nonce($nonce, 'contact-form-nonce')) {
        return rest_ensure_response(array('success' => false, 'message' => 'Invalid nonce.'));
    }

    // Sanitize and retrieve form data
    $firstname = sanitize_text_field($data->get_param('firstName'));
    $lastname  = sanitize_text_field($data->get_param('lastName'));
    $email     = sanitize_email($data->get_param('email'));
    $message   = sanitize_textarea_field($data->get_param('message'));
    $url       = sanitize_textarea_field($data->get_param('url'));

    // Check and handle file upload
    if ($data->has_param('file')) {
        $file = $data->get_file('file');
        $allowed_file_types = array('jpg', 'jpeg', 'png', 'pdf');
        $max_file_size = 5 * 1024 * 1024; // 5 MB in bytes

        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (in_array($file_extension, $allowed_file_types) && $file['size'] <= $max_file_size) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($file, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                $attachments = $movefile['file'];
            } else {
                $attachments = '';
            }
        } else {
            return rest_ensure_response(array('success' => false, 'message' => 'Invalid file. Please upload a valid file (max size: 5MB, allowed types: jpg, jpeg, png, pdf).'));
        }
    } else {
        $attachments = '';
    }

    // Set recipient email address
    $to = 'your-email@example.com';

    // Set email subject and body
    $subject = 'New contact form submission';
    $body    = "Name: $firstname $lastname \n\nEmail: $email \n\nMessage: $message \n\nURL: $url \n\n";
    $headers = "From: $firstname $lastname <$email>" . "\r\n";

    // Send email
    if (wp_mail($to, $subject, $body, $headers, $attachments)) {
        return rest_ensure_response(array('success' => true, 'message' => 'Thank you for your message'));
    } else {
        return rest_ensure_response(array('success' => false, 'message' => 'Unable to send email. Please try again later.'));
    }
}
