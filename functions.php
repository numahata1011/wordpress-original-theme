<?php

//メニューバー表示

add_theme_support('menus');

register_nav_menus(
array(
'place_global' => 'グローバル'
));

//ウィジェットエリア表示

register_sidebar(
	array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	)
);

//アイキャッチ画像の指定
add_theme_support('post-thumbnails');


// アイキャッチデフォルト設定
add_action( 'save_post', 'save_default_thumbnail' );
function save_default_thumbnail( $post_id ) {
  $post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
  if ( !wp_is_post_revision( $post_id ) ) {
    if ( empty( $post_thumbnail ) ) {
      update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = '33' );
    }
  }
}