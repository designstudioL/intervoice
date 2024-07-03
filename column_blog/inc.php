<a href="<?php the_permalink(); ?>" class="p-column-card -grid">
    <div class="p-carousel-card__img -grid1">
        <img src="<?php if (has_post_thumbnail()) : ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else : ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" />
    </div>
    <div class="p-column-card__text -grid2">
        <p class="p-column-card__cat">
            <?php $terms = get_the_terms($post->ID, 'column_blog_cat');
            foreach ($terms as $term) {
                echo '<span class="c-tag">' . $term->name . '</span>';
            } ?>
        </p>
        <h3 class="p-column-card__title"><?php the_title(); ?></h3>
    </div>
    <p class="p-column-card__date -en -grid3"><?php the_time('Y.m.d') ?></p>
    <div class="-arw-s -grid4"><i class="c-arrow-link--icon"></i></div>
</a>