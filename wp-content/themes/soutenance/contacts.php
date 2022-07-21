<?php /* Template Name: Contacts */ ?>

<?php get_header('dark') ?>
<h1 class="page-title"><?php the_title() ?></h1>
<div class="page-content">
  <?php the_content() ?>
  <div class="team">
    <div class="location">
      <span class="title">Location</span>
      <span class="info"><?= get_theme_mod("soutenance_adresse") ?></span>
      <span class="info"><?= get_theme_mod("soutenance_code_postal") ?> <?= get_theme_mod("soutenance_ville") ?> <?= get_theme_mod("soutenance_pays") ?></span>
    </div>
    <div class="team-member">
      <span class="title"><?= get_theme_mod("name_role_fourth") ?></span>
      <span class="info"><?= get_theme_mod("phone_role_fourth") ?></span>
      <span class="info"><?= get_theme_mod("email_role_fourth") ?></span>
    </div>
    <div class="team-member">
      <span class="title"><?= get_theme_mod("name_role_one") ?></span>
      <span class="info"><?= get_theme_mod("phone_role_one") ?></span>
      <span class="info"><?= get_theme_mod("email_role_one") ?></span>
    </div>
  </div>
</div>
<div class="page-image">
  <?= get_the_post_thumbnail() ?>
</div>
<?php get_footer() ?>