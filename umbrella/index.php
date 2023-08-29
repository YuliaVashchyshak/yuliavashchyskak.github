<?php get_header(); ?>

<section class="menu">
    <div class="container menu__container">
        <div class="menu__wrapper">
            <div class="menu__text">
                <h1 class="menu__title"><?php the_field('menu__title') ?></h1>
                <h4 class="menu__subtitle"><?php the_field('menu__subtitle') ?></h4>
                <a href="<?php the_field('menu__link') ?>" class="menu__link">Book Your Free Discovery Call</a>
            </div>
            <div class="menu__img-container">
                <img src="<?php the_field('menu__img') ?>" alt="img" class="menu__img">
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('info')) :    ?>
    <section class="info">
        <div class="container info__container">
            <h3 class="info__introduction" data-aos="zoom-out-up"><?php the_field('info__introduction') ?></h3>
            <div class="info__wrapper">
                <?php if (get_field('info__img')) { ?>
                    <div class="info__img-wrapper">
                        <img src="<?php the_field('info__img') ?>" alt="image" class="info__img">
                    </div>
                <?php } ?>
                <div class="info__text">
                    <?php while (have_rows('info')) : the_row();   ?>
                        <div class="info__text-wrapper" data-aos="fade-left" data-aos-duration="1000">
                            <div class="info__text-union">
                                <img class="info__img-check" src="<?php bloginfo('template_url') ?>/assets/images/img-check.svg" alt="checkmark">
                                <h3 class="info__title"><?php the_sub_field('info__title') ?></h3>
                            </div>
                            <p class="info__subtitle"><?php the_sub_field('info__subtitle') ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
    </section>
<?php endif; ?>

<?php if (have_rows('services')) :    ?>
    <section class="services">
        <div class=" container services__container">
            <h3 class="services__title">Our services</h3>
            <div class="services__wrapper">
                <?php while (have_rows('services')) : the_row();   ?>
                    <div class="services__inner " data-aos="fade-down" data-aos-duration="1000">

                        <?php if (get_sub_field('image')) { ?>
                            <img src="<?php the_sub_field('image') ?>" alt="logo" class="services__logo">
                        <?php } ?>

                        <p class="services__subtitle">
                            <?php the_sub_field('title') ?>
                        </p>

                        <?php $link = get_sub_field('link') ?>
                        <?php if ($link) { ?>
                            <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="services__link"><?= $link['title'] ?></a>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<section class="method">
    <div class="container method__container">
        <div class="method__wrapper">
            <div class="method__text">
                <h3 class="method__title"><?php the_field('method__title') ?></h3>
                <div class="method__content"><?php the_field('method__content') ?></div>
            </div>
            <div class="method__img-wrapper">
                <img src="<?php the_field('method__img') ?>" alt="" class="method__img">
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('process-days')) :    ?>
    <section class="process">
        <div class="container process__container">
            <p class="process__title">Our process</p>
            <div class="process__days">
                <div class="process__zoom">
                    <img src='<?php bloginfo('template_url') ?>/assets/images/process_logo.svg' alt="logo" class="process__zoom-img">
                </div>
                <?php while (have_rows('process-days')) : the_row();   ?>
                    <div class="process__days-date"><?php the_sub_field('process__days-date') ?></div>
                    <span class="process__days-separator"></span>
                <?php endwhile; ?>
            </div>
            <div class="process__text">
                <?php while (have_rows('process-stages')) : the_row();   ?>
                    <div class="process__text-wrapper">
                        <h5 class="process__text-title"><?php the_sub_field('process__text-title') ?></h5>
                        <div class="process__text-content"><?php the_sub_field('process__text-content') ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
    </section>
<?php endif; ?>

