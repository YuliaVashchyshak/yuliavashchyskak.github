 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php bloginfo('description') ?></title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <?php wp_head(); ?>
 </head>

 <body>

     <header class="header">
         <div class="container header__container">
             <div class="header__wrapper">
                 <div class="header__logo" data-aos="fade-right " data-aos-duration="1000">
                     <?php the_custom_logo() ?></div>
                 <button class="header__burger-btn"><span></span></button>
                 <div class="header__burger-wrapper">
                     <?php wp_nav_menu(array('menu_class' => 'header__wp', 'theme_location'  => 'header_menu',));  ?>
                     <a href="tel:<?php the_field('phone', 'option'); ?>" class="header__phone-wrapper">
                         <img src="<?php bloginfo('template_url') ?>/assets/images/Vector.svg" alt="phone" class="header__phone-svg">
                         <div class="header__phone"><?php the_field('phone', 'option'); ?></div>
                     </a>
                     
                     <a href="#contact" class="header__button btn"><?php the_field('call_me', 'option'); ?></a>
                 </div>
             </div>
         </div>
     </header>