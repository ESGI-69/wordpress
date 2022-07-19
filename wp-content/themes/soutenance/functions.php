<?php

add_theme_support('custom-logo');

function registerMenus()
{
  register_nav_menus(array(
    'primary_menu' => __('Primary Menu', 'text_domain'),
    'footer_menu'  => __('Footer Menu', 'text_domain'),
  ));
}

add_action('after_setup_theme', 'registerMenus', 0);

function add_theme_css_and_js()
{
  wp_enqueue_style('main-css', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js');
  $variables = [
    'ajaxURL' => admin_url('admin-ajax.php')
  ];
  wp_localize_script('main-js', 'esgi', $variables);
}
add_action('wp_enqueue_scripts', 'add_theme_css_and_js');

function soutenance_customize_register($wp_customize)
{

  $wp_customize->add_section('soutenance_identity_bis', array(
    'title'      => __('Site identity bis', 'soutenance'),
    'priority'   => 30,
  ));

  $wp_customize->add_setting('soutenance_logo-bis', array());
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'soutenance_logo-bis',
      array(
        'label'      => __('Logo bis', 'soutenance'),
        'section'    => 'soutenance_identity_bis',
        'settings'   => 'soutenance_logo-bis',
        'priority'   => 1
      )
    )
  );

  $wp_customize->add_section('soutenance_social', array(
    'title'      => __('Social Network', 'soutenance'),
    'priority'   => 30,
  ));

  $wp_customize->add_setting('soutenance_facebook', array());
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'soutenance_facebook',
      array(
        'type' => 'url',
        'label' => __('Facebook', 'soutenance'),
        'section' => 'soutenance_social',
        'settings' => 'soutenance_facebook',
        'priority' => 1,
        'input_attrs' => array(
          'placeholder' => 'https://www.facebook.com/...',
          'pattern' => "https://.*"
        )
      )
    )
  );
  $wp_customize->add_setting('soutenance_linkedin', array());
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'soutenance_linkedin',
      array(
        'type' => 'url',
        'label' => __('Linkedin', 'soutenance'),
        'section' => 'soutenance_social',
        'settings' => 'soutenance_linkedin',
        'priority' => 1,
        'input_attrs' => array(
          'placeholder' => 'https://www.linkedin.com/...',
          'pattern' => "https://.*"
        )
      )
    )
  );
}
add_action('customize_register', 'soutenance_customize_register');
