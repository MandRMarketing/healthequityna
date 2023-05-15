<?php

function display_single_blog_listing($id)
{
    get_template_part('template-parts/posts/blog-listing', null, array('id' => $id));
}

function blog_index_schema()
{
    //Grab the variables we need from the 'Blog Settings' section on the WP Admin Options tab
    $blogTitle = get_option('options_mandr_blog_title');

    //$blogGenre = get_option('options_mandr_blog_genre');
    //$blogCreationDate = get_option('options_mandr_blog_creation_date');
    $blogLogo = get_option('options_mandr_blog_logo');
    $blogLogo = wp_get_attachment_image_src($blogLogo, 'post-thumbnail');
    $blogLogo = $blogLogo[0];
    $blogDefaultPostThumbnail = get_option('options_mandr_blog_default_image');
    $blogDefaultPostThumbnail = wp_get_attachment_image_src($blogDefaultPostThumbnail, 'post-thumbnail');
    $blogDefaultPostThumbnail = $blogDefaultPostThumbnail[0];

    //Grab the variables we need from anywhere else
    $siteTitle = get_option('blogname');
    $postsPerPage = get_option('posts_per_page');
    $pageForPosts = get_site_url();
    $pageForPosts .= '/';
    $pageForPosts .= get_post_field('post_name', get_option('page_for_posts'));
?>
    <script type='application/ld+json'>
        {
            "@context": "http://schema.org",
            "@type": "Blog",
            "headline": "<?= $blogTitle ?>",
            "image": "<?= $blogDefaultPostThumbnail ?>",
            "creator": {
                "@type": "Organization",
                "name": "<?= $siteTitle ?>",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?= $blogLogo ?>"
                }
            },
            "blogpost": [
                <?php
                if (have_posts()) : $count = 1;
                    global $wp_query;
                    $postCount =  count($wp_query->get_posts());
                    while (have_posts()) : the_post();
                        if (get_the_post_thumbnail_url()) {
                            $thumbnailURL = get_the_post_thumbnail_url();
                        } else {
                            $thumbnailURL =  $blogDefaultPostThumbnail;
                        }
                ?> {
                            "@type": "BlogPosting",
                            "mainEntityOfPage": {
                                "@type": "WebPage",
                                "@id": "<?= $pageForPosts ?>"
                            },
                            "headline": "<?= get_the_title() ?>",
                            "image": {
                                "@type": "ImageObject",
                                "url": "<?= $thumbnailURL ?>"
                            },
                            "datePublished": "<?= get_the_date('c') ?>",
                            "dateModified": "<?= get_the_modified_date('c') ?>",
                            "author": {
                                "@type": "Organization",
                                "name": "<?= $siteTitle ?>"
                            },
                            "publisher": {
                                "@type": "Organization",
                                "name": "<?= $siteTitle ?>",
                                "logo": {
                                    "@type": "ImageObject",
                                    "url": "<?= $blogLogo ?>"
                                }
                            },
                            "description": "<?= get_the_advanced_acf_excerpt() ?>"
                        }
                        <?php if ($count < $postCount) {
                            echo ',';
                        } ?>
                <?php
                        $count++;
                    endwhile;
                endif;
                ?>
            ]
        }
    </script>

    <script type='application/ld+json'>
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Homepage",
                    "item": "<?= bloginfo('url') ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Blog",
                    "item": "<?= $pageForPosts ?>"
                }
            ]
        }
    </script>
<?php
}

