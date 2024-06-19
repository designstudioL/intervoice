<?php 
/*パンくずリスト*/
  global $post;

	/* !トップページと管理ページ以外のページのみを対象とする */
	if(!is_home()&&!is_admin()){ 
		$str ='';
		$str.= '<ul class="c-breadcrumb">';
		$str.= '<li class="c-breadcrumb__item"><a href="' . home_url().'">星野エリア</a></li>';

		
		/**** 記事のページ ****/
		if(is_single()){
			
			/*通常の投稿*/
			if (get_post_type() == 'post') {
				$categories = get_the_category($post->ID);
				$cat = $categories[0];
				if($cat -> parent != 0){
					$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
					foreach($ancestors as $ancestor){
						$str.='<li class="c-breadcrumb__item"><a href="'. get_category_link($ancestor).'">'. get_cat_name($ancestor). '</span></a></li>';
					}
				}
				$str.='<li class="c-breadcrumb__item"><a href="'. get_category_link($cat -> term_id). '">'. $cat-> cat_name . '</a></li>';
				$str.= '<li class="c-breadcrumb__item">'. $post -> post_title .'</li>';
		
			}
			else {/*カスタム投稿タイプ*/
				
				$posttype_label = esc_html(get_post_type_object(get_post_type())->label);
				$posttype_name = esc_html(get_post_type_object(get_post_type())->name);
				$url = get_post_type_archive_link( $posttype_name );
				$str.='<li class="c-breadcrumb__item"><a href="'.$url.'">'.$posttype_label.'</a></li>';
				
        //カスタム投稿に紐づいているタクソノミーを取得（複数ある場合1つめになるので注意）
				$tax_name = get_object_taxonomies(get_current_post_type_slug(), 'names');
				if(taxonomy_exists( $tax_name[0])) {
					
					$terms = get_the_terms(get_the_ID(),  $tax_name[0]);
          if($terms) {
            $str.='<li class="c-breadcrumb__item">'.get_the_term_list(get_the_ID(), $tax_name[0], '', '、', '').'</li>';
					}
				}
				$str.= '<li class="c-breadcrumb__item">'. $post -> post_title .'</li>';
		
			}
		} 
		
		/**** 固定ページ ****/
		elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li class="c-breadcrumb__item"><a href="'. get_permalink($ancestor).'" >'. get_the_title($ancestor) .'</a></li>';
									}
			}
			$str.= '<li class="c-breadcrumb__item">'. $post -> post_title .'</li>';
		}
		
		
		/**** カスタムタクソノミーのアーカイブ ****/
		else if (is_tax()) {
			$taxonomy = get_query_var('taxonomy');
			$posttype_name = get_taxonomy($taxonomy)->object_type[0];
			$posttype_label = esc_html(get_post_type_object($posttype_name)->label);
			$url = get_post_type_archive_link( $posttype_name );
			$str.='<li class="c-breadcrumb__item"><a href="'.$url.'">'.$posttype_label.'</a></li>';
			
			$term =  single_tag_title('', false);
			$str.='<li class="c-breadcrumb__item">'.$term.'</li>';
		}
		
		
		/**** 投稿のアーカイブページ ****/
		elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li class="c-breadcrumb__item"><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
				}
			}
			$str.='<li class="c-breadcrumb__item">'. $cat -> name . '</li>';
		}
		
		/**** タグページ ****/
		elseif(is_tag()){
			$str.='<li class="c-breadcrumb__item">「'. single_tag_title( '' , false ). '」に関する記事一覧</li>';
		} 
		
		/**** 検索結果ページ ****/
		elseif(is_search()){
			$str.='<li class="c-breadcrumb__item">「'. get_search_query() .'」で検索した結果</li>';
		} 
		
				
		/**** その他のページ ****/
		else{
			//$str.='<li class="c-breadcrumb__item">'. wp_get_document_title('').'</li>';
			$str.='<li class="c-breadcrumb__item">'. post_type_archive_title('',false).'</li>';
		}
		$str.='</ul>';
		echo $str;
	}
?>
