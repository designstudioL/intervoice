<?php
/*Template Name: トップページ */
?>
<?php get_header(); ?>

<section class="p-home--block01 l-spacer -large">
    <section class="l-container--primary">
        <div class="p-home--lead">
            <h2 class="c-title-ex-large">マーケティング思考と<br class="sp_none">アイデアで、<br>〇〇を変える。</h2>
            <div class="l-spacing18">
                <p>intervoiceは、マーケティング思考とアイデアを源泉に、<br class="pc_none">事業やブランドの問題を特定し、課題を立て、解決のためのビジョンと道筋を提供する、<br class="pc_none">ブランディングと戦略リサーチの会社です。</p>
                <p>クライアントとともに、慣習を疑い、着眼を変え、社会と人を捉えなおすことで、<br class="pc_none">今を変えるアイデア、人に響くプロダクトやサービス、長く愛されるブランドをつくっていく。<br>そしてそのプロセスと経験を、人を成長させる糧に変えていく。<br class="pc_none">そこから、新しい変化を生み出していく。</p>
                <p>私たちは、「戦略思考」「対話のデザイン」「仮説発想」の３つを軸に、<br class="pc_none">思考を変え、対話を変え、発想を変え、<br class="pc_none">人と社会に新しい変化をもたらす企業でありたいと思っています。</p>
                <p class="-mgt-3"><a href="<?php echo home_url('/about'); ?>" class="-btn -bk -fontsM -sizeM -arw"><span>私たちについて</span><i class="c-arrow-link--icon"></i></a></p>
            </div>
        </div>
    </section>
</section>

<?php get_template_part('projects/list-inc'); ?>

<section class="l-spacer -ex p-column--bg04">
    <section class="l-container--primary">
        <section class="l-container--2column --home">
            <section class="--L">
                <h2 class="c-title-en-medium -home -en">service<span><span class="title_sub">業務領域</span></span></h2>
            </section>
            <section class="--R --none">
                    <div class="l-spacer -medium l-spacing18">
                        <p>私たちが大切にしているのは、「戦略思考」「対話のデザイン」「仮説発想」。<br>すべての業務領域において、この３つの軸はベースにあります。<br>どの領域のどのお仕事においても、クライアントと私たちで、思考をめぐらせ、チームで対話し、既成にとらわれず自由に発想することで、企業とブランドに新しい変化を生み出していきます。</p>
                        <p class="-mgt-3"><a href="<?php echo home_url('/service'); ?>" class="-btn -bk -fontsM -sizeM -arw"><span>サービス</span><i class="c-arrow-link--icon"></i></a></p>
                    </div>
                    <div class="l-spacer -medium">
                        <div class="p-service-home">
                            <a href="<?php echo home_url('/service/#scroll-box01'); ?>" class="p-service-home__block -arw2">
                                <figure class="p-service-home__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/pic_001.png" alt="マーケティング・ブランディング領域の戦略プランニング"></figure>
                                <h2 class="p-service-home__text">マーケティング・ブランディング領域の戦略プランニング<div class="-arw-s"><i class="c-arrow-link--icon"></i></div></h2>
                            </a>
                            <a href="<?php echo home_url('/service/#scroll-box02'); ?>" class="p-service-home__block -arw2">
                                <figure class="p-service-home__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/pic_002.png" alt="略リサーチの設計・運用"></figure>
                                <h2 class="p-service-home__text">戦略リサーチの設計・運用<div class="-arw-s"><i class="c-arrow-link--icon"></i></div></h2>
                            </a>
                            <a href="<?php echo home_url('/service/#scroll-box03'); ?>" class="p-service-home__block -arw2">
                                <figure class="p-service-home__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/pic_003.png" alt="アクティブラーニング・チームビルディング研修"></figure>
                                <h2 class="p-service-home__text">アクティブラーニング・チームビルディング研修<div class="-arw-s"><i class="c-arrow-link--icon"></i></div></h2>
                            </a>
                            <a href="<?php echo home_url('/service/#scroll-box04'); ?>" class="p-service-home__block -arw2">
                                <figure class="p-service-home__pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/pic_004.png" alt="地域ブランドの育成・支援"></figure>
                                <h2 class="p-service-home__text">地域ブランドの育成・支援<div class="-arw-s"><i class="c-arrow-link--icon"></i></div></h2>
                            </a>
                        </div>
                    </div>
            </section>
        </section>
    </section>
</section>

<section class="l-spacer -exll p-column--bg01">
    <section class="l-container--primary">
        <div class="p-column-home__title">
            <h2 class="c-title-en-medium -home -en -center">column&blog<span><span class="title_sub">コラム＆ブログ</span></span></h2>
            <nav class="p-column-nav">
                <ul>
                    <li><a href="" class="-active">すべて</a></li>
                    <?php
                    $terms = get_terms('column_blog_cat');
                    foreach ($terms as $term) {
                        $des_list .= '<li><a class="' . $term->slug . '" href="' . get_term_link($term) . '">';
                        $des_list .= $term->name . '</a></li>';
                    }
                    echo $des_list; ?>
                </ul>
            </nav>
        </div>
    </section>
    <section class="l-spacer -large">
        <div class="p-column-home p-column--bg02">
            <?php $news_posts = get_posts('post_type=column_blog&posts_per_page=6'); if (!empty($news_posts)) : ?>
            <?php foreach ($news_posts as $post) : setup_postdata($post); ?>

            <?php get_template_part('column_blog/inc'); ?>

            <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <p class="-mgt-3"><a href="<?php echo home_url('/column_blog'); ?>" class="-btn -bk -fontsM -sizeLL -arw -auto"><span>コラム&ブログ一覧</span><i class="c-arrow-link--icon"></i></a></p>
    </section>
</section>

<?php get_template_part('inc/pdf'); ?>

<?php get_footer(); ?>