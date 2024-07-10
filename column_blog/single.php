<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<section class="l-spacer -medium">
	<section class="l-container--secondary --sp1">
		<ul class="p-column-tag">
			<?php $terms = get_the_terms($post->ID, 'column_blog_cat');
			foreach ($terms as $term) {
				echo '<li><a href="'.get_term_link($term->slug, 'column_blog_cat').'">' . $term->name . '</a></li>';
			} ?>
			<li class="-date"><?php the_time('Y.m.d') ?></li>
		</ul>
		<h1 class="c-title-ex-large"><?php the_title(); ?></h1>
	</section>
</section>

<section class="l-spacer -medium">
	<section class="l-container--secondary --sp2">
		<div class="p-column--post l-spacer -medium">
			<div class="p-entry">
				<?php if (has_post_thumbnail()) : ?>
				<figure class="p-news--kv">
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
				</figure>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
		</div>
		<div class="l-spacer -medium">
			<a href="<?php echo home_url('/column_blog'); ?>" class="-btn -bk -fontsM -sizeLL -arw -auto --back"><i class="c-arrow-link--icon"></i><span class="-center">コラム＆ブログ一覧</span></a>
		</div>
	</section>
</section>

<?php get_footer(); ?>
