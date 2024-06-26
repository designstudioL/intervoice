<section class="l-spacer -large p-column--bg05">
    <section class="l-container--primary">
        <h2 class="c-title-en-small">projects<span><span class="title_sub">取り組み実績</span></span></h2>
    </section>
    <div class="p-carousel">
        <div class="c-swiper-container swiper-horizontal swiper">
            <div class="swiper-wrapper">
                <!--c-thumb-->
                <div class="swiper-slide">
                    <?php $news_posts = get_posts('post_type=projects&posts_per_page=12'); if (!empty($news_posts)) : ?>
                    <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>" class="p-carousel-card">
                        <div class="p-carousel-card__img">
                            <img src="<?php if (has_post_thumbnail()) : ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else : ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" />
                        </div>
                        <div class="p-carousel-card__text">
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
                    <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <nav class="c-swipe-nav l-container--primary">
            <div class="c-swipe-btn">
                <span class="swipe-arr -left swiper-button-prev"><i class="c-arrow-link--icon"></i></span>
                <span class="swipe-arr -right swiper-button-next"><i class="c-arrow-link--icon"></i></span>
            </div>
            <div class="c-swipe-link">
                <a href="<?php echo home_url('/projects'); ?>" class="-btn -bk -fontsM -sizeM -arw"><span>一覧を見る</span><i class="c-arrow-link--icon"></i></a>
            </div>
        </nav>
    </div>
</section>