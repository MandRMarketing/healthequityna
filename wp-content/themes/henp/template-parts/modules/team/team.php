<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$content = get_sub_field('content');
$team_members = get_sub_field('team_members');

// Can't just print an empty id and have id="", so build printout here instead
$id = !empty($section_id) ? "id=\"{$section_id}\"" : '';

// padding class
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
<section <?= $id; ?> class="section-wrap team-module <?= $section_classes; ?>">
    <div class="team__container container">
        <div class="team__inner">
            <?php
            foreach ($team_members as $team_member) :
                the_row();
                $image = get_sub_field('photo');
                $name = get_sub_field('name');
                $title = get_sub_field('position');
                $bio = get_sub_field('bio');

                // make sure it's in array format
                if (!is_array($image)) {
                    $image = acf_get_attachment($image);
                }

                // resize if needed
                if ((int)$image['width'] !== 400 || (int)$image['height'] !== 400) {
                    $image['url'] = aq_resize($image['url'], 400, 400, true, true, true);
                }
            ?>
                <div class="team__member" id="<?= sanitize_title($name); ?>">
                    <picture class="team__member__picture">
                        <img class="team__member__image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </picture>
                    <div class="team__member__heading">
                        <h2 class="team__member__heading__name"><?= $name; ?></h2>
                        <h3 class="team__member__heading__title"><?= $title; ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>