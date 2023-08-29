<?php
/*
Template Name: Main
*/
get_header()
?>

<div class="tost__wrapper">
    <p class="tost__message"></p>
    <span>&#8855;</span>
</div>
<div class="calc__wrapper">
    <div class="numbers__wrapper">
        <label>
            <input placeholder="Введіть число" class="first-value" type="text">
        </label>
        <span>+</span>
        <label>
            <input placeholder="Введіть число" class="second-value" type="text">
        </label>
    </div>
    <span>=</span>
    <div class="result__wrapper">
        <label>
            <input class="result" placeholder="Result" readonly type="text">
            <span class="clear">&#215;</span>
        </label>

        <button class="get_result"><i class="spiner-wrap">
                <svg viewBox="0 0 1024 1024" focusable="false" data-icon="loading" width="1em" height="1em" class="spiner" fill="currentColor" aria-hidden="true">
                    <path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                    </path>
                </svg>
            </i>
            Рахувати</button>
    </div>
</div>

<div class="sorts">
    <div class="sort__wrapper">Виберіть:
        <ul class="sort__list">
            <li class="option">Red</li>
            <li class="option">Green</li>
            <li class="option">Blue</li>
            <li class="option">Pink</li>
            <li class="option">Yellow</li>
            <li class="option">Purple</li>

        </ul>
    </div>
    <div class="filter__wrapper">
        <input class="filter__input" placeholder="Введіть значення" type="text">
        <button class="filer__search">Пошук</button>
    </div>
</div>




<div class="posts__wrapper">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('/template-parts/content');
        }
        wp_reset_postdata();
    }
    ?>
</div>

<script>
    var this_page = 1;
  </script>

<div class="btn-loadmore blog__load-more main-btn" title="Load more" data-param-posts='<?php echo serialize($query->query_vars); ?>' data-max-pages='<?php echo $query->max_num_pages; ?>' data-tpl='doveryayut'>
    <span class="fas fa-redo"></span> Load more
</div>
<?php get_footer() ?>