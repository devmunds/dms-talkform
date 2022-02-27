<?php 

$plugin_url = plugin_dir_path( __FILE__ );

function add_content_form_zap() {
    global $plugin_url;
    include $plugin_url . "../views/templates/forms/form-zap.php";
}
//add_action( 'content_form_zap', add_content_form_zap(), 10, 0);

add_action( 'init', 'add_content_form_zap');
