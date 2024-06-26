<?php

/*-----------------------------------------------------------------------------------
カスタム投稿タイプの追加
-----------------------------------------------------------------------------------*/
add_action('init', 'create_post_type' );
function create_post_type() {

	//カスタム投稿タイプを追加
	register_post_type( 'column_blog', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'コラム＆ブログ' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'コラム＆ブログ' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard',
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => true,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'column_blog',//投稿タイプ名(スラッグ) アーカイブページのURLになります
			'with_front' => false
		)
	)
	);
	register_taxonomy(
		'column_blog_cat', //タクソノミー名
		'column_blog', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'コラム＆ブログのカテゴリ',// タクソノミー名（表示名）
			'singular_label' => 'コラム＆ブログのカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'column_blog/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'projects', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( '取り組み実績' ), // 投稿タイプ名(表示名)
			'singular_name' => __( '取り組み実績' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard',
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => true,
		'show_in_rest' => true,
		'rewrite' => array(
			'slug' => 'projects',//投稿タイプ名(スラッグ) アーカイブページのURLになります
			'with_front' => false
		)
	)
	);
	register_taxonomy(
		'projects_cat', //タクソノミー名
		'projects', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '取り組み実績のカテゴリ',// タクソノミー名（表示名）
			'singular_label' => '取り組み実績のカテゴリ',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'projects/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);
}


/*-----------------------------------------------------------------------------------
カスタム投稿タイプのURLを数字ベースにする
-----------------------------------------------------------------------------------*/
// add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );
// function my_post_type_link( $link, $post ){
// 	if (('column_blog' === $post->post_type ) || ('projects' === $post->post_type )) { //カスタム投稿タイプをここで指定
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
		'column_blog/([0-9]+)/?$' => 'index.php?post_type=column_blog&p=$matches[1]' ,
		'projects/([0-9]+)/?$' => 'index.php?post_type=projects&p=$matches[1]'
	);
	return $new_rules + $rules;
}



/*-----------------------------------------------------------------------------------
カスタム投稿タイプのパーマリンク設定
-----------------------------------------------------------------------------------*/
add_rewrite_rule('column_blog/category/([^/]+)/?$', 'index.php?column_blog_cat=$matches[1]', 'top');
add_rewrite_rule('column_blog/category/([^/]+)/page/([0-9]+)/?$', 'index.php?column_blog_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('projects/category/([^/]+)/?$', 'index.php?projects_cat=$matches[1]', 'top');
add_rewrite_rule('projects/category/([^/]+)/page/([0-9]+)/?$', 'index.php?projects_cat=$matches[1]&paged=$matches[2]', 'top');


/*-----------------------------------------------------------------------------------
	カスタム投稿のアーカイブページの記事数を設定する。
-----------------------------------------------------------------------------------*/
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
	if(!is_admin() && $query->is_main_query()) {
		// if (is_tax('column_blog_cat') || is_post_type_archive('column_blog')) {
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
