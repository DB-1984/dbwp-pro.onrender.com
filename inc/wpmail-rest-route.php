<?php

add_action('rest_api_init', 'formSubmit');

function formSubmit()
{
    register_rest_route('dbwp/v1', 'contactForm', array(
        'methods' => 'POST',
        'callback' => 'contactForms',
        'permission_callback' => '__return_true',
    ));
}
