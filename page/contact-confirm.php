
<?php
/*Template Name: お問い合わせ 確認ページ */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">お問い合わせ</h1>
	</div>
</section>

<section class="l-spacer">
	<div class="l-container--primary-s">
		<article class="l-contents">
			<div class="l-spacer -medium">
				<?php echo do_shortcode('[contact-form-7 id="e8cf253" title="確認ページ"]'); ?>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>