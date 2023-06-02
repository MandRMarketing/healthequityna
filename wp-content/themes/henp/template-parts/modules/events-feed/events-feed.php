<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$section_background_color = get_sub_field('section_background_color');
$section_background_color = !empty($section_background_color) ? "style=\"background-color: {$section_background_color};\"" : '';
$title = get_sub_field('title');
$content = get_sub_field('content');
$monthly_themed_calendar_content = get_sub_field('monthly_themed_calendar_content');
$monthly_themed_calendar_files = get_sub_field('monthly_themed_calendar_files');

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
<section <?= $section_background_color ?> <?= $id; ?> class="section-wrap events-feed <?= $section_classes; ?>">
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
            if (!empty($events)) :
                foreach ($events as $post) :
                    setup_postdata($post);
                    $title = $post->post_title;
                    $id = $post->id;
                    $location = tribe_get_venue($id);
                    $start_date = tribe_get_start_date(null, false, 'Y-m-d H:i:s');
                    $timestamp = strtotime($start_date);
                    $month = date('F', $timestamp);
                    $day = date('d', $timestamp);
                    $event_link = get_permalink($id);
            ?>
                    <div class="events-feed__container__events__event">
                        <div class="event-date">
                            <h4><?= $month ?></h4>
                            <h2><?= $day ?></h2>
                        </div>
                        <div class="event-desc">
                            <h3><?= $title ?></h3>
                            <h4><?= $location ?></h4>
                        </div>
                        <a href="<?= $event_link ?>">
                            <svg id="Component_3_1" data-name="Component 3 – 1" xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54">
                                <circle id="Ellipse_2" data-name="Ellipse 2" cx="27" cy="27" r="27" fill="#f76800" />
                                <g id="Group_1" data-name="Group 1" transform="translate(12.17 16.716)">
                                    <line id="Line_2" data-name="Line 2" x2="29.659" transform="translate(0 10.584)" fill="none" stroke="#222" stroke-width="2" />
                                    <path id="Path_1" data-name="Path 1" d="M1063.379,631.574l11.3,10.362-11.3,10.206" transform="translate(-1044.832 -631.574)" fill="none" stroke="#222" stroke-width="2" />
                                </g>
                            </svg>
                        </a>
                    </div>
                <?php
                endforeach;
            else :
                ?>
                <h4>No upcoming events posted, check back soon!</h4>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="events-feed__themed-calendar container">
        <?= $monthly_themed_calendar_content ?>
        <?php foreach ($monthly_themed_calendar_files as $file) : ?>
            <div class="events-feed__container__themed-calendar__file">
                <a class="btn" href="<?= $file['pdf'] ?>" target="_blank" rel="norefferer"><?= $file['month'] ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>