<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<section class="l-spacer -medium">
	<section class="l-container--secondary --sp1">
		<h1 class="c-title-ex-large -"><?php if(get_field('name')): ?><span class="p-projects-cname"><?php the_field('name'); ?></span><?php endif; ?><?php the_title(); ?></h1>
		<ul class="p-projects-tag">
			<?php $terms = get_the_terms($post->ID, 'projects_cat');
			foreach ($terms as $term) {
				echo '<li><a href="'.get_term_link($term->slug, 'projects_cat').'">' . $term->name . '</a></li>';
			} ?>
		</ul>
	</section>
</section>

<section class="l-spacer -medium">
	<section class="l-container--secondary --sp2">
		<div class="p-projects--post l-spacer -medium">
			<div class="p-entry">
				<!-- <?php the_content(); ?> -->

				<?php if(get_field('outline_body')): ?>
				<div class="p-projects--conts">
					<h2 class="p-title-small -title01"><?php the_field('outline'); ?></h2>
					<p><?php the_field('outline_body'); ?></p>
				</div>
				<?php endif; ?>

				<?php if(get_field('issues_body')): ?>
				<div class="p-projects--conts">
					<h2 class="p-title-small -title02"><?php the_field('issues'); ?></h2>
					<p><?php the_field('issues_body'); ?></p>
				</div>
				<?php endif; ?>

				<?php if(have_rows('did_body')): ?>
				<div class="p-projects--conts">
					<h2 class="p-title-small -title03"><?php the_field('did'); ?></h2>
					<dl>
					<?php while(have_rows('did_body')): the_row(); ?>
						<!-- 繰り返しフィールドの内容ここから -->
						<div>
						<dt><?php the_sub_field('did_dt'); ?></dt>
						<dd><?php the_sub_field('did_dd'); ?></dd>
						</div>
						<!-- 繰り返しフィールドの内容ここまで -->
					<?php endwhile; ?>
					</dl>
				</div>
				<?php endif; ?>

				<?php if(have_rows('change_body')): ?>
				<div class="p-projects--conts">
					<h2 class="p-title-small -title04"><?php the_field('change'); ?></h2>
					<ul class="p-projects--check">
					<?php while(have_rows('change_body')): the_row(); ?>
						<!-- 繰り返しフィールドの内容ここから -->
						<li><?php the_sub_field('change_list'); ?></li>
						<!-- 繰り返しフィールドの内容ここまで -->
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>

				<?php if(have_rows('img')): ?>
				<div class="p-projects--conts --conts2">
					<?php while(have_rows('img')): the_row(); ?>
					<figure class="p-projects--img">
						<div><img src="<?php the_sub_field('figure'); ?>" alt=""></div>
						<?php if(get_sub_field('caption')): ?><figcaption><?php the_sub_field('caption'); ?></figcaption><?php endif; ?>
					</figure>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

			</div>
		</div>
		<div class="l-spacer -medium">
			<a href="<?php echo home_url('/projects'); ?>" class="-btn -bk -fontsM -sizeLL -arw -auto --back"><i class="c-arrow-link--icon"></i><span class="-center">プロジェクト事例一覧</span></a>
		</div>
	</section>
</section>

<?php get_footer(); ?>
