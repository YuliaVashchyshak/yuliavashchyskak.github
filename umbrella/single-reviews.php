<?php get_header(); ?>
<section class="preview">
    <div class="container ">
        <div class="preview__wrapper">
            <div class="preview__owner">
                <div class="slider__image">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                </div>
                <div class="preview__names">
                    <p class="preview__author"><?php the_field('slider__author', get_the_ID()) ?></p>
                    <span class="preview__line"></span>
                    <p class="preview__position"><?php the_field('slider__position', get_the_ID()) ?></p>
                </div>
            </div>
            <p class="preview__title"><?php the_title() ?></p>
            <div class="preview__content" ><?php the_content() ?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>