<?php 

/**
 * 文章系统函数
 * 函数清单：
 * 文章页面底部固定文字输出判断;
 * option获取和默认函数;
 * 多作者时，只显示自己的文章;
 * 特定的meta—key在qeury进行筛选；
 * 如果有Memcached或者Memcache，缓存菜单;
 * 排除搜索敏感字;
 * Gravatar缓存头像;
 * 排除搜索敏感字;
 * 开启安全登录链接,以及管理员和编辑权限不得从默认woocommerce登陆;
 * 如果打开了安全key,那么woocommerce的登录将会被拦截;
 * 移动端去除掉adminbar，因为会影响悬浮的顶部;
 * 仪表盘提示
   
 * @author url 	    http://www.themepark.com.cn
 * @author 		themepark
 * @package 	theme/functions
 * @version     1.o
 */



//文章页面底部固定文字输出判断
function  show_fenxang($option){
	
$mytheme_fenxiang_show = substr(get_option('mytheme_fenxiang_show'), 0, -1);
$mytheme_fenxiang_show_away=explode(',',$mytheme_fenxiang_show);
if(in_array("page", $mytheme_fenxiang_show_away)&&$option=='page'){return'page'; }	
elseif(in_array("single", $mytheme_fenxiang_show_away)&&$option=='single'){return'single'; }	
elseif(in_array("product", $mytheme_fenxiang_show_away)&&$option=='product'){return'product'; }	
	} 

//option获取和默认函数
function get_themepark_option($show,$default){
	
	if(get_option($show)){return get_option($show);}
	else{
		return $default;
		}
	

	}

//多作者时，只显示自己的文章
function mypo_parse_query_useronly( $wp_query ) {
    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false ) {
        if ( !current_user_can( 'manage_options' ) ) {
            global $current_user;
            $wp_query->set( 'author', $current_user->id );
        }
    }
}
 add_filter('parse_query', 'mypo_parse_query_useronly' );

//特定的meta—key在qeury进行筛选
add_filter('query_vars', 'metakey_queryvars' );
function metakey_queryvars( $qvars )
{
$qvars[] = 'not_meta_key';
return $qvars;
}

add_filter('posts_where', 'metakey_where' );
function metakey_where( $where )
{
global $wp_query;
global $wpdb;

if( isset( $wp_query->query_vars['not_meta_key'] )) {
$where .= $wpdb->prepare(" AND $wpdb->posts.ID NOT IN ( SELECT post_id FROM $wpdb->postmeta WHERE ($wpdb->postmeta.post_id = $wpdb->posts.ID) AND meta_key = %s) ", $wp_query->query_vars['not_meta_key']);
}

return $where;
}






//排除搜索敏感字
add_action('template_redirect', 'search_safe_key_word');
function search_safe_key_word(){
if (is_search()) {
global $wp_query;
$safe_search_key_word = get_option('safe_search_key_word');
if($safe_search_key_word){
$safe_search_key_word = str_replace("\r\n", "|", $safe_search_key_word);
$BanKey = explode('|', $safe_search_key_word);
$S_Key = $wp_query->query_vars;
foreach($BanKey as $Key){
if( stristr($S_Key['s'],$Key) != false ){
wp_die('Illegal keyword');
}
}
}
}
}

//开启安全登录链接,以及管理员和编辑权限不得从默认woocommerce登陆

add_action('login_enqueue_scripts','login_safe_url');  
function login_safe_url(){  
$safe_login_key  = get_option('safe_login_key');
$safer='';
if(isset($_GET['safer'])){$safer=$_GET['safer'];}
    if($safer != $safe_login_key&&$safe_login_key )header('Location:'.get_bloginfo('url'));  
}

//如果打开了安全key,那么woocommerce的登录将会被拦截
$safe_login_key  = get_option('safe_login_key');
if ( $safe_login_key) {
add_action('init', 'theme_wc_safe_admin_login' );
function theme_wc_safe_admin_login() {
if($_POST['woologin_form']){
	   $admin = new WP_User( null, $_POST['username']);      
	  if(  $admin->has_cap('edit_pages')){ wp_die('管理员和编辑请使用安全链接进行登录'); };
  
    } ;

}
}
remove_action( 'admin_print_scripts', 'wp-ajax-response' );
//移动端去除掉adminbar，因为会影响悬浮的顶部	
if(wp_is_mobile()){	
add_filter('show_admin_bar', '__return_false');
}

	
	


function remove_open_sans() {
wp_deregister_style( 'open-sans' );
wp_register_style( 'open-sans', false );
wp_enqueue_style('open-sans','');
}
add_action( 'init', 'remove_open_sans' );
//清理header输出
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link',10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action( 'wp_head', 'rel_canonical' ); 
remove_action ( 'pre_post_update', 'wp_save_post_revision' );
//移除版本号
function themepark_remove_cssjs_ver( $src ) {
	if( strpos( $src, 'ver='. get_bloginfo( 'version' ) ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'themepark_remove_cssjs_ver', 999 );
add_filter( 'script_loader_src', 'themepark_remove_cssjs_ver', 999 );
	
//获取产品分类
function get_product_cat( $args = '' ) {
	        $defaults = array( 'taxonomy' => 'product_cat' );
	        $args = wp_parse_args( $args, $defaults );

	        $taxonomy = $args['taxonomy'];

	        $taxonomy = apply_filters( 'get_categories_taxonomy', $taxonomy, $args );

	        // Back compat
	        if ( isset($args['type']) && 'link' == $args['type'] ) {
	                _deprecated_argument( __FUNCTION__, '3.0', '' );
	                $taxonomy = $args['taxonomy'] = 'link_category';
	        }
	
	        $categories = (array) get_terms( $taxonomy, $args );
	
        foreach ( array_keys( $categories ) as $k )
	                _make_cat_compat( $categories[$k] );

	        return $categories;
	};


	add_action( 'pre_get_posts', 'main_query_menbers' );
function main_query_menbers( $query ) {
    if(!$query->is_main_query()) {
        return;
    }
	$categorys = get_categories();
	foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;

	$cat_nummber= get_option('cat_nummber_'.$category_id);
	if($cat_nummber){
		 if ( is_category($category_id)) {
        $query->set('posts_per_page',$cat_nummber);
    }}}};
