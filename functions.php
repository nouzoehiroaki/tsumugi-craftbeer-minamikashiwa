<?php
/**
 * Embedの削除
 */
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head','wp_generator');
remove_action('wp_head','wp_shortlink_wp_head');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','feed_links_extra',3);
remove_action('wp_head','dns-prefetch');

/**
 * Emoji機能の削除
 */
function disable_emojis() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init','disable_emojis');
add_filter('emoji_svg_url','__return_false');

//wp-block-library css削除
add_action('wp_enqueue_scripts', 'remove_block_library_style');
function remove_block_library_style(){
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}

/* 投稿ラベル変更 */
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'コラム';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'コラム';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

function my_script(){
    wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'my_script');

function enqueue_name(){
    wp_enqueue_style('common-css', get_template_directory_uri() . '/css/common.css', array(), '1.0.0');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.0.0');
    if ( is_page('contact') ) {
        wp_enqueue_style( 'sample', get_template_directory_uri() . '/css/contact.css', array(), '1.0.0' );
    }
}
add_action('wp_enqueue_scripts','enqueue_name');

add_theme_support('post-thumbnails');
add_image_size('column-thumbnail', 500, 758, true);
add_image_size('single-top-thumbnail', 1000, 667, true);
add_image_size('single-side-thumbnail', 500, 758, true);
add_image_size('slick-img', 1500, 1000, true);

function post_has_archive( $args, $post_type ) {
    if( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'column';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 確認用Eメール
add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2 );
function wpcf7_validate_email_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}

function add_custom_post_menu() {
  register_post_type(
    'post-menu',
    array(
      'label' => 'メニュー',
      'public' => false,
      'show_ui' => true,
      'has_archive' => false,
      'menu_position' => 4,
      'supports' => array(
                      'title',
                      'editor',
                      'thumbnail',
                      'revisions',
                      )
    )
  );
}
add_action('init', 'add_custom_post_menu');
/*-------------------------------------------*/
/*  <head>タグ内に自分の追加したいタグを追加する
/*-------------------------------------------*/
function add_wp_head_custom(){ ?>
<!-- head内に書きたいコード -->
<?php }
// add_action( 'wp_head', 'add_wp_head_custom',1);

function add_wp_footer_custom(){ ?>
<!-- footerに書きたいコード -->
<?php }
// add_action( 'wp_footer', 'add_wp_footer_custom', 1 );
