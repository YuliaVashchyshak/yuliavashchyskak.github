<?php get_header() ?>

<?php
query_posts(array(
    'post_type' => 'team',
    'showposts' => 10
));
?>
<?php while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink() ?>">
        <img alt="img" src="<?php the_post_thumbnail_url('team_thumb'); ?>">
        <h2><?php the_title(); ?></h2>
        <?php
        $terms = wp_get_post_terms(get_the_ID(), array('posytion', 'experience'));

        if (!empty($terms)) { 
        ?>
            <div class="blog__cats">
                <?php foreach ($terms as $term) { ?>
                    <p><?php echo $term->name; ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </a>
<?php endwhile; ?>

<?php get_footer() ?>