<?php 
/*
Template Name: мягкие игрушки
Template Post Type: post, soft_toys
*/
?>

<?php get_header(); ?>
<div class="toys" id="toys">
    <div class="container">
        <h2 class="subtitle">Шаблон мягких игрушек</h2>
        <p><?php the_field('test'); ?></p>
        <div class="toys__wrapper">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
                'numberposts' => 3,
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
    </div>
</div>

<?php get_footer(); ?>