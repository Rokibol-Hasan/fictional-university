<?php 
function universityResourceFiles(){
    wp_enqueue_style('university_main_style',get_theme_file_uri('./build/style-index.css'));
    wp_enqueue_style('university_extra_style',get_theme_file_uri('./build/index.css'));
}

add_action('wp_enqueue_scripts','universityResourceFiles');


?>