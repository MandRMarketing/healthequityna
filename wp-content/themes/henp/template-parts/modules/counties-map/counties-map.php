<?php
$section_id = get_sub_field('section_id');
$section_classes = get_sub_field('section_classes');
$section_background_color = get_sub_field('section_background_color');
$section_background_color = !empty($section_background_color) ? "style=\"background-color: {$section_background_color};\"" : '';
$content = get_sub_field('content'); // WYSIWYG
// $map = get_sub_field('map');
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
            <!-- <img src="<?= $map['url']; ?>" alt="<?= $map['alt']; ?>" /> -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 946.4 803.2" style="enable-background:new 0 0 946.4 803.2;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #F76800;
                        stroke: #FFFFFF;
                        stroke-width: 2;
                    }

                    .st1 {
                        fill: #222222;
                    }

                    .st2 {
                        font-family: 'OpenSans-Bold';
                    }

                    .st3 {
                        font-size: 15px;
                    }

                    .st4 {
                        fill: #F76800;
                        stroke: #FFFFFF;
                        stroke-width: 2;
                    }
                </style>
                <g id="Troup">
                    <g>
                        <path id="Path_13" class="st0" d="M328.8,421.7c0-0.6-42.4-1.7-42.4-1.7l-0.1,0.1c-2.8,1.1-45.8,18.6-49,19.8
			c-3.3,1.3-8.9,3.9-9,5.4c-0.3,1.5-1.7,2.4-3.2,2.1c-0.4-0.1-0.8-0.3-1.2-0.5c-4.6-3-6.8,1-8.4,2.6c-1.6,1.6-8.7,2.6-12.9,3.8
			c2.2-3,1-9.3,0.9-10.3c-0.1-1-4.1,0.3-4.8,0.3c-0.7,0-0.6-4.9-0.4-5.4c0.1-0.4-5.7-0.1-5.7-0.1s-0.6,9-0.9,10.4
			c-0.3,1.4-2.8,0.3-4.1,0.3c-1.3,0-1.3,9.1-1.3,9.1l-65,21.7c13.3,97.5,22.1,162.9,23.4,173.5l179.5,5.4l0-2.9l-0.2-17.7l1-1.4
			l0.7-39.8H324l1.6-81c0,0,1.6-56.5,1.9-72.3c0.1-2.3,0.1-3.7,0.1-4c0-2.5-1.9,0.4-3.8,1.6c0.7-5.4-0.9-8.3-0.9-8.3
			s5.2-0.3,5.7-0.4C329.1,431.9,328.8,422.3,328.8,421.7" />
                    </g>
                    <text transform="matrix(1 0 0 1 201.9665 552.9413)" class="st1 st2 st3">Troup</text>
                </g>
                <g id="Fayette">
                    <path id="Path_7" class="st0" d="M596.7,266.7c-0.8-1.3-1.1-1.6-2.7-1.5c-0.1-0.8,0.1-1.6,0.6-2.3c0.8-1.9,0.3-4.1-1.4-5.3
		c-1.1-1.4-5.1-6.4-5.9-6.6s-4.8-3.7-4.8-5.1h-6.7v-10.2c0,0-4.6-5.1-5.4-6.5c-0.8-1.4-2.1-3.9-1.8-4.9c0.3-1,1.4-2.8,0.6-5.3
		c-0.5-1.3-0.7-2.8-0.4-4.2c-0.8-0.9-1.3-2-1.5-3.2c-0.3-1.1-1.1-3.5-1.7-3.6c-0.6-0.1-7.5-0.2-9.7-0.2c-0.4,0-0.7,0-0.7,0
		c-0.2,0.1-25.9,6.6-27,6.6c-1.1,0-45.3,12.7-45.6,12.8c-0.3,0.1-2.1-0.1-2.1,0.4c0,0.5-2,1.5-1.9,2.4s-0.7,1.7-2,1.7
		c-1.3,0.1-3.2,0.7-3.5,4.8c-0.1,0.6-0.2,1.1-0.4,1.6c-0.3,1.2-0.9,2.3-1.8,3.2c-0.8,0.9-4.7,11.1-5.9,11.4s-2.7,2.3-1.7,5.8
		c0.9,2.8,0.8,3.9-0.8,4.9c-0.4,0.4-0.5,4.1-0.5,5.1c0,1,0.3,9.4,0.3,9.4s-1.7,0.1-0.8,1.5c0.9,1.3,1.7,2.7,2.2,4.2
		c0.1,0.5-0.4,5,1,6.2s1.2,2.5,0.6,3.2c-0.6,0.7-0.3,3.6,1.1,4.6c0,2.1,0.6,5.6,2,6.5c0,1.9,2,1.7,2,3c0,1.3,1,4.1,2.3,4.9
		c1.2,0.8,5,4.1,4.3,6.2c1.7-0.3,3.4,5.2,3.6,8c1.9,2,2.1,2.9,1.6,4.4c1.7,0.5,1,1.6,0.4,2c-1.5,0.9,0.8,2.1,0.7,3s5.5-0.4,5.6-0.2
		c0.1,0.3,4.1,8.2,4.7,8.4c0.6,0.2,1.6,0.5,1.7,1.4c0.1,0.8,1.6,2,7.3,1.2c-0.3,1.6,1.6,2.3,2.9,2.1c0.9,0.4,1.4,2.4,4.5,1.7
		c1.6-0.3,1.8,0.9,1.4,1.4s0.4,3.2,1.9,3.2c1.4-0.1,2.6,2,2.1,4.6c1.4-0.3,3.3,2.2,3.7,2.8c1-0.1,1.7,0.5,1,1.3
		c-0.7,0.8-1.7,2.5-1,3.4c0.8,0.9,3.5,5.2,2.7,6.4c-0.8,1.2-2.6,3.3-1.2,6.1c1.4,2.8,2.3,6.1,2.1,7.5c1.3,1.1,6.8,3.9,5.3,12.8
		c1.1,0.8,1.9,1.9,2.5,3.1l36.8,1c0,0-1.7-6.2,0.8-7.4c-1.1-3.7,0.8-8.1,6.1-12.6c-0.4-4.2,3.5-4.5,6.5-4.5c0.2-3,0.8-6.9,3.2-6.9
		s5.2-0.8,5.2-2.3c0-1.6-2.6-7,4.5-6c-0.1-1.9-0.2-3.9,0.3-4.5c0.4-0.6,1.4-1.2-0.1-2.6s-4.4-6.9,1.6-8.2c1.1-3.3-0.9-5.6-3.3-8.3
		c0-0.2,0-0.3,0-0.5c-0.1-1.3-0.8-2.4-1.9-3.1c-1-0.4-2.6-4.8-0.2-4c0.9-2.4-0.1-2.7-0.6-3.3s-0.5-3.1,0.4-3.2
		c1-0.1,1.8-0.9,3.9-0.9c0.6-1.6-0.2-2.2-1.1-3.1c-1-0.8-0.8-2.9-0.9-3.9c-0.1-1-2.7-3.2-2.2-5.2c0.5-2.1,1.7-2.3,3-2.6
		c1.3-0.3,3.2-2.8,1.1-4.5c0.3-2.2-0.2-6.3-2.6-5.8v-5.4h-5.8v-11h5.6v-5.3c0,0,4.5,1.5,4.6,0.6c0.2-0.9-0.3-9.1,0.3-9.8
		C595.9,269,597.4,267.9,596.7,266.7" />
                    <text transform="matrix(1 0 0 1 499.235 301.1848)" class="st1 st2 st3">Fayette</text>
                </g>
                <g id="Carroll">
                    <path id="Path_15" class="st0" d="M354.4,188.8v-2.1h-2.8l-0.1,2.2c0,0-26,0.1-35.8,0.1c-1.9-1.4-4.3-1.8-6.5-1.1l2.1-16.3
		c0,0,2-72.4,2.3-74.8s0.5-8.4,0.5-8.4h-5V84h5L313.6,70l1.3-2.5l0.7-17c-13.3-4.8-34.8-12.6-42.8-15.5c-3.8-1.5-25.8-5.6-32.1-7.3
		c-0.6-0.1-1.1-0.3-1.6-0.5c-1.8-0.1-5.1,0-5.1,0s0,11-0.3,15.2s-0.8,25.5-0.8,25.5l-1,4.8l0.2,19.5l-8.4-0.8l-0.7,2.5l-26.6,13
		l-8.6,0.1l0.8-5.3c0,0-4.1-1.6-6.3-0.9S100,131,100,131s-15.6-0.3-26.5-2.4c7.1,52.3,14.1,103.1,20.6,151.2l152.9,5l0,0.1
		c0.4-0.4,0.6-1,0.5-1.5c-0.1-1.3,0.7-2,2.1-2.1s3.8-0.6,4.5-1.5c4,0.1,6.5-2.8,8.2-3.8c1.6-1,2.8-2.9,1.4-4.5
		c-1.2-1.7-1.6-3.8-1-5.8c0.5-1.5,3.6-1,5.3-0.7c1,3.1,3.9,4.4,5.4,4.9c1.5,0.6,5.6,5.2,7.1,6.5c1.5,1.3,1.4-0.1,1.7-0.2
		c0.4-0.3,0.9-0.5,1.4-0.5c0.4,3.7,3.1,2.9,5.1,2.9s3.2,0.1,3.3-1.2c0.2-2.3,3.8-3.5,5.5-3.3c1.7,0.2,2.4-2.6,2.5-3.2
		c0.1-0.6-0.2-0.9-1-0.6c1.1-4.9,4-6.1,5.4-6.1c1.4,0,2.5-1,2.3-2.9c-0.7-7.5,3.7-9.4,8.3-9.1c-0.9-2.6,6.2-5.7,6.2-5.7
		c0.8-1,1.6-2.1,2.3-3.2c1.3-2.1,3-2,4.1-1.1c2.8,2,6.8-0.5,9-3s2.2-8.9,2.2-8.9l0.2-0.3l1.3-1.9h6.6c0,0,0.5,0.5,1.2,1.1
		c5.4,0.1,6.4-1.4,8.4-2.8s3.2-3.4,2.3-5.1c-0.9-0.6-4-4.9-4.5-6.5s-1.6-4.9-3-5.4s-1.6-2.1-1.6-3.5c0.2-1.7,1.3-3.2,2.9-3.7
		c-0.5-5.4,4-8.9,7.3-11.1c0.7-0.1,2.3,0.6,3.5-2.3L354.4,188.8z" />
                    <text transform="matrix(1 0 0 1 167.5884 195.3436)" class="st1 st2 st3">Carroll</text>
                </g>
                <g id="Heard">
                    <path id="Path_14" class="st0" d="M277.8,392.4h3.9v-10.7h-6.5L247,284.9l0-0.1l-152.9-5c10.1,74.4,19.4,142.4,27.2,199.5l65-21.7
		c0,0,0-9.1,1.3-9.1s3.8,1.2,4.1-0.3s0.9-10.4,0.9-10.4s5.8-0.3,5.7,0.1c-0.1,0.4-0.3,5.4,0.4,5.4s4.6-1.3,4.8-0.3
		c0.1,1,1.3,7.3-0.9,10.3c4.2-1.2,11.3-2.2,12.9-3.8s3.8-5.7,8.4-2.6c1.2,0.9,2.9,0.7,3.8-0.4c0.3-0.3,0.5-0.7,0.5-1.2
		c0.1-1.4,5.7-4.1,9-5.4c3.2-1.3,46.3-18.7,49-19.8L277.8,392.4z" />
                    <text transform="matrix(1 0 0 1 157.4248 376.5984)" class="st1 st2 st3">Heard</text>
                </g>
                <g id="Coweta">
                    <path id="Path_8" class="st0" d="M530.1,402.8c-0.5-1.2-1.4-2.3-2.5-3.1c1.5-8.9-4-11.7-5.3-12.8c0.2-1.4-0.8-4.7-2.1-7.5
		s0.4-4.9,1.2-6.1c0.8-1.2-2-5.4-2.7-6.4c-0.8-0.9,0.3-2.6,1-3.4c0.7-0.8,0-1.4-1-1.3c-0.4-0.6-2.3-3.1-3.7-2.8
		c0.4-2.6-0.7-4.7-2.1-4.6s-2.3-2.6-1.9-3.2c0.4-0.5,0.3-1.7-1.4-1.4c-3.2,0.7-3.6-1.3-4.5-1.7c-1.3,0.3-3.2-0.5-2.9-2.1
		c-5.7,0.8-7.2-0.4-7.3-1.2s-1.1-1.1-1.7-1.4c-0.6-0.2-4.6-8.1-4.7-8.4c-0.1-0.3-5.7,1-5.5,0.2c0.2-0.9-2.1-2.1-0.7-3
		c0.5-0.3,1.3-1.5-0.4-2c0.5-1.5,0.3-2.3-1.6-4.4c-0.2-2.8-1.9-8.3-3.6-8c0.7-2.1-3-5.4-4.3-6.2c-1.3-0.8-2.3-3.6-2.3-4.9
		s-2-1.1-2-3c-1.4-0.9-2-4.4-2-6.5c-1.4-1-1.7-3.9-1.1-4.6c0.6-0.7,0.8-2-0.6-3.2c-1.4-1.3-0.9-5.7-1-6.2c-0.5-1.5-1.2-2.9-2.2-4.2
		c-1-1.4,0.8-1.5,0.8-1.5s-0.3-8.4-0.3-9.4c0-1,0.1-4.6,0.5-5.1c1.6-1,1.7-2.1,0.8-4.9c-0.9-3.4,0.5-5.5,1.7-5.8s5.2-10.5,5.9-11.4
		c0.9-0.9,1.5-2,1.8-3.2h-7.1v-5.4c-3.4-1.6-60-1.2-68.6-1.1c-8.6,0.1-33.5-0.8-33.5-0.8L339,230l-0.2,0.3c0,0,0.1,6.4-2.2,8.9
		c-2.3,2.6-6.2,5.1-9,3c-1.1-0.9-2.8-1-4.1,1.1c-0.7,1.1-1.5,2.2-2.3,3.2c0,0-7.1,3.1-6.2,5.7c-4.6-0.3-9,1.6-8.3,9.1
		c0.2,2-0.9,2.9-2.3,2.9c-1.4,0-4.3,1.1-5.4,6.1c0.8-0.3,1.1,0,1,0.6s-0.8,3.4-2.5,3.2c-1.7-0.2-5.4,1-5.5,3.3
		c-0.1,1.2-1.4,1.2-3.3,1.2s-4.6,0.8-5.1-2.9c-0.5,0.1-1,0.3-1.4,0.5c-0.3,0.1-0.2,1.5-1.7,0.2c-1.5-1.3-5.6-5.9-7.1-6.5
		s-4.4-1.8-5.4-4.9c-1.7-0.3-4.8-0.8-5.3,0.7c-0.6,2-0.3,4.1,1,5.8c1.4,1.6,0.3,3.5-1.4,4.5s-4.2,3.9-8.2,3.8
		c-0.7,0.8-3,1.3-4.5,1.5c-1.5,0.2-2.2,0.8-2.1,2.1c0,0.6-0.2,1.1-0.5,1.5l28.2,96.8h6.5v10.7h-3.9l8.4,27.7l0.1-0.1
		c0,0,42.4,1.2,42.4,1.7s0.3,10.2-0.1,10.3c-0.4,0.1-5.7,0.4-5.7,0.4s1.6,2.9,0.9,8.3c1.9-1.2,3.8-4.1,3.8-1.6c0,0.3,0,1.7-0.1,4
		c1.8,0.4,5.1,1,5.5,0c0.7-1.8,1.2-3.6,1.3-5.6c-0.1-1.2-0.4-17,0.2-16.8c0.7,0.2,38.9,2.1,39.9,2.1s16.4-1.1,17.2-0.4
		c1.5,0.8,3.1,1.3,4.8,1.5c0.9,0,13-0.4,13-0.4v-5h13.2c0,0,0.3,5.2,0,5.2c-0.3,0,6.3,0.2,6.3-0.1s-0.5-2.7,0.7-2.7
		c1.2,0,2.9-0.1,2.9-0.1s0.1-1.7,0.9-1.9s11.6-0.6,11.8,0.1s-0.8,5.6,0.4,5.7c1.1,0.1,67.6,1.7,81.8,2c-0.5-1.4-1.4-2.6-2.4-3.7
		c1.2-0.7,2.3-1.7,3.1-2.9c-0.1-3.9-1.1-5.4-2.4-5.6s-1.1-3.5-1-4.7c0.2-1.2,4.2-2.2,5.1-2.7c0.9-0.4,1.1-2.1,1.1-2.7
		C530.7,404,530.5,403.3,530.1,402.8" />
                    <text transform="matrix(1 0 0 1 341.0883 335.3436)" class="st1 st2 st3">Coweta</text>
                </g>
                <g id="Meriwether">
                    <path id="Path_9" class="st0" d="M530.7,436.9c0.7-0.5,0.3-1.4-0.8-2.4c-1.3-1.1-2.1-2.7-2-4.5c0-1.1-0.2-2.2-0.6-3.2
		c-14.1-0.3-80.7-1.9-81.8-2c-1.2-0.1-0.3-4.9-0.4-5.7s-11-0.2-11.8-0.1c-0.8,0.1-0.9,1.8-0.9,1.8s-1.7,0.1-2.9,0.1
		s-0.7,2.4-0.7,2.7c0,0.3-6.6,0.1-6.3,0.1s0-5.2,0-5.2h-13.2v5c0,0-12.1,0.4-13,0.4c-1.7-0.2-3.3-0.7-4.8-1.5
		c-0.8-0.7-16.1,0.4-17.2,0.4c-1.1,0-39.3-1.8-39.9-2.1c-0.7-0.2-0.3,15.6-0.2,16.8c-0.1,1.9-0.6,3.8-1.3,5.6c-0.4,1-3.7,0.3-5.5,0
		c-0.4,15.8-1.9,72.3-1.9,72.3l-1.6,81h1.7l-0.7,39.8l-1,1.4l0.2,17.7c3.2,0,8.2-0.2,7.8,0.2c-0.5,0.4-0.8,2.3-0.1,2.8
		c1.3,0.7,2.8,1,4.3,0.9c2.1-0.1,21.4-0.4,22.9,0s15.7,2.5,17.3-0.2c3.7,2,32.5,15.5,34.7,16.6c0.5,0.3,1.1,0.6,1.5,1
		c11.6-0.2,61.9-0.2,64.7-0.1c3,0.1,4.7,0.1,7.3,1.2c0,0,14.7-9.5,20.5-13.3c7-2.2,14.9-7.8,15.4-8.3c0.4-0.3,0.4-2,0.2-3.1
		c-0.1-0.4-0.2-0.7-0.4-0.8c-0.7-0.2-0.8-1.8,0.2-3.4c-1.4-1.2-1.1-2.6-0.4-4.6c0.9-5.3-0.1-6.7-0.4-7.5c-0.3-0.8-0.1-1.5-0.9-1.5
		c-0.7,0-0.1-3.8-0.7-3.6c-0.5,0.3-1.2-0.2-2.2-1c-0.9-0.8-2.2-0.4-2.2,0.5s-1.6,0.4-3,0.4s-0.3-2,1.4-3c-0.5-0.8-0.8-1.8-0.9-2.8
		c0.1-1.2-1.1-2.4-2.1-1.9c-0.1-3.8,2.2-4.4,3.4-4.2c1.2,0.2,0.8-5.2,0.7-6.9c1-0.4,2-3.8,2-5.7s-1.2-3.5-2.5-6.1s-2.7-1.8-3-1.2
		s-1.2,0.7-2.4,0.4c-1.2-0.4-0.5-3.1,0.1-3.6c0.6-0.5,0.6-1.5,0.2-2.9c1.2-0.1,2.4,0,3.6,0.3c0.5-0.9,1.4-1.6,2.4-1.9
		c1.3-0.1,0.5-3-0.9-4.2c-1.4-1.2-5.7-5-2.3-6.9c-3.6-2-1.8-5.7-1.1-5.5s1.2-0.1,1.8-1c0.7-0.9-1.5-2.8-2.5-3.9
		c-2.1,0.3-2.3-1.2-2.1-2.7c-2.1,0.2-1.9-1.9-0.3-4.5s1.4-4.8,0.7-5.4c-0.7-0.6,0.1-2.2,0.7-2.4s-0.9-2.4-0.8-3.3
		c0.1-0.9-0.1-2-1.3-1.9c0.1-1.9,1-3.7,2.4-5c0.8-0.7,1.8-0.1,2.4-0.1c0.6-0.1,1-0.9,0.8-3.3c1.5-0.6,2.2-4.9,2.1-6.1
		c1.6-0.5,0.7-2.4,0.8-4.7c-3.3-2.4-1.2-8.4-1.2-8.8c0-0.4,0.4-2.9,1.7-2s4.4,2.1,5.2,1.8c0.8-0.3,0.4-3.6,1.6-3.6
		c1.2,0-1.9-2.9-3.2-3.6s-1.5-1.4-2.4-1.4c0.2-1.4-0.6-2.8-1.5-2.6c-0.9,0.2-1.3-0.7-2.5-0.7c-1.3,0.1-1-1.8-0.3-2
		c6.2-1.9,5.2-5.3,5.2-5.8c0-0.7,0.5-1.2,1.1-1.4c-2.3-2.1-1.1-6.8,0-7.7c-0.1-1.1,1.2-2.3,3.6-3.8c0.2-2.4-0.9-5.1-3-7.4
		c1.4-4.2,0.7-5.5,0.1-5.9s0.4-1.1,1.1-1.1c0.7,0,1.2-0.7,2.3-2.5c1.1-1.7,1.6-4.7,0.6-4.8c-1-0.1-0.3-2.6,0.8-3.1
		c1.1-0.4,2.1-3.5,1.5-4.1c-0.7-1.1-1-2.3-1-3.5c0.1-1,0.5-1.4,2-1.7c1.1-0.3,2.5-1.7,3.7-2.9c-0.3-4,1.7-1.7,1-5.5
		c-0.3-1.4,0.2-2.3,1-2.7c0.8-0.3,1.1-1.5,1.1-3.3C528.6,440.8,530,437.5,530.7,436.9" />
                    <text transform="matrix(1 0 0 1 372.5491 549.6041)" class="st1 st2 st3">Meriwether</text>
                </g>
                <g id="Upson">
                    <path id="Path_4" class="st0" d="M735.9,585c-2.8,0-5.5-0.2-8.3-0.5c-2.2-0.4-8.3-0.6-10-0.7c-1.7-0.1-60.4-0.6-63.3-0.7
		c-0.2,0-0.4,0-0.5,0c-2.9-0.2-7.5-1.3-8.8-1c-1.4,0.3-4.1,0-4.1-5.7c-0.9,0-1.9,0.1-2.8,0.4l-0.8,5.2c0,0-11.9,0.6-13.9,0
		c-2.3-0.7-4.6-1.1-7-1.3c-2.1-0.1-81.8-1.9-83.6-2.2c-1.8-0.3-2,0.6-2,2c-0.8,1.6-1.5,2-1.8,3.3c-0.3,1.4-2.2,1.5-3,1.6
		c0.1,3.3-2.2,7.4-4.4,7.5c-2.2,0.1-5.5,0.4-7,2.2c-0.5,0.6-1.4,0.6-1.9,0.1c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2-0.3-0.5-0.6-0.8-0.7
		c-1.2-0.3-2.4-0.4-3.6-0.3c0.4,1.4,0.4,2.4-0.2,2.9c-0.6,0.5-1.2,3.3-0.1,3.6s2.1,0.2,2.4-0.4c0.3-0.6,1.7-1.4,3,1.2
		c1.3,2.6,2.5,4.2,2.5,6.1s-0.9,5.3-2,5.7c0.1,1.7,0.6,7.1-0.7,6.9c-1.2-0.2-3.5,0.4-3.4,4.2c1-0.5,2.2,0.7,2.1,1.9
		c0.1,1,0.4,1.9,0.9,2.8c-1.7,0.9-2.8,3-1.4,3s3,0.5,3-0.4c0-0.9,1.2-1.3,2.2-0.5c0.9,0.8,1.7,1.3,2.2,1c0.5-0.3-0.1,3.6,0.7,3.6
		s0.6,0.7,0.9,1.5c0.3,0.8,1.3,2.2,0.4,7.5c-0.7,2-1.1,3.4,0.4,4.6c-1,1.6-0.9,3.3-0.2,3.4c0.2,0,0.3,0.3,0.4,0.8
		c1.7,0.6,2.5,0.3,2.8-0.2c0.4-1,1.5-1.4,2.5-1c0.2,0.1,0.4,0.2,0.6,0.4c1.7,1.1,7.7,4.4,11.5,4.2c1,1.1,0.4,3-0.5,4
		c-1.5,1.5-3.2,2.8-5,3.9c-0.8,0.2-2.8,1.8-2.7,3.9c0.1,2,0.3,2.7,1.3,2.7s1.6,1.4,1.7,1.6c0.1,0.3,2.8,0.8,3.3-0.8
		c0.5-1.6,1.9-1.3,3-0.8c1.1,0.5,4.6,1.3,4.6,4.8c0.7-0.4,1.6,0.5,1.6,1.5c0,1,0.6,2,1.4,2.6c0.8,0.6,1.6,5.8,1.3,9.2
		c1.1,0.3,1,0.2,1.7,1.1c0.7,0.9,6.3,2.1,7.5,0.1c1.3-2,2.4-4.1,3.4-6.3c0.4-1.3,7.6-1.9,7.8-0.3c0.2,1.6,1,1.6,1.9,1.4
		c0.9-0.3,2.8,0.8,2.5,3.4c2.2,0.8,3.5,2.7,2.7,3.7s-0.8,1.9,0.7,3.3c1.4,1.4,4.3,3.2,1.2,4.9c2,1.9,4.5,3.9,4.7,7.3
		s0.7,4.9,1.6,5.6c0.2,1.6-0.2,3.8,0.6,3.8s3,0.6,2.3,2.5c-0.7,1.9,6.6,6.7,10.6,4.8c1-0.5,3.3-1.6,4,0c0.7,1.6,1.7,3.2,2.8,3
		c0.3-1.8,0.4-4.4-0.1-4.4s-1.6-2.7-0.6-3.1c0.9-0.4,5.3,1,5.6,3.9c0.2,1.7,2.8,5.6,2.8,7.9c0.4,5.1,5.6,7.1,6.5,3.3
		c1-1,2.6-1,3.6,0c0,0,0,0,0,0c0.9,1.2,0.9,2.7,2.7,2.6c0.5,2.2,2.3,2.7,3.1,1.6c0.8-1.1-0.2-1.8,2-1.8c1.8-2.1,3.9-2.6,5.2-1
		c-1.1,0.9-0.6,1.2-0.4,2.1c0.2,1,1.1,1.8,2.1,1.8c1.1-0.1,4.8-0.2,4.9,2.7c0,0.6,0,1.2-0.1,1.8c1.5,1.7,2.1,2,2.8,1.9
		c0.8-0.1,5,1,6.6,2.7c2.7-0.5,5.1,1.1,5.2,2.8c0.1,1.7,1.6,6,4.8,6.4c0.7,0.2,0.4-0.8,1.9-0.8c1.4,0,2.6-1.6,3-3.4
		c0.4-1.7,1.5-4,4.7-3.2c1.4,0.4,4.4,3.4,2.7,4.9c-1.7,1.5-3.3,2.3-2.1,4.4c1.1,2.1,2,1.9,3.3,1.9c1.4,0.7,1.9,1.2,3.1,1.1
		s2.7-1.1,4.2,6.8c0.8,0.1,0.8,0.1,0.8,0.9s-0.6,5.3,3.3,6.5c1.7,0.3,2.8,1.1,2.3,4.2c-0.2,1.4,1.2,3.4,3.2,5.2
		c-0.7-1.8-0.7-2.8-0.2-3.3c0.9-0.9,0.7-1.2,0.1-2.2c-0.5-0.9,0.1-1.9,0.4-2.6c0.4-0.7-0.6-0.7,1-4.5c1.6-3.8,26.7-64.4,26.7-64.4h9
		c0.5-1.3,0.9-2.6,1.2-3.9c0-0.7-0.1-28.8,0.1-28.8c0.2,0,2.2,0,4.4,0.2c0-7.9-0.1-37.1-0.1-38.1c0-1.1,0.6-11.2,0.8-15.9
		c0-0.8,0.1-1.4,0.1-1.8C734.7,618.8,736.1,588,735.9,585" />
                    <text transform="matrix(1 0 0 1 618.11 656.5369)" class="st1 st2 st3">Upson</text>
                </g>
                <g id="Pike">
                    <path id="Path_5" class="st0" d="M667.7,450.2c-12.7,0.1-31.1,0.2-31.1,0.2s-27.9-0.4-27.9-0.7c0-0.2,0.9-0.9-1-1
		c-3.2-0.1-10,0.1-10-0.1c0.1-0.2,1.6-6.4,0.9-6.4s-10.7,0.4-10.8-0.1c-0.1-0.5,0.1-5.4-0.2-5.4s-23.4-0.8-24.4-1s-8.7-0.2-8.6,0.1
		c0.1,0.3-0.7,5.8-8,5.8c-1.1,0-2.7-2.1-3.4-1.1c-1.1,1.7-1.9,3.6-2.3,5.6c-0.1,1.8-3.2,3.3-4.3,3.4c-1.1,0.1-4.6,1-6.1,2.4
		c-0.3,0.3-0.6,0.6-0.9,0.9c-1.3,1.2-2.6,2.6-3.7,2.9c-1.4,0.4-1.9,0.8-2,1.7c0,1.3,0.3,2.5,1,3.5c0.6,0.6-0.4,3.7-1.5,4.1
		c-1.1,0.4-1.8,2.9-0.8,3.1c1,0.1,0.5,3.1-0.6,4.8c-1.1,1.7-1.6,2.5-2.3,2.5c-0.7,0-1.6,0.7-1.1,1.1s1.3,1.7-0.1,5.9
		c2.1,2.3,3.2,5,3,7.4c-2.4,1.4-3.7,2.6-3.6,3.8c-1.1,0.9-2.3,5.7,0,7.7c-0.6,0.1-1.1,0.7-1.1,1.4c0,0.5,1,3.9-5.2,5.8
		c-0.6,0.2-0.9,2.1,0.3,2c1.2-0.1,1.6,0.9,2.5,0.7c0.9-0.2,1.7,1.2,1.5,2.6c0.9,0,1.1,0.7,2.4,1.4c1.3,0.7,4.4,3.6,3.2,3.6
		c-1.2,0-0.8,3.3-1.6,3.6c-0.8,0.3-3.9-0.9-5.2-1.8c-1.3-0.9-1.7,1.6-1.7,2s-2.1,6.4,1.2,8.8c-0.1,2.2,0.8,4.2-0.8,4.7
		c0.2,1.3-0.5,5.5-2.1,6.1c0.2,2.5-0.2,3.3-0.8,3.3c-0.6,0.1-1.6-0.6-2.4,0.1c-1.4,1.3-2.3,3-2.4,5c1.1-0.1,1.3,1,1.3,1.9
		c-0.1,0.9,1.5,3.2,0.8,3.3c-0.7,0.2-1.4,1.8-0.7,2.4c0.7,0.6,1,2.8-0.7,5.4s-1.8,4.7,0.3,4.5c-0.2,1.4,0,2.9,2.1,2.7
		c1.1,1.1,3.2,3,2.5,3.9c-0.6,0.9-1.1,1.1-1.8,1c-0.7-0.2-2.5,3.5,1.1,5.5c-3.4,1.9,0.9,5.7,2.3,6.9c1.4,1.2,2.1,4.1,0.9,4.2
		c-1,0.3-1.8,1-2.4,1.9c0.4,0.1,0.7,0.4,0.8,0.7c0.3,0.7,1.1,1,1.8,0.7c0.2-0.1,0.3-0.2,0.4-0.3c1.5-1.9,4.9-2.2,7-2.2
		c2.2-0.1,4.6-4.2,4.4-7.5c0.8-0.1,2.7-0.2,3-1.6c0.3-1.4,1-1.7,1.8-3.3c0.1-1.5,0.2-2.3,2-2s81.5,2.2,83.6,2.2
		c2.4,0.2,4.7,0.6,7,1.3c2,0.6,13.9,0,13.9,0l0.8-5.2c0.9-0.2,1.8-0.4,2.8-0.4c0,5.7,2.7,5.9,4.1,5.7c1.3-0.3,5.9,0.8,8.8,1
		c-0.2-6.4,0.8-27,0.8-27.6c0-0.7,5-0.2,5.7-0.2s-0.1-4.7-0.2-5.6c-0.1-0.9,6-0.3,6-0.3l-0.4-14.9l0.9-7.5L667.7,450.2z" />
                    <text transform="matrix(1 0 0 1 574.087 519.6336)" class="st1 st2 st3">Pike</text>
                </g>
                <g id="Lamar">
                    <path id="Path_12" class="st0" d="M736.4,442.2c0.1,1.5,0.6,16.5,0.3,16.6c-0.3,0.1-2.9,0-3.2-0.3c-1.1-0.5-2.3-0.8-3.5-0.9
		c-0.9,0-39.3,0.5-40.9,0.2c-1.6-0.3-7.6-0.7-8.1-0.8c-0.5-0.1-0.6-0.7,0.1-1.3s0-1-0.3-1.4s-0.9-4-1.4-4.1c-0.2,0-5.1,0-11.7,0
		l-1,76.7l-0.9,7.5l0.4,14.9c0,0-6.1-0.6-6,0.3c0.1,0.9,0.9,5.6,0.2,5.6s-5.7-0.4-5.7,0.2c0,0.6-1,21.2-0.8,27.6c0.2,0,0.4,0,0.5,0
		c2.8,0.1,61.6,0.5,63.3,0.7c1.7,0.1,7.7,0.3,10,0.7c2.7,0.4,5.5,0.5,8.3,0.5c0.2,3.1-1.2,33.8-1.3,36.6c0,0.4,0,1-0.1,1.8
		c4.4-0.1,21-0.3,22-0.3c1.2,0,15.7,1.2,16.5,1.3c0.8,0.1,0.1-9.7,0.1-10.7c0-1,4.1-0.5,5.6-0.6l3.5-170.1
		C760.6,442.7,741,442.3,736.4,442.2" />
                    <text transform="matrix(1 0 0 1 700.4238 530.3436)" class="st1 st2 st3">Lamar</text>
                </g>
                <g id="Spalding">
                    <path id="Path_6" class="st0" d="M756,387.8c0.7-0.8-2.3-4.4-5.7-8.2c-0.3-0.3-0.6-0.6-0.9-0.9c-2.9-2.5-4.9-0.4-6.6-0.3
		c-2.2-3.5-2.5-3-4.3-1.5c-1.7,1.5-4.7-0.4-6.4-1.6c0.8-2.3-0.1-3-1.6-3s-1.7-0.2-1.4-1.5c0.4-1.3-1.5-2.5-2.3-2.7
		c-0.9-1-2.4-1.2-3.4-0.3c-0.2,0.2-0.3,0.3-0.5,0.5c0,0,0.3-13.9,0.2-14.1s-25.9-0.9-25.9-0.9s-26.2-0.2-27.4,0.1s-0.2-8.8-0.2-9
		s-0.4-2.8-0.7-3c-0.4-0.2-56.7,0.1-58.1,0.1c0,0-0.1,0-0.2,0c-1.9-0.1-14.1-0.8-19-1.3c0,0.2,0,0.3,0,0.5c2.4,2.7,4.4,5,3.3,8.3
		c-5.9,1.3-3,6.7-1.6,8.2c1.5,1.4,0.5,2,0.1,2.6s-0.3,2.6-0.3,4.5c-7-1-4.5,4.4-4.5,6s-2.8,2.3-5.2,2.3c-2.4,0-3,3.9-3.2,6.9
		c-3,0.1-6.9,0.3-6.5,4.5c-5.3,4.5-7.2,8.9-6.1,12.6c-2.4,1.2-0.8,7.4-0.8,7.4l-36.8-1c0.3,0.6,0.5,1.2,0.6,1.8
		c0,0.7-0.2,2.3-1.1,2.7c-0.9,0.4-5,1.5-5.1,2.7c-0.2,1.2-0.3,4.5,1,4.7s2.4,1.6,2.4,5.6c-0.8,1.2-1.9,2.2-3.1,2.9
		c1,1.1,1.8,2.3,2.4,3.7c0.4,1,0.6,2.1,0.6,3.2c-0.1,1.7,0.7,3.4,2,4.5c1.1,1.1,1.5,1.9,0.8,2.4c-0.7,0.5-2.1,3.9,2.1,4.3
		c0,1.8-0.3,3-1.1,3.3s-1.3,1.2-1,2.7c0.7,3.8-1.3,1.5-1,5.5c0.3-0.3,0.6-0.6,0.9-0.9c1.8-1.2,3.9-2.1,6.1-2.4
		c1.1-0.1,4.2-1.6,4.3-3.4c0.4-2,1.2-3.9,2.3-5.6c0.7-1,2.4,1.1,3.4,1.1c7.2,0,8.1-5.5,8-5.8s7.6-0.3,8.6-0.1s24.1,1,24.4,1
		s0.1,4.9,0.2,5.4c0.1,0.5,10.1,0.1,10.8,0.1c0.7,0-0.8,6.2-0.9,6.4c-0.1,0.2,6.7,0,10,0.1c1.9,0.1,1,0.7,1,1s27.9,0.7,27.9,0.7
		s18.4-0.1,31.1-0.2c6.5,0,11.5,0,11.7,0c0.4,0.1,1.1,3.7,1.4,4.1c0.2,0.4,0.9,0.8,0.3,1.4s-0.6,1.2-0.1,1.3
		c0.5,0.1,6.5,0.6,8.1,0.8c1.6,0.2,40.1-0.2,40.9-0.2c1.2,0.1,2.4,0.4,3.5,0.9c0.3,0.3,2.9,0.4,3.2,0.3c0.3-0.1-0.3-15.1-0.3-16.6
		c0-0.1,0-0.1,0-0.1s1.7-26.8,1.4-27.1s1.9-0.6,2.6-0.4c0.6,0.2,0.1-2.2-0.2-2.7c-0.2-0.4-1.5,0-2.2,0c-0.7,0-0.6-2.2-0.6-2.8
		C737.4,408.4,755.3,388.5,756,387.8" />
                    <text transform="matrix(1 0 0 1 617.4218 404.9432)" class="st1 st2 st3">Spalding</text>
                </g>
                <g id="Henry">
                    <path id="Path_10" class="st0" d="M849,280.1c0.6-0.8,0.3-2.5-1.8-2.3c-2.2,0.2-4.8-5.9-5-7.9c-0.2-2-5.4-6.8-6.2-8.2
		c-0.8-1.4,1.5-2.4,0.8-5.6c0-0.8-1.5-1.4-2.3-1.1c-2.2,0.4-4.5,0.5-6.7,0.5c-1.9,0-10.3-0.5-13-3.4c-2.7-2.9-9.8-4.2-13-1.6
		c-0.8-1.3-4.3-2.1-5.8-2c-1.5,0.1-3.4-1.1-3.4-2.4c0-1.6-1.1-2.9-2.7-3.2c-1.9-0.4-3.8-3-4.1-4.8c-0.1-1.5-1.4-2.7-3-2.6
		c0,0,0,0-0.1,0c-1.6,0.1-2.7-0.5-4.2-1.6s-1-2.5,0.1-2.5s4.8-3.9,4.8-3.9l1-1.4c-4.2,2.2-3.8,0.6-5.2,0.4c-1.8,1-2.2-1.8-2.1-2.2
		c0.1-0.4-0.1-0.9-1.1-2.6c4.1-3.6-3.2-8.3-4-8.3c-1.5,0.1-3-0.1-4.4-0.6c0.8-3.2-5-5-7.6-4.8c-2.6,0.2-2.8-2.5-4.7-2.9
		c-1.9-0.4-5-3-5.2-4.4c-0.3-1.4-2-1-3.8-1s-2.7,1.4-4.2,2.9c-1.6,1.5-3.5,1-4-0.1c-0.5-1-0.8-1.4-2.5-0.8c1.1-2.8-2.1-6.9-4.5-7.5
		c-0.1-1.4-0.8-8.6-5.4-7.4c-0.9-7.8-10.2-21.4-10.8-22.6s-4.5-5.2-6.7-7.6c0.3-2.3-1.3-7.3-1.8-10.3c-3.5,0.1-7,0.2-7,0.2l-14-1.3
		v11.1h-12l1-10.9c0,0-10.9,0.6-14.2-0.2c-2.1-0.5-4.3-0.7-6.5-0.8c0,2.3-0.2,5.3,0.8,5.3c1.2,0,4.2-0.2,4.1,0.6
		c-0.1,0.9-0.4,4.8,0.7,5c1.1,0.2,5-0.4,5,0.3c0,0.8-1.6,16.3-0.9,16.3s5.7-0.8,5.7,0c0,0.8-1.2,5.5,0,5.4c1.2-0.1,5.3-0.3,5.4,0.3
		c0.1,0.7-0.2,4.2-0.6,4.2s-5.1-0.2-5.1,0.3s0.3,5.9-0.1,5.9c-0.4,0-5.5,0-5.5,0.7c0,0.7-0.9,21.4-0.9,21.4s-12.8-0.3-12.8,0.2
		c0,0.5-1,9.9,0.2,10.1c1.2,0.2,2.4-0.3,2.5,0.2c0.1,0.5-0.8,16.1-0.8,16.1s0.5,17-0.1,16.9c-0.7-0.1-5.7-1-5.7-1s0.2,33.1-0.7,33
		c-0.9-0.1-5.6-0.1-5.6,0.2s-0.3,5.3-0.3,5.3l-10-1.4l0.1-5h-17.1l-0.1,38.8c0,0-1.2,5.7-1.2,6.1v11.2c0.1,0,0.2,0,0.2,0
		c1.4,0,57.7-0.3,58.1-0.1c0.4,0.2,0.7,2.8,0.7,3s-0.9,9.3,0.2,9c1.2-0.3,27.4-0.1,27.4-0.1s25.8,0.7,25.9,0.9s-0.2,14.1-0.2,14.1
		c0.7-1.1,2.3-1.4,3.4-0.7c0.2,0.1,0.4,0.3,0.5,0.5c0.8,0.2,2.7,1.4,2.3,2.7c-0.4,1.3-0.1,1.5,1.4,1.5c1.5,0,2.4,0.7,1.6,3
		c1.7,1.2,4.6,3.1,6.4,1.6c1.7-1.5,2.1-2,4.3,1.5c1.7-0.1,3.7-2.2,6.6,0.3c0-1,0.1-1.9,0.2-2.8c0.3-1,14.7,1.1,15.4,1.1
		s0.9-9.9,1.2-10.7c0.3-0.7,10.4-0.3,10.7-0.3s-0.2-7.3-0.1-8.1c0.1-0.7,5.1,0.5,5.5,0.7s0.4-6,0.4-6.3s4.7-0.1,5.2-0.1
		c0.4,0,0.3-12.9,0.2-13.5c-0.1-0.6,9.5-0.3,10-0.3s18-18.9,18.1-19.2c0.2-1.2,0.2-2.5,0.1-3.7c-0.1-0.2,4.1-0.3,4.6-0.3
		s0.1-4.4,0.2-5.1C821.4,309.6,844,285.5,849,280.1" />
                    <text transform="matrix(1 0 0 1 699.0762 289.3436)" class="st1 st2 st3">Henry</text>
                </g>
                <g id="Butts">
                    <path id="Path_11" class="st4" d="M907.6,449.7c0.3-2.8-3.2-3.9-4.6-5.4c0.3-1.8-1.8-3.4-2.6-4.4c-0.8-1-2.2-1.4-2.1-3.1
		c2.1-1.2,4.8-5.4,4.8-7.3s3-6.9,3.6-9.2c3.3-2.1,2.4-7-0.3-8.3c-2.7-1.4-4.2-5.4-4.2-6.7s-3.4-5.5-3.7-5.7
		c-0.3-0.2-0.3-5.4-0.3-8.6c1.3-1,2.6-4.6,2.8-6.3s-2.9-7.8-4.2-8.7c-1.3-0.9-1.3-2.3-1.3-4.2s-2.6-5-2.6-5
		c-0.4-0.6,1.9-1.4,1.7-5.3c0-1.4-4.1-4.6-5.9-4.8s-4.8-2.7-6.2-4c-1.4-1.3,0.1-5.3,1.4-7c1.1-1.2,1-3.1-0.1-4.2
		c-0.8-0.6-0.9-2.6-1-5.8c0-0.5-0.1-1.1-0.3-1.6c-0.7-1.8-2.3-2.1-2.6-3.2c-0.3-1.3,1.5-1.1,1-3.5c-2.4,1-6.6-0.6-6.4-3.3
		c0.2-2.7-2.4-6-4.8-6c-2.4,0.1-5.2-2.6-5.2-2.6l0.1-7.3c-1.1-1.4-2.3-2.7-3.8-3.8c-2.7-0.7-8.8-5.7-4.8-7.8
		c-1.7-0.8-1.7-2.9-1.6-3.6c0.2-1-0.4-2-1.4-2.2c-1.3-0.3-1.7-1.4-1.3-4.1c-3.6-2.4-3-5.8-2.4-6.6c0,0,0,0,0,0
		c-5.1,5.4-27.6,29.5-27.8,30.1c-0.1,0.7,0.4,5.1-0.2,5.1s-4.7,0.1-4.6,0.3c0.1,1.2,0,2.5-0.1,3.7c-0.2,0.2-17.6,19.2-18.1,19.2
		c-0.5,0-10.1-0.3-10,0.3s0.2,13.5-0.2,13.5s-5.2-0.2-5.2,0.2s-0.1,6.5-0.4,6.3s-5.4-1.4-5.5-0.7s0.4,8.1,0.1,8.1
		c-0.4,0-10.5-0.4-10.7,0.3c-0.3,0.7-0.5,10.7-1.2,10.7s-15.1-2.1-15.4-1.1c-0.2,0.9-0.2,1.9-0.2,2.8c0.3,0.3,0.6,0.6,0.9,0.9
		c3.4,3.8,6.4,7.4,5.7,8.2c-0.7,0.8-18.6,20.6-18.6,21.3c0,0.6-0.1,2.8,0.6,2.8s1.9-0.4,2.2,0c0.3,0.4,0.8,2.9,0.2,2.7
		c-0.6-0.2-2.8,0.1-2.6,0.4c0.2,0.3-1.4,27.1-1.4,27.1s0,0.1,0,0.1c4.6,0.1,24.2,0.5,45.9,0.9c30.3,0.6,64.5,1.3,67.7,1.4
		c5.9,0.2,9.8,0.6,13.1,0c3.3-0.6,11.8-1.2,13.1,0s7.6,0.4,9.3,3c0.7,1.5,2.5,2.1,3.9,1.3c0.6-0.3,1-0.7,1.3-1.3
		c3.5,1.1,3.1,3,3.6,5c0.4,1.7,2.4,5.9,9.1,6.2c1.7-3.2,4.7-5.9,4.9-6.3C908.6,452.1,910,451.4,907.6,449.7" />
                    <text transform="matrix(1 0 0 1 806.8784 398.494)" class="st1 st2 st3">Butts</text>
                </g>
            </svg>
        </div>
        <div class=" toggles__container">
            <?php
            foreach ($toggles as $toggle) :

                $title = $toggle['toggle_title']; // text
                $content = $toggle['toggle_content']; // WYSIWYG
            ?>
                <div id="<?= $title; ?>-toggle" class="toggle">
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