<?php
$i = 1;
while (have_posts()):
    if (is_home()):
        $col = $i == 1 || $i == 6 ? '6' : '3';
    else:
        $col = '3';
    endif;
    the_post();
    ?>
    <div class="post-list-item gl-mb-1 gl-col-12 gl-col-<?php echo $col ?>-sm">
        <a class="card" href="<?php the_permalink() ?>">
            <div class="image">
                <img class="lazy" data-src="<?php the_post_thumbnail_url(); ?>">
            </div>
            <div class="text">
                <p class="category"><?php echo the_category() ?></p>
                <p class="title"><?php echo the_title(); ?></p>
                <p class="description"><?php echo the_excerpt(); ?></p>
            </div>
        </a>
    </div>
    <?php
    $i++;
endwhile;
?>