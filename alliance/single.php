<?php get_header() ?>

<section class="single-hero" style="background: url(<?php echo get_the_post_thumbnail_url() ?>);">
    <div class="single__hero-container container">
        <div class="single-hero__wrappper">
            <div class="single-hero__links">
                <a class="single-hero__link" href="/">Home /</a>
                <a class="single-hero__link" href="/blog">Our Blog /</a>
                <p> <?php the_title() ?></p>
            </div>
            <h1 class="single-hero__title title"><?php the_title() ?></h1>
        </div>
    </div>
</section>

<section class="single-topbar">
    <div class="single-topbar__container container">
        <div class="single-topbar__wrapper">
            <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
            <?php if ($terms) { ?>
                <div class="single-topbar__cats">
                    <?php foreach ($terms as $term) {    ?>
                        <div class="single-topbar__cat"><?php echo $term->name; ?></div>
                    <?php }  ?>
                </div>
            <?php } ?>
            <div class="single-topbar__info">
                <div class="single-topbar__author">test</div>
                <div class="single-topbar__date"><?php echo get_the_date() ?></div>
            </div>
        </div>
    </div>
</section>

<section class="single-social">
    <div class="single-social__container container">
        <div class="single-social__wrapper">
            <div class="single-social__sticky-wrapper">
                <div class="single-social__inner">
                    <div class="single-social__item">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/facebook.svg" alt="" class="single-social__img">
                    </div>
                    <div class="single-social__item">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/LinkedIn.svg" alt="" class="single-social__img">
                    </div>
                    <div class="single-social__item">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/Twitter.svg" alt="" class="single-social__img">
                    </div>
                </div>
            </div>
            <div class="single-social__text">
               <?php the_content() ?>
            </div>
        </div>
    </div>
</section>

<section class="single-also">
    <div class="single-also__container container">
        <div class="single-also__wrapper">
            <?php

            $args = array(
                'publish'           => true,
                'posts_per_page'    => 2,
                'post__not_in'  => array(get_the_ID()),
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) { ?>
                    <?php $the_query->the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="blog__inner">
                        <div class="blog__inner-top">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="blog__image">
                            <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
                            <?php $counter = 0 ?>
                            <?php if ($terms) { ?>
                                <div class="blog__cats">
                                    <?php foreach ($terms as $term) {    ?>
                                        <?php if ($counter < 4) { ?>
                                            <p class="blog__cat"> <?php echo $term->name; ?></p>
                                        <?php }  ?>
                                        <?php $counter++ ?>
                                    <?php }  ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="blog__inner-bottom">
                            <p class="blog__title"><?php the_title() ?></p>
                            <div class="blog__info">
                                <p class="blog__date"><?php echo get_the_date() ?></p>
                                <p class="blog__time">4 min read</p>
                            </div>
                        </div>
                    </a>
            <?php } ?>
            <?php }    ?>
        </div>
    </div>
</section>

<?php get_footer() ?>