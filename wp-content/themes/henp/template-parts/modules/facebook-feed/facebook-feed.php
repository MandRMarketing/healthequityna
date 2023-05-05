<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$content = get_sub_field('content');
$facebook_posts = []; // Get the posts here somehow

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
<section <?= $id; ?> class="facebook-posts <?= $section_classes; ?>">
    <div class="facebook-feed__content container">
        <?= $content ?>
    </div>
    <div class="facebook-feed__container container">
        <?php
        foreach ($facebook_posts as $facebook_post) :

            // $title = $article['toggle_title']; // text
            // $content = $article['toggle_content']; // WYSIWYG
        ?>
            <div class="facebook_post">

            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>