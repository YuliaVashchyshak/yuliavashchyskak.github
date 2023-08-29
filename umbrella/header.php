<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description') ?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__wrapper">
                <button class="header__burger-btn">
                    <span></span><span></span><span></span>
                </button>
                <div class="header__logo-wrap">
                <?php the_custom_logo() ?>
                </div>
                <?php wp_nav_menu(array('menu_class' => '', 'theme_location'  => 'header_menu',));  ?>
            </div>
        </div>
    </header>