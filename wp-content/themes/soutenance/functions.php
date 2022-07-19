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
    'title'      => __('Site Identity bis', 'soutenance'),
    'priority'   => 30,
  ));

  $wp_customize->add_setting('soutenance_logo-bis', array());
  $wp_customize->add_setting('soutenance_copyright', array());
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

  $wp_customize->add_control('soutenance_copyright', array(
    'label' => 'Copyright',
    'type' => 'text',
    'section' => 'soutenance_identity_bis',
    'settings' => 'soutenance_copyright',
  ));

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

  $wp_customize->add_panel('team_panel', array(
    'title' => 'Team',
    'description' => 'Manage your team',
    'priority' => 40,
  ));

  $wp_customize->add_section('ceo', array(
    'title' => 'CEO',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_ceo', array());
  $wp_customize->add_setting('email_ceo', array());
  $wp_customize->add_setting('photo_ceo', array());

  $wp_customize->add_control('phone_ceo', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'ceo',
    'settings' => 'phone_ceo',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_ceo', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'ceo',
    'settings' => 'email_ceo',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_ceo',
      array(
        'label'      => 'Photo',
        'section'    => 'ceo',
        'settings'   => 'photo_ceo',
      )
    )
  );

  $wp_customize->add_section('designer', array(
    'title' => 'Designer',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_designer', array());
  $wp_customize->add_setting('email_designer', array());
  $wp_customize->add_setting('photo_designer', array());

  $wp_customize->add_control('phone_designer', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'designer',
    'settings' => 'phone_designer',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_designer', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'designer',
    'settings' => 'email_designer',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_designer',
      array(
        'label'      => 'Photo',
        'section'    => 'designer',
        'settings'   => 'photo_designer',
      )
    )
  );

  $wp_customize->add_section('eventp', array(
    'title' => 'Event planner',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_eventp', array());
  $wp_customize->add_setting('email_eventp', array());
  $wp_customize->add_setting('photo_eventp', array());

  $wp_customize->add_control('phone_eventp', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'eventp',
    'settings' => 'phone_eventp',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_eventp', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'eventp',
    'settings' => 'email_eventp',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_eventp',
      array(
        'label'      => 'Photo',
        'section'    => 'eventp',
        'settings'   => 'photo_eventp',
      )
    )
  );

  $wp_customize->add_section('manager', array(
    'title' => 'Manager',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_manager', array());
  $wp_customize->add_setting('email_manager', array());
  $wp_customize->add_setting('photo_manager', array());

  $wp_customize->add_control('phone_manager', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'manager',
    'settings' => 'phone_manager',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_manager', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'manager',
    'settings' => 'email_manager',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_manager',
      array(
        'label'      => 'Photo',
        'section'    => 'manager',
        'settings'   => 'photo_manager',
      )
    )
  );

}
add_action('customize_register', 'soutenance_customize_register');
