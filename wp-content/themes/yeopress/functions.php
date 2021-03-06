<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/jquery/dist/jquery.min.js');
	wp_enqueue_script('require');

    wp_register_script('slick', get_bloginfo('template_url') . '/js/owl.carousel.min.js');
	wp_enqueue_script('slick');

    wp_register_script('nanoscroller', get_bloginfo('template_url') . '/js/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js');
    wp_enqueue_script('nanoscroller');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js');
	wp_enqueue_script('global');

	// wp_register_script('livereload', 'http://shakes.local:35729/livereload.js?snipver=1', null, false, true);
	// wp_enqueue_script('livereload');
    wp_enqueue_style('owl.carousel', get_bloginfo('template_url') . '/css/owl.carousel.css');
//    wp_enqueue_style('owl.theme', get_bloginfo('template_url') . '/css/owl.theme.css');
    wp_enqueue_style('owl.transitions', get_bloginfo('template_url') . '/css/owl.transitions.css');
	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

//Add Featured Image Support
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 306, 204, true );
add_image_size('work-thumbnail',306,204,true);
add_image_size('work-full',960,9999,false);
// add_image_size('shaker-thumbnail',305,226,true);
add_image_size('shaker-thumbnail',381,283,true);
add_image_size('shaker-full',381,391,true);
// add_image_size('shaker-full',375,391,true);
add_image_size('believer-thumbnail',310,160,true);

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );


//Custom Post Type
//Shaker
add_action( 'init', 'create_shakers' );
function create_shakers() {
  $labels = array(
    'name' => _x('Shakers', 'post type general name'),
    'singular_name' => _x('Shaker', 'post type singular name'),
    'add_new' => _x('Add New', 'Shaker'),
    'add_new_item' => __('Add New Shaker'),
    'edit_item' => __('Edit Shaker'),
    'new_item' => __('New Shaker'),
    'view_item' => __('View Shaker'),
    'search_items' => __('Search Shakers'),
    'not_found' =>  __('No Shakers found'),
    'not_found_in_trash' => __('No Shakers found in Trash'),
    'parent_item_colon' => ''
  );

  $supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt','thumbnail');

  register_post_type( 'shaker',
    array(
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
      'has_archive' => true
    )
  );
}

//Work
add_action( 'init', 'create_works' );
function create_works() {
	$labels = array(
		'name' => _x('Works', 'post type general name'),
		'singular_name' => _x('Work', 'post type singular name'),
		'add_new' => _x('Add New', 'Work'),
		'add_new_item' => __('Add New Work'),
		'edit_item' => __('Edit Work'),
		'new_item' => __('New Work'),
		'view_item' => __('View Work'),
		'search_items' => __('Search Works'),
		'not_found' =>  __('No Works found'),
		'not_found_in_trash' => __('No Works found in Trash'),
		'parent_item_colon' => ''
	);

	$supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt','thumbnail');

	register_post_type( 'work',
		array(
			'labels' => $labels,
			'public' => true,
			'supports' => $supports,
			'has_archive' => false
		)
	);
}

//Award
add_action( 'init', 'create_awards' );
function create_awards() {
	$labels = array(
		'name' => _x('Awards', 'post type general name'),
		'singular_name' => _x('Award', 'post type singular name'),
		'add_new' => _x('Add New', 'Award'),
		'add_new_item' => __('Add New Award'),
		'edit_item' => __('Edit Award'),
		'new_item' => __('New Award'),
		'view_item' => __('View Award'),
		'search_items' => __('Search Awards'),
		'not_found' =>  __('No Awards found'),
		'not_found_in_trash' => __('No Awards found in Trash'),
		'parent_item_colon' => ''
	);

	$supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt','thumbnail');

	register_post_type( 'award',
		array(
			'labels' => $labels,
			'public' => true,
			'supports' => $supports,
			'has_archive' => false
		)
	);
}

//Job
add_action( 'init', 'create_jobs' );
function create_jobs() {
	$labels = array(
		'name' => _x('Jobs', 'post type general name'),
		'singular_name' => _x('Job', 'post type singular name'),
		'add_new' => _x('Add New', 'Job'),
		'add_new_item' => __('Add New Job'),
		'edit_item' => __('Edit Job'),
		'new_item' => __('New Job'),
		'view_item' => __('View Job'),
		'search_items' => __('Search Jobs'),
		'not_found' =>  __('No Jobs found'),
		'not_found_in_trash' => __('No Jobs found in Trash'),
		'parent_item_colon' => ''
	);

	$supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt','thumbnail');

	register_post_type( 'job',
		array(
			'labels' => $labels,
			'public' => true,
			'supports' => $supports,
			'has_archive' => false
		)
	);
}

