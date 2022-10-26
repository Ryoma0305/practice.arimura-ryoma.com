<?php add_theme_support( 'post-thumbnails' );
function example_page_navi() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
		return;
	echo '<nav class="text-center">';
	echo paginate_links( array(
		'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'       => '',
		'current'      => max( 1, get_query_var('paged') ),
		'total'        => $wp_query->max_num_pages,
		'prev_text'    => '<',
		'next_text'    => '>',
		'type'         => 'list',
		'end_size'     => 3,
		'mid_size'     => 3
	) );
	echo '</nav>';
} /* end page navi */

/*
function load_cdn() {
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', './js/jquery/1.12.4/jquery.min.js', array(), '1.11.2');
	}
}
add_action('init', 'load_cdn');
*/

function new_excerpt_more($more) {
    return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>\n";
     }
}


function my_enqueue_style()
{
//wp_enqueue_style('slick-theme', get_template_directory_uri() . '/js/slick-theme.css');
//wp_enqueue_style('slick', get_template_directory_uri() . '/js/slick.css');

}
add_action('wp_enqueue_scripts', 'my_enqueue_style');

function my_enqueue_script()
{
// </head>タグ前に出力する
//wp_enqueue_script( 'slick_min', get_template_directory_uri() . '/js/slick.min.js');
}
add_action('wp_enqueue_scripts', 'my_enqueue_script');


//カスタム投稿追加
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'blog',
    array(
      'label' => 'Blog',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'blog-cat',
    'blog',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

}

function set_blog_query($query) {
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}

	if ( $query->is_post_type_archive( 'blog' ) || $query->is_search() ){

			$query->set( 'post_type', 'blog' );
			$query->set( 'posts_per_page', '-1' );
			return;

	}
}
add_action( 'pre_get_posts', 'set_blog_query' );

/* 投稿記事のスラッグを「post-ID」で採番 */
function custom_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( $post_type == 'blog' ) {
    $slug = $post_ID;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'custom_auto_post_slug', 10, 4 );


function set_fs_method($args) {
	return 'direct';
}
add_filter('filesystem_method','set_fs_method');
