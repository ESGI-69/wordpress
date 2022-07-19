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
      <div class="hidden-menu__container">
        <img src="<?= get_theme_mod("soutenance_logo-bis") ?>" alt="" srcset="">
        <button id="closebtn" class="site-header__button-nav">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
            <rect x="2.13605" y="0.0147705" width="21" height="3" transform="rotate(45 2.13605 0.0147705)" fill="white" />
            <rect x="16.9706" y="2.12134" width="21" height="3" transform="rotate(135 16.9706 2.12134)" fill="white" />
          </svg>
        </button>
      </div>
      <div class="nav">
        <span class="search">
          Or try Search
        </span>
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
    </div>
    <figure class="site-header__figure">
      <?= get_custom_logo() ?>
    </figure>
    <button id="burgerMenu" class="site-header__button-nav">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="10" viewBox="0 0 40 10" fill="none">
        <rect width="40" height="3" fill="#050A3A" />
        <rect x="19" y="7" width="21" height="3" fill="#050A3A" />
      </svg>
    </button>
  </header>