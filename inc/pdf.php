<section class="l-spacer -exl p-column--bg03">
    <section class="l-container--primary0000 p-column-home -pdf">
        <section class="l-container--2column --home p-home--idea">
            <h2>思考と学びの<br class="sp_none">ベースフレーム</h2>
            <p class="-mgB-s">私たちが各プロジェクトで使用している思考フレームのベース、アクティブラーニング研修で使用している資料のベースが以下のフォーマットです。<br>思考の整理やアイデア開発の一助として、また、研修メニュー検討の一助としてお役立てください。</p>

            <div class="--card">

                <?php
                    $page_id = get_page_by_path('top');
                    $page_id = $page_id->ID;
                ?>
                <?php if(have_rows('idea', $page_id)): ?>
                <div class="--list">
                    <h3>アイデア開発・戦略立案フォーマット（PDF）</h3>
                    <ul class="c-list-dot">
                <?php $page_counter = 0; ?>
                <?php while(have_rows('idea', $page_id)): the_row(); ?>
                <?php $page_counter--; ?>
                <!-- 繰り返しフィールドの内容ここから -->
                        <li class="c-list-dot__item -black"><a href="<?php the_sub_field('file', 'option'); ?>" target="_blank"><?php the_sub_field('text', 'option'); ?></a><i class="icon_link"></i></li>
                <!-- 繰り返しフィールドの内容ここまで -->
                <?php if ($page_counter === 0) break;?>
                <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if(have_rows('training', $page_id)): ?>
                <div class="--list">
                    <h3>研修資料フォーマット（PDF）</h3>
                    <ul class="c-list-dot">
                <?php $page_counter = 0; ?>
                <?php while(have_rows('training', $page_id)): the_row(); ?>
                <?php $page_counter--; ?>
                <!-- 繰り返しフィールドの内容ここから -->
                        <li class="c-list-dot__item -black"><a href="<?php the_sub_field('file', 'option'); ?>" target="_blank"><?php the_sub_field('text', 'option'); ?></a><i class="icon_link"></i></li>
                <!-- 繰り返しフィールドの内容ここまで -->
                <?php if ($page_counter === 0) break;?>
                <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>

            </div>

        </section>
    </section>
</section>


