<?php
/*Template Name: お問い合わせ */
?>
<?php get_header(); ?>

<section class="l-container--primary">
	<h1 class="c-title-pageTitle -en --projects">contact<span>お問い合わせ</span></h1>
</section>

<section class="l-container--2column --contact">
	<section class="--L">
		<p>intervoiceのサービスに関するご相談やご質問はこちらからお気軽にお問い合わせください。</p>
	</section>
	<section class="--R">
		<?php echo do_shortcode('[contact-form-7 id="5b32dac" title="お問い合わせ" html_class="h-adr"]'); ?>
	</section>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
$(function(){
    var text_max = 100; // 最大入力値
    $(".counter").text(text_max - $("#memo_text").val().length);
    $("#memo_text").on("keydown keyup keypress change",function(){
        var text_length = $(this).val().length;
        var countdown = text_length;
        $(".counter").text(countdown);
    });
});
</script>