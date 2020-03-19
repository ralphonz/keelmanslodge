<?php
namespace App;

/**
 * Theme customizer
 * @since 1.0
 * @return string
 */

add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
    // Add a section for our soical network url settings
    $wp_customize->add_section( 'social_icons', [
        'title'      => __( 'Social Network URLs', 'keelmans-lodge-theme' ),
        'priority'   => 30,
    ]);
     //Add a setting for each social network
    $wp_customize->add_setting( 'facebook_url', [
        'url'   => 'https://facebook.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'twitter_url', [
        'url'   => 'https://twitter.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);
    $wp_customize->add_setting( 'google_url', [
        'url'   => 'https://google.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'linkedin_url', [
        'url'   => 'https://linkedin.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'pinterest_url', [
        'url'   => 'https://pinterest.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_setting( 'instagram_url', [
        'url'   => 'https://instagram.com/',
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    //Add all the input fields for social network urls
    $wp_customize->add_control( 'facebook_url_control', [
        'label'    => __( 'Facebook URL', 'keelmans-lodge-theme' ),
        'section'  => 'social_icons',
        'settings' => 'facebook_url',
        'type'     => 'url',
    ]);
    $wp_customize->add_control( 'twitter_url_control', [
        'label'    => __( 'Twitter Username', 'keelmans-lodge-theme' ),
        'section'  => 'social_icons',
        'settings' => 'twitter_url',
        'type'     => 'text',
    ]);
    // $wp_customize->add_control( 'google_url_control', [
    //     'label'    => __( 'Google URL', 'keelmans-lodge-theme' ),
    //     'section'  => 'social_icons',
    //     'settings' => 'google_url',
    //     'type'     => 'url',
    // ]);
    // $wp_customize->add_control( 'linkedin_url_control', [
    //     'label'    => __( 'LinkedIn URL', 'keelmans-lodge-theme' ),
    //     'section'  => 'social_icons',
    //     'settings' => 'linkedin_url',
    //     'type'     => 'url',
    // ]);
    // $wp_customize->add_control( 'pinterest_url_control', [
    //     'label'    => __( 'Pinterest URL', 'keelmans-lodge-theme' ),
    //     'section'  => 'social_icons',
    //     'settings' => 'pinterest_url',
    //     'type'     => 'url',
    // ]);
    $wp_customize->add_control( 'instagram_url_control', [
        'label'    => __( 'Instagram URL', 'keelmans-lodge-theme' ),
        'section'  => 'social_icons',
        'settings' => 'instagram_url',
        'type'     => 'url',
    ]);

    // Add a section for the contact info settings
    $wp_customize->add_section( 'contact_info', [
        'title'      => __( 'Contact Info', 'keelmans-lodge-theme' ),
        'priority'   => 30,
    ]);

    //Add a setting for the book a room url
    $wp_customize->add_setting( 'quick_contact_url', [
      'url'   => '',
      'transport' => 'postMessage',
      'type' => 'option',
      'sanitize_callback' => 'absint',
    ]);
    //Add a setting for the business address
    $wp_customize->add_setting( 'address', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    //Add a setting for the phone numbers
    $wp_customize->add_setting( 'phone1', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);
    $wp_customize->add_setting( 'phone2', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ]);
    // Add a setting for the pub url
    $wp_customize->add_setting( 'pub_brewery_url', [
        'transport' => 'postMessage',
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    //Add an input field for the address
    $wp_customize->add_control( 'address', [
        'label' => __( 'Address', 'keelmans-lodge-theme'),
        'section' => 'contact_info',
        'settings' => 'address',
        'type' => 'textarea',
    ]);
    //Add the phone number input fields
    $wp_customize->add_control( 'phone1_control', [
        'label'    => __( 'Phone Number 1', 'keelmans-lodge-theme' ),
        'section'  => 'contact_info',
        'settings' => 'phone1',
        'type'     => 'text',
    ]);
    $wp_customize->add_control( 'phone2_control', [
        'label'    => __( 'Phone Number 2', 'keelmans-lodge-theme' ),
        'section'  => 'contact_info',
        'settings' => 'phone2',
        'type'     => 'text',
    ]);
    //Add a dropdown for the booking link page
    $wp_customize->add_control( 'quick_contact_url_control',[
      'label'    => __( 'Booking Page Link', 'keelmans-lodge-theme' ),
      'section'  => 'contact_info',
      'settings' => 'quick_contact_url',
      'type'     => 'dropdown-pages',
    ]);
    //Add the brewery and pub link url input
    $wp_customize->add_control( 'biglamp_url_control', [
        'label'    => __( 'Pub and Brewery Website Link', 'keelmans-lodge-theme' ),
        'section'  => 'contact_info',
        'settings' => 'pub_brewery_url',
        'type'     => 'url',
    ]);


});

/**
 * Customizer JS
 * @since 1.0
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
?>
