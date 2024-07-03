
<?php
/*Template Name: お問い合わせ サンクスページ */
?>
<?php get_header(); ?>

<section class="l-container--primary">
	<h1 class="c-title-pageTitle -en">contact<span class="--wide">お問い合わせ完了</span></h1>
	<section class="l-container--2column">
		<section class="--L">
		</section>
		<section class="--R">
			<div class="l-spacer -medium">
				<h2 class="c-title-medium">お問い合わせフォームの送信を完了致しました。</h2>
				<p>この度はお問い合わせいただきまして誠にありがとうございます。<br>
				ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。</p>
			</div>
			<div class="l-spacer -medium">
					<a href="<?php echo home_url(); ?>" class="-btn -bk -fontsM -sizeL -arw -auto --back"><i class="c-arrow-link--icon"></i><span class="-center">ホームへ戻る</span></a>
				</div>
		</section>
	</section>
</section>
<?php get_footer(); ?>