function blog_single_schema()
{
    //Grab the variables we need from the 'Blog Settings' section on the WP Admin Options tab 
    $blogLogo = get_option('options_mandr_blog_logo');
    $blogLogo = wp_get_attachment_image_src($blogLogo, 'post-thumbnail');
    $blogLogo = $blogLogo[0];
    $blogDefaultPostThumbnail = get_option('options_mandr_blog_default_image');
    $blogDefaultPostThumbnail = wp_get_attachment_image_src($blogDefaultPostThumbnail, 'full');
    $blogDefaultPostThumbnail = $blogDefaultPostThumbnail[0];

    //Grab the variables we need from anywhere else
    $siteTitle = get_option('blogname');
    $pageForPosts = get_site_url();
    $pageForPosts .= '/';
    $pageForPosts .= get_post_field('post_name', get_option('page_for_posts'));

    if (get_the_post_thumbnail_url()) {
        $thumbnailURL = get_the_post_thumbnail_url();
    } else {
        $thumbnailURL =  $blogDefaultPostThumbnail;
    }
?>
    <script type='application/ld+json'>
        {
            "@context": "http://schema.org",
            "@type": "BlogPosting",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?= $pageForPosts ?>"
            },
            "headline": "<?= get_the_title() ?>",
            "image": {
                "@type": "ImageObject",
                "url": "<?= $thumbnailURL ?>"
            },
            "datePublished": "<?= get_the_date('c') ?>",
            "dateModified": "<?= get_the_modified_date('c') ?>",
            "author": {
                "@type": "Organization",
                "name": "<?= $siteTitle ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "<?= $siteTitle ?>"
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?= $blogLogo ?>"
                }
            },
            "description": "<?= get_the_advanced_acf_excerpt() ?>"
        }
    </script>
    <?php
}


function blog_categories($id = null)
{
    $id = $id ? $id : get_the_id();

    $terms = get_the_terms($id, 'category');
    $cat_array = array();

    if ($terms) :
        ob_start();
    ?>
        <div class="cat-list">
            <?php
            foreach ($terms as $term) {
                if ($term->slug !== 'uncategorized') {
                    $cat = '<a href="' . get_site_url() . '/category/' . $term->slug . '/" rel="category tag">' . $term->name . '</a>';
                    array_push($cat_array, $cat);
                }
            }

            if (!empty($cat_array)) {
                echo 'This entry was posted in ';
            }

            foreach ($cat_array as $cat) {
                echo $cat . ' ';
            }
            ?>
        </div>
    <?php
        return ob_get_clean();
    endif;
}

function blog_tags($id = null)
{
    $id = $id ? $id : get_the_id();

    $tags = wp_get_post_tags($id);

    if ($tags) :
        ob_start();
    ?>
        <div class="tags-list">
            <p>
                <strong>Tags: </strong>
                <?php
                foreach ($tags as $tag) :
                    $tag_name = $tag->name;
                ?>
                    <span class="post-tag"><?= $tag_name; ?></span>
                <?php
                endforeach;
                ?>
            </p>
        </div>
    <?php
        return ob_get_clean();
    endif;
}

/**
 * Display numbered pagination for blog / archive
 */
function numbered_pagination($query = null)
{
    if ($query === null) {
        global $wp_query;
        $query = $wp_query;
    }

    $total = $query->max_num_pages;
    if ($total > 1) :
    ?>
        <aside class="blog-pagination">
            <nav class="blog-pagination__navigation" role="menubar" aria-label="Pagination for articles">
                <?php
                $current = max(1, get_query_var('paged'));

                $big = 999999;
                $translated = 'Page';

                echo paginate_links(array(
                    'base'                  => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'                => '&paged=%#%',
                    'current'               => $current,
                    'total'                 => $total,
                    'prev_text'             => '<span class="blog-pagination__navigation__prev ikes-arrow reverse" aria-hidden="true"></span>',
                    'next_text'             => '<span class="blog-pagination__navigation__next ikes-arrow normal" aria-hidden="true"></span>',
                    'type'                  => 'list',
                    'before_page_number'    => '<span class="screen-reader-text">' . $translated . ' </span>'
                ));
                ?>
            </nav>
            <!--.oldernewer-->
        </aside>
    <?php
    endif;
}

