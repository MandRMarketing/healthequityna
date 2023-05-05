<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$content = get_sub_field('content');
$articles = get_sub_field('articles'); // Post Object

// Can't just print an empty id and have id="", so build printout here instead
$id = !empty($section_id) ? "id=\"{$section_id}\"" : '';

// Apply padding class
$padding = get_sub_field('padding_between_sections');
$padding_top = $padding['section_padding_top'];
$padding_bottom = $padding['section_padding_bottom'];
if ($padding_top && $padding_bottom) {
    $section_classes .= ' double-padding';
} elseif ($padding_top) {
    $section_classes .= ' double-padding--top';
} elseif ($padding_bottom) {
    $section_classes .= ' double-padding--bot';
}
?>
<section <?= $id; ?> class="section-wrap news-feed <?= $section_classes; ?>">
    <div class="news-feed__content container">
        <?= $content ?>
    </div>
    <div class="news-feed__container container">
        <div class="news-feed__container__navigation">
            <div>
                forward and back
            </div>
            <a class="btn" href="/blog/">View All Articles</a>
        </div>
        <div class="news-feed__container__articles">
            <?php
            foreach ($articles as $post) :
                setup_postdata($post);
                $title = $post->post_title;
                $id = $post->id;
                $image_url = get_the_post_thumbnail_url($id);
                $date_created = $post->post_date;
                $article_link = get_permalink($id);
            ?>
                <div class="news-feed__container__articles__article">
                    <img src="<?= $image_url ?>" alt="<?= $title ?> article image" />
                    <h4><?= $title ?></h4>
                    <p><?= $date_created ?></p>
                    <a href="<?= $article_link ?>">Read Article</a>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>