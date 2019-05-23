<?php
if (function_exists('register_sidebar')) {
		register_sidebar(array(
    		'name' => '首页内容排版区',
    		'id'   => 'index_content',
    		'description'   => '默认首页的内容排版模块，只能放入内容排版区模块',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
		register_sidebar(array(
    		'name' => '默认侧边栏',
    		'id'   => 'sidebar-widgets4',
    		'description'   => '默认两栏内页的侧边栏',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
			
		register_sidebar(array(
    		'name' => '多重筛选',
    		'id'   => 'screening',
    		'description'   => '仅仅支持放入WooCommerce Layered Nav 过滤器、WooCommerce 分层导航、WooCommerce 产品类别、WooCommerce 价格筛选，其他放入无效',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
				

	
	
	
		
    };
function unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget'); 
	

};

add_action('widgets_init', 'unregister_default_wp_widgets');

include_once("js/script_images.php");
include_once("widget/top_video.php");

include_once("widget/list_nav.php");

include_once("widget/case_show.php");
include_once("widget/news.php");
include_once("widget/nav.php");
include_once("widget/nav_menu.php");





 function wptuts_add_color_picker( $hook ) {
        if( is_admin() ) { 
		    wp_enqueue_media();
            wp_enqueue_style( 'wp-color-picker' ); 
            wp_enqueue_script( 'custom-script-handle', get_template_directory_uri().'/js/custom-script.js', array( 'wp-color-picker' ), false, true ); 
			

        };

    };
add_filter( 'sidebar_admin_page', 'wptuts_add_color_picker' );
add_filter( 'customize_controls_print_scripts', 'wptuts_add_color_picker' );

add_filter( 'admin_head-nav-menus.php', 'menu_image_edit_nav_menu_walker_filter', 10, 2 );
 function menu_image_edit_nav_menu_walker_filter() {
			wp_enqueue_media();
			wp_enqueue_script( 'menu-image-admin', get_template_directory_uri() ."/js/widget_upload.js" );
	};

function first_img_as_thumbnail() {
$current_tag = single_tag_title('', false);
$tags = get_tags();
foreach($tags as $tag) {
if($tag->name == $current_tag) return $tag->term_id; 
};
};
function firstimgasthumbnail() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches[1][0];
if(empty($first_img)){ 
$first_img = get_bloginfo('template_url').'/images/demo/vedio.gif';
}
$attachment_id = get_attachment_id_from_src(  $first_img );
return $attachment_id ;
} ;

function search_type_tp($id,$type){
	if($type=="post_tpye"){
		if($id=="category"){
			echo 'post';
			
		}elseif($id=="product_cat"){echo 'product';}
		
	}
	
	if($type=="taxonomy"){
		if($id=="category"){
			echo 'cat';
			
		}elseif($id=="product_cat"){echo 'tag_ID';}
		
	}
	
	
}
function search_span_echo($mytheme_search_cat1,$sel,$all){
	$mytheme_search_text=get_themepark_option("mytheme_search_text",'输入搜索-');
	if($all){
		?>
 <span taxonomy="0" post_type="<?php echo '0"';if($sel){echo 'class="sel"'; } ?>   category="" placeholder="<?php echo get_themepark_option('language_th5','全站搜索');  ?>"><?php echo get_themepark_option('language_th5','全站搜索'); ?>
		 </span>
		<?php
	}
	if($mytheme_search_cat1) {	
	 	 ?>
	 	 <span taxonomy="<?php search_type_tp( get_term($mytheme_search_cat1)->taxonomy,'taxonomy') ?>" post_type="<?php search_type_tp( get_term($mytheme_search_cat1)->taxonomy,'post_tpye');echo '"';if($sel){echo 'class="sel"'; } ?>   category="<?php echo $mytheme_search_cat1; ?>" placeholder="<?php echo  $mytheme_search_text.get_term($mytheme_search_cat1)->name;  ?>"><?php echo get_term($mytheme_search_cat1)->name; ?></span>
<?php
	  }
	
	
}