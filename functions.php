<?php

/*=======================================================
add srylesheet and javascriptfiles
=========================================================*/
function custom_theme_scripts(){
	//bootstrap css
	wp_enquave_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	// main css
	wp_enquave_style('main-styles', get_stylesheet_uri());

	//javascript files

	wp_enquave_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootsrap.min.js' );
	wp_enquave_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js' );
}

add_action('wp_enquave_scripts', 'custom_theme_scripts');


/*=======================================================
featured images
=========================================================*/
add_theme_support('post-thumbnails');

/*=======================================================
add flush to remove_action 
=========================================================*/

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


/*=======================================================
custom header image
=========================================================*/

$custom_image_header = array(
	'width'   => 520,
	'height'  => 150,
	'uploads' => true);
add_theme_support('custom-header', $custom_image_header)
?>
<?
/*=======================================================
fucntion for time
=========================================================*/


function post_data(){
		$archive_year = get_the_time('Y');
		$archive_month = get_the_time('m');
		$archive_day = get_the_time('d');
		?>
		<p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"<?php echo
		get_the_author(); ?></a> |Published on <a href="<?php echo get_day_link($archive_year,$archive_month,
		$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
		<?php
}

/*=======================================================
fucntion for menus
=========================================================*/

function register_my_menus(){
		register_nav_menus(array(
			'main-menu' => __('Main Menu'),
			'footer-left' => __('Left Footer Menu'),
			'footer-middle' => __('Middle Footer Menu'),
			'footer-right' => __('Right Footer Menu')
		));
}

		
		add_action('init','register_my_menus');
		
		?>