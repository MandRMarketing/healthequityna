<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$content = get_sub_field('content');
$leading_team_members = get_sub_field('leading_team_members');
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
        <div class="team__leaders__inner">
            <?php
            foreach ($leading_team_members as $post) :
                setup_postdata($post);
                $name = $post->post_title;
                $id = $post->id;
                $image = get_field('image', $id);
                $credentials = get_field('credentials', $id);
                $job_title = get_field('job_title', $id);
                $email = get_field('email', $id);
            ?>
                <div class="team__member" id="<?= sanitize_title($name); ?>">
                    <picture class="team__member__picture">
                        <img class="team__member__image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </picture>
                    <div class="team__member__content">
                        <h4><?= $name ?></h4>
                        <h5><?= $credentials ?></h5>
                        <br />
                        <?= $job_title ?>
                        <p>
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </p>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
        <div class="team__inner">
            <?php
            foreach ($team_members as $post) :
                setup_postdata($post);
                $name = $post->post_title;
                $id = $post->id;
                $image = get_field('image', $id);
                $credentials = get_field('credentials', $id);
                $job_title = get_field('job_title', $id);
                $email = get_field('email', $id);
            ?>
                <div class="team__member" id="<?= sanitize_title($name); ?>">
                    <picture class="team__member__picture">
                        <img class="team__member__image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </picture>
                    <div class="team__member__content">
                        <h4><?= $name ?></h4>
                        <h5><?= $credentials ?></h5>
                        <br />
                        <?= $job_title ?>
                        <p>
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </p>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>