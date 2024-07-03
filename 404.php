<?php
/*Template Name: 404 */
?>
<?php get_header(); ?>

<section class="l-container--primary">
	<h1 class="c-title-pageTitle -en">Not Found<span>ページが見つかりません</span></h1>
	<section class="l-container--2column">
		<section class="--L">
		</section>
		<section class="--R">
			<div class="l-spacer -medium">
				<p>こ指定されたページは見つかりませんでした。<br>ページが移動または削除されたか、URLが間違っている可能性がございます。</p>
			</div>
			<div class="l-spacer -medium -mgB-l">
				<a href="<?php echo home_url(); ?>" class="-btn -bk -fontsM -sizeL -arw -auto --back"><i class="c-arrow-link--icon"></i><span class="-center">ホームへ戻る</span></a>
			</div>
		</section>
	</section>
</section>

<?php get_footer(); ?>