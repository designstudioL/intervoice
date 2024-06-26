<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/* ---------------------------------------------------------------------
ビジュアルエディタ内のテキストにCSSを適用

適用するときは、以下のコメントアウトを外してください。
この例は、テーマフォルダ内の/css/editor-style.cssに
ビジュアルエディタ用のCSSを記述し、読み込んでいます。
-------------------------------------------------------------------------*/
/* 【管理画面】管理画面カスタマイズ用CSSを読込 */
function admin_css() {
echo '<link rel="stylesheet" type="text/css" href="https://intervoiceinc.jp/cms//wp-content/themes/intervoice/assets/css/editor-style.css">';
}
add_action('admin_head', 'admin_css');


/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );


/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
function register_files() {
	// wp_register_style( 'common_css', get_template_directory_uri().'/assets/css/common.css');
	// wp_deregister_script('jquery');
	// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js?ver=6.5.2');
	// wp_register_script( 'common_js', get_template_directory_uri() . '/assets/js/common.js');
}
function my_enqueue_files() {
    // register_files();
	// wp_enqueue_style( 'common_css' );
	// wp_enqueue_script( 'jquery' );
	// wp_enqueue_script( 'common_js' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );


/*--------------------------------------
適用テンプレートのパスを変更
--------------------------------------*/
function get_custom_template( $page_template ) {
	global $wp_query;

	//single
	if(is_singular('column_blog')) {
	$page_template = dirname( __FILE__ ) . "/column_blog/single.php";
	}
	else if(is_singular('projects')) {
	$page_template = dirname( __FILE__ ) . "/projects/single.php";
	}

	//archive
	else if(is_post_type_archive('column_blog')){
	$page_template = dirname( __FILE__ ) . "/column_blog/archive.php";
	}
	else if(is_post_type_archive('projects')){
	$page_template = dirname( __FILE__ ) . "/projects/archive.php";
	}

	//taxonomy
	else if(is_tax('column_blog_cat')){
	$page_template = dirname( __FILE__ ) . "/column_blog/taxonomy.php";
	}
	else if(is_tax('projects_cat')){
	$page_template = dirname( __FILE__ ) . "/projects/taxonomy.php";
	}

	return $page_template;
	}
	add_filter('single_template', 'get_custom_template');
	add_filter('archive_template', 'get_custom_template');


/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/

/*初期設定*/
include_once( get_template_directory().'/functions/initial-setting.php' );

/*メタタグ類の設定*/
//include_once( get_template_directory().'/functions/meta-setting.php' );

/*カスタム投稿タイプを追加*/
include_once( get_template_directory().'/functions/custompost.php' );

/*便利な関数*/
//include_once( get_template_directory().'/functions/utility.php' );

/*ダッシュボードのカスタマイズ*/
//include_once( get_template_directory().'/functions/dashboard.php' );


/*カスタム投稿ページのみベーシック認証をかける*/
// function basic_auth($auth_list,$realm="Restricted Area",$failed_text="認証に失敗しました"){
//     if (isset($_SERVER['PHP_AUTH_USER']) and isset($auth_list[$_SERVER['PHP_AUTH_USER']])){
//         if ($auth_list[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']){
//             return $_SERVER['PHP_AUTH_USER'];
//         }
//     }
//     header('WWW-Authenticate: Basic realm="'.$realm.'"');
//     header('HTTP/1.0 401 Unauthorized');
//     header('Content-type: text/html; charset='.mb_internal_encoding());
//     die($failed_text);
// }


/* ---------------------------------------------------------------------
スラッグの日本語禁止
-------------------------------------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
}
return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );


/*-------------------------------------------*/
/* 　カスタムフィールドもプレビューできるようにする
/*-------------------------------------------*/
function fix_post_id_on_preview($null, $post_id) {
    if (is_preview()) {
        // プレビュー時は現在のポストIDを返す
        return get_the_ID();
    } else {
        // プレビューでない場合は、渡された$post_idを検証して返す
        $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;
        if (!empty($acf_post_id)) {
            return $acf_post_id;
        } else {
            return $null;
        }
    }
}
add_filter('acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2);


/* ---------------------------------------------------------------------
Lazy Blocksで勝手に出力されるdivをまとめて消す
-------------------------------------------------------------------------*/
add_filter( 'lzb/block_render/allow_wrapper', '__return_false' );


/* ---------------------------------------------------------------------
イベントの初期タームを自動的に設定する
-------------------------------------------------------------------------*/
// function add_defaultcategory_automatically($post_ID) {
// global $wpdb;
// $curTerm = wp_get_object_terms($post_ID, 'event_status'); // カスタムタクソノミーのスラッグ
// if (0 == count($curTerm)) {
// 	$defaultTerm = array(83); // 初期タームのID
// 	wp_set_object_terms($post_ID, $defaultTerm, 'event_status'); // カスタムタクソノミーのスラッグ
// }
// }
// add_action('publish_event', 'add_defaultcategory_automatically'); // publish_カスタム投稿タイプのスラッグ


//----------------------------------------------------
// ACF オプションページの作成
//----------------------------------------------------
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}