<?php if (have_rows('items')) :    ?>
    <section class="items">
        <div class="container items__container">
            <div class="items__wrapper">
                <?php while (have_rows('items')) : the_row();   ?>
                    <div class="items__partners">
                        <h3 class="items__title"><?php the_sub_field('items__title') ?></h3>
                        <div class="items__images">
                            <?php while (have_rows('images')) : the_row();   ?>
                                <img class="items__image" src="<?php the_sub_field('items__image') ?>" alt="">
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
$args = array(
    'post_type' => 'reviews',
    'publish'           => true,
    'posts_per_page'    => 4,
    'orderby' => 'rnad',
    'post__not_in'  => array(get_the_ID()),
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) { ?>
    <section class="slider">
        <div class="container slider__container">
            <div class="slider__wrapper">
                <?php while ($the_query->have_posts()) { ?>
                    <?php $the_query->the_post(); ?>
                    <div class="slider__inner">
                        <div class="slider__slide">
                            <div class="slider__image">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </div>
                            <div class="slider__text">
                                <img class="slider__logo" src="<?php bloginfo('template_url') ?>/assets/images/slider-img.png" alt="">
                                <p class="slider__title"><?php the_title() ?></p>
                                <p class="slider__text"><?php the_content() ?></p>
                                <div class="slider__names">
                                    <p class="slider__author"><?php the_field('slider__author', get_the_ID()) ?></p>
                                    <span class="slider__line"></span>
                                    <p class="slider__position"><?php the_field('slider__position', get_the_ID()) ?></p>
                                </div>
                                <a href="<?php the_permalink() ?>" class="btn__view">View more</a>
                            </div>
                        </div>
                    </div>
                <?php }    ?>
            </div>
        </div>
    </section>
<?php }    ?>
<section class="team">
    <div class="container team__container">
        <div class="team__wrapper">
            <h3 class="team__title">Meet the team:</h3>
            <div class="team__slider">
                <div class="team__slide-wrap">
                    <img src="images/jam.jpg" alt="" class="team__image">
                    <p class="team__names">James</p>
                    <p class="team__profesion">Team Success Manager</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/jen.jpg" alt="" class="team__image">
                    <p class="team__names">Jennifer</p>
                    <p class="team__profesion">Copywriter</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/sas.jpg" alt="" class="team__image">
                    <p class="team__names">Sasha</p>
                    <p class="team__profesion">CRO Expert</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/raf.jpg" alt="" class="team__image">
                    <p class="team__names">Rafi</p>
                    <p class="team__profesion">Creative Designer</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/vic.jpg" alt="" class="team__image">
                    <p class="team__names">Viktor</p>
                    <p class="team__profesion">Senior Media Buyer & Strategist</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/fai.jpg" alt="" class="team__image">
                    <p class="team__names">Faith</p>
                    <p class="team__profesion">Client Success Manager</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/joh.jpg" alt="" class="team__image">
                    <p class="team__names">John</p>
                    <p class="team__profesion">Email Marketing Expert</p>
                </div>
                <div class="team__slide-wrap">
                    <img src="images/ser.jpg" alt="" class="team__image">
                    <p class="team__names">Sergey</p>
                    <p class="team__profesion">Funnels & Automation</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brands">
    <div class="container brands__container">
        <div class="brands__title">
            <p class="brands__text">Brands we worked with</p>
        </div>
    </div>
    <div class="brands__wrapper">
        <div class="brands__slider">
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/5.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/2.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/3.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/6.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/1.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/4.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/3.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/2.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/1.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/4.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/5.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/6.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/1.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/4.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line ">
                    <img src="images/1.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/3.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/2.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/4.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/5.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/1.png" alt="" class="brands__second-image">
                </div>
            </div>
            <div class="brands__slide">
                <div class="brends__images brends__images-line">
                    <img src="images/1.png" alt="" class="brands__first-image">
                </div>
                <div class="brends__images">
                    <img src="images/6.png" alt="" class="brands__second-image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="book">
    <div class="container book__container">
        <div class="book__wrapper">
            <div class="book__inner">
                <img src="images/book-logo.png" alt="" class="book__logo">
                <p class="book__title">
                    Don’t be a stranger.
                    <br>
                    Share your ideas.
                </p>
                <a href="#" class="book__button">Book a Free Review & Consultation</a>
            </div>
            <div class="book__image-wrap">
                <img src="images/book-img.png" alt="" class="book__image">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>