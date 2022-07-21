<?php get_header('dark'); ?>
<main id="site-content">
  <div id="post-list">
    <?php
    //Afficher les derniers articles si la page n'est pas la page d'accueil
    if (!is_front_page()) {
      include('template-parts/post-list.php');
    }
    ?>
  </div>
</main>
<?php get_footer(); ?>