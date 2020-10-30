<?php 
    /*
        Template Name: Игрушки
    */
?>

<?php get_header(); ?>

<div class="toys" id="toys">
    <div class="container">
        <h2 class="subtitle"><?php the_field('toys_soft_title'); ?></h2>
        <div class="toys__wrapper">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
                'numberposts' => -1,
                'category_name' => 'soft_toys',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="toys__item" style="background-image: url(<?php 
                    if (get_field('description_image')) {
                        the_field('description_image'); 
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                    }
                ?>)">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('description_toys'); ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                    </div>
                </div>                
            <?php
            }
            wp_reset_postdata(); // сброс
            ?>
        </div>

        <h2 class="subtitle"><?php the_field('toys_educational_title'); ?></h2>
        <div class="toys__wrapper">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
                'numberposts' => -1,
                'category_name' => 'educational_toys',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="toys__item" style="background-image: url(<?php 
                    if (get_field('description_image')) {
                        the_field('description_image'); 
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                    }
                ?>)">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('description_toys'); ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                    </div>
                </div>                
            <?php
            }
            wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span><?php the_field('text--bold') ?></span><?php the_field('text') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>