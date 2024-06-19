<?php
/*Template Name: 404 */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">404 Error</h1>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-s">
		<article class="l-contents">
			<div class="l-spacer -medium">
				<h2 class="c-title-medium">ページが見つかりませんでした</h2>
				<p>まことに申し訳ありませんが、指定されたURLのページは存在しません。<br>
				サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。<br>
				恐れ入りますが、ナビゲーションのリンクからご希望のページをお探しください。</p>
				<p>
					<a href="../" class="c-button-block -lightyellow -arrow"><span>ホームへ戻る</span></a>
				</p>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>