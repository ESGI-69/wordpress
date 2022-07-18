<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="site-header" class="site-header">
    <div id="hidden-menu" class="hidden-menu">
    <button id="closebtn" class="site-header__button-nav">
      X
    </button>
      <?php
      // Afficher le menu principal
      if (has_nav_menu('primary_menu')) {
        wp_nav_menu([
          'theme_location' => 'primary_menu',
          'container' => 'nav',
          'container_class' => 'main-nav'
        ]);
      }
      ?>
    </div>
    <figure class="site-header__figure">
      <?= get_custom_logo() ?>
    </figure>
    <button id="burgerMenu" class="site-header__button-nav">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="40" height="40" fill="#050A3A" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </header>