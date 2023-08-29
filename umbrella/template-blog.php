<?php
get_header();
/*
 Template Name: blog-template
 */
?>

<section class="blogs">
    <div class="blogs__container container">
        <div class="blogs__wrapper">
            <?php
            $args = array(
                'publish'           => true,
                'posts_per_page'    => 8,
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) { ?>
                    <?php $the_query->the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="blog">
                        <img class="blog__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <div class="blog__wrapper">
                            <div class="blog__top">
                                <p class="blog__date"> <?php echo get_the_date() ?></p>
                                <h2 class="blog__title"><?php the_title() ?></h2>
                            </div>
                            <div class="blog__bottom">
                                <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
                                <?php $counter = 0 ?>
                                <?php if ($terms) { ?>
                                    <div class="blog__details">
                                        <?php foreach ($terms as $term) {    ?>
                                            <?php if ($counter < 4) { ?>
                                                <p class="blog__detail"> <?php echo $term->name; ?></p>
                                            <?php }  ?>
                                            <?php $counter++ ?>
                                        <?php }  ?>
                                    </div>
                                <?php } ?>
                                <span class="blog__link">See post</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php }    ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>