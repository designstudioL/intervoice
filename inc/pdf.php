<section class="l-spacer -large p-column--bg03">
    <section class="l-container--primary">
        <section class="l-container--2column --home p-home--idea">
            <h2 class="c-title-small">思考と学びのベースフレーム</h2>
            <p class="-mgB-s">私たちが各プロジェクトで使用している思考フレームのベース、アクティブラーニング研修で使用している資料のベースが以下のフォーマットです。<br>思考の整理やアイデア開発の一助として、また、研修メニュー検討の一助としてお役立てください。</p>
            <div class="--card">
            <?php
                $page_id = get_page_by_path('top');
                $page_id = $page_id->ID;
            ?>
            <?php if(have_rows('pdf', $page_id)): ?>
            <?php $page_counter = 4; ?>
            <?php while(have_rows('pdf', $page_id)): the_row(); ?>
            <?php $page_counter--; ?>
            <!-- 繰り返しフィールドの内容ここから -->
                <a href="<?php the_sub_field('pdf_file', 'option'); ?>" target="_blank">
                <figure><img src="<?php the_sub_field('pdf_ph', 'option'); ?>" alt=""><figcaption><?php the_sub_field('pdf_text', 'option'); ?><i class="icon_link -wh"></i></figcaption></figure>
                </a>
            <!-- 繰り返しフィールドの内容ここまで -->
            <?php if ($page_counter === 0) break;?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>
    </section>
</section>