//Home Slide
add_action( 'init', 'create_homeslides' );
function create_homeslides() {
    $labels = array(
        'name' => _x('Home Slides', 'post type general name'),
        'singular_name' => _x('Home Slide', 'post type singular name'),
        'add_new' => _x('Add New', 'Home Slide'),
        'add_new_item' => __('Add New Home Slide'),
        'edit_item' => __('Edit Home Slide'),
        'new_item' => __('New Home Slide'),
        'view_item' => __('View Home Slide'),
        'search_items' => __('Search Home Slides'),
        'not_found' =>  __('No Home Slides found'),
        'not_found_in_trash' => __('No Home Slides found in Trash'),
        'parent_item_colon' => ''
    );

    $supports = array('title', 'editor', 'custom-fields', 'revisions', 'thumbnail');

    register_post_type( 'homeslide',
        array(
            'labels' => $labels,
            'public' => true,
            'supports' => $supports,
            'has_archive' => true
        )
    );
}

//Believers
add_action( 'init', 'create_believers' );
function create_believers() {
    $labels = array(
        'name' => _x('Our Believers', 'post type general name'),
        'singular_name' => _x('Our Believer', 'post type singular name'),
        'add_new' => _x('Add New', 'Our Believer'),
        'add_new_item' => __('Add New Our Believer'),
        'edit_item' => __('Edit Our Believer'),
        'new_item' => __('New Our Believer'),
        'view_item' => __('View Our Believer'),
        'search_items' => __('Search Our Believers'),
        'not_found' =>  __('No Our Believers found'),
        'not_found_in_trash' => __('No Our Believers found in Trash'),
        'parent_item_colon' => ''
    );

    $supports = array('title', 'editor', 'custom-fields', 'revisions', 'thumbnail');

    register_post_type( 'believer',
        array(
            'labels' => $labels,
            'public' => true,
            'supports' => $supports,
            'has_archive' => true
        )
    );
}

add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'work_category', 'work', array( 'hierarchical' => true, 'label' => 'Work Category', 'query_var' => true, 'rewrite' => true ));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-content',
		'title' => 'About Content',
		'fields' => array (
			array (
				'key' => 'field_53eab64516595',
				'label' => 'About',
				'name' => 'about',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_53eab66616598',
				'label' => 'Story',
				'name' => 'story',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_53eab66616597',
				'label' => 'Philosophy',
				'name' => 'philosophy',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_53eab66516596',
				'label' => 'Our Believers',
				'name' => 'our-believers',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_job-information',
		'title' => 'Job Information',
		'fields' => array (
			array (
				'key' => 'field_53ec7e2fa95e3',
				'label' => 'Number of jobs',
				'name' => 'job_number',
				'type' => 'number',
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'job',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_shaker-information',
		'title' => 'Shaker Information',
		'fields' => array (
			array (
				'key' => 'field_53ec7e87fa51d',
				'label' => 'Job Title',
				'name' => 'job_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'shaker',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_expertis-fields',
		'title' => 'Expertis Fields',
		'fields' => array (
			array (
				'key' => 'field_53ecd83a5c73a',
				'label' => 'Branding Big Text',
				'name' => 'branding_big_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8765c73b',
				'label' => 'Branding Small Text',
				'name' => 'branding_small_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8815c73c',
				'label' => 'Industrial Big Text',
				'name' => 'industrial_big_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8905c73d',
				'label' => 'Industrial Small Text',
				'name' => 'industrial_small_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8995c73e',
				'label' => 'Engineering Big Text',
				'name' => 'engineering_big_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8a55c73f',
				'label' => 'Engineering Small Text',
				'name' => 'engineering_small_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8bb5c740',
				'label' => 'Packaging Big Text',
				'name' => 'packaging_big_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53ecd8c35c741',
				'label' => 'Packaging Small Text',
				'name' => 'packaging_small_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '15',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));

}

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_homepage-slideshow',
        'title' => 'Homepage Slideshow',
        'fields' => array (
            array (
                'key' => 'field_53f08ba2d1265',
                'label' => 'Slide Type',
                'name' => 'slide_type',
                'type' => 'radio',
                'required' => 1,
                'choices' => array (
                    'video' => 'Video',
                    'image' => 'Image',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => 'image',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_53f08bd5d1266',
                'label' => 'Video Link',
                'name' => 'video_link',
                'type' => 'text',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_53f08ba2d1265',
                            'operator' => '==',
                            'value' => 'video',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_53f08befd1267',
                'label' => 'Image Link',
                'name' => 'image_link',
                'type' => 'image',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_53f08ba2d1265',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'homeslide',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_contact-background',
        'title' => 'Contact Background',
        'fields' => array (
            array (
                'key' => 'field_5408064daedd6',
                'label' => 'Background Type',
                'name' => 'background_type',
                'type' => 'radio',
                'required' => 1,
                'choices' => array (
                    'image' => 'Image',
                    'video' => 'Video',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => 'image',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_5408067baedd7',
                'label' => 'Image',
                'name' => 'image_url',
                'type' => 'image',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5408064daedd6',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_540806a4aedd8',
                'label' => 'Video',
                'name' => 'video_url',
                'type' => 'text',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5408064daedd6',
                            'operator' => '==',
                            'value' => 'video',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-contact.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-background',
		'title' => 'Page Background',
		'fields' => array (
			array (
				'key' => 'field_5445a9ca41120',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_award-background',
		'title' => 'Award Background',
		'fields' => array (
			array (
				'key' => 'field_5445ab89c65a3',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'award',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

