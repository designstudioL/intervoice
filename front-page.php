<?php
/**
 * トップページのテンプレート
 */
get_header(); ?>

<div id="key_wrap">
  <div id="keyVisual">
    <div class="videoBox">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_pc.mp4"></video>
      <video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_sp.mp4"></video>
      <div class="home p-kv__logo">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lead.svg" alt="森が居場所になる一日"></h1>
      </div>
      <?php get_template_part('news/list-important-kv'); ?>
      </div>
    </div>
  </div>
</div>

<div class="c-bg-white">

<?php if(is_home() || is_front_page()): ?>


  <div class="l-container--primary-ll">
    <section class="l-spacer -medium -both">
      <div class="p-110th">
        <a href="https://www.hoshino-area.jp/110th" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr_110th.png" alt=""></a>
      </div>
      <div class="facility-flex000000 lead-end map-area">
        <div class="facility-flex-txt00000 map-area01">
          <!-- <div class="home_txt"> -->
          <div class="p-home_sansaku">
            <h2>星野の森を、<br>散策しよう。</h2>
            <p>豊かな自然に囲まれて、いつもよりも、歩調をゆるめて。<br>温泉、お食事、ショッピング、散策…思うままに、一日をお過ごしください。</p>
          </div>
        </div>
        <div class="facility-flex-img000000 map-area02">
          <?php get_template_part('inc/areamap'); ?>
        </div>
        <div class="facility-flex-txt00000 map-area03">
          <div class="p-home_maplist">
            <a href="/wp-content/uploads/2024/04/hoshinoareamap_2306-1.pdf" class="c-button-block -lightyellow -arrow -pdf" target="_blank"><span>エリアマップダウンロード</span></a>
            <dl class="p-facility-list">
              <div class="p-facility-list__item">
                <div>
                  <dt class="p-facility-list__dt"><a href="<?php echo home_url('/tombo-no-yu'); ?>">温泉</a></dt>
                </div>
                <div>
                  <dt class="p-facility-list__dt"><a href="<?php echo home_url('/shop-restaurant'); ?>">ショップ&amp;レストラン</a></dt>
                </div>
                <div>
                  <dt class="p-facility-list__dt"><a href="<?php echo home_url('/activity'); ?>">アクティビティ</a></dt>
                </div>
                <div>
                  <dt class="p-facility-list__dt"><a href="<?php echo home_url('/church'); ?>">教会</a></dt>
                </div>
                <div>
                  <dt class="p-facility-list__dt"><a href="<?php echo home_url('/hotel'); ?>">ホテル</a></dt>
                </div>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php else: ?>
<footer class="l-footer c-bg-white">
  <div class="l-footer__outline">
    <a href="<?php echo home_url('/areamap'); ?>" class="u-transparent">
      <section class="l-footer-map l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ttl-area-map.svg" alt="軽井沢 星野エリアマップ" width="172" height="133"></h2>
        <p class="l-footer-map__text">Karuizawa Hoshino Area Map</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">施設を探す</button>
      </section>
    </a>
    <a href="" class="u-transparent">
      <section class="l-footer-concept l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/txt-copy-white.svg" alt="森が、居場所になる一日。" width="168" height="159"></h2>
        <p class="l-footer-concept__text">ゆれる木洩れ陽、川のせせらぎ、鳥のさえずり。豊かな自然に包まれて、暮らすように一日を。</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">星野エリアで過ごす</button>
      </section>
    </a>
  </div>
<?php endif; ?>



<section class="p-home__lead l-container--primary">
  <div class="p-home__lead-head">
    <h2>人と自然が文化を織りなす、<br>この森とひとつになる。</h2>
  </div>
  <div class="p-home__lead-body">
    <div class="p-home__lead-ph">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_lead.mp4"></video>
    </div>
    <div class="p-home__lead-txt">
      <p>木々の隙間から<br>光がこぼれて、<br>川のせせらぎに<br>鳥の声が重なる。</p>
      <p>浅間山の麓で、大切に受け継がれてきた森。<br>かつてここにいた人も、今ここにいる私たちも、<br>同じ情景で、つながっている。</p>
      <p>森が、居場所になる一日。<br>軽井沢星野エリア</p>
    </div>
  </div>
</section>

