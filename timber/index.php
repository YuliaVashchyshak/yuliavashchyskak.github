<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="main__title"><?php the_field('main__title') ?></div>
        <div class="main__text"><?php the_field('main__text') ?></div>
        <div class="main-img">
            <img src="<?php bloginfo('template_url') ?>/assets/image/main-img.png" alt="">
        </div>
        <div class="project">
            <div class="project__title">ПРОЕКТЫ ДОМОВ ИЗ БРУСА</div>

            <?php
            $items = get_field('project__item');
            
            foreach ($items as $item) {
            ?>
                <div class="project__item">
                    <div class="project__name"><?php echo $item->post_title ?></div>
                    <div class="project__size"><?php the_field('project__size', $item->ID) ?></div>
                    <div class="project__area"><?php the_field('project__area', $item->ID) ?></div>
                    <div class="project__price"><?php the_field('project__price', $item->ID) ?></div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="">
                            <img src="<?php the_field('project__images-item', $item->ID) ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="download">
        <img src="<?php bloginfo('template_url') ?>/assets/image/home-download.png" alt=""> <br>
        <div class="download__link">
            <a href="<?php the_field('download__link') ?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
        </div>
    </div>
    <div class="container">
        <div class="gallery">
            <div class="gallery__title"><?php the_field('gallery__title') ?></div>
            <div class="gallery__text"><?php the_field('gallery__text') ?></div>
            <div class="gallery__inner">
                <a href="<?php the_field('galery1') ?>"><img src="<?php the_field('galery1') ?>" alt=""></a>
                <a href="<?php the_field('galery2') ?>"><img src="<?php the_field('galery2') ?>" alt=""></a>
                <a href="<?php the_field('galery3') ?>"><img src="<?php the_field('galery3') ?>" alt=""></a>
            </div>
        </div>
        <div class="main-img">
            <img src="<?php bloginfo('template_url') ?>/assets/image/main-img.png" alt="">
        </div>
    </div>
</main>

<?php get_footer(); ?>