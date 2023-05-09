<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$section_background_color = get_sub_field('section_background_color');
$section_background_color = !empty($section_background_color) ? "style=\"background-color: {$section_background_color};\"" : '';
$display_type = get_sub_field('display_type');
$content = get_sub_field('content');
$cards = get_sub_field('cards'); // Post Object
$single_display_type = get_sub_field('single_display_type');

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
<section <?= $section_background_color ?> <?= $id; ?> class="section-wrap cards <?= $section_classes; ?>">
    <div class="cards__content container">
        <?= $content ?>
    </div>
    <div class="cards__container container <?= $display_type ?>">
        <?php
        foreach ($cards as $card) :
            $title = $card['title']; // text
            $content = $card['content']; // WYSIWYG
            $number = $card['number']; // number
            $isPercent = $card['percent'] === true ? ' percentage' : '';
        ?>
            <?php if ($display_type === 'Single' || $display_type === 'Multiple') : ?>
                <div class="card <?= $single_display_type ?>">
                    <h4><?= $title ?></h4>
                    <div class="card__content">
                        <?= $content ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($display_type === 'Multiple-Circle') : ?>
                <div class="card<?= $isPercent ?>">
                    <?= $content ?>
                    <h1 class="number <?= $isPercent ?>"> <?= $number ?></h1>
                </div>
            <?php endif; ?>
        <?php
        endforeach;
        ?>
    </div>
</section>