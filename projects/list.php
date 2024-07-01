<section class="l-spacer -large">
    <!-- <section class="l-container--primary"> -->
        <div class="projects-home__title ">
            <nav class="p-projects-nav">
                <ul class="--left">
                    <li><a href="<?php echo home_url(); ?>/projects/" class="-active list-1">すべて</a></li>
                    <?php
                    $count=2;
                    $terms = get_terms('projects_cat');
                    foreach ($terms as $term) {
                        $des_list .= '<li><a class="' . $term->slug . ' list-'.$count.'" href="' . get_term_link($term) . '">';
                        $des_list .= $term->name . '</a></li>';
                        $count++;
                    }
                    echo $des_list; ?>
                </ul>
            </nav>
        </div>
    <!-- </section> -->

    <section class="l-container--primary">
        <?php if (is_tax()) : ?><h2 class="c-title-medium"><?php $current_term_title = single_term_title( '', false ); echo $current_term_title; ?></h2><?php endif; ?>
    </section>

    <section class="l-spacer -large">
        <div class="p-projects-home">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="p-carousel-card -projects -unset">
                    <div class="p-carousel-card__img">
                        <img src="<?php if (has_post_thumbnail()) : ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else : ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <div class="p-carousel-card__text -projects">
                        <?php if(get_field('name')): ?><p class="p-carousel-card__cop"><?php the_field('name'); ?></p><?php endif; ?>
                        <h3 class="p-carousel-card__title2"><?php the_title(); ?></h3>
                    </div>
                    <ul class="p-carousel-card__tag">
                        <?php $terms = get_the_terms($post->ID, 'projects_cat');
                            foreach ($terms as $term) {
                                echo '<li class="p-carousel-card__cat c-tag">' . $term->name . '</li>';
                            } ?>
                    </ul>
                    <div class="-arw-s"><i class="c-arrow-link--icon"></i></div>
                </a>
            <?php endwhile; endif; ?>
        </div>
        <section class="l-container--primary">
            <?php wp_pagenavi(); ?>
        </section>
    </section>
</section>
