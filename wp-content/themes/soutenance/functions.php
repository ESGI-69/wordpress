<?php

add_theme_support('custom-logo');

add_theme_support( 'post-thumbnails' );

function registerMenus()
{
  register_nav_menus(array(
    'primary_menu' => __('Primary Menu', 'text_domain'),
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

  $wp_customize->add_section('role_one', array(
    'title' => 'Role One',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_role_one', array());
  $wp_customize->add_setting('email_role_one', array());
  $wp_customize->add_setting('photo_role_one', array());
  $wp_customize->add_setting('name_role_one', array());

  $wp_customize->add_control('phone_role_one', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'role_one',
    'settings' => 'phone_role_one',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_role_one', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'role_one',
    'settings' => 'email_role_one',
  ));

  $wp_customize->add_control('name_role_one', array(
    'label' => 'Role name',
    'type' => 'text',
    'section' => 'role_one',
    'settings' => 'name_role_one',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_role_one',
      array(
        'label'      => 'Photo',
        'section'    => 'role_one',
        'settings'   => 'photo_role_one',
      )
    )
  );

  $wp_customize->add_section('role_two', array(
    'title' => 'Role Two',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_role_two', array());
  $wp_customize->add_setting('email_role_two', array());
  $wp_customize->add_setting('name_role_two', array());
  $wp_customize->add_setting('photo_role_two', array());

  $wp_customize->add_control('phone_role_two', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'role_two',
    'settings' => 'phone_role_two',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_role_two', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'role_two',
    'settings' => 'email_role_two',
  ));

  $wp_customize->add_control('name_role_two', array(
    'label' => 'Role name',
    'type' => 'text',
    'section' => 'role_two',
    'settings' => 'name_role_two',
  ));


  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_role_two',
      array(
        'label'      => 'Photo',
        'section'    => 'role_two',
        'settings'   => 'photo_role_two',
      )
    )
  );

  $wp_customize->add_section('role_three', array(
    'title' => 'Role Three',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_role_three', array());
  $wp_customize->add_setting('email_role_three', array());
  $wp_customize->add_setting('photo_role_three', array());
  $wp_customize->add_setting('name_role_three', array());

  $wp_customize->add_control('phone_role_three', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'role_three',
    'settings' => 'phone_role_three',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_role_three', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'role_three',
    'settings' => 'email_role_three',
  ));

  $wp_customize->add_control('name_role_three', array(
    'label' => 'Role Name',
    'type' => 'text',
    'section' => 'role_three',
    'settings' => 'name_role_three',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_role_three',
      array(
        'label'      => 'Photo',
        'section'    => 'role_three',
        'settings'   => 'photo_role_three',
      )
    )
  );

  $wp_customize->add_section('role_fourth', array(
    'title' => 'Role Fourth',
    'priority' => 10,
    'panel' => 'team_panel',
  ));

  $wp_customize->add_setting('phone_role_fourth', array());
  $wp_customize->add_setting('email_role_fourth', array());
  $wp_customize->add_setting('photo_role_fourth', array());
  $wp_customize->add_setting('name_role_fourth', array());

  $wp_customize->add_control('phone_role_fourth', array(
    'label' => 'Phone Number',
    'type' => 'tel',
    'section' => 'role_fourth',
    'settings' => 'phone_role_fourth',
    'input_attrs' => array(
      'placeholder' => '+33 6 XX XX XX XX',
      'pattern' => "^0[1-9]([-. ]?[0-9]{2}){4}$"
    )
  ));

  $wp_customize->add_control('email_role_fourth', array(
    'label' => 'Email',
    'type' => 'email',
    'section' => 'role_fourth',
    'settings' => 'email_role_fourth',
  ));

  $wp_customize->add_control('name_role_fourth', array(
    'label' => 'Role Name',
    'type' => 'text',
    'section' => 'role_fourth',
    'settings' => 'name_role_fourth',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'photo_role_fourth',
      array(
        'label'      => 'Photo',
        'section'    => 'role_fourth',
        'settings'   => 'photo_role_fourth',
      )
    )
  );

  $wp_customize->add_panel('desc_panel', array(
    'title' => 'Company description',
    'description' => 'Describe your company',
    'priority' => 40,
  ));

  $wp_customize->add_section('desc_imgs', array(
    'title' => 'Image',
    'priority' => 10,
    'panel' => 'desc_panel',
  ));

  $wp_customize->add_setting('img_desc', array());

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img_desc',
      array(
        'label'      => 'Photo',
        'section'    => 'desc_imgs',
        'settings'   => 'img_desc',
      )
    )
  );

  $wp_customize->add_section('desc_first', array(
    'title' => 'First paragraph',
    'priority' => 10,
    'panel' => 'desc_panel',
  ));

  $wp_customize->add_setting('title_desc_first', array());
  $wp_customize->add_setting('paragraph_desc_first', array());

  $wp_customize->add_control('title_desc_first', array(
    'label' => 'Title',
    'type' => 'text',
    'section' => 'desc_first',
    'settings' => 'title_desc_first'
  ));

  $wp_customize->add_control('paragraph_desc_first', array(
    'label' => 'Paragraph',
    'type' => 'textarea',
    'section' => 'desc_first',
    'settings' => 'paragraph_desc_first'
  ));

  $wp_customize->add_section('desc_second', array(
    'title' => 'Second paragraph',
    'priority' => 20,
    'panel' => 'desc_panel',
  ));

  $wp_customize->add_setting('title_desc_second', array());
  $wp_customize->add_setting('paragraph_desc_second', array());

  $wp_customize->add_control('title_desc_second', array(
    'label' => 'Title',
    'type' => 'text',
    'section' => 'desc_second',
    'settings' => 'title_desc_second'
  ));

  $wp_customize->add_control('paragraph_desc_second', array(
    'label' => 'Paragraph',
    'type' => 'textarea',
    'section' => 'desc_second',
    'settings' => 'paragraph_desc_second'
  ));

  $wp_customize->add_section('desc_third', array(
    'title' => 'Third paragraph',
    'priority' => 30,
    'panel' => 'desc_panel',
  ));

  $wp_customize->add_setting('title_desc_third', array());
  $wp_customize->add_setting('paragraph_desc_third', array());

  $wp_customize->add_control('title_desc_third', array(
    'label' => 'Title',
    'type' => 'text',
    'section' => 'desc_third',
    'settings' => 'title_desc_third'
  ));

  $wp_customize->add_control('paragraph_desc_third', array(
    'label' => 'Paragraph',
    'type' => 'textarea',
    'section' => 'desc_third',
    'settings' => 'paragraph_desc_third'
  ));
  
  $wp_customize->add_section('desc_third', array(
    'title' => 'Third paragraph',
    'priority' => 30,
    'panel' => 'desc_panel',
  ));

  $wp_customize->add_panel('our_services', array(
    'title' => 'Our services',
    'description' => 'Describe your services',
    'priority' => 40,
  ));

  $wp_customize->add_section('images_services_page', array(
    'title' => 'Image for the Page',
    'priority' => 50,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('image_services_page', array());

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_services_page',
      array(
        'label'      => 'Image',
        'section'    => 'images_services_page',
        'settings'   => 'image_services_page',
      )
    )
  );

  $wp_customize->add_section('first_services_block', array(
    'title' => 'First Block',
    'priority' => 30,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('link_first_services', array());
  $wp_customize->add_setting('image_first_services', array());
  $wp_customize->add_setting('text_first_services', array());

  $wp_customize->add_control('link_first_services', array(
    'label' => 'Page Link',
    'type' => 'dropdown-pages',
    'section' => 'first_services_block',
    'settings' => 'link_first_services'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_first_services',
      array(
        'label'      => 'Image',
        'description' => 'Leave empty if you only want the text',
        'section'    => 'first_services_block',
        'settings'   => 'image_first_services',
      )
    )
  );
  $wp_customize->add_control('text_first_services', array(
    'label' => 'Text',
    'description' => 'Leave empty if you only want the image',
    'type' => 'text',
    'section' => 'first_services_block',
    'settings' => 'text_first_services'
  ));

  $wp_customize->add_section('fourth_services_block', array(
    'title' => 'First Block',
    'priority' => 30,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('link_fourth_services', array());
  $wp_customize->add_setting('image_fourth_services', array());
  $wp_customize->add_setting('text_fourth_services', array());

  $wp_customize->add_control('link_fourth_services', array(
    'label' => 'Page Link',
    'type' => 'dropdown-pages',
    'section' => 'fourth_services_block',
    'settings' => 'link_fourth_services'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_fourth_services',
      array(
        'label'      => 'Image',
        'description' => 'Leave empty if you only want the text',
        'section'    => 'second_services_block',
        'settings'   => 'image_second_services',
      )
    )
  );
  $wp_customize->add_control('text_second_services', array(
    'label' => 'Text',
    'description' => 'Leave empty if you only want the image',
    'type' => 'text',
    'section' => 'second_services_block',
    'settings' => 'text_second_services'
  ));


  $wp_customize->add_section('second_services_block', array(
    'title' => 'Second Block',
    'priority' => 30,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('link_second_services', array());
  $wp_customize->add_setting('image_second_services', array());
  $wp_customize->add_setting('text_second_services', array());

  $wp_customize->add_control('link_second_services', array(
    'label' => 'Page Link',
    'type' => 'dropdown-pages',
    'section' => 'second_services_block',
    'settings' => 'link_second_services'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_second_services',
      array(
        'label'      => 'Image',
        'description' => 'Leave empty if you only want the text',
        'section'    => 'second_services_block',
        'settings'   => 'image_second_services',
      )
    )
  );
  $wp_customize->add_control('text_second_services', array(
    'label' => 'Text',
    'description' => 'Leave empty if you only want the image',
    'type' => 'text',
    'section' => 'second_services_block',
    'settings' => 'text_second_services'
  ));

  $wp_customize->add_section('third_services_block', array(
    'title' => 'Third Block',
    'priority' => 30,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('link_third_services', array());
  $wp_customize->add_setting('image_third_services', array());
  $wp_customize->add_setting('text_third_services', array());

  $wp_customize->add_control('link_third_services', array(
    'label' => 'Page Link',
    'type' => 'dropdown-pages',
    'section' => 'third_services_block',
    'settings' => 'link_third_services'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_third_services',
      array(
        'label'      => 'Image',
        'description' => 'Leave empty if you only want the text',
        'section'    => 'third_services_block',
        'settings'   => 'image_third_services',
      )
    )
  );
  $wp_customize->add_control('text_third_services', array(
    'label' => 'Text',
    'description' => 'Leave empty if you only want the image',
    'type' => 'text',
    'section' => 'third_services_block',
    'settings' => 'text_third_services'
  ));

  $wp_customize->add_section('fourth_services_block', array(
    'title' => 'Fourth Block',
    'priority' => 30,
    'panel' => 'our_services',
  ));

  $wp_customize->add_setting('link_fourth_services', array());
  $wp_customize->add_setting('image_fourth_services', array());
  $wp_customize->add_setting('text_fourth_services', array());

  $wp_customize->add_control('link_fourth_services', array(
    'label' => 'Page Link',
    'type' => 'dropdown-pages',
    'section' => 'fourth_services_block',
    'settings' => 'link_fourth_services'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image_fourth_services',
      array(
        'label'      => 'Image',
        'description' => 'Leave empty if you only want the text',
        'section'    => 'fourth_services_block',
        'settings'   => 'image_fourth_services',
      )
    )
  );
  $wp_customize->add_control('text_fourth_services', array(
    'label' => 'Text',
    'description' => 'Leave empty if you only want the image',
    'type' => 'text',
    'section' => 'fourth_services_block',
    'settings' => 'text_fourth_services'
  ));

  $wp_customize->add_section('partners_section', array(
    'title' => 'Partners',
    'priority' => 40,
  ));
  $wp_customize->add_setting('partners_first', array());
  $wp_customize->add_setting('partners_second', array());
  $wp_customize->add_setting('partners_third', array());
  $wp_customize->add_setting('partners_fourth', array());
  $wp_customize->add_setting('partners_fifth', array());
  $wp_customize->add_setting('partners_sixth', array());

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_first',
      array(
        'label'      => 'First Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_first',
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_second',
      array(
        'label'      => 'Second Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_second',
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_third',
      array(
        'label'      => 'Third Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_third',
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_fourth',
      array(
        'label'      => 'Fourth Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_fourth',
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_fifth',
      array(
        'label'      => 'Fifth Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_fifth',
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'partners_sixth',
      array(
        'label'      => 'Sixth Partners',
        'section'    => 'partners_section',
        'settings'   => 'partners_sixth',
      )
    )
  );

}
add_action('customize_register', 'soutenance_customize_register');
