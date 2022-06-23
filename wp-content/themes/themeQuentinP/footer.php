		<div class="container">
		  <div class="row">
		    <div class="col-md-6 offset-md-3">
		      <footer id="site-footer">
		        <div class="container">
		          <small>WP-ESGI theme by YoThemes</small>
		          <?php get_search_form() ?>
		          <?php
              if (has_nav_menu('footer-menu')) {
                wp_nav_menu([
                  'theme_location' => 'footer-menu',
                  'container' => 'nav',
                  'container_class' => 'footer-nav'
                ]);
              }
              ?>
		        </div>
		      </footer>
		    </div>
		  </div>
		</div>
		<?php wp_footer(); ?>
		</body>

		</html>