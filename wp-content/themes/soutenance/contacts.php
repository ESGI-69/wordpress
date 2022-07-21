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

  <div class="form">
    <h2>Write us here</h2>
    <p>Don't be shy.</p>
    <form action="" class="contact">
      <input type="text" name="subject" id="subject" placeholder="subject">
      <div class="coor">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="tel" name="tel" id="tel" placeholder="Phone">
      </div>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Content"></textarea>
    </form>
  </div>
</div>
<div class="page-image">
  <?= get_the_post_thumbnail() ?>
</div>
<?php get_footer() ?>