// Use get_the_advanced_acf_excerpt, but this is the main legwork for that function
// to get and trim excerpt from ACF content
function wp_trim_advanced_acf_excerpt($text = '', $post = null)
{
    $raw_excerpt = $text;
    if ('' == $text) {
        $post = get_post($post);
        $meta = get_post_meta($post->ID);

        if (isset($meta['page_layouts_0_column_1'])) {
            $text .= $meta['page_layouts_0_column_1'][0];
        }
        if (isset($meta['page_layouts_0_column_2'])) {
            $text .= $meta['page_layouts_0_column_2'][0];
        }
        if (isset($meta['page_layouts_1_column_1'])) {
            $text .= $meta['page_layouts_1_column_1'][0];
        }
        if (isset($meta['page_layouts_1_column_2'])) {
            $text .= $meta['page_layouts_1_column_2'][0];
        }
        if (isset($meta['page_layouts_2_column_1'])) {
            $text .= $meta['page_layouts_2_column_1'][0];
        }
        if (isset($meta['page_layouts_2_column_2'])) {
            $text .= $meta['page_layouts_2_column_2'][0];
        }

        $text = strip_shortcodes($text);
        $text = excerpt_remove_blocks($text);

        /** This filter is documented in wp-includes/post-template.php */
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);

        /* translators: Maximum number of words used in a post excerpt. */
        $excerpt_length = intval(_x('55', 'excerpt_length'));

        /**
         * Filters the maximum number of words in a post excerpt.
         *
         * @since 2.7.0
         *
         * @param int $number The maximum number of words. Default 55.
         */
        $excerpt_length = (int) apply_filters('excerpt_length', $excerpt_length);

        /**
         * Filters the string in the "more" link displayed after a trimmed excerpt.
         *
         * @since 2.9.0
         *
         * @param string $more_string The string shown within the more link.
         */
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[&hellip;]');
        $text         = wp_trim_words($text, $excerpt_length, $excerpt_more);
    }

    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

// Get excerpt from a page with ACF content if excerpt isn't defined already
function get_the_advanced_acf_excerpt($post = null)
{
    $post = get_post($post);
    if (empty($post)) {
        return '';
    }

    if (post_password_required($post)) {
        return __('There is no excerpt because this is a protected post.');
    }

    if (!empty($post->post_excerpt)) {
        return apply_filters('get_the_excerpt', $post->post_excerpt, $post);
    } else {
        return wp_trim_advanced_acf_excerpt();
    }
}

/**Function for reloadless filtering of news articles */
add_action('wp_ajax_filter_articles', 'filter_articles');
add_action('wp_ajax_nopriv_filter_articles', 'filter_articles');
function filter_articles()
{
    $filterCategory = $_GET['filterCategory'];
    $filterTag = $_GET['filterTag'];
    $filterArchive = $_GET['filterArchive'];
    if ($filterCategory) {
        if ($filterCategory == "all") {
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'     => 4,
                'is_paged' => false,
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
            );
        } else {
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'     => 4,
                'is_paged' => false,
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'category_name' => $filterCategory,

            );
        }
    } elseif ($filterTag) {
        if ($filterTag == "all") {
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'     => 4,
                'is_paged' => false,
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
            );
        } else {
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'     => 4,
                'is_paged' => false,
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'tag' => $filterTag,

            );
        }
    } elseif ($filterArchive) {
        if ($filterArchive == "all") {
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'is_paged'       => false,
                'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1,
            );
        } else {
            $month_year = explode(' ', $filterArchive);
            $month = $month_year[0]; // Extract the month from the provided value
            $year = $month_year[1]; // Extract the year from the provided value

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'is_paged'       => false,
                'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'monthnum'       => date('m', strtotime($month)),
                'year'           => $year,
            );
        }
    }

    ?>
    <div id="results">
        <?php
        $articles_query = new WP_Query($args);

        ob_start();
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
    <p>No articles found matching your filters.</p>
<?php
        endif;
        wp_reset_postdata();
?>
<?php
    // $big = 999999999; // need an unlikely integer
    // echo paginate_links(array(
    // 	'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    // 	'format' => '?paged=%#%',
    // 	'current' => max(1, get_query_var('paged')),
    // 	'prev_text' => 'Prev',
    // 	'next_text' => 'Next',
    // 	'total' => $portfolio_query->max_num_pages
    // ));

    $htmlContent = ob_get_clean();
    echo $htmlContent;
    exit;
}
