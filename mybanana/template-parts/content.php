 <div class="post__wrapper">
 	<button class="delete_post" data-id="<?php the_id() ?>">&#215;</button>
 	<h1> <?php the_title() ?> </h1>
 	<h3> <?php the_content() ?></h3>
 	<p><?php echo get_the_date() ?> </p>
 	<?php
		$categories = get_the_category();
		if ($categories) {
			echo '<div class="post-categories">';
			foreach ($categories as $category) {
				echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
			}
			echo '</div>';
		}
		?>
 </div>