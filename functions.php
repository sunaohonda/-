<?php

// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );
// 各ページのメイン画像用のサイズ設定
add_image_size( 'detail', 1300, 330, true );
add_image_size( 'works', 600, 330, true );


//english_titleを表示
function get_english_title(){
    if(is_page()):
        return get_field('english_title');
    endif;
}

//main_imageの表示
function get_main_image(){
    if(is_page()):
        return get_the_post_thumbnail($post->ID,'detail');
    endif;
}

// 子ページを取得する関数
function get_child_pages( $number = -1, $specified_id = null ) {
	if ( isset( $specified_id ) ):
		$parent_id = $specified_id;
	else:
		$parent_id = get_the_ID();
	endif;
	$args = array(
		'posts_per_page' => $number,
		'post_type' => 'page',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => $parent_id,
	);
	$child_pages = new WP_Query( $args );
	return $child_pages;
}