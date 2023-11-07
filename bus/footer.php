<footer class="footer">
    <div class="footer__container container">
        <div class="footer__wrapper">
            <div class="footer__top">
                <div class="footer__logo" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_custom_logo() ?></div>
                <?php wp_nav_menu(array('menu_class' => 'footer__menu', 'theme_location'  => 'header_menu',));  ?>
                <a href="#contact" class="footer__button btn" data-aos="fade-left" data-aos-duration="1000"><?php the_field('call_me', 'option'); ?></a>
            </div>
            <div class="footer__bottom">
                <?php if (have_rows('social', 'option')) :    ?>
                    <div class="footer__social contacts__social-wrapper">
                        <?php while (have_rows('social', 'option')) : the_row();   ?>
                            <a target="_blank" href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('image'); ?>" alt="" class="contacts__social"></a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <p class="footer__text"><?php the_field('phrase', 'option') ?></p>
                <a href="tel:<?php the_field('phone', 'option'); ?>" class="footer__phone-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/Vector2.svg" alt="phone" class="footer__image-phone">
                    <p class="footer__phone"><?php the_field('phone', 'option'); ?></p>
                </a>
            </div>
            <div class="footer__copyright">2023 &#169; Всі права захищені</div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>