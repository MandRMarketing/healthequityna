<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$content = get_sub_field('content');
$events = get_sub_field('events'); // Post Object

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
    <div class="events-feed__content container">
        <?= $content ?>
    </div>
    <div class="events-feed__container container">
        <?php
        foreach ($events as $event) :

            // $title = $event['toggle_title']; // text
            // $content = $event['toggle_content']; // WYSIWYG
        ?>
            <div class="event">

            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>