<?php

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'foxy-fonts',
        'https://fonts.googleapis.com/css2?family=Bree+Serif&family=Manrope:wght@200..800&family=Oswald:wght@200..700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'foxybrady-child',
        get_stylesheet_uri(),
        ['generate-style', 'foxy-fonts'],
        wp_get_theme()->get('Version')
    );

});