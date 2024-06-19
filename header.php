<?php
/**
 * ヘッダーテンプレート
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- リマーケティング タグの Google コード -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MWQFJF4');</script>
<!-- End Google Tag Manager -->
<!-- リマーケティング タグの Google コード -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?ISugzJK~YHU%3D&box=mVcnX52C2Ng%3D&aa=1&ab=2"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>

<?php if ( is_page('contact') ) : ?>
  <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <script type="text/javascript">
  $(function(){
    $('#zip').keyup(function(event){
      AjaxZip3.zip2addr(this,'','addr','addr');
    })
  })
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/autoKana.js"></script>
  <script type="text/javascript">
  $(function() {
    $.fn.autoKana('input[name="your-name"]', 'input[name="your-kana"]');
  });
  </script>
<?php endif; ?>

  <!--google Analytics -->
  <!--google Analyticsのタグをここに張り付ける -->
  <!-- adobe font -->
  <script>
    (function(d) {
      var config = {
        kitId: 'vnc3pvk',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.css">
</head>

<body <?php body_class('l-body'); ?> id="js-body">
  <div id="loading" class="js-loading"></div>
  <header class="l-header" id="js-header">
    <div class="l-header__top" id="js-fixed-header-sp">
      <a href="<?php echo home_url(); ?>">
        <p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-ja.svg" width="215" height="26" alt="軽井沢星野エリア" class="l-header-logo__ja">
        </p>
      </a>
    
      <div class="l-header-menu__tertiary">
        <?php get_template_part('inc/today'); ?>

        <div class="l-header-menu__lang">
          <?php 
          $args = ['class' => '-header'];
          get_template_part('inc/language', null, $args); ?>
        </div>
      </div>
    </div>

    <?php if(is_page('harunireterrace') || is_singular('shop')): ?>
    <div class="l-header__top harunire_sp__top">
    <a href="<?php echo home_url(); ?>">
        <p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/harunire/logo_b.svg" width="auto" height="26" alt="ハルニレテラス" class="">
        </p>
      </a>
    </div>
    <?php endif; ?>
    <?php if(is_page('tombo-no-yu')): ?>
    <div class="l-header__top tombo_sp__top">
    <a href="<?php echo home_url(); ?>">
        <p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/logo_b.svg" width="auto" height="26" alt="トンボの湯" class="">
        </p>
      </a>
    </div>
    <?php endif; ?>
    <?php if(is_page('sonmin-shokudo')): ?>
    <div class="l-header__top sonmin_sp__top">
    <a href="<?php echo home_url(); ?>">
        <p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/logo_b.svg" width="auto" height="26" alt="村民食堂" class="">
        </p>
      </a>
    </div>
    <?php endif; ?>
    <?php if(is_page('kera-ike-icerink')): ?>
    <div class="l-header__top keraike_sp__top">
    <a href="<?php echo home_url(); ?>">
        <p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/logo_b.svg" width="auto" height="26" alt="ケラ池スケートリンク" class="">
        </p>
      </a>
    </div>
    <?php endif; ?>


    <div class="l-header-menu" id="js-fixed-header-pc">
      <ul class="c-gmenu-primary l-header-menu__primary" id="js-header-menu-primary">
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/tombo-no-yu'); ?>" class="c-gmenu-primary__link">温泉</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/shop-restaurant'); ?>" class="c-gmenu-primary__link">ショップ&amp;レストラン</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/activity'); ?>" class="c-gmenu-primary__link">アクティビティ</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/church'); ?>" class="c-gmenu-primary__link">教会</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/hotel'); ?>" class="c-gmenu-primary__link">ホテル</a></li>
      </ul>
      
      <div class="c-gmenu-secondary l-header-menu__secondary">
        <a href="<?php echo home_url('/areamap'); ?>" class="c-button-block -white -icon c-gmenu-secondary__blockbtn"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-map.svg"></i>施設を探す</a>
        <a href="<?php echo home_url('/business-hours'); ?>" class="c-button-block -white -icon c-gmenu-secondary__blockbtn"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg"></i>営業時間</a>
        <a href="<?php echo home_url('/parking'); ?>" class="c-button-block -white -icon c-gmenu-secondary__blockbtn"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i>駐車場</a>
        </ul>
        <button class="c-button-hamburger c-gmenu-secondary__hamburger" id="js-hamburger">メニュー</button>
      </div>
    </div>
    <div id="js-drawer" class="l-header-drawer">
      <div class="l-header-submenu">
        <div class="l-header-submenu__infomenu">
        <?php  $args = ['class' => '-head-drawer'];
        get_template_part('inc/info-menu', null, $args); ?>
        </div>
        <div class="l-header-submenu__today">
        <?php get_template_part('inc/today', null, $args);  ?>
        </div>
        <div class="l-header-submenu__lang">
        <?php get_template_part('inc/language', null, $args); ?>
        </div>
      </div>
    </div>
  </header>

<?php if(is_home() || is_front_page() || is_archive('shop') || is_archive('harunireterrace') || is_page('shop') || is_page('harunireterrace-top') || is_page('tombo-no-yu') || is_page('sonmin-shokudo') || is_page('kera-ike-icerink') || is_page('areamap') || is_page('access') || is_page('parking')): ?>
  <main id="" class="l-main -cxl">
<?php else: ?>
  <main id="" class="l-main">
<?php endif; ?>