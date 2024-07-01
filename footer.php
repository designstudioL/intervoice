<?php
/**
 * フッターテンプレート
 */
?>
</main>

<?php if(is_home() || is_front_page()): ?>

<?php elseif(is_page('about')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>私たちについて</span>
  </p>
</section>

<?php elseif(is_page('service')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>サービス</span>
  </p>
</section>

<?php elseif(is_post_type_archive('column_blog') || is_tax('column_blog')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>コラム＆ブログ</span>
  </p>
</section>

<?php elseif(is_singular('column_blog')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><a href="<?php echo home_url('/column_blog'); ?>" class="underline">コラム＆ブログ</span></a><span class="dot"></span><span><?php the_title(); ?></span>
  </p>
</section>

<?php elseif(is_post_type_archive('projects') || is_tax('projects')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>取り組み実績</span>
  </p>
</section>

<?php elseif(is_singular('projects')): ?>
  <section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><a href="<?php echo home_url('/projects'); ?>" class="underline">取り組み実績</a><span class="dot"></span><span><?php the_title(); ?></span>
  </p>
</section>

<?php elseif(is_page('service')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>プライバシーポリシー</span></li>
  </p>
</section>

<?php elseif(is_page('contact')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><<span class="dot"></span><span>お問い合わせ</span>
  </p>
</section>

<?php elseif(is_page('thanks')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>お問い合わせ完了</span>
  </p>
</section>

<?php elseif(is_page('404')): ?>
<section class="l-container--primary">
  <p class="c-breadcrumb">
    <a href="<?php echo home_url(); ?>" class="underline">トップ</a><span class="dot"></span><span>404</span>
  </p>
</section>

<?php else: ?>
<?php endif; ?>


<?php if(is_page('contact') || is_page('thanks')): ?>
<?php else: ?>
  <section class="l-cta">
  <div class="l-container--primary">
    <div class="l-cta--2column">
      <div class="l-cta--2column--L">
        <h2 class="c-title-ex-large -cta -en">contact<span>お問い合わせ</span></h2>
      </div>
      <div class="l-cta--2column--R">
        <p class="c-title-medium">こんなお悩みありましたら、<br>ぜひお気軽にお問い合わせください。</p>
        <ul class="c-list-dot">
          <li class="c-list-dot__item">事業やブランドを立て直したい</li>
          <li class="c-list-dot__item">今のリサーチ内容を見直したい</li>
          <li class="c-list-dot__item">人の集う地域ブランディングを実現したい</li>
          <li class="c-list-dot__item">マーケティング人材を育成したい</li>
          <li class="c-list-dot__item">新しい商品やサービスを開発したい</li>
        </ul>
        <a href="<?php echo home_url('/contact'); ?>" class="-btn -wh -fontsM -sizeM -arw"><span>お問い合わせ</span><i class="c-arrow-link--icon"></i></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="l-footer">
  <div class="l-container--primary -footer">
    <?php if(is_home() || is_front_page()): ?>
    <div class="l-footer--message">
      <div class="-L">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bg_008.png" alt="">
      </div>
      <div class="-R">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bg_009.png" alt="">
      </div>
    </div>
    <?php endif; ?>
    <div class="l-footer__logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/intervoice.svg" alt="intervoice"></a>
    </div>
    <nav class="l-footer--nav">
      <ul>
      <li class="nav01"><a href="<?php echo home_url('/about'); ?>">私たちについて</a></li>
      <li class="nav03"><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
      <li class="nav02"><a href="<?php echo home_url('/projects'); ?>">取り組み実績</a></li>
      <li class="nav04"><a href="<?php echo home_url('/column_blog'); ?>">コラム＆ブログ</a></li>
      <li class="nav04"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="l-footer__copyright">
      <p>&copy; intervoiceinc. All Rights Reserved.<a href="<?php echo home_url('/privacy'); ?>" class="l-footer__privacy underline">プライバシーポリシー</a></p>
    </div>
  </div>
</footer>

<a href="#" class="pageTop"><i class="c-arrow-link--icon"></i></a>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js?ver=6.5.2"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js?ver=6.5.2"></script>
</body>
</html>