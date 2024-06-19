<?php



/*-----------------------------------------------------------------------------------
カスタム投稿タイプの追加
-----------------------------------------------------------------------------------*/
add_action('init', 'create_post_type' );
function create_post_type() {

	//カスタム投稿タイプを追加
	register_post_type( 'news', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'ニュース' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'ニュース' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard',
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => true,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'news',//投稿タイプ名(スラッグ) アーカイブページのURLになります
			'with_front' => false
		)
	)
	);
	register_taxonomy(
		'news_cat', //タクソノミー名
		'news', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'お知らせのカテゴリ',// タクソノミー名（表示名）
			'singular_label' => 'お知らせのカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'news/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);
	register_taxonomy(
		'news_shop', //タクソノミー名
		'news', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '関連ショップ',// タクソノミー名（表示名）
			'singular_label' => '関連ショップ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'news/shop', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'event', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'イベント' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'イベント' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-clipboard',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'event',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);
	register_taxonomy(
		'event_cat', //タクソノミー名
		'event', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'イベントのカテゴリ',// タクソノミー名（表示名）
			'singular_label' => 'イベントのカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'event/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);
	register_taxonomy(
		'event_place', //タクソノミー名
		'event', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '表示ページ',// タクソノミー名（表示名）
			'singular_label' => '表示ページ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'event/place', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'business-hours', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( '営業時間' ), // 投稿タイプ名(表示名)
			'singular_name' => __( '営業時間' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-clipboard',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'business-hours',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);
	register_taxonomy(
		'business-hours_cat', //タクソノミー名
		'business-hours', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '営業時間のカテゴリ',// タクソノミー名（表示名）
			'singular_label' => '営業時間のカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'business-hours/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'shop', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'ショップ＆レストラン' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'ショップ＆レストラン' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard',
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => false,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'shop',//投稿タイプ名(スラッグ) アーカイブページのURLになります
			'with_front' => false
		)
	)
	);
	register_taxonomy(
		'shop_cat', //タクソノミー名
		'shop', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ショップ＆レストランのカテゴリ',// タクソノミー名（表示名）
			'singular_label' => 'ショップ＆レストランのカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'shop/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'harunireterrace', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'ハルニレテラス' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'ハルニレテラス' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard',
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => false,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'harunireterrace',//投稿タイプ名(スラッグ) アーカイブページのURLになります
			'with_front' => false
		)
	)
	);
	register_taxonomy(
		'harunireterrace_cat', //タクソノミー名
		'harunireterrace', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ハルニレテラスのカテゴリ',// タクソノミー名（表示名）
			'singular_label' => 'ハルニレテラスのカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'harunireterrace/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

}

//URLに「/archives/」が含まれていたら、取り除いてリダイレクト
// $now_addr = (empty($_SERVER["HTTPS"]) ? "http://" : "https://").$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
// if(preg_match("/\/archives\//s",$now_addr)){
// 	$new_addr = preg_replace('/\/archives\//s', '/', $now_addr);
// 	// リダイレクト(移動)
// 	header( "Location: $new_addr" ) ;
// 	exit;
// }



/*-----------------------------------------------------------------------------------
カスタム投稿タイプのURLを数字ベースにする
-----------------------------------------------------------------------------------*/
// add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );
// function my_post_type_link( $link, $post ){
// 	if (('news' === $post->post_type ) || ('event' === $post->post_type ) || ('business-hours' === $post->post_type ) || ('shop' === $post->post_type ) ) { //カスタム投稿タイプをここで指定
// 		return home_url( '/'.$post->post_type.'/'. $post->ID );
// 	}
// 	else {
// 		return $link;
// 	}
// }

add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );
function my_rewrite_rules_array( $rules ) {
	$args = array('public'   => true, '_builtin' => false);
	$output = 'names';
	$operator = 'and';
	$post_types = get_post_types( $args, $output, $operator );
	$new_rules = array(
		'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]' ,
		'event/([0-9]+)/?$' => 'index.php?post_type=event&p=$matches[1]',
		'business-hours/([0-9]+)/?$' => 'index.php?post_type=business-hours&p=$matches[1]',
		'shop/([0-9]+)/?$' => 'index.php?post_type=shop&p=$matches[1]'
	);
	return $new_rules + $rules;
}



/*-----------------------------------------------------------------------------------
カスタム投稿タイプのパーマリンク設定
-----------------------------------------------------------------------------------*/
add_rewrite_rule('news/category/([^/]+)/?$', 'index.php?news_cat=$matches[1]', 'top');
add_rewrite_rule('news/category/([^/]+)/page/([0-9]+)/?$', 'index.php?news_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('event/category/([^/]+)/?$', 'index.php?event_cat=$matches[1]', 'top');
add_rewrite_rule('event/category/([^/]+)/page/([0-9]+)/?$', 'index.php?event_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('business-hours/category/([^/]+)/?$', 'index.php?business-hours_cat=$matches[1]', 'top');
add_rewrite_rule('business-hours/category/([^/]+)/page/([0-9]+)/?$', 'index.php?business-hours_cat=$matches[1]&paged=$matches[2]', 'top');

// add_rewrite_rule('shop/category/([^/]+)/?$', 'index.php?shop_cat=$matches[1]', 'top');
// add_rewrite_rule('shop/category/([^/]+)/page/([0-9]+)/?$', 'index.php?shop_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('harunireterrace/category/([^/]+)/?$', 'index.php?harunireterrace_cat=$matches[1]', 'top');
add_rewrite_rule('harunireterrace/category/([^/]+)/page/([0-9]+)/?$', 'index.php?harunireterrace_cat=$matches[1]&paged=$matches[2]', 'top');


/*-----------------------------------------------------------------------------------
	カスタム投稿のアーカイブページの記事数を設定する。
-----------------------------------------------------------------------------------*/
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
	if(!is_admin() && $query->is_main_query()) {
		// if (is_tax('news_cat') || is_post_type_archive('news')) {
		// 	$query->set('posts_per_page', '12');
		// }
	}
}


/*-----------------------------------------------------------------------------------
SearchFilter：検索対象にカスタム投稿を追加
-----------------------------------------------------------------------------------*/
//add_action( 'pre_get_posts','SearchFilter' );
function SearchFilter($query) {
	if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
	$query->set('post_type', array('post', 'page')); // arrayの中にカスタム投稿タイプ名を追加する。
	}
}




function custom_rewrite_ikarucafe() {
    add_rewrite_rule(
        '^ikarucafe/?$',
        'index.php?post_type=harunireterrace&p=2502',
        'top'
    );
}
add_action('init', 'custom_rewrite_ikarucafe');


function custom_rewrite_hungryspot() {
    add_rewrite_rule(
        '^hungryspot/?$',
        'index.php?post_type=harunireterrace&p=2517',
        'top'
    );
}
add_action('init', 'custom_rewrite_hungryspot');

