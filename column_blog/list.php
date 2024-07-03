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

            <?php get_template_part('column_blog/inc'); ?>

            <?php endwhile; endif; ?>
        </div>
        <section class="l-container--primary">
            <?php wp_pagenavi(); ?>
        </section>
    </section>
</section>