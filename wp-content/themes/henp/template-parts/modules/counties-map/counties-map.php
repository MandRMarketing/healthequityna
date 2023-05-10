<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$section_background_color = get_sub_field('section_background_color');
$section_background_color = !empty($section_background_color) ? "style=\"background-color: {$section_background_color};\"" : '';
$content = get_sub_field('content'); // WYSIWYG
$map = get_sub_field('map');
$toggles = get_sub_field('toggles'); // repeater

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
<section <?= $section_background_color ?> <?= $id; ?> class="section-wrap counties-map <?= $section_classes; ?>">
    <div class="counties-map__content container">
        <?= $content ?>
    </div>
    <div class="counties-map__container container">
        <div class="map__container">
            <img src="<?= $map['url']; ?>" alt="<?= $map['alt']; ?>" />
        </div>
        <div class=" toggles__container">
            <?php
            foreach ($toggles as $toggle) :

                $title = $toggle['toggle_title']; // text
                $content = $toggle['toggle_content']; // WYSIWYG
            ?>
                <div class="toggle">
                    <a href="#" class="toggle__trigger" aria-expanded="false">
                        <span class="toggle__trigger-text" data-show="display" data-hide="collapse">Display</span>
                        <?= $title; ?>
                        <span class="toggle__trigger-icon" aria-hidden="true"></span>
                    </a>
                    <div class="toggle__box" aria-hidden="true">
                        <?= do_shortcode($content); ?>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>