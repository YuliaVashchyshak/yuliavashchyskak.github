<?php
function load_posts()
{
	$search = $_POST['search'];

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
	if ($search) {
        $args['s'] = $search;
    }

    $mypost_Query = new WP_Query($args);
    if ($mypost_Query->have_posts()) {

        while ($mypost_Query->have_posts()) {
            $mypost_Query->the_post();

            get_template_part('/template-parts/content');
        }
        wp_reset_postdata();
    }
    die;
}
add_action('wp_ajax_loadmore', 'load_posts');
add_action('wp_ajax_nopriv_loadmore', 'load_posts');
