<?php
/**
 * ヘッダーテンプレート
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js c-bg">
<head>
<!-- リマーケティング タグの Google コード -->
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
<!-- リマーケティング タグの Google コード -->
<meta charset="<?php bloginfo( 'charset' ); ?>">

<?php wp_head(); ?>

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" media="print,screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.css" media="screen" />
<link rel='stylesheet' id='swiper-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css' type='text/css' media='all' />

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript">
jQuery(function(){
  jQuery('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','addr','addr');
  })
})
</script>

</head>

<?php if(is_home() || is_front_page()): ?>
<body class="p-home" id="home">

<?php elseif(is_page('about')): ?>
<body class="p-about" id="about">

<?php elseif(is_page('service')): ?>
<body class="p-service" id="service">

<?php elseif(is_post_type_archive('column_blog') || is_tax('column_blog')): ?>
<body class="p-column_blog" id="column_blog">

<?php elseif(is_singular('column_blog')): ?>
<body class="p-column_blog post" id="column_blog">

<?php elseif(is_post_type_archive('projects') || is_tax('projects')): ?>
<body class="p-projects" id="projects">

<?php elseif(is_singular('projects')): ?>
<body class="p-projects post" id="projects">

<?php else: ?>
<body class="p-home" id="home">
<?php endif; ?>

<div id="loading" class="js-loading"></div>

<!--header-->
<header class="l-header">
  <div class="-inner">
    <div class="l-header-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="intervoice"></a></div>
    <nav class="l-header-nav">
      <ul>
        <li><a href="<?php echo home_url('/about'); ?>">私たちについて</a></li>
        <li><a href="<?php echo home_url('/projects'); ?>">取り組み実績</a></li>
        <li><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
        <li><a href="<?php echo home_url('/column_blog'); ?>">コラム＆ブログ</a></li>
      </ul>
      <div><a href="<?php echo home_url('/contact'); ?>" class="-btn -bk -fontsS -sizeS -center l-header-btn"><span>お問い合わせ</span></a></div>
    </nav>
  </div>
</header>

<button class="l-header-hamburger -btn -bk -sizeH" id="hamburger"><span class="-en">menu</span><i class="icon"><span></span></i></button>
<div class="l-header-hamburger-bg"></div>
<div class="l-header-hamburger-bg01"></div>
<div class="l-header-hamburger-bg02"></div>
<div class="l-header-hamburger-bg03"></div>
<div class="l-header-hamburger-bg04"></div>
<div class="l-header-hamburger-bg05"></div>
<div class="l-header-hamburger-bg06"></div>
<div class="l-header-hamburger-bg07"></div>
<div class="l-header-hamburger-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="intervoice"></div>
<nav class="l-header-hamburger-nav">
  <ul>
    <li><a href="<?php echo home_url(); ?>">トップ</a></li>
    <li><a href="<?php echo home_url('/about'); ?>">私たちについて</a></li>
    <li><a href="<?php echo home_url('/projects'); ?>">取り組み実績</a></li>
    <li><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
    <li><a href="<?php echo home_url('/column_blog'); ?>">コラム＆ブログ</a></li>
    <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
  </ul>
</nav>
<div class="l-header-hamburger-copyright">
  <p>&copy; intervoiceinc. All Rights Reserved.<a href="<?php echo home_url('/privacy'); ?>" class="l-header-hamburger-privacy">プライバシーポリシー</a></p>
</div>
<!--/header-->

<?php if(is_home() || is_front_page()): ?>
<section class="l-container--primary p-kv">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/main.png" alt="">
</section>
<?php endif; ?>

<?php if(is_home() || is_front_page()): ?>
<main class="l-main" id="">
<?php elseif(is_singular('projects')): ?>
<main class="l-main -post" id="">
<?php else: ?>
<main class="l-main" id="">
<?php endif; ?>