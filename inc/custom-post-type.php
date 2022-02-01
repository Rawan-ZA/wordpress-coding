<?php

// Register Custom Post Type For Slider
function lhander_custom_post_type()
{

	$labels = array(
		'name'                  => _x('sliders', 'Post Type General Name', 'lhander'),
		'singular_name'         => _x('slider', 'Post Type Singular Name', 'lhander'),
		'menu_name'             => __('slider', 'lhander'),
		'name_admin_bar'        => __('slider', 'lhander'),
		'archives'              => __('slider Archives', 'lhander'),
		'attributes'            => __('slider Attributes', 'lhander'),
		'parent_item_colon'     => __('slider Item:', 'lhander'),
		'all_items'             => __('All sliders', 'lhander'),
		'add_new_item'          => __('Add New slider', 'lhander'),
		'add_new'               => __('Add slider', 'lhander'),
		'new_item'              => __('New slider', 'lhander'),
		'edit_item'             => __('Edit slider', 'lhander'),
		'update_item'           => __('Update slider', 'lhander'),
		'view_item'             => __('View slider', 'lhander'),
		'view_items'            => __('View slider', 'lhander'),
		'search_items'          => __('Search slider', 'lhander'),
		'not_found'             => __('Not found', 'lhander'),
		'not_found_in_trash'    => __('Not found in Trash', 'lhander'),
		'featured_image'        => __('Featured Image', 'lhander'),
		'set_featured_image'    => __('Set featured image', 'lhander'),
		'remove_featured_image' => __('Remove featured image', 'lhander'),
		'use_featured_image'    => __('Use as featured image', 'lhander'),
		'insert_into_item'      => __('Insert into item', 'lhander'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'lhander'),
		'items_list'            => __('Items list', 'lhander'),
		'items_list_navigation' => __('Items list navigation', 'lhander'),
		'filter_items_list'     => __('Filter items list', 'lhander'),
	);
	$capabilities = array(
		'edit_post'             => 'edit_post',
		'read_post'             => 'read_post',
		'delete_post'           => 'delete_post',
		'edit_posts'            => 'edit_posts',
		'edit_others_posts'     => 'edit_others_posts',
		'publish_posts'         => 'publish_posts',
		'read_private_posts'    => 'read_private_posts',
	);
	$args = array(
		'label'                 => __('slider', 'lhander'),
		'description'           => __('make slider', 'lhander'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-field'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'sliders',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'          => 'post',
		'show_in_rest'          => true,
	);
	register_post_type('slider', $args);
}
add_action('init', 'lhander_custom_post_type', 0);

// Register Custom Post Type For Q&A
function lhander_custom_post_type_QA()
{

	$labels = array(
		'name'                  => _x('quastions', 'Post Type General Name', 'lhander'),
		'singular_name'         => _x('quastion', 'Post Type Singular Name', 'lhander'),
		'menu_name'             => __('quastion', 'lhander'),
		'name_admin_bar'        => __('quastion', 'lhander'),
		'archives'              => __('quastion Archives', 'lhander'),
		'attributes'            => __('quastion Attributes', 'lhander'),
		'parent_item_colon'     => __('quastion Item:', 'lhander'),
		'all_items'             => __('All quastions', 'lhander'),
		'add_new_item'          => __('Add New quastion', 'lhander'),
		'add_new'               => __('Add quastion', 'lhander'),
		'new_item'              => __('New quastion', 'lhander'),
		'edit_item'             => __('Edit quastion', 'lhander'),
		'update_item'           => __('Update quastion', 'lhander'),
		'view_item'             => __('View quastion', 'lhander'),
		'view_items'            => __('View quastion', 'lhander'),
		'search_items'          => __('Search quastion', 'lhander'),
		'not_found'             => __('Not found', 'lhander'),
		'not_found_in_trash'    => __('Not found in Trash', 'lhander'),
		'featured_image'        => __('Featured Image', 'lhander'),
		'set_featured_image'    => __('Set featured image', 'lhander'),
		'remove_featured_image' => __('Remove featured image', 'lhander'),
		'use_featured_image'    => __('Use as featured image', 'lhander'),
		'insert_into_item'      => __('Insert into item', 'lhander'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'lhander'),
		'items_list'            => __('Items list', 'lhander'),
		'items_list_navigation' => __('Items list navigation', 'lhander'),
		'filter_items_list'     => __('Filter items list', 'lhander'),
	);
	$capabilities = array(
		'edit_post'             => 'edit_post',
		'read_post'             => 'read_post',
		'delete_post'           => 'delete_post',
		'edit_posts'            => 'edit_posts',
		'edit_others_posts'     => 'edit_others_posts',
		'publish_posts'         => 'publish_posts',
		'read_private_posts'    => 'read_private_posts',
	);
	$args = array(
		'label'                 => __('quastion', 'lhander'),
		'description'           => __('make quastion', 'lhander'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-field'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'quastions',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'          => 'post',
		'show_in_rest'          => true,
	);
	register_post_type('quastion', $args);
}
add_action('init', 'lhander_custom_post_type_QA', 0);

flush_rewrite_rules();

//add meta boxes
function  lhander_add_metabax()
{
	add_meta_box(
		'company-name',
		__('company-name'),
		'testimonail_company_name_metabox',
		['post', 'slider', 'quastion'],
		'side',
		'low',
	);
}
add_action('add_meta_boxes', 'lhander_add_metabax');
function testimonail_company_name_metabox($post)
{
	echo '<div class="components-panel__body is-opened">
			<h2 class="components-panel__body-title"><button type="button" aria-expanded="true" class="components-button components-panel__body-toggle">
			<span aria-hidden="true">
			<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="components-panel__arrow" role="img" aria-hidden="true" focusable="false">
			<path d="M6.5 12.4L12 8l5.5 4.4-.9 1.2L12 10l-4.5 3.6-1-1.2z">
     </path>
    </svg>
</span>
		quastion Attributes
   </button>
</h2>
			<div class="components-panel__row">
			  <div class="components-base-control editor-page-attributes__order css-wdf2ti-Wrapper e1puf3u0">
			    <div class="components-base-control__field css-11vcxb9-StyledField e1puf3u1">
			      <label class="components-base-control__label css-pezhm9-StyledLabel e1puf3u2" for="inspector-text-control-1">Company</label>
			      <input class="components-text-control__input" type="text" name="company_name" >
			</div>
		</div>
    </div>
 </div>';
}

function save_company_name($post_id){
	$value = $_POST['company_name'] ?? ' ';
	update_post_meta($post_id,'_company_name',$value);
}
add_action('save_post','save_company_name');
