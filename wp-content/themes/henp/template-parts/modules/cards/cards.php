<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$display_type = get_sub_field('display_type');
$content = get_sub_field('content');
$cards = get_sub_field('cards'); // Post Object

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
<section <?= $id; ?> class="section-wrap cards <?= $section_classes; ?>">
    <div class="cards__content container">
        <?= $content ?>
    </div>
    <div class="cards__container container">
        Cards
        <?php
        foreach ($cards as $card) :
            $title = $card['title']; // WYSIWYG
            $content = $card['content']; // WYSIWYG
        ?>
            <div class="card">

            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>