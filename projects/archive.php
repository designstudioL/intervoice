<?php get_header(); ?>

<section class="l-container--primary l-spacer">
    <h1 class="c-title-pageTitle -en">projects<span>プロジェクト事例</span></h1>
</section>

<?php get_template_part('projects/list'); ?>

<?php get_footer(); ?>

<style>
.p-projects-nav ul { width: 100%;}
</style>
<script>
let totalWidth = 0;

$('.p-projects-nav ul li').each(function() {
    totalWidth += $(this).outerWidth(true) * 1.2; // マージンを含める場合
    // totalWidth += $(this).width(); // マージンを含めない場合
});

console.log(totalWidth);
$('.p-projects-nav ul').css( 'width', totalWidth );
</script>
<!-- <script>
$(function() {
  var li1 = $('.p-projects-nav ul li .list-1').width() * 1.4;
  var li2 = $('.p-projects-nav ul li .list-2').width() * 1.4;
  var li3 = $('.p-projects-nav ul li .list-3').width() * 1.4;
  var li4 = $('.p-projects-nav ul li .list-4').width() * 1.4;
  var li5 = $('.p-projects-nav ul li .list-5').width() * 1.4;
  var li6 = $('.p-projects-nav ul li .list-6').width() * 1.4;
  var li7 = $('.p-projects-nav ul li .list-7').width() * 1.4;
  var li8 = $('.p-projects-nav ul li .list-8').width() * 1.4;
  var li9 = $('.p-projects-nav ul li .list-9').width() * 1.4;
  var li10 = $('.p-projects-nav ul li .list-10').width() * 1.4;
  var wcount = li1 + li2 + li3 + li4 + li5;
  console.log( li6 );
  $('.p-projects-nav ul').css( 'width', wcount );
});
</script> -->