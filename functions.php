<?php add_theme_support( 'post-thumbnails' );


/*
function load_cdn() {
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', './js/jquery/1.12.4/jquery.min.js', array(), '1.11.2');
	}
}
add_action('init', 'load_cdn');
*/


//カスタム投稿追加
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type( 'room', array(
    'label' => '物件',
    'public' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', ),
    'menu_position' => 5,
    'has_archive' => true
  ));

  register_taxonomy(
    'place',
    'room',
    array(
      'label' => '間取りタイプ',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'kodawari',
    'room',
    array(
      'label' => 'こだわり',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

}

/* 投稿記事のスラッグを「post-ID」で採番 */
function custom_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( $post_type == 'blog' ) {
    $slug = $post_ID;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'custom_auto_post_slug', 10, 4 );
