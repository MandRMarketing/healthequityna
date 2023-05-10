<?php
add_action('wp_head', 'blog_single_schema');
get_header();
?>
<main id="primary-wrap" class="primary-content">
	<?php if (have_posts()) : while (have_posts()) : the_post();
			$id = get_the_ID();
	?>
			<article id="post-<?= $id ?>" <?php post_class('post post-holder single-post'); ?>>
				<section class="section-wrap single-post-meta">
					<div class="container">
						<?php
						$blog_page_id = get_option('page_for_posts');
						if ($blog_page_id) :
						?>
							<div class="breadcrumbs">
								<a href="<?= get_the_permalink($blog_page_id); ?>">
									<span class="ikes-chevron-left" aria-hidden="true"></span>
									Back to News</a>
							</div>
						<?php
						endif;
						?>
						<img class="blog-logo" src="/wp-content/themes/henp/assets/images/henp.svg" alt="blog logo">
						<div class="post-meta">
							<h2><?= the_title(); ?></h2>
							<div class="post-socials">
								<p>Share this Post</p>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-facebook" aria-hidden="true"></i>
								</a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-linkedin" aria-hidden="true"></i>
								</a>
								<a href="https://twitter.com/intent/tweet?text=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-twitter" aria-hidden="true"></i>
								</a>
							</div>
							<time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('F j, Y'); ?></time>
							<h4>Author: <?= get_the_author() ?> </h4>
							<!-- <?= blog_tags($id); ?> -->
						</div>
						<div class="post-content">
							<?php the_post_thumbnail() ?>
							<?php the_content(); ?>
						</div>
						<div class="post-bottom-meta">
							<div class="post-categories">
								<?php
								$categories = get_the_category();
								if ($categories) :
									foreach ($categories as $category) :
										$category_string = $category->name;
										$category_slug = $category->slug;
								?>
										<p><a href="/category/<?= $category_slug ?>"><?= $category_string ?></a></p>
								<?php
									endforeach;
								endif;
								?>
							</div>
							<div class="post-tags">
								<?php
								$tags = get_the_tags();
								if ($tags) :
									foreach ($tags as $tag) :
										$tag_string = $tag->name;
										$tag_slug = $tag->slug;
								?>
										<p><a href="/category/<?= $tag_slug ?>"><?= $tag_string ?></a></p>
								<?php
									endforeach;
								endif;
								?>
							</div>
							<div class="post-socials">
								<p>Share this Post</p>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-facebook" aria-hidden="true"></i>
								</a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-linkedin" aria-hidden="true"></i>
								</a>
								<a href="https://twitter.com/intent/tweet?text=<?= get_the_permalink() ?>" target="_blank" rel="norefferer"> <i class="ikes-twitter" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<!-- <?= blog_categories(); ?> -->
						<!-- <?= blog_tags(); ?> -->
						<?php
						$blog_page_id = get_option('page_for_posts');
						if ($blog_page_id) :
						?>
							<div id="breadcrumbs-bottom" class="breadcrumbs">
								<a href="<?= get_the_permalink($blog_page_id); ?>">
									<span class="ikes-chevron-left" aria-hidden="true"></span>
									Back to News</a>
							</div>
						<?php
						endif;
						?>
					</div>
				</section>
				<section class="related-articles curve-top-left">
					<div class="related-articles__container container">
						<div class="related-articles__header">
							<h3>Similar Articles</h3>
							<a class="btn" href="/news">View All Articles</a>
						</div>
						<div class="related-articles__articles">
							<?php
							$args = array(
								'post_type'         => 'post',
								'posts_per_page'     => 4,
								'is_paged' => false,
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
							);

							$articles_query = new WP_Query($args);

							// var_dump($portfolio_query->have_posts());
							if ($articles_query->have_posts()) :
								while ($articles_query->have_posts()) : $articles_query->the_post();
									// Skip the featured post that was already displayed
									if (in_category('featured')) {
										continue;
									} else {
										get_template_part('template-parts/posts/blog-listing', null, array('id' => get_the_ID()));
									}
							?>
								<?php
								endwhile;
							else :
								?>
						</div>
					<?php
							endif;
							wp_reset_postdata();
					?>
					</div>
				</section>
				<!-- <?php get_template_part('template-parts/advanced-layout'); ?> -->
			</article>
	<?php endwhile;
	endif; ?>
</main>
<?php get_footer(); ?>