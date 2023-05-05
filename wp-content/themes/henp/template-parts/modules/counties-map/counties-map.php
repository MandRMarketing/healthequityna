<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
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
<section <?= $id; ?> class="section-wrap counties-map <?= $section_classes; ?>">
    <div class="counties-map__content container">
        <?= $content ?>
    </div>
    <div class="counties-map__container container">
    </div>
</section>