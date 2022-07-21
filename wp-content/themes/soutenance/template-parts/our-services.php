<div class="our-services">
  <h2>Our Services</h2>
  <div class="services">
    <a href="<?= get_permalink(get_theme_mod('link_first_services')) ?>">
      <?php if (!empty(get_theme_mod('image_first_services'))) : ?>
        <img src="<?= get_theme_mod('image_first_services') ?>" alt="">
      <?php endif; ?>
      <h3><?= get_theme_mod('text_first_services') ?></h3>
    </a>
    <a href="<?= get_permalink(get_theme_mod('link_second_services')) ?>">
      <?php if (!empty(get_theme_mod('image_second_services'))) : ?>
        <img src="<?= get_theme_mod('image_second_services') ?>" alt="">
      <?php endif; ?>
      <h3><?= get_theme_mod('text_second_services') ?></h3>
    </a>
    <a href="<?= get_permalink(get_theme_mod('link_third_services')) ?>">
      <?php if (!empty(get_theme_mod('image_third_services'))) : ?>
        <img src="<?= get_theme_mod('image_third_services') ?>" alt="">
      <?php endif; ?>
      <h3><?= get_theme_mod('text_third_services') ?></h3>
    </a>
    <a href="<?= get_permalink(get_theme_mod('link_fourth_services')) ?>">
      <?php if (!empty(get_theme_mod('image_fourth_services'))) : ?>
        <img src="<?= get_theme_mod('image_fourth_services') ?>" alt="">
      <?php endif; ?>
      <h3><?= get_theme_mod('text_fourth_services') ?></h3>
    </a>
  </div>
</div>