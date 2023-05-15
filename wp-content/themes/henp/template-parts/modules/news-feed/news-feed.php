<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$section_background_color = get_sub_field('section_background_color');
$section_background_color = !empty($section_background_color) ? "style=\"background-color: {$section_background_color};\"" : '';
$content = get_sub_field('content');
$articles = get_sub_field('articles'); // Post Object
$rand_id = substr(md5(microtime()), rand(0, 26), 3);

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
<section <?= $section_background_color ?> <?= $id; ?> class="section-wrap news-feed <?= $section_classes; ?>">
    <div class="news-feed__content container">
        <?= $content ?>
    </div>
    <div class="news-feed__container container">
        <div class="news-feed__container__navigation">
            <a class="btn" href="/news/">View All Articles</a>
        </div>
        <ul id="news-carousel-<?= $rand_id; ?>" class="news-feed__list slick-slider">
            <?php
            foreach ($articles as $post) :
                setup_postdata($post);
                $title = $post->post_title;
                $id = $post->id;
                $image_url = get_the_post_thumbnail_url($id);
                $date_created = $post->post_date;
                $date = DateTime::createFromFormat("Y-m-d H:i:s", $date_created);
                $formatted_date = $date->format("F j, Y");
                $article_link = get_permalink($id);
            ?>
                <li class="news-feed__list-item slick-slide">
                    <img class="news-feed__list-item__image" src="<?= $image_url ?>" alt="<?= $title ?> article image">
                    <h3><?= $title ?></h3>
                    <p><?= $formatted_date ?></p>
                    <a class="btn-arrow" href="<?= $article_link ?>">Read Article</a>
                </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </ul>
        <script>
            jQuery(window).load(function() {
                jQuery('#news-carousel-<?= $rand_id; ?>').slick({
                    autoplay: false,
                    rows: 0,
                    slide: '#news-carousel-<?= $rand_id; ?> .news-feed__list-item',
                    slidesToShow: 3.5,
                    speed: 500,
                    autoplaySpeed: 4000,
                    infinite: false,
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                        }
                    }, ]
                });
            });
        </script>
    </div>
</section>