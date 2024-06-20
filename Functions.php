
function ceymulticall_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('ceymulticall-ajax-script', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
    wp_localize_script('ceymulticall-ajax-script', 'ceFunction', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'ceymulticall_enqueue_scripts');

function ceymulticall_handle_form() {
    // Check nonce for security (optional)
    // Check if fields are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
        // Do something with the data, e.g., save to database or send an email
        // For this example, we assume success
        wp_send_json_success(array('message' => 'Form submitted successfully!'));
    } else {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }
}
add_action('wp_ajax_ceymulticall_handle_form', 'ceymulticall_handle_form');
add_action('wp_ajax_nopriv_ceymulticall_handle_form', 'ceymulticall_handle_form');
