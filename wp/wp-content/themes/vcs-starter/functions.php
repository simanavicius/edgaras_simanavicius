<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

	// js/jquery.min.js
	// js/jquery.easing.1.3.js
	// js/bootstrap.min.js
	// js/jquery.waypoints.min.js
	// js/jquery.flexslider-min.js
	// js/jquery.magnific-popup.min.js
	// js/magnific-popup-options.js
	// js/jquery.countTo.js
	// js/main.js

    // js/modernizr-2.6.2.min.js


    	// wp_register_script(handle, path, dependency, version, in_footer)
    	// in_footer - ar krauti faila footer dalyje true/false
    	wp_register_script('modernizr', ASSETS_URL . '/assets/js/modernizr-2.6.2.min.js', array(), false, false);
        wp_deregister_script('jquery');
		wp_register_script('jquery', ASSETS_URL . '/assets/js/jquery.min.js', array('modernizr'), false, true);
		wp_register_script('easing', ASSETS_URL . '/assets/js/jquery.easing.1.3.js', array('jquery'), false, true);
		wp_register_script('bootstrap', ASSETS_URL . '/assets/js/bootstrap.min.js', array('easing'), false, true);
		wp_register_script('waypoints', ASSETS_URL . '/assets/js/jquery.waypoints.min.js', array('bootstrap'), false, true);
		wp_register_script('flexslider', ASSETS_URL . '/assets/js/jquery.flexslider-min.js', array('waypoints'), false, true);
		wp_register_script('magnific-popup', ASSETS_URL . '/assets/js/jquery.magnific-popup.min.js', array('flexslider'), false, true);
		wp_register_script('magnific-popup-options', ASSETS_URL . '/assets/js/magnific-popup-options.js', array('magnific-popup'), false, true);
		wp_register_script('countTo', ASSETS_URL . '/assets/js/jquery.countTo.js', array('magnific-popup-options'), false, true);
		wp_register_script('main', ASSETS_URL . '/assets/js/main.js', array('countTo'), '1.0', true);
        

        wp_enqueue_script('modernizr');
        wp_enqueue_script('jquery');
        wp_enqueue_script('easing');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('waypoints');
        wp_enqueue_script('flexslider');
        wp_enqueue_script('magnific-popup');
        wp_enqueue_script('magnific-popup-options');
        wp_enqueue_script('countTo');
        wp_enqueue_script('main');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');





function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {

// https://fonts.googleapis.com/css?family=Oxygen:300,400
// https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700
// css/animate.css
// css/icomoon.css
// css/bootstrap.css
// css/magnific-popup.css
// css/flexslider.css
// css/style.css
		//wp_register_style(handle, path, dependency, version, devices)
		//wp_register_style('main-css', ASSETS_URL . '/assets/css/main.css', array(), false, 'all');
		
		wp_enqueue_style('main-css');

		wp_register_style('oxygen', 'https://fonts.googleapis.com/css?family=Oxygen:300,400', array(), false, 'all');
		wp_register_style('source-sans', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array('oxygen'), false, 'all');
		wp_register_style('animate', ASSETS_URL . '/assets/css/animate.css', array('source-sans'), false, 'all');
		wp_register_style('icomoon', ASSETS_URL . '/assets/css/icomoon.css', array('animate'), false, 'all');
		wp_register_style('bootstrap', ASSETS_URL . '/assets/css/bootstrap.css', array('icomoon'), false, 'all');
		wp_register_style('magnific-popup', ASSETS_URL . '/assets/css/magnific-popup.css', array('bootstrap'), false, 'all');
		wp_register_style('flexslider', ASSETS_URL . '/assets/css/flexslider.css', array('magnific-popup'), false, 'all');
		wp_register_style('style', ASSETS_URL . '/assets/css/style.css', array('flexslider'), false, 'all');
		wp_register_style('fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array('magnific-popup'), false, 'all');

		wp_enqueue_style('oxygen');
		wp_enqueue_style('source-sans');
		wp_enqueue_style('animate');
		wp_enqueue_style('icomoon');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('magnific-popup');
		wp_enqueue_style('flexslider');
		wp_enqueue_style('style');
		wp_enqueue_style('fa');
	

	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ),
        'footer-navigation' => __('Footer Navigation')
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function dump($data){
echo "<pre>";
print_r($data);
echo "</pre>";
}

// Sukuriame IMG dydi

// add_image_size( 'pavadinimas', plotis, aukstis, false );
add_image_size('logo', 100, 50, false);





add_action( 'init', 'project_post_type' );
/**
 * Register a project post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function project_post_type() {
	$labels = array(				
		'name'               => _x( 'Projects', 'post type general name', 'vcs-starter' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'vcs-starter' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'vcs-starter' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'vcs-starter' ),
		'add_new'            => _x( 'Add New', 'project', 'vcs-starter' ),
		'add_new_item'       => __( 'Add New Project', 'vcs-starter' ),
		'new_item'           => __( 'New Project', 'vcs-starter' ),
		'edit_item'          => __( 'Edit Project', 'vcs-starter' ),
		'view_item'          => __( 'View Project', 'vcs-starter' ),
		'all_items'          => __( 'All Projects', 'vcs-starter' ),
		'search_items'       => __( 'Search Projects', 'vcs-starter' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'vcs-starter' ),
		'not_found'          => __( 'No projects found.', 'vcs-starter' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'vcs-starter' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'vcs-starter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => __('project') ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'project', $args );
}

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_project_taxonomy', 0 );
 
// create two taxonomies, genres and writers for the post type "book"
function create_project_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name', 'vcs-starter' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'vcs-starter' ),
        'search_items'      => __( 'Search Project Categories', 'vcs-starter' ),
        'all_items'         => __( 'All Project Categories', 'vcs-starter' ),
        'parent_item'       => __( 'Parent Project Category', 'vcs-starter' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'vcs-starter' ),
        'edit_item'         => __( 'Edit Project Category', 'vcs-starter' ),
        'update_item'       => __( 'Update Project Category', 'vcs-starter' ),
        'add_new_item'      => __( 'Add New Project Category', 'vcs-starter' ),
        'new_item_name'     => __( 'New Project Category Name', 'vcs-starter' ),
        'menu_name'         => __( 'Project Category', 'vcs-starter' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => __('project-category') ),
    );
 
    register_taxonomy( 'project-category', array( 'project' ), $args );
}