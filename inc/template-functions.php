<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ConicIT
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function conicit_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'conicit_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function conicit_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'conicit_pingback_header' );


/**
 * Social settings*/
function conicit_custumize_register($wp_customize) {
  $wp_customize->add_setting('facebook_social', [
    'default' => __('URL Facebook', 'conicit'),
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control(
    'facebook_social',
    [
      'label' => __('Facebook profile URL', 'conicit'),
      'section' => 'social_section',
      'settings' => 'facebook_social',
      'type' => 'text',
    ]
  );

  $wp_customize->add_setting('google_social', [
    'default' => __('URL Instagram', 'conicit'),
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control(
    'google_social',
    [
      'label' => __('Google+ profile URL', 'conicit'),
      'section' => 'social_section',
      'settings' => 'google_social',
      'type' => 'text',
    ]
  );

  $wp_customize->add_setting('skype_social', [
    'default' => __('URL Skype', 'conicit'),
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control(
    'skype_social',
    [
      'label' => __('Skype profile URL', 'conicit'),
      'section' => 'social_section',
      'settings' => 'skype_social',
      'type' => 'text',
    ]
  );


  $wp_customize->add_section('social_section', [
    'title' => __('Social settings', 'conicit'),
    'priority' => 30,
  ]);

}
add_action( 'customize_register', 'conicit_custumize_register' );

/**
Homepage slider post type*/

add_action( 'init', 'hp_head_slider');
function hp_head_slider() {

  $labels = array(
    'name'               => "Homepage slider",
    'singular_name'      => "Homepage slider",
    'menu_name'          => "Homepage slider",
    'name_admin_bar'     => "Homepage slider",
    'add_new'            => "Add New",
    'add_new_item'       => "Add New Slide",
    'new_item'           => "New Slide",
    'edit_item'          => "Edit Slider Item",
    'view_item'          => "View Slider Item",
    'all_items'          => "All Slider Items",
    'search_items'       => "Search Slider Items",
  );

  $args = array(
    'labels'             => $labels,
    'description'        => "Homepage slider post type",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'hp_head_slider' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', )
  );

  register_post_type( 'hp_head_slider', $args );

}


add_filter( 'manage_hp_head_slider_posts_columns', 'hp_head_slider_custom_table_head' );
function hp_head_slider_custom_table_head( $defaults ) {
  $defaults['head_slider_title']         = 'Title';
  $defaults['head_slider_description']          = 'Description';
  $defaults['head_slider_image']         = 'Image';

  unset( $defaults["date"] );
  unset( $defaults["title"] );

  return $defaults;
}

add_action( 'manage_hp_head_slider_posts_custom_column', 'hp_head_slider_custom_table_content', 10, 2 );
function hp_head_slider_custom_table_content( $column_name, $post_id ) {

  if ( $column_name == 'head_slider_title' ) {
    $field = get_post_meta( $post_id, "head_slider_title", true );
    echo $field;
  } else if ( $column_name == 'head_slider_description' ) {
    $field = get_post_meta( $post_id, "head_slider_description", true );
    echo $field;
  } else if ( $column_name == 'head_slider_image' ) {
    $field = get_post_meta( $post_id, "head_slider_image", true );
    $field = intval( $field );
    if ( $field > 0 ) {
      $field = wp_get_attachment_image_src( $field, 'thumbnail' );
      if ( is_array( $field ) && count( $field ) > 0 ) {
        $field = $field[0];
        echo "<img style='width:50px;height: 50px;' src='{$field}'/>";
      }
    }
  }

}

add_action( 'init', 'presentation_slider');
function presentation_slider() {

  $labels = array(
    'name'               => "Presentation slider",
    'singular_name'      => "Presentation slider",
    'menu_name'          => "Presentation slider",
    'name_admin_bar'     => "Presentation slider",
    'add_new'            => "Add New",
    'add_new_item'       => "Add New Slide",
    'new_item'           => "New Slide",
    'edit_item'          => "Edit Slider Item",
    'view_item'          => "View Slider Item",
    'all_items'          => "All Slider Items",
    'search_items'       => "Search Slider Items",
  );

  $args = array(
    'labels'             => $labels,
    'description'        => "Presentation slider post type",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'presentation_slider' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', )
  );

  register_post_type( 'presentation_slider', $args );

}


add_filter( 'manage_presentation_slider_posts_columns', 'presentation_slider_custom_table_head' );
function presentation_slider_custom_table_head( $defaults ) {
  $defaults['presentation_slider_title']         = 'Title';
  $defaults['presentation_slider_description']          = 'Description';
  $defaults['presentation_slider_text']               = 'Text';
  $defaults['presentation_slider_image']         = 'Image';

  unset( $defaults["date"] );
  unset( $defaults["title"] );

  return $defaults;
}

add_action( 'manage_presentation_slider_posts_custom_column', 'presentation_slider_custom_table_content', 10, 2 );
function presentation_slider_custom_table_content( $column_name, $post_id ) {

  if ( $column_name == 'presentation_slider_title' ) {
    $field = get_post_meta( $post_id, "presentation_slider_title", true );
    echo $field;
  } else if ( $column_name == 'presentation_slider_description' ) {
    $field = get_post_meta( $post_id, "presentation_slider_description", true );
    echo $field;
  } else if ( $column_name == 'presentation_slider_image' ) {
    $field = get_post_meta($post_id, "presentation_slider_image", TRUE);
    $field = intval($field);
  } else if ( $column_name == 'presentation_slider_text' ) {
      $field = get_post_meta( $post_id, "presentation_slider_text", true );
      echo $field;
    }
    if ( $field > 0 ) {
      $field = wp_get_attachment_image_src( $field, 'thumbnail' );
      if ( is_array( $field ) && count( $field ) > 0 ) {
        $field = $field[0];
        echo "<img style='width:50px;height: 50px;' src='{$field}'/>";
      }
    }
  }

add_action( 'init', 'success_story');
function success_story() {

  $labels = array(
    'name'               => "Success stories",
    'singular_name'      => "Success stories",
    'menu_name'          => "Success stories",
    'name_admin_bar'     => "Success stories",
    'add_new'            => "Add New",
    'add_new_item'       => "Add New Story",
    'new_item'           => "New Story",
    'edit_item'          => "Edit Story",
    'view_item'          => "View Story",
    'all_items'          => "All Stories",
    'search_items'       => "Search Stories",
  );

  $args = array(
    'labels'             => $labels,
    'description'        => "Success stories post type",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'success_story' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title')
  );

  register_post_type( 'success_story', $args );

}


add_filter( 'manage_success_story_posts_columns', 'success_story_custom_table_head' );
function success_story_custom_table_head( $defaults ) {
  $defaults['success_story_text']               = 'Text';
  $defaults['success_story_image']         = 'Image';

  unset( $defaults["date"] );
  unset( $defaults["title"] );

  return $defaults;
}

add_action( 'manage_success_story_posts_custom_column', 'success_story_custom_table_content', 10, 2 );
function success_story_custom_table_content( $column_name, $post_id ) {

  if ( $column_name == 'success_story_title' ) {
  }  else if ( $column_name == 'success_story_image' ) {
    $field = get_post_meta($post_id, "success_story_image", TRUE);
    $field = intval($field);
  } else if ( $column_name == 'success_story_text' ) {
    $field = get_post_meta( $post_id, "success_story_text", true );
    echo $field;
  }
  if ( $field > 0 ) {
    $field = wp_get_attachment_image_src( $field, 'thumbnail' );
    if ( is_array( $field ) && count( $field ) > 0 ) {
      $field = $field[0];
      echo "<img style='width:50px;height: 50px;' src='{$field}'/>";
    }
  }
}
