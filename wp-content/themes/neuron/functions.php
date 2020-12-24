<?php 
add_action('wp_enqueue_scripts' , 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'theme_register');

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// выводим пагинацию
the_posts_pagination( array(
	'end_size' => 2,
) ); 

	function theme_styles(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css','', null);
		wp_enqueue_style('font', get_template_directory_uri(). '/assets/css/font-awesome.min.css');
		wp_enqueue_style('magnific-popup', get_template_directory_uri(). '/assets/css/magnific-popup.css');
		wp_enqueue_style('main_style', get_template_directory_uri(). '/assets/css/main_style.css');
		
}

	function theme_scripts(){
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '' ,null );
		wp_enqueue_script('particles', get_template_directory_uri() . '/assets/js/particles.min.js', ['jquery'], '', false);
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js',['jquery'], '', true);
		
		
		wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/jquery.parallax.js', ['jquery'], null);
		wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js',['jquery'], null);
		wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',['jquery'], null);
		wp_enqueue_script('magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js',['jquery'], null);
		wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js',['jquery'], null);
		
	}
	function theme_register(){
		register_nav_menu('top', 'top-menu');
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support( 'post-formats', array( 'video', 'gallery' ) );

	}

