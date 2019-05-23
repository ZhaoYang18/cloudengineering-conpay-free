<?php 
$new_meta_boxes =
array(


);
function new_meta_boxes() {
    global $post, $new_meta_boxes;

			
      ?>
	
	
	<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
    
          <p>付费版文章页有产品模式、相册模式、视频模式等不同的模式可选，选择之后可现实的状态是完全不同的，可以让你的文章可分为几种不同的形式，升级付费版可解锁全部内容。<br>
<a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">云端视工程WordPress企业主题（企业展示）</a><br>
<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">云端工程woocommerce商城主题（在线商城版）</a></p>


     <label style=" float:left; width:100px;">视频地址：</label> 
   	<input   type="text" value="付费版解锁"  readonly   />  <br />
<em  style=" margin-left:100px; ">[复制视频代码至此，若添加了视频代码，那么文章将会以视频模式显示]</em></div> 

	<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">

     <label style=" float:left; width:100px;">显示模式：</label> 
  <select disabled >
	        
			 <option   value="">两栏默认</option>
			 <option   value="tong">通栏</option>
			
			
			 </select>
       
	 </div>
	  
	  <div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">

     <label style=" float:left; width:100px;">侧边栏选择：</label> 
  <select disabled >
	        
			 <option   value="">默认继承分类选择</option>
             <option   value="sidebar-widgets4">默认侧边栏</option>
	       
			
			
			 </select>
       
	 </div>
  
	      	
	<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
    
     <label style=" float:left; width:100px;">产品展示模式：</label> 
   	<input type="checkbox" onclick="return false"   />
    <em  style=" margin-left:100px; ">[切换为产品展示模式时，文章形态会以产品模式展示]</em>
    </div>
    	<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
     <label style=" float:left; width:100px;">相册代码地址：</label> 
   	 	<input   type="text" value="付费版解锁"  readonly   />  <br />
<em  style=" margin-left:100px; ">[【付费版解锁】文章模式切换为产品模式时，会显示这里的相册作为切换]</em>
</div>
<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
 <label style=" float:left; width:100px;">产品价格：</label> 
 	<input   type="text" value="付费版解锁"  readonly   />
</div>

<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
 <label style=" float:left; width:100px;">产品原价：</label> 
 	<input   type="text" value="付费版解锁"  readonly   />
<em  style=" margin-left:100px; ">[如果你的产品有价格，可以填写在此处，填写了产品原价之后会有促销效果展示]</em>
</div>

<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
 <label style=" float:left; width:100px;">按钮链接：</label> 
 	<input   type="text" value="付费版解锁"  readonly   />
<em  style=" margin-left:100px; ">[你可以设置一个按钮链接，链接到你的淘宝京东的店铺让用户购买，或者链接到你的联系方式页面]</em>
</div>


<div style="  width:width:100%;padding:10px 0; display:block;overflow: hidden;">
<h2 class="hndle ui-sortable-handle" style="margin:10px 0; border-top:1px #ccc solid;"><span>产品模式的产品简介</span></h2>
<p>付费版拥有2个编辑器，额外的编辑器可以编辑产品模式下的简介</p>

</div>
      
      <?php  
	   
  wp_enqueue_media();
	wp_enqueue_script( 'menu-image-admin', get_template_directory_uri() ."/js/custom-script.js" );
 }

function create_meta_box() {
    global $theme_name;
  
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '文章显示选项【付费版解锁，不使用时可点击右侧三角形收起】', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes;
  
    foreach($new_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
  
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
  
        $data = $_POST[$meta_box['name']];
  
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

?>
