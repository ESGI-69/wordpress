<?php /* Template Name: Services */ ?>

<?php get_header('dark') ?>
<h1 class="page-title"><?php the_title() ?></h1>
<?php include('template-parts/our-services.php'); ?>
<div class="page-content">
  <?php the_content() ?>
</div>
<img class="image-service" src="<?= get_theme_mod('image_services_page') ?>" alt="">

<?php get_footer() ?>