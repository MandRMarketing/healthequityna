<?php
add_action('wp_head', 'blog_index_schema');
get_header();
?>

<main id="primary-wrap" class="primary-content" role="main">
	<div class="container">
		<img class="blog-logo" src="/wp-content/themes/henp/assets/images/henp.svg" alt="blog logo">
		<div class="archive-holder">
			<?php get_template_part('template-parts/title'); ?>
			<div class="filter-form-container">
				<form class="filter-form" onsubmit="handleFilterSubmit(event, 'category')">
					<label aria-hidden="true" for="category" style="display:none;">Filter by Category:</label>
					<select name="category" id="category">
						<option selected value="all">All Categories</option>
						<?php
						$categories = get_categories();
						foreach ($categories as $category) :
							if ($category->slug == 'featured') {
								continue;
							}
						?>
							<option value="<?= $category->slug ?>"><?= $category->name ?></option>
						<?php
						endforeach;
						?>
					</select>
				</form>
				<form class="filter-form" onsubmit="handleFilterSubmit(event, 'tag')">
					<label aria-hidden="true" for="tag" style="display:none;">Filter by Tag:</label>
					<select name="tag" id="tag">
						<option selected value="all">All Tags</option>
						<?php
						$tags = get_tags();
						foreach ($tags as $tag) :
						?>
							<option value="<?= $tag->slug ?>"><?= $tag->name ?></option>
						<?php
						endforeach;
						?>
					</select>
				</form>
				<form class="filter-form" onsubmit="handleFilterSubmit(event, 'archive')">
					<label aria-hidden="true" for="archive" style="display:none;">Filter by Archive:</label>
					<select name="archive" id="archive">
						<option selected value="all">Archives</option>
						<?php
						$archives = get_categories(); // ???????????????????????????????????
						foreach ($archives as $archive) :
						?>
							<option value="<?= $category->slug ?>"><?= $category->name ?></option>
						<?php
						endforeach;
						?>
					</select>
				</form>
			</div>
			<?php
			// Get the featured post
			$featured_args = array(
				'post_type' => 'post',
				'category_name' => 'featured',
				'posts_per_page' => 1
			);
			$featured_query = new WP_Query($featured_args);
			// var_dump($featured_query);
			if ($featured_query->have_posts()) :
				while ($featured_query->have_posts()) :
					$featured_query->the_post();
					$title = get_the_title();
					$link = get_the_permalink();
					$date = get_the_date();
					$content = get_the_content();
					$categories = get_the_category();
					$content = wp_strip_all_tags($content);
					$image = get_the_post_thumbnail();
					$max_length = 400; // maximum length of the truncated string
					$ellipsis = '...'; // ellipsis to be added

					if (strlen($content) > $max_length) {
						$content = substr($content, 0, $max_length) . $ellipsis;
					}
			?>
					<div class="featured-blog">
						<div class="featured-blog__title">
							<h5>Featured News Article</h5>
							<div class="featured-blog__image">
								<?= $image ?>
							</div>
						</div>
						<div class="featured-blog__content">
							<h3><?= $title ?></h3>
							<p><?= $date ?></p>
							<div class="featured-blog__content__excerpt">
								<p><?= $content ?></p>
							</div>
							<div class="featured-blog__content__categories">
								<?php foreach ($categories as $category) :
									$category_string = $category->name;
									$category_slug = $category->slug;
								?>
									<p><a href="/category/<?= $category_slug ?>"><?= $category_string ?></a></p>
								<?php endforeach; ?>
							</div>
							<a class="blog-listing__button btn-arrow" href="<?= $link; ?>">Read Article</a>
						</div>
					</div>
			<?php
				endwhile;
			endif;

			// Reset the post data to loop through the other posts
			wp_reset_postdata();
			?>
			<div id="article-posts" class="posts">
				<div id="results">
					<?php

					if ($wp_query->have_posts()) :
						while ($wp_query->have_posts()) :
							$wp_query->the_post();

							// Skip the featured post that was already displayed
							if (in_category('featured')) {
								continue;
							}

							get_template_part('template-parts/posts/blog-listing', null, array('id' => get_the_ID()));

						endwhile;
						numbered_pagination();
					else :
					?>
						<div class="no-results">
							<p>We're sorry, but there are currently no posts in this area.</p>
						</div>
					<?php
					endif;
					?>
				</div>
			</div>
		</div>
</main>
<script>
	const filterForms = document.querySelectorAll('.filter-form');
	filterForms.forEach(form => {
		form.addEventListener('submit', handleFilterSubmit);
	});

	function handleFilterSubmit(event, filterType) {
		event.preventDefault();

		if (filterType === "category") {
			// Get the selected values of the filters
			var filterCategory = document.querySelector('#category').value;

			$.ajax({
					url: '/wp-admin/admin-ajax.php',
					type: 'GET',
					data: {
						'action': 'filter_articles',
						'filterCategory': `${filterCategory}`
					},
					dataType: 'html'
				})
				.success(function(results) {
					$('#results').html(results);
				})
				.fail(function(jqXHR, textStatus) {
					console.log("Request failed: " + textStatus);
				});
		} else if (filterType === "tag") {
			// Get the selected values of the filters
			var filterTag = document.querySelector('#tag').value;

			$.ajax({
					url: '/wp-admin/admin-ajax.php',
					type: 'GET',
					data: {
						'action': 'filter_articles',
						'filterCategory': `${filterTag}`
					},
					dataType: 'html'
				})
				.success(function(results) {
					$('#results').html(results);
				})
				.fail(function(jqXHR, textStatus) {
					console.log("Request failed: " + textStatus);
				});
		} else if (filterType === "archive") {
			// Get the selected values of the filters
			var filterArchive = document.querySelector('#archive').value;

			$.ajax({
					url: '/wp-admin/admin-ajax.php',
					type: 'GET',
					data: {
						'action': 'filter_articles',
						'filterCategory': `${filterArchive}`
					},
					dataType: 'html'
				})
				.success(function(results) {
					$('#results').html(results);
				})
				.fail(function(jqXHR, textStatus) {
					console.log("Request failed: " + textStatus);
				});
		}
	}

	$(document).ready(function() {
		$('#category').change(function() {
			var parentForm = $(this).closest("form");
			if (parentForm && parentForm.length > 0)
				parentForm.submit();
		});
	});
</script>
<?php get_footer(); ?>