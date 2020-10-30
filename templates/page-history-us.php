<?php 
    /*
        Template Name: Наша история
    */
?>

<?php get_header(); ?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('our_story_title'); ?></h1>
        <?php
        // параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => -1,
            'category_name' => 'our_story',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($posts as $index => $post) {
            setup_postdata($post);
            if ($index % 2) {
        ?>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('our_story_item_image'); ?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_title();; ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('our_story_item_text'); ?>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('our_story_item_title'); ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('our_story_item_text'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('our_story_item_image'); ?>" alt="мир детства">
                    </div>
                </div>
        <?php
            };
        };

        wp_reset_postdata(); // сброс
        ?>
    </div>
</div>

<?php get_footer(); ?>