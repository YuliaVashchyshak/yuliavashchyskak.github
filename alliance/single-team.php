<?php get_header() ?>

<img src="<?php the_post_thumbnail_url('team_thumb'); ?>" alt="">
<h1><?php the_title() ?></h1>
<p><?php the_content() ?></p>
<?php get_footer() ?>