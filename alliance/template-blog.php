<?php get_header()
/*
 Template Name: blog-template
 */
?>

<section class="hero" style="background-image: url(<?php the_field('hero-bg') ?>);">
    <div class="hero__container container">
        <div class="hero__wrappper">
            <div class="hero__links">
                <a class="hero__link" href="/">Home /</a>
                <p><?php the_field('hero__title') ?></p>
            </div>
            <h1 class="hero__title title"><?php the_field('hero__title') ?></h1>
        </div>
    </div>
</section>

<section class="tags">
    <h2 class="tags__title container">Tags</h2>
    <div class="tags__container container">
        <div class="tags__border">
            <div class="tags__wrapper">
                <p class="tags__item">App Development</p>
                <p class="tags__item">Blockchain</p>
                <p class="tags__item">Data Science</p>
                <p class="tags__item">Enterprise</p>
                <p class="tags__item">Security</p>
                <p class="tags__item">Trends</p>
            </div>
            <div class="tags__inner">
                <button class="tags__button">Clear all</button>
            </div>
        </div>
    </div>
</section>
<section class="sort">
    <div class="sort__container container">
        <div class="sort__wrapper">
            <div class="sort__svg-wrap">
                <img src="/assets/images/funnel 1.svg" alt="" class="sort__svg">
            </div>
            <div class="sort__column-wrap">
                <div class="sort__column">Sort by</div>
                <ul class="sort__column-list">
                    <li class="sort__column-item">New</li>
                    <li class="sort__column-item">Old</li>
                </ul>
            </div>
            <div class="sort__search-wrap">
                <input type="text" class="sort__search" placeholder="What are you looking for?">
                <span class="clean-search"></span>
            </div>
            <button class="sort__search-button">Search</button>
        </div>
    </div>
</section>

<section class="blog">
    <div class="blog__container container">
        <div class="blog__wrapper">

            <?php
            $args = array(
                'publish'           => true,
                'posts_per_page'    => 6,
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


<section class="pagination">
    <div class="pagination__container container">
        <div class="pagination__wrapper">
            <div class="pagination__item">1</div>
            <div class="pagination__item">2</div>
            <div class="pagination__item">3</div>
            <div class="pagination__item">4</div>
            <div class="pagination__item">...</div>
            <div class="pagination__item">8</div>
        </div>
    </div>
</section>

<?php get_footer() ?>