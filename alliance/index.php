<?php get_header(); ?>

<section class="action">
    <div class="action__container container">
        <div class="action__wrapper">
            <div class="action__main">
                <h1 class=" title action__title">
                    <?php the_field('action__title') ?>
                </h1>
                <p class="action__text">
                    <?php the_field('action__text') ?>
                </p>
                <button class=" btn action__button">Call to Action</button>
            </div>
            <div class="action__img-wrap">
                <img src="<?php the_field('action__img') ?>" class="action__img" alt="">
            </div>
        </div>
    </div>
</section>


<?php if (have_rows('special')) :    ?>

    <section class="special">
        <div class="special__container container">
            <p class="special__subtitle" data-aos="fade-down" data-aos-duration="1000"><i></i> What do We do?</p>
            <div class="special__bg">
                <img class="circle" src="/assets/images/Mask Group.png" alt="">
                <img class="e" src="/assets/images/Vector.png" alt="">
            </div>
            <div class="special__wrapper">
                <div class="special__main" data-aos="fade-right" data-aos-duration="1000">
                    <p class="special__title title">
                        <?php the_field('special__title') ?>
                    </p>
                    <p class="special__text">
                        <?php the_field('special__text') ?>
                    </p>
                </div>


                <div class="special__items" data-aos="fade-left" data-aos-duration="1000">
                    <?php while (have_rows('special')) : the_row();   ?>
                        <div class="special__item">
                            <div class="special__img-wrap">
                                <img src="<?php the_sub_field('special__img') ?>" alt="" class="special__img">
                            </div>
                            <p class="special__item-title"><?php the_sub_field('special__item-title') ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<section class="services" style="background: url(<?php bloginfo('template_url') ?>/assets/images/Rectangle\ 21.png); overflow: hidden; background-size: cover;">
    <?php if (have_rows('services')) :    ?>
        <div class="services__container container">
            <div class="services__wrapper">
                <div class="services__note-wrap">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/02-02 1.png" alt="" class="services__note">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/02-02 2.png" alt="" class="services__letters">
                </div>
                <div class="services__panels">
                    <p class="special__subtitle" data-aos="fade-down" data-aos-duration="1000"><i></i> Our Services</p>


                    <?php while (have_rows('services')) : the_row();   ?>
                        <div class="services__panel">
                            <button class="services__btn" data-aos="fade-down" data-aos-duration="1000"><span class="services__icon"></span> <?php the_sub_field('services__btn') ?></button>
                            <p class="services__text">
                                <span class="services__text-wrapper">
                                    <?php the_sub_field('services__text-wrapper') ?>
                                </span>
                            </p>
                        </div>
                    <?php endwhile; ?>


                    <div class="services__button-wrap">
                        <button class="services__button btn">Call to Action</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (have_rows('benefits')) :    ?>
        <div class="benefits-container container">
            <h5 class="benefits__subtitle" data-aos="fade-right" data-aos-duration="1000">Benefits</h5>
            <h2 class="benefits__title title" data-aos="fade-left" data-aos-duration="2000"><?php the_field('benefits__title') ?></h2>
            <div class="benefits__wrapper">
            <?php while (have_rows('benefits')) : the_row();   ?>
                <div class="benefit__wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <p class="benefit__title"><?php the_sub_field('benefit__title') ?></p>
                    <p class="benefit__text"><?php the_sub_field('benefit__text') ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>