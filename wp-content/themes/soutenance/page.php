<?php get_header() ?>
<h1 class="page-title"><?php the_title() ?></h1>
<div class="page-image">
  <?= get_the_post_thumbnail() ?>
</div>
<div class="page-content">
  <?php the_content() ?>
</div>
<?php include('template-parts/desc-block.php'); ?>
<?php include('template-parts/our-services.php'); ?>
<?php include('template-parts/our-partners.php'); ?>
<?php get_footer() ?>