<section class="accordion_area" id="p-home-pc_accordion">
  <div class="-block -block1">
    <div class="-header -open">
      <div>自然との共生</div>
    </div>
    <div class="-body">
      <div class="-box">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
        </figure>
        <div>
          <p>星野エリアは、星野温泉旅館が開業した大正時代から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約８０種類の野鳥が見られ、ムササビやツキノワグマ、ニホンカモシカなど、多くの野生動植物が生息しています。<br>浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。<br>ずっと変わらない森の情景は、ここに訪れる人たちを、優しく包み込みます。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="-block -block2">
    <div class="-header">
      <div>今に続く歴史の足跡</div>
    </div>
    <div class="-body">
      <div class="-box">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion02.jpg" alt="">
        </figure>
        <div>
          <p>星野エリアの歴史は、大正時代まで遡ります。<br>1915年（大正4年）に開湯した星野温泉を起点に、北原白秋や島崎藤村など当時の文人たちが集い、文化的エポックが切り拓かれてきました。<br>源泉は今も滔々と湧き続け、森の小道には文人の言葉が石碑として残っています。</p>
          <p>昭和中期には、日本野鳥の会創立者である中西悟堂が滞在するようになります。<br>彼は軽井沢の森が、世界的な野鳥の宝庫であると指摘。やがて、星野エリアに隣接する国有林は、国設「軽井沢野鳥の森」に指定されました。<br>探鳥会と呼ばれたガイド付きツアーは、ピッキオのエコツーリズムへと繋がっています。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="-block -block3">
    <div class="-header">
      <div>森に溶け込むひととき</div>
    </div>
    <div class="-body">
      <div class="-box">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion03.jpg" alt="">
        </figure>
        <div>
          <p>この場所に集う人々は、軽井沢を共に楽しむ友人です。<br>同じ情景を通じて、ゆるやかにつながっています。<br>何をするのもしないのも自由。喧騒から離れて、心の赴くままに。<br>森の一員となり、思い思いに一日を過ごすことで、大切なことを思い出せるかもしれません。<br>私たちは、いつでも「おかえりなさい」でお迎えいたします。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="p-home-sp_accordion">
<div class="">
<dl class="p-home-sp_accordion">
  <div class="p-home-sp_accordion__item -open">
      <dt class="p-home-sp_accordion__title">自然との共生</dt>
      <dd class="p-home-sp_accordion__txt">
        <div>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <p>星野エリアは、星野温泉旅館が開業した大正時代から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約８０種類の野鳥が見られ、ムササビやツキノワグマ、ニホンカモシカなど、多くの野生動植物が生息しています。<br>浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。<br>ずっと変わらない森の情景は、ここに訪れる人たちを、優しく包み込みます。</p>
        </div>
      </dd>
    </div>
    <div class="p-home-sp_accordion__item">
      <dt class="p-home-sp_accordion__title">今に続く歴史の足跡</dt>
      <dd class="p-home-sp_accordion__txt">
        <div>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion02.jpg" alt="">
          </figure>
          <p>星野エリアの歴史は、大正時代まで遡ります。<br>1915年（大正4年）に開湯した星野温泉を起点に、北原白秋や島崎藤村など当時の文人たちが集い、文化的エポックが切り拓かれてきました。<br>源泉は今も滔々と湧き続け、森の小道には文人の言葉が石碑として残っています。</p>
          <p>昭和中期には、日本野鳥の会創立者である中西悟堂が滞在するようになります。<br>彼は軽井沢の森が、世界的な野鳥の宝庫であると指摘。やがて、星野エリアに隣接する国有林は、国設「軽井沢野鳥の森」に指定されました。<br>探鳥会と呼ばれたガイド付きツアーは、ピッキオのエコツーリズムへと繋がっています。</p>
        </div>
      </dd>
    </div>
    <div class="p-home-sp_accordion__item">
      <dt class="p-home-sp_accordion__title">森に溶け込むひととき</dt>
      <dd class="p-home-sp_accordion__txt">
        <div>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion03.jpg" alt="">
          </figure>
          <p>この場所に集う人々は、軽井沢を共に楽しむ友人です。<br>同じ情景を通じて、ゆるやかにつながっています。<br>何をするのもしないのも自由。喧騒から離れて、心の赴くままに。<br>森の一員となり、思い思いに一日を過ごすことで、大切なことを思い出せるかもしれません。<br>私たちは、いつでも「おかえりなさい」でお迎えいたします。</p>
        </div>
      </dd>
    </div>
  </dl>
</div>
</section>




</div>

<?php get_footer(); ?>


