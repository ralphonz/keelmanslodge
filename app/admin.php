<?php

namespace App;

/**
 * Change the admin footer text
 * @since 1.0
 * @return string
 */
add_filter('admin_footer_text', function() {
  echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://blueleafstudio.net" target="_blank" title="Blueleaf Studio Web Design and Development">Blueleaf Studio Web Design and Development</a> | Hosted with 100% renewable energy at <a href="http://web-hosting.blueleafstudio.net" target="_blank" title="Blueleaf Studio Eco Web Hosting">Blueleaf Web Hosting</a></p>';
});

/**
 * Remove the wordpress version number for the admin footer for evryone except admins
 * @since 1.0
 */
add_action( 'admin_menu',function() {
  if ( ! current_user_can('manage_options') ) { // 'update_core' may be more appropriate
    remove_filter( 'update_footer', 'core_update_footer' );
  }
});

/**
 * Change the login styles
 * @since 1.0
 */
add_action( 'login_enqueue_scripts', function() {
  wp_enqueue_style( 'sage/login', asset_path('styles/login.css'), false, null);
});


add_filter( 'login_headerurl', function() {
    return home_url();
});

add_filter( 'login_headertitle', function() {
    return get_bloginfo('name');
});

/**
 * Add Sub Title style to header block
 * @since 1.0
 */
 register_block_style(
    'core/heading',
    array(
        'name'         => 'sub-title',
        'label'        => __( 'Subtitle' ),
    )
);

/**
 * Add Brand Title style to header block
 * @since 1.0
 */
 register_block_style(
    'core/heading',
    array(
        'name'         => 'brand',
        'label'        => __( 'Brand' ),
    )
);

/**
 * Add title-caption style to image block
 * @since 1.0
 */
 register_block_style(
    'core/image',
    array(
        'name'         => 'title-caption',
        'label'        => __( 'Title Caption' ),
    )
);
