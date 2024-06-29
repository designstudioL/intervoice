<section class="l-spacer -large">
    <section class="l-container--primary">
        <div class="p-column-home__title">
            <nav class="p-column-nav">
                <ul class="--left <?php $term_slug = get_query_var( 'column_blog_cat' ); echo $term_slug; ?>">
                    <li><a href="<?php echo home_url(); ?>/column_blog/" <?php if (is_tax()) : ?><?php else: ?>class="-active"<?php endif; ?>>すべて</a></li>
                    <?php
                    $terms = get_terms('column_blog_cat');
                    foreach ($terms as $term) {
                        $des_list .= '<li><a class="' . $term->slug . '" href="' . get_term_link($term) . '">';
                        $des_list .= $term->name . '</a></li>';
                    }
                    echo $des_list; ?>
                </ul>
            </nav>
        </div>
    </section>

    <section class="l-container--primary">
        <?php if (is_tax()) : ?><h2 class="c-title-medium"><?php $current_term_title = single_term_title( '', false ); echo $current_term_title; ?></h2><?php endif; ?>
    </section>

    <section class="l-spacer -large">
        <div class="p-column-home">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="p-carousel-card -column">
                    <div class="p-carousel-card__img">
                        <img src="<?php if (has_post_thumbnail()) : ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else : ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <div class="p-carousel-card__text -column">
                        <p class="p-carousel-card__cat">
                            <?php $terms = get_the_terms($post->ID, 'column_blog_cat');
                            foreach ($terms as $term) {
                                echo '<span class="c-tag">' . $term->name . '</span>';
                            } ?>
                        </p>
                        <h3 class="p-carousel-card__title -column"><?php the_title(); ?></h3>
                    </div>
                    <p class="p-carousel-card__date -en"><?php the_time('Y.m.d') ?></p>
                    <div class="-arw-s"><i class="c-arrow-link--icon"></i></div>
                </a>

            <?php endwhile; endif; ?>
        </div>
        <section class="l-container--primary">
            <?php wp_pagenavi(); ?>
        </section>
    </section>
</section>