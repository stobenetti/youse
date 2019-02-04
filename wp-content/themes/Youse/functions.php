<?php

add_theme_support('post-thumbnails');

function get_category_menu() {

    if (is_home()) {
        return get_template_part('menu/categories');
    }
    else {
        return get_template_part('menu/category-single');
    }

}

function get_query_posts() {

    if (is_home()) {
        query_posts(array('posts_per_page' => 6, 'orderby' => 'post_data', 'order' => 'ASC'));
    }
    else {
        $slug = explode('/', get_query_var('category_name'))[0];
        query_posts(array('category_name' => $slug, 'posts_per_page' => 6, 'orderby' => 'post_data', 'order' => 'ASC'));
    }

}

?>