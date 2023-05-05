<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$title = get_sub_field('title');
$content = get_sub_field('content');

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
<section <?= $id; ?> class="section-wrap events-feed <?= $section_classes; ?>">
    <div class="events-feed__title container">
        <h2><?= $title ?></h2>
    </div>
    <div class="events-feed__container container">
        <div class="events-feed__container__content">
            <?= $content ?>
        </div>
        <div class="events-feed__container__events">
            <?php
            $events = tribe_get_events([
                'posts_per_page' => 5,
                'start_date'     => 'now',
            ]);
            var_dump($events);
            foreach ($events as $post) :
                var_dump($post);
                setup_postdata($post);
                $title = $post->post_title;
                $id = $post->id;
                // $image_url = get_the_post_thumbnail_url($id);
                // $date_created = $post->post_date;
                // $article_link = get_permalink($id);
            ?>
                <div class="events-feed__container__events__event">
                    <?= $title ?>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>