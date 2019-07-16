<?php
/**
 * Enqueue scripts and styles.
 */
function medical_scripts() {
	wp_enqueue_style( 'medical-style', get_stylesheet_uri() );
	wp_enqueue_style('medical-guide-css', get_template_directory_uri().'/assets/css/medical-guide.css');
	wp_enqueue_style('font-awesome-css', get_template_directory_uri().'/assets/libs/fontawesome/css/all.min.css');
	wp_enqueue_style('medical-guide-icons', get_template_directory_uri().'/assets/fonts/medical-guide-icons.css');
	wp_enqueue_style('default-color-css', get_template_directory_uri().'/assets/css/default-color.css');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('dropmenu-css', get_template_directory_uri().'/assets/css/dropmenu.css');
	wp_enqueue_style('sticky-header-css', get_template_directory_uri().'/assets/css/sticky-header.css');
	wp_enqueue_style('style-css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('settings-css', get_template_directory_uri().'/assets/css/settings.css');
	wp_enqueue_style('extralayers-css', get_template_directory_uri().'/assets/css/extralayers.css');
	wp_enqueue_style('accordion-css', get_template_directory_uri().'/assets/css/accordion.css');
	wp_enqueue_style('tabs-css', get_template_directory_uri().'/assets/css/tabs.css');
	wp_enqueue_style('owl.carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.css');
	wp_enqueue_style('jquery.mmenu.all-css', get_template_directory_uri().'/assets/css/jquery.mmenu.all.css');
	wp_enqueue_style('demo-css', get_template_directory_uri().'/assets/css/demo.css');
	wp_enqueue_style('loader-css', get_template_directory_uri().'/assets/css/loader.css');
	wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/libs/slick/slick.css');
	wp_enqueue_style('magnific-css', get_template_directory_uri().'/assets/libs/magnific-popup/magnific-popup.css');
	wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('scroll-desktop-js', get_template_directory_uri().'/assets/js/scroll-desktop.js', ['jquery'], null, true);
	wp_enqueue_script('scroll-desktop-smooth-js', get_template_directory_uri().'/assets/js/scroll-desktop-smooth.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.themepunch.revolution.min-js', get_template_directory_uri().'/assets/js/jquery.themepunch.revolution.min.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.themepunch.tools.min-js', get_template_directory_uri().'/assets/js/jquery.themepunch.tools.min.js', ['jquery'], null, true);
	wp_enqueue_script('classie-js', get_template_directory_uri().'/assets/js/classie.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.mmenu.min.all-js', get_template_directory_uri().'/assets/js/jquery.mmenu.min.all.js', ['jquery'], null, true);
	wp_enqueue_script('jquery-ui-1.10.3.custom-js', get_template_directory_uri().'/assets/js/jquery-ui-1.10.3.custom.js', ['jquery'], null, true);
	wp_enqueue_script('counter-js', get_template_directory_uri().'/assets/js/counter.js', ['jquery'], null, true);
	wp_enqueue_script('tabs-js', get_template_directory_uri().'/assets/js/tabs.js', ['jquery'], null, true);
	wp_enqueue_script('banner-js', get_template_directory_uri().'/assets/js/banner.js', ['jquery'], null, true);
	wp_enqueue_script('owl.carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.js', ['jquery'], null, true);
	wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/libs/magnific-popup/jquery.magnific-popup.min.js', ['jquery'], null, true);
	wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/libs/slick/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('my-js', get_template_directory_uri().'/assets/js/my.js', ['jquery'], null, true);
	wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_scripts' );