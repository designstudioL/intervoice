<?php
/*-----------------------------------------------------------------------------------
 メニューに「更新マニュアル」を追加
-----------------------------------------------------------------------------------*/
function admin_top_setting_menu() {
	add_menu_page( '更新マニュアル', '更新マニュアル', 'edit_posts', 'manual','', '', 3 );
}
add_action('admin_menu', 'admin_top_setting_menu', 1000);
	
function admin_manual_link() {
?><script>
	jQuery(function($){
		var menu_slug = 'manual';
		$('a.toplevel_page_' + menu_slug).prop({
			href: "<?php echo get_template_directory_uri(); ?>/manual/", //マニュアルのURLを変更するときはここを修正
			target:'_blank'
		});
	});
</script><?php
}
add_action('admin_print_footer_scripts', 'admin_manual_link');

/*-----------------------------------------------------------------------------------
フォーム送信後のリダイレクト(Contact form 7)
-----------------------------------------------------------------------------------*/
//add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  if(is_page('contact') || is_singular('tour')) { 
  ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('contact/thanks'); ?>';
    }, false );
  </script>
  <?php 
  }
}

/*-----------------------------------------------------------------------------------
【管理画面】投稿メニューを非表示
-----------------------------------------------------------------------------------*/
function remove_menus () {
  global $menu;
  remove_menu_page( 'edit.php' ); // 投稿を非表示
}
//add_action('admin_menu', 'remove_menus');



/*-----------------------------------------------------------------------------------
中サイズ・大サイズのメディアでトリミングを行う
-----------------------------------------------------------------------------------*/
update_option( 'medium_crop',true ); // 中サイズのトリミング
update_option( 'large_crop',true ); // 大サイズのトリミング
