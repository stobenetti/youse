<?php

$slug = explode('/', get_query_var('category_name'))[0];
$category = get_category_by_slug($slug);

?>
<li>
    <a href="<?php get_category_link($category->term_id) ?>">
        <?php echo $category->name ?>
    </a>
</li>