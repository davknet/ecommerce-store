<?php 


require STORE_APIS_DIR_PATH . 'vendor/autoload.php' ;





add_action('rest_api_init', 'register_little_store_apis'); 



function register_little_store_apis(){

    register_rest_route('store-api/', 'token', array(
        'methods'  => 'POST',
        'callback' => 'getCreateToken',
        'permission_callback' => '__return_true'
    ));
    

}



function getCreateToken(WP_REST_Request $request) {
    $email    = esc_sql($request['email']);
    $password = esc_sql($request['password']);
    
    // For demonstration, return the email.
    return new WP_REST_Response(array('email' => $email), 200);
}




