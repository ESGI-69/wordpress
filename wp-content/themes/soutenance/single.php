<?php get_header('dark') ?>
<article class="single-post">
  <h1 class="post-title"><?php the_title() ?></h1>
  <div class="post-image">
    <?= get_the_post_thumbnail() ?>
  </div>
  <div class="post-author">
    <?php
    $author_id = $post->post_author;
    $author_name = get_the_author_meta('nickname', $author_id);
    ?>
    <img src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>">
    <?= $author_name ?>
  </div>
</article>
<?php get_footer() ?>