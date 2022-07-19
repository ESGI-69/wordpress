<form class="search-form" action="/" method="get">
  <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Type something to search…" />
  <img src="<?= get_template_directory_uri() . "/assets/images/search-icon.png" ?>" class="icon">
</form>