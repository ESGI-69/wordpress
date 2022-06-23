<?php get_header() ?>
<main id="site-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <?php
        global $query_string;

        $query_args = explode("&", $query_string);
        $search_query = array();

        foreach ($query_args as $key => $string) {
          $query_split = explode("=", $string);
          $search_query[$query_split[0]] = $query_split[1];
        } // foreach

        $search = new WP_Query($search_query);
        ?>
        <h1 class="page-title">Résultats de la recherche pour "<?= $search_query['s'] ?>"</h1>
        <div class="page-content">
          <?php
          global $wp_query;
          $total_results = $wp_query->found_posts;
          ?>
          <?php if ($search->have_posts()) : ?>
            <!-- Liste -->
            <?php
            $posts = $search->posts;
            $article = 0;
            $articles = [];
            $page = 0;
            $pages = [];
            foreach ($posts as $post) {
              if ($post->post_type == 'post') {
                $article++;
                $articles[] = $post;
              }
              if ($post->post_type == 'page') {
                $page++;
                $pages[] = $post;
              }
            }
            ?>
            <!-- show the number of article -->
            <p>
              <?= $total_results ?> résultat(s) trouvé(s)
              <br>
              <?= $article ?> article(s)
              <br>
              <?= $page ?> page(s)

              <!-- count only articles -->
            </p>
            <?php if ($article > 0) : ?>
              <h2>Articles</h2>
              <?php foreach ($articles as $postArticle) : ?>
                <li>
                  <a href="<?= get_permalink($postArticle) ?>">
                    <?= get_the_title($postArticle) ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
            <?= $page > 0 ? '<hr>' : '' ?>
            <?php if ($page > 0) : ?>
              <h2>Pages</h2>
              <ul>
                <?php foreach ($pages as $postPage) : ?>
                  <li>
                    <a href="<?= get_permalink($postPage) ?>">
                      <?= get_the_title($postPage) ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php else : ?>
            <p>Aucun résultat trouvé.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

</main>
<?php get_footer() ?>