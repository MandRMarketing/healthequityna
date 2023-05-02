<?php
if (have_rows('page_layouts')) :
    while (have_rows('page_layouts')) :
        the_row();

        /* Standard Section */
        if (get_row_layout() == 'module_standard') :
            get_template_part('template-parts/modules/columns/columns');

        /* Standard Callout */
        elseif (get_row_layout() == 'module_callout') :
            get_template_part('template-parts/modules/callout/callout');

        /* Image Gallery Layout */
        elseif (get_row_layout() == 'module_gallery') :
            get_template_part('template-parts/modules/gallery/gallery');

        /* Cards Layout */
        elseif (get_row_layout() == 'module_cards') :
            get_template_part('template-parts/modules/cards/cards');

        /* Events Feed Layout */
        elseif (get_row_layout() == 'module_events_feed') :
            get_template_part('template-parts/modules/events-feed/events-feed');

        /* Homepage Header Layout */
        elseif (get_row_layout() == 'module_homepage_header') :
            get_template_part('template-parts/modules/homepage-header/homepage-header');

        /* News Feed Layout */
        elseif (get_row_layout() == 'module_news_feed') :
            get_template_part('template-parts/modules/news-feed/news-feed');

        /* Team Layout */
        elseif (get_row_layout() == 'module_team') :
            get_template_part('template-parts/modules/team/team');

        /* Toggles Layout */
        elseif (get_row_layout() == 'module_toggles') :
            get_template_part('template-parts/modules/toggles/toggles');

        /* Facebook Feed Layout */
        elseif (get_row_layout() == 'module_facebook_feed') :
            get_template_part('template-parts/modules/facebook-feed/facebook-feed');

        endif; // end if switching statement over layout types
    endwhile; // end while(layouts) loop
endif; // end have(layouts) check