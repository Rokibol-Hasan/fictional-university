<?php 
function universityResourceFiles(){
    wp_enqueue_style('university_main_style',get_stylesheet_uri(''));
}

add_action('wp_enqueue_scripts','universityResourceFiles');


?>