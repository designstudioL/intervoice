<?php
/*Template Name: 重要なお知らせ */
?>
<?php get_header(); ?>
<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">重要なお知らせ</h1>
        <nav>
            <ul class="c-list-category tab-<?php echo get_queried_object()->slug; ?>">
                <li><a href="<?php echo home_url(); ?>/news/" class="c-list-category__item">すべて</a></li>
                <?php
                $args = array(
                    // 'exclude' => array(31), //除外したいタームのIDを指定。
                    'parent' => 0,
                    'post_type' => 'news',
                );
                $terms = get_terms('news_cat', $args);
                foreach ( $terms as $term ) {
                    echo '<li><a class="c-list-category__item '.$term-> slug.'" href="'.get_term_link( $term ).'">'.$term->name.'</a></li>';
                }
                ?>
            </ul>
        </nav>
	</div>
</section>

<section class="l-spacer -medium -both">
    <div class="l-container--primary-l">
        <article class="l-contents">
            <div class="l-contents__conts">
                <ul class="p-post-list">


            <?php
                $toplist = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                    'meta_key' => 'important',
                    'meta_value' => 'important',
                    'meta_compare' => 'LIKE'
                );
            ?>
            <?php query_posts($toplist); ?>
            <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
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
                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                <p class="p-post-card__info">
                    <?php
                    $terms = get_the_terms($post->ID, 'news_cat');
                    foreach($terms as $term){
                    $term_name = $term->name;
                    echo $term_name; break; };
                    ?>
                </p>
            </div>
        </article>
    </a>
</li>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>

                </ul>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>