<?php /* Template Name: AboutUs */ ?>

<?php get_header('dark') ?>
<h1 class="page-title"><?php the_title() ?></h1>
<div class="page-image">
  <?= get_the_post_thumbnail() ?>
</div>
<div class="page-content">
  <?php the_content() ?>
</div>
<?php include('template-parts/desc-block.php'); ?>
<?php include('template-parts/our-team.php'); ?>
<?php get_footer() ?>