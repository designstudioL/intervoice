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
//add_editor_style(get_template_directory_uri().'/assets/css/editor-style.css' );
//add_editor_style('https://elb-hoshino-area-1086539244.ap-northeast-1.elb.amazonaws.com/wp-content/themes/hoshino-area/assets/css/editor-style.css');

/* 【管理画面】管理画面カスタマイズ用CSSを読込 */
function admin_css() {
// echo '<link rel="stylesheet" type="text/css" href="https://elb-hoshino-area-1086539244.ap-northeast-1.elb.amazonaws.com/wp-content/themes/hoshino-area/assets/css/editor-style.css">';
echo '<link rel="stylesheet" type="text/css" href="https://admin.hoshino-area.jp/wp-content/themes/hoshino-area/assets/css/editor-style.css">';
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
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css');
	wp_register_style( 'theme-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300:600&display=swap');
	wp_register_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min_v8.css');
	wp_register_style( 'wpadminbar', get_template_directory_uri().'/assets/css/wpadminbar.css', array(), filemtime( get_template_directory().'/assets/css/wpadminbar.css') );
	wp_register_style( 'theme-common', get_template_directory_uri().'/assets/css/common.css', array(), filemtime( get_template_directory().'/assets/css/common.css') );
	//wp_register_style( 'endlesscss', get_template_directory_uri().'/assets/css/endless-river.css');

	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_register_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min_v8.js');
	wp_register_script( 'function', get_template_directory_uri() . '/assets/js/common.js', array(), filemtime( get_template_directory().'/assets/js/common.js') );
	wp_register_script( 'weather', get_template_directory_uri() . '/assets/js/weather.js');
	//wp_register_script( 'endless', get_template_directory_uri() . '/assets/js/endless-river.js');
}
function my_enqueue_files() {
    register_files();
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'theme-font' );
	wp_enqueue_style( 'swiper' );
	wp_enqueue_style( 'wpadminbar' );
	wp_enqueue_style( 'theme-common' );
	//wp_enqueue_style( 'endlesscss' );
	wp_enqueue_script( 'swiper' );
	wp_enqueue_script( 'function' );
	wp_enqueue_script( 'weather' );
	//wp_enqueue_script( 'endless' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );


/*--------------------------------------
適用テンプレートのパスを変更
--------------------------------------*/
function get_custom_template( $page_template ) {
	global $wp_query;

	//single
	if(is_singular('news')) {
	$page_template = dirname( __FILE__ ) . "/news/single.php";
	}
	else if(is_singular('event')) {
	$page_template = dirname( __FILE__ ) . "/event/single.php";
	}
	else if(is_singular('business-hours')) {
	$page_template = dirname( __FILE__ ) . "/business-hours/single.php";
	}
	else if(is_singular('shop')) {
	$page_template = dirname( __FILE__ ) . "/shop/single.php";
	}
	else if(is_singular('harunireterrace')) {
		$page_template = dirname( __FILE__ ) . "/shop/single.php";
	}

	//archive
	else if(is_post_type_archive('news')){
	$page_template = dirname( __FILE__ ) . "/news/archive.php";
	}
	else if(is_post_type_archive('event')){
	$page_template = dirname( __FILE__ ) . "/event/archive.php";
	}
	else if(is_post_type_archive('business-hours')){
	$page_template = dirname( __FILE__ ) . "/business-hours/archive.php";
	}
	else if(is_post_type_archive('shop')){
	$page_template = dirname( __FILE__ ) . "/shop/archive.php";
	}
	else if(is_post_type_archive('harunireterrace')){
		$page_template = dirname( __FILE__ ) . "/shop/archive.php";
	}

	//taxonomy
	else if(is_tax('news_cat')){
	$page_template = dirname( __FILE__ ) . "/news/taxonomy.php";
	}
	else if(is_tax('event_cat')){
	$page_template = dirname( __FILE__ ) . "/event/taxonomy.php";
	}
	else if(is_tax('business-hours_cat')){
	$page_template = dirname( __FILE__ ) . "/business-hours/taxonomy.php";
	}
	else if(is_tax('shop_cat')){
	$page_template = dirname( __FILE__ ) . "/shop/taxonomy.php";
	}
	else if(is_tax('harunireterrace_cat')){
		$page_template = dirname( __FILE__ ) . "/shop/taxonomy.php";
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
ACFでブロックエディタを制作する
-------------------------------------------------------------------------*/
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a dl block.
        acf_register_block_type(array(
            'name'              => 'dl',
            'title'             => __('見出し付きリスト'),
            'description'       => __('A custom dl block.'),
            'render_template'   => 'blocks/dl.php',
            'category'          => 'my-category',
            'icon'              => 'list-view',
            'keywords'          => array( 'dl', 'quote' ),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/acf.css',
            'mode' => 'auto',
        ));

		acf_register_block_type(array(
            'name'              => 'pickup',
            'title'             => __('一覧エリア'),
            'description'       => __('A custom pick up block.'),
            'render_template'   => 'blocks/pickup.php',
            'category'          => 'my-category',
            'icon'              => 'awards',
            'keywords'          => array( 'pick up' ),
            'enqueue_style'     => get_template_directory_uri() . '/blocks/acf.css',
            'mode' => 'auto',
        ));
    }
}




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