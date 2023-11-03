<?php 
function enqueue_custom_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');

    // Flaticon
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/lib/flaticon/font/flaticon.css');

    // Animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css');

    // Owl Carousel
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/contact-style.css');

    // Local style.css
    wp_enqueue_style('local-style', get_stylesheet_uri());

    // Contact style.css
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/contact-style.css');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('quicksand-font', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts() {
    // jQuery
    wp_enqueue_script('jquery-1', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);

    // Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array(), null, true);

    // Easing
    wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array(), null, true);

    // Owl Carousel
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), null, true);

    // Waypoints
    wp_enqueue_script('waypoints',  get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), null, true);

    // Counter Up
    wp_enqueue_script('counterup','https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js', array(), null, true);

    // Parallax
    wp_enqueue_script('parallax','https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array(), null, true);

    // Contact Form Validation
    wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/mail/jqBootstrapValidation.min.js', array(), null, true);

    // Contact Form Handling
    wp_enqueue_script('contact', get_template_directory_uri() . '/mail/contact.js', array(), null, true);

    // Main Theme Script
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');




?>