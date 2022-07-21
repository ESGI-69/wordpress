<div class="post-list-wrapper">
	<?php
	if(!isset($paged)){
		$paged = (get_query_var('paged')) ? absint( get_query_var( 'paged' ) ) : 1;
	}
	

	$args = [
		'post_type' => 'post',
		'posts_per_page' => get_option( 'posts_per_page' ),
		'post_status' => 'publish',
		'paged' => $paged
	];

	$the_query = new WP_Query($args);

	if($the_query->have_posts()){
		echo '<ul class="post-list">';
		while($the_query->have_posts()){
			$the_query->the_post();
			$post = get_post();
			echo '<li><a href="' . get_permalink($post->ID) . '">';
			echo '<article>';
      echo '<img src="' . get_the_post_thumbnail_url($post->ID) . '" alt="" style="max-width: -webkit-fill-available;">';
			echo '<h2>' . $post->post_title . '</h2>';
			echo '<p>'. $post->post_content, 0, 200 .'</p>';
			echo '</article></a></li>';
		}
		echo '</ul>';
	}
	echo '<div class="post-list-pagination">';
	echo paginate_links([
		'base' => get_permalink(get_option('page_for_posts')) . '%_%', 
		'total' => $the_query->max_num_pages,
		'current' => $paged
	]);
	echo '</div>';
	?>
</div>












