<?php 
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
	
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.11.0.min.js');
	wp_enqueue_script( 'jquery' );

   wp_enqueue_script( 'jquery_migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), 'null', true );
   wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 'null', true );
    //wp_localize_script('script', 'WPURLS', array( 'siteurl' => bloginfo('template_url') ));
});
add_action('wp_footer', function(){
?><script type="text/javascript">
      var wp_url = '<?php echo bloginfo('template_url'); ?>';
    </script><?php });
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_filter( 'excerpt_length', function(){return 3;} );
?>