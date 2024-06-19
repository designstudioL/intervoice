<section class="l-spacer -medium000 -both000">
    <div class="l-container--primary-l">
        <article class="l-contents">
            <div class="l-contents__conts">
                <ul class="p-post-list">

                <?php
                $post_ttl = 12;
                $post_cnt = $post_ttl;
                $sticky = get_option('sticky_posts');

                // 現在のページ番号を取得
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                if (!empty($sticky)) {
                    $post_cnt -= count($sticky);
                    $args = array(
                        'post_type' => 'news',
                        'post__in'  => $sticky,
                        'paged'     => $paged, // ページ番号を設定
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'news_cat', // タクソノミー名
                                'field'    => 'slug',
                                'terms'    => 'important-news', // 除外したいタームのスラッグ
                                'operator' => 'NOT IN',
                            ),
                        ),
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <li class="p-post-list__item">
                    <a href="<?php the_permalink();?>">
                        <article class="p-post-card">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="p-post-card__img">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <div class="p-post-card__text">
                                <?php
                                if ($terms = get_the_terms($post->ID, 'news_cat')) {
                                foreach ( $terms as $term ):
                                if($term->parent) echo '<p class="p-post-card__cat">'.esc_html($term->name).'</p>';
                                endforeach;
                                } ?>
                                <time class="p-post-card__date"><?php the_time('Y/m/d') ?></time>
                                <h3 class="p-post-card__title"><?php the_title(); ?><?php if(get_field('event_period')): ?><span><?php the_field('event_period'); ?></span><?php endif; ?></h3>
                                <?php
                                $terms = get_the_terms($post->ID, 'news_cat');
                                echo '<ul class="p-post-card__tag">';
                                foreach($terms as $term){
                                $term_name = $term->name;
                                echo '<li>';
                                echo $term_name;
                                echo '</li>';
                                };
                                echo '</ul>';
                                ?>
                            </div>
                        </article>
                    </a>
                </li>
                <?php
                    endwhile;
                }

                if ($post_cnt > 0) {
                    $args = array(
                        'post__not_in'        => $sticky,
                        'post_type'           => 'news',
                        'posts_per_page'      => $post_cnt,
                        'ignore_sticky_posts' => 1,
                        'paged'               => $paged, // ページ番号を設定
                        'tax_query'           => array(
                            array(
                                'taxonomy' => 'news_cat', // タクソノミー名
                                'field'    => 'slug',
                                'terms'    => 'important-news', // 除外したいタームのスラッグ
                                'operator' => 'NOT IN',
                            ),
                        ),
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <li class="p-post-list__item">
                    <a href="<?php the_permalink();?>">
                        <article class="p-post-card">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="p-post-card__img">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <div class="p-post-card__text">
                                <?php
                                if ($terms = get_the_terms($post->ID, 'news_cat')) {
                                foreach ( $terms as $term ):
                                if($term->parent) echo '<p class="p-post-card__cat">'.esc_html($term->name).'</p>';
                                endforeach;
                                } ?>
                                <time class="p-post-card__date"><?php the_time('Y/m/d') ?></time>
                                <h3 class="p-post-card__title"><?php the_title(); ?><?php if(get_field('event_period')): ?><span><?php the_field('event_period'); ?></span><?php endif; ?></h3>
                                <?php
                                $terms = get_the_terms($post->ID, 'news_cat');
                                echo '<ul class="p-post-card__tag">';
                                foreach($terms as $term){
                                $term_name = $term->name;
                                echo '<li>';
                                echo $term_name;
                                echo '</li>';
                                };
                                echo '</ul>';
                                ?>
                            </div>
                        </article>
                    </a>
                </li>
                <?php
                endwhile; }
                if ($post_cnt == $post_ttl && $paged == 1) {
                    //echo '<p class="none">記事はまだありません。</p>';
                }
                wp_reset_postdata(); ?>

                </ul>
            </div>
        </article>
    </div>
</section>

<div class="l-container--primary-l">
<section class="l-spacer -medium -both">
    <?php wp_pagenavi(); ?>
</section>
</div>