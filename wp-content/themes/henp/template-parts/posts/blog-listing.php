<?php
$id = $args['id'];

if (!$id) {
    return;
}

$title = get_the_title($id);
$link = get_the_permalink($id);
$excerpt = get_the_advanced_acf_excerpt($id);

if (has_post_thumbnail($id)) {
    $featured_img = acf_get_attachment(get_post_thumbnail_id($id));
    if ((int)$featured_img['width'] !== 600 || (int)$featured_img['height'] !== 600) {
        $image_url = aq_resize($featured_img['url'], 600, 600, true, true, true);
    } else {
        $image_url = $featured_img['url'];
    }
}

$class = has_post_thumbnail($id) ? 'section-wrap blog-listing blog-listing--has-thumbnail' : 'section-wrap blog-listing';
?>
<article class="<?= $class; ?>">
    <figure class="blog-listing__figure">
        <img class="blog-listing__image" src="<?= $image_url; ?>" alt="<?= $featured_img['alt']; ?>">
    </figure>
    <header class="blog-listing__header">
        <h3 class="blog-listing__header__title"><?= $title; ?></h3>
        <time class="blog-listing__header__time" datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('F j, Y'); ?></time>
        <a class="blog-listing__button btn-arrow" href="<?= $link; ?>">Read Article</a>
    </header>
</article>