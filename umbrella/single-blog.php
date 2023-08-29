<?php
get_header();
?>

<section class="content" style="background: url(<?php echo get_the_post_thumbnail_url() ?>); background-repeat: round;">
    <div class="content__container container">
        <div class="content__wrapper">
            <p class="content__date"><?php echo get_the_date() ?></p>
            <h1 class="content__title"><?php the_title() ?></h1>
            <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
            <?php if ($terms) { ?>
                <div class="content__details">
                    <?php foreach ($terms as $term) {    ?>
                        <p class="content__detail"> <?php echo $term->name; ?></p>
                    <?php }  ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="about">
    <div class="about__container">
        <div class="about__text"><?php the_content() ?></div>
        <a href="" class="about__btn">Back to all posts</a>

        <div class="random__posts">
            <?php
            // 'post_type' => 'reviews',

            $args = array(
                'publish'           => true,
                'posts_per_page'    => 4,
                'orderby' => 'rnad',
                'post__not_in'  => array(get_the_ID()),
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