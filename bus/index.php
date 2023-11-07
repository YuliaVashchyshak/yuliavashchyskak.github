<?php get_header() ?>

<section class="splash">
    <div class="container splash__container">
        <div class="splash__wrapper">
            <h1 class="splash__title" data-aos="fade-right" data-aos-duration="1000"><?php the_field('splash__title') ?></h1>
            <h2 class="splash__subtitle"><?php the_field('splash__subtitle') ?></h2>
            <p class="splash__context"><?php the_field('splash__context') ?></p>
            <a href="#contact" class="splash__button btn"><?php the_field('call_me', 'option'); ?></a>
            <?php if (have_rows('items')) :    ?>
                <div class="splash__items" data-aos="zoom-in" data-aos-duration="1500">
                    <?php while (have_rows('items')) : the_row();   ?>
                        <div class="splash__item-wrapper">
                            <img src="<?php the_sub_field('splash__item-image') ?>" alt="benefits-image" class="splash__item-image">
                            <div class="splash__item-title"><?php the_sub_field('splash__item-title') ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <img src="<?php the_field('splash__image') ?>" alt="" class="splash__image" data-aos="fade-left" data-aos-duration="1000">
</section>

<?php if (have_rows('about')) :    ?>
    <section class="about" id="about">
        <div class="about__container container">
            <div class="about__wrapper">
                <div class="about__inner">
                    <h3 class="about__title title title__dark" data-aos="fade-right" data-aos-duration="1000"><?php the_field('about__title') ?></h3>
                    <img src="<?php the_field('about__image') ?>" alt="bus-seat" class="about__image">
                </div>
                <div class="about__main">
                    <?php while (have_rows('about')) : the_row();   ?>
                        <div class="about__text-wrapper" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/check-circle 1.svg" alt="" class="about__text-image">
                            <p class="about__text"><?php the_sub_field('about__text') ?></p>
                        </div>
                    <?php endwhile; ?>
                    <a href="#contact" class="about__button btn"><?php the_field('call_me', 'option'); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('benefits')) :    ?>
    <section class="benefits" id="benefits">
        <div class="benefits__container container">
            <div class="benefits__wrapper">
                <h3 class="benefits__title title" data-aos="fade-right" data-aos-duration="1500"><?php the_field('benefits__title') ?></h3>
                <h4 class="benefits__subtitle"><?php the_field('benefits__subtitle') ?></h4>
                <div class="benefits__blocks">
                    <?php while (have_rows('benefits')) : the_row();   ?>
                        <div class="benefits__block" data-aos="fade-left" data-aos-duration="1000">
                            <p class="benefits__block-number"><?php the_sub_field('benefits__block-number') ?></p>
                            <h3 class="benefits__block-title"><?php the_sub_field('benefits__block-title') ?></h3>
                            <p class="benefits__block-text"><?php the_sub_field('benefits__block-text') ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('reviews')) :    ?>
    <section class="reviews" id="reviews">
        <div class="reviews__container container">
            <div class="reviews__wrapper">
                <h3 class="reviews__title title title__dark" data-aos="fade-right" data-aos-duration="1000"><?php the_field('reviews__title') ?></h3>
                <h4 class="reviews__subtitle"><?php the_field('reviews__subtitle') ?></h4>
                <div class="reviews__wrapper-main">
                    <?php while (have_rows('reviews')) : the_row();   ?>
                        <div class="reviews__wrapper-review" data-aos="fade-up" data-aos-duration="1000">
                            <div class="reviews__top">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/“.svg" alt="" class="reviews__image">
                                <p class="reviews__text"><?php the_sub_field('reviews__text') ?></p>
                            </div>
                            <div class="reviews__bottom">
                                <p class="reviews__name"><?php the_sub_field('reviews__name') ?></p>
                                <p class="reviews__date"><?php the_sub_field('reviews__date') ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="contacts" id="contact">
    <div class="contacts__container container">
        <div class="contacts__wrapper">
            <div class="contacts__main">
                <h3 class="contacts__title title" data-aos="fade-right" data-aos-duration="1000"><?php the_field('contacts__title') ?></h3>
                <a href="tel:<?php the_field('phone', 'option'); ?>" class="contacts__phone-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/Vector.svg" alt="" class="contacts__image">
                    <p class="contacts__phone"><?php the_field('phone', 'option'); ?></p>
                </a>
                <?php if (have_rows('social', 'option')) :    ?>
                    <div class="contacts__social-wrapper">
                        <?php while (have_rows('social', 'option')) : the_row();   ?>
                            <a target="_blank" href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('image'); ?>" alt="" class="contacts__social"></a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="contacts__form" data-aos="fade-up-left" data-aos-duration="1000">
                <h4 class="contacts__form-title">Потрібна консультація?</h4>
                <h5 class="contacts__form-subtitle">Вкажіть свої контактні дані, ми Вам зателефонуємо</h5>
                <?php echo do_shortcode('[contact-form-7 id="51d3b9f" title="Контактна форма 1"]') ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>