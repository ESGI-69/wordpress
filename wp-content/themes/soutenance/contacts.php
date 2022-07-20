<?php /* Template Name: Contacts */ ?>

<?php get_header('dark') ?>
<h1 class="page-title"><?php the_title() ?></h1>
<div class="page-content">
  <?php the_content() ?>
  <div>
    <span>Location</span>
    <span><?= get_theme_mod("soutenance_adresse") ?></span>
    <span><?= get_theme_mod("soutenance_code_postal") ?></span>
    <span><?= get_theme_mod("soutenance_ville") ?></span>
    <span><?= get_theme_mod("soutenance_pays") ?></span>
  </div>
  <div>
    <span><?= get_theme_mod("name_role_fourth") ?></span>
    <span><?= get_theme_mod("phone_role_fourth") ?></span>
    <span><?= get_theme_mod("email_role_fourth") ?></span>
  </div>
  <div>
    <span><?= get_theme_mod("name_role_one") ?></span>
    <span><?= get_theme_mod("phone_role_one") ?></span>
    <span><?= get_theme_mod("email_role_one") ?></span>
  </div>
  <?= get_the_post_thumbnail() ?>
</div>
<?php get_footer() ?>