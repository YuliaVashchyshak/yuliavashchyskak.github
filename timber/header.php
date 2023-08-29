<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header" style="background-image: url(<?php the_field('top__bg') ?>);">
        <div class="header__inner">
            <img src="<?php bloginfo('template_url') ?>/assets/image/home.png" alt="">
            <div class="header__name"><?php the_field('header_name') ?> </div>
            <a href=":<?php the_field('phone') ?>" class="phone"> <?php the_field('phone') ?> </a>
            <div class="header__title"><?php the_field('header_title') ?></div>
            <div class="header__sale">
                <img src="<?php the_field('header__sale') ?>" alt="">
            </div>
        </div>
    </header>