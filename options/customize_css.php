<?php 
/**
 * 自定义风格设置输出  
 * @author url 	    http://www.themepark.com.cn
 * @author 		themepark
 * @package 	theme/functions
 * @version     1.o
 */

function extraordinaryvision_customize_css($echo){
if ( !is_admin()) {
//头部
$mytheme_style =$mytheme_index_bac_img=$mytheme_product_bac_img=$mytheme_product_bac_img2 =$mytheme_product_bac_img3=$mytheme_product_bac_img4=$mytheme_footer_pic=$mytheme_footer_pic2=$mytheme_header_color =$mytheme_header_color2=$mytheme_page_muen_nav_imgs=$mytheme_header_opacitys2=$mytheme_form_pics=$mytheme_header_opacitys=$mytheme_toolbar_images=$mytheme_toolbar_images_b=$mytheme_form_pics2 ='';
//变量初始化

$mytheme_tonggao_woo_color=get_option("mytheme_tonggao_woo_color");//woocommerce整站公告背景
$mytheme_tonggao_woo_color2=get_option("mytheme_tonggao_woo_color2");//woocommerce整站公告文字
$mytheme_form_pic=get_option("mytheme_form_pic");//顶部整个背景图片p
$mytheme_header_opacity=get_option("mytheme_header_opacity");//pc顶部的透明度
$mytheme_header_opacity2=get_option("mytheme_header_opacity2");//手机顶部的透明度c
if(get_option("mytheme_header_color2")){$mytheme_header_color2=get_option("mytheme_header_color2");}
if(get_option("mytheme_header_color")){$mytheme_header_color=get_option("mytheme_header_color");}

if($mytheme_header_opacity){$mytheme_header_opacitys='opacity:0.'.$mytheme_header_opacity.';filter:Alpha(opacity='.$mytheme_header_opacity.'0);';}
if($mytheme_header_opacity2){$mytheme_header_opacitys2='opacity:0.'.$mytheme_header_opacity2.';filter:Alpha(opacity='.$mytheme_header_opacity2.'0);';}

$mytheme_form_pic2=get_option("mytheme_form_pic2");//顶部整个背景图片move
if($mytheme_form_pic){$mytheme_form_pics='center top url('.$mytheme_form_pic.')';}
if($mytheme_form_pic2){$mytheme_form_pics2='center top url('.$mytheme_form_pic2.')';}
$mytheme_header_icon_color=get_option("mytheme_header_icon_color");//顶部图标颜色



$mytheme_header_title=get_option("mytheme_header_title");//导航标题文字颜色

$mytheme_header_title_hover=get_option("mytheme_header_title_hover");//导航标题文字鼠标经过颜色
$mytheme_header_li_hover=get_option("mytheme_header_li_hover");//导航标题背景鼠标经过颜色
$mytheme_header_li_hover2=get_option("mytheme_header_li_hover2");//当前页面描边颜色

//首页和模块
$mytheme_index_bac=get_option("mytheme_index_bac");//首页背景
if(get_option("mytheme_index_bac_img")){$mytheme_index_bac_img='center top url('.get_option("mytheme_index_bac_img").')}';};//首页背景图片
$mytheme_index_title=get_option("mytheme_index_title");//首页模块标题颜色
$mytheme_index_title2=get_option("mytheme_index_title2");//首页模块副标题、按钮颜色

$mytheme_onsale=get_option("mytheme_onsale");//所有的促销中背景颜色
$mytheme_case_pic_bottom=get_option("mytheme_case_pic_bottom");//查看全部和加入购物车背景

$mytheme_screening_color=get_option("mytheme_screening_color");//筛选颜色

//woocommerce 列表
$mytheme_product_bac=get_option("mytheme_product_bac");//woocommerce 列表背景
if(get_option("mytheme_product_bac_img")){$mytheme_product_bac_img='center top url('.get_option("mytheme_product_bac_img").')}';};//woocommerce 列表背景图片

$mytheme_product_bac2=get_option("mytheme_product_bac2");//woocommerce 内页背景
if(get_option("mytheme_product_bac_img2")){$mytheme_product_bac_img2='center top url('.get_option("mytheme_product_bac_img2").')}';};//woocommerce 内页背景图片


$mytheme_product_bac3=get_option("mytheme_product_bac3");//文章列表背景
if(get_option("mytheme_product_bac_img3")){$mytheme_product_bac_img3='center top url('.get_option("mytheme_product_bac_img3").')}';};//文章列表背景图片


$mytheme_product_bac4=get_option("mytheme_product_bac4");//文章内页背景
if(get_option("mytheme_product_bac_img4")){$mytheme_product_bac_img4='center top url('.get_option("mytheme_product_bac_img4").')}';};//文章内页背景图片



$mytheme_page_muen_nav=get_option("mytheme_page_muen_nav");//面包屑背景颜色
$mytheme_page_muen_nav2=get_option("mytheme_page_muen_nav2");//面包屑文字颜色
$mytheme_page_muen_nav_img=get_option("mytheme_page_muen_nav_img");//面包屑背景图片
if($mytheme_page_muen_nav_img){$mytheme_page_muen_nav_imgs='center top url('.$mytheme_page_muen_nav_img.')';};//文章内页背景图片

//底部风格颜色
$mytheme_footer_text_p=get_option("mytheme_footer_text_p");//底部黑色字体
$mytheme_footer_text_hover=get_option("mytheme_footer_text_hover");//底部所有橘色字体

$mytheme_footer_color=get_option("mytheme_footer_color");//底部上的背景颜色
if(get_option("mytheme_footer_pic")){$mytheme_footer_pic='center top url('.get_option("mytheme_footer_pic").')';};//底部上的背景图片

$mytheme_footer_color2=get_option("mytheme_footer_color2");//底部上的背景颜色
if(get_option("mytheme_footer_pic2")){$mytheme_footer_pic2='center top url('.get_option("mytheme_footer_pic2").')';};//底部上的背景图片



$mytheme_toolbar_bac=get_option("mytheme_toolbar_bac");//工具栏背景开关
$mytheme_toolbar_color=get_option("mytheme_toolbar_color");//工具栏背景颜色
if(get_option("mytheme_toolbar_images_b")){$mytheme_toolbar_images_b='center top url('.get_option("mytheme_toolbar_images_b").')';};//底部上的背景图片
$mytheme_toolbar_btn_color=get_option("mytheme_toolbar_btn_color");//工具栏按钮背景
$mytheme_toolbar_btn_color2=get_option("mytheme_toolbar_btn_color2");//工具栏选中按钮背景


$mytheme_toolbar_color_m=get_option("mytheme_toolbar_color_m");//工具栏手机状态整个背景
$mytheme_toolbar_color_m2=get_option("mytheme_toolbar_color_m2");//工具栏手机选中状态

$mytheme_login_color=get_option("mytheme_login_color");//登录注册的背景颜色
$mytheme_login_img=get_option("mytheme_login_img");//登录注册的背景图片

$mytheme_myaccount_color=get_option("mytheme_myaccount_color");//个人中心、购物车和结算中的橘色

$salespromotion14=get_option('salespromotion14');
$mytheme_style.='<style id="extraordinaryvision_customize_css" type="text/css">';
if($salespromotion14){$mytheme_style.='#right_shop .coupon-content .code,.gift-certificate{display: none;}#right_shop .coupon-content .discount-description{margin: 8px 0;}';}
//woocommerce整站公告
if($mytheme_tonggao_woo_color&&$mytheme_tonggao_woo_color!="#6db2b1"){$mytheme_style.='body .woocommerce-store-notice,body  .demo_store{ background:'.$mytheme_tonggao_woo_color.';}';}
if($mytheme_tonggao_woo_color2&&$mytheme_tonggao_woo_color2!="#ffffff"){$mytheme_style.='body .woocommerce-store-notice,body  .demo_store,body .woocommerce-store-notice a,body  .demo_store a{ color:'.$mytheme_tonggao_woo_color2.';}';}

//首页和模块
if($mytheme_index_bac&&$mytheme_index_bac!="#f5f5f5"||$mytheme_index_bac_img){$mytheme_style.= 'body{background:'.$mytheme_index_bac.' '.$mytheme_index_bac_img.'}';}//首页背景
if($mytheme_index_title&&$mytheme_index_title!="#ff8400"){$mytheme_style.= '.text_video_ts font,.list_nav_ts font{color:'.$mytheme_index_title.'}
.xianxs,#top_video .pagination_out span.swiper-pagination-bullet-active,#case_index_show .pagination_out span.swiper-pagination-bullet-active{ background:  '.$mytheme_index_title.';}';}//首页模块标题颜色

if($mytheme_index_title2&&$mytheme_index_title2!="#0096fe"){$mytheme_style.= '.case_title_lists a.active,.case_title_lists a.active,.news_title_lists a.active,.form_contact_left #commentform-park #submit:hover,.vedio_url:hover{background:'.$mytheme_index_title2.';}.icons_list a.active span,.form_contact_left #commentform-park #submit,.vedio_url{color:'.$mytheme_index_title2.'}.form_contact_left #commentform-park #submit,.vedio_url{border: solid 1px '.$mytheme_index_title2.';}@media screen and (min-width:1px) and (max-width:767px){
.icons_list a.active span{color:#fff; background: '.$mytheme_index_title2.'; }	}
';}//首页模块标题颜色


if($mytheme_onsale&&$mytheme_onsale!="#0096fe"){$mytheme_style.= '#right_shop .caseshow li .onsale, .caseshow li .onsale,.content .onsale,#right_shop span.onsale,.case_loop .product_pic .onsale{background:'.$mytheme_onsale.'}';}//所有的促销中背景颜色
if($mytheme_case_pic_bottom&&$mytheme_case_pic_bottom!="#000000"){$mytheme_style.= '.case_pic_bottom{background:'.$mytheme_case_pic_bottom.'}';}//查看全部和加入购物车背景
//woocommerce 列表
if($mytheme_product_bac&&$mytheme_product_bac!="#f5f5f5"||$mytheme_product_bac_img){$mytheme_style.= 'body.post-type-archive-product,body.tax-product_cat{background:'.$mytheme_product_bac.' '.$mytheme_product_bac_img.'}';}//woocommerce 内页背景
if($mytheme_product_bac2&&$mytheme_product_bac2!="#ffffff"||$mytheme_product_bac_img2){$mytheme_style.= 'body.single-product {background:'.$mytheme_product_bac2.' '.$mytheme_product_bac_img2.'}';}//woocommerce 内页背景

if($mytheme_product_bac3&&$mytheme_product_bac3!="#ffffff"||$mytheme_product_bac_img3){$mytheme_style.= 'body.category {background:'.$mytheme_product_bac3.' '.$mytheme_product_bac_img3.'}';}//文章列表背景

if($mytheme_product_bac4&&$mytheme_product_bac4!="#ffffff"||$mytheme_product_bac_img4){$mytheme_style.= 'body.single,body.page,.MyAccounts_page{background:'.$mytheme_product_bac4.' '.$mytheme_product_bac_img4.'}';}//文章内页背景



if($mytheme_page_muen_nav&&$mytheme_page_muen_nav!="#ececec"){$mytheme_style.= '#page_muen_nav{background: '.$mytheme_page_muen_nav.' '.$mytheme_page_muen_nav_imgs.';}';}//面包屑背景颜色
if($mytheme_page_muen_nav2&&$mytheme_page_muen_nav2!="#666666"){$mytheme_style.= '#page_muen_nav span, #page_muen_nav a, #page_muen_nav, #page_muen_nav nav{color: '.$mytheme_page_muen_nav2.'}';}//面包屑文字颜色



if($mytheme_screening_color&&$mytheme_screening_color!="#f00000"){$mytheme_style.= '#screening .widget  ul li.current-cat-parent,#screening .widget ul li.current-cat, #screening .widget ul li.current-menu-item, #screening .widget ul li.chosen,#nav_product_mue #choose,.select,.nav_product_mu li .sub-menu li a:hover,#nav_product_mue #choose,#screening .price_slider_wrapper .button,.screening_close i, .nav_product_close i{background: '.$mytheme_screening_color.'}';}//筛选颜色

//底部风格
if($mytheme_footer_text_p&&$mytheme_footer_text_p!="#333333"){$mytheme_style.= '.footer_contact p,.footer_service li .nave_spaen div,.footer_menu li div,p.bq,.yq_link li div{color:'.$mytheme_footer_text_p.'}';};//底部黑色文字

if($mytheme_footer_text_hover&&$mytheme_footer_text_hover!="#ff6700"){$mytheme_style.= '.footer_contact p.tell,.footer_service li:hover .nave_spaen div,.bq a,.footer_contact a:hover{color:'.$mytheme_footer_text_hover.'}#right_shop .woocommerce-pagination ul li span.current, #right_shop .woocommerce-pagination ul li a:hover,.pager a.current,.pager a:hover{background:'.$mytheme_footer_text_hover.';}';
$mytheme_style.= '.footer_contact a:hover{ border: 1px solid '.$mytheme_footer_text_hover.';}
.footer_contact a{background: '.$mytheme_footer_text_hover.' none repeat scroll 0 0;border: 1px solid '.$mytheme_footer_text_hover.';}
';};//底部橘色

if($mytheme_footer_color&&$mytheme_footer_color!='#ffffff'||$mytheme_footer_pic){$mytheme_style.= '.footer{background:'.$mytheme_footer_color.' '.$mytheme_footer_pic.'}';};//底部上部分背景
if($mytheme_footer_color2&&$mytheme_footer_color2!='#fafafa'||$mytheme_footer_pic2){$mytheme_style.= '.footer_bottom{background:'.$mytheme_footer_color2.'  '.$mytheme_footer_pic2.'}';};//底部上部分背景图片
if($mytheme_login_color){$mytheme_style.= '.login_out{background-color:'.$mytheme_login_color.'; }';}
if($mytheme_myaccount_color){$mytheme_style.= '.MyAccount .woocommerce-MyAccount-navigation ul li.is-active a,.MyAccount .woocommerce-MyAccount-content  .info_shop a,#right_shop .my_info_cart_title a.actives,.order_list .order_list_head .order_status,.MyAccount .woocommerce-Address-title .edit,.MyAccount .woocommerce-MyAccount-content .my_info_cart_title a,#right_shop .enter .my_info_cart_title a.actives,.xh-membercenter .xh-tabs .sh1.active,.MyAccount .woocommerce-MyAccount-content a,.groupon.page-template-login_re #right_shop h3{color:'.$mytheme_myaccount_color.';}
#right_shop .my_info_cart_title a.actives{border-bottom: 2px solid '.$mytheme_myaccount_color.';}
.MyAccount .woocommerce-MyAccount-content .order_list_footer span a,.order_paginate span,.MyAccounts_page .order_paginate a:hover,.MyAccount .woocommerce-MyAccount-content .no_order_in_here a, .woocommerce #right_shop #respond input#submit,.woocommerce #right_shop a.button,#right_shop  .woocommerce button.button,.woocommerce #right_shop   input.button,.woocommerce .my_info_cart #respond input#submit, .woocommerce .my_info_cart a.button, .woocommerce .my_info_cart button.button, .woocommerce  .my_info_cart input.button,.single_contents .woocommerce .checkout-button,.my_info_cart #place_order,.MyAccount .woocommerce-MyAccount-content .no_order_in_here a, #right_shop .no_order_in_here a,.new_t_x{background:'.$mytheme_myaccount_color.';border:solid 1px '.$mytheme_myaccount_color.';}
 .woocommerce #right_shop #respond input#submit:hover,.woocommerce #right_shop a.button,#right_shop  .woocommerce button.button,.woocommerce #right_shop   input.button,.woocommerce .my_info_cart #respond input#submit, .woocommerce .my_info_cart a.button:hover, .woocommerce .my_info_cart button.button:hover, .woocommerce  .my_info_cart input.button:hover,.my_info_cart #place_order:hover,#right_shop .cart-collaterals .checkout-button:hover{ background:none; color:'.$mytheme_myaccount_color.'; border:solid 1px '.$mytheme_myaccount_color.';}.new_t_x,.groupon.page-template-login_re #right_shop .hs-btn-default, .single-groupon .hs-btn-default,.groupon.page-template-login_re #right_shop h3::after,.single_content_box  .qhbtn_themepark .nows{background:'.$mytheme_myaccount_color.'}.news_title .mantitle{border-bottom:solid 1px '.$mytheme_myaccount_color.';}
';}//个人中心、购物车和结算中的橘色

$mytheme_style.= '@media screen and (min-width:500px) and (max-width:200000px){';

if($mytheme_login_img){$mytheme_style.= '.login_out{background-image:url('.$mytheme_login_img.'); }';}

$mytheme_style.= '}';

$mytheme_style.= '@media screen and (min-width:1025px) and (max-width:200000px){';
//顶部
 if($mytheme_form_pic||$mytheme_header_color){$mytheme_style.= '.header_background{background:'.$mytheme_header_color.' '.$mytheme_form_pics.';'.$mytheme_header_opacitys.';}';}//顶部整个背景图片pc



  
   if($mytheme_header_title&&$mytheme_header_title!="#333333"){$mytheme_style.= '.header_pic_nav li a .nave_spaen div, .header_pic_nav li a div{color:'.$mytheme_header_title.'}.header_pic_nav li.xiala i{color:'.$mytheme_header_title.'}';}//导航标题文字颜色
   
     if($mytheme_header_title_hover&&$mytheme_header_title_hover!="#333333"){$mytheme_style.= '.header_pic_nav li:hover a .nave_spaen div, .header_pic_nav li:hover a div{color:'.$mytheme_header_title_hover.'}.header_pic_nav li.xiala:hover i{color:'.$mytheme_header_title_hover.'}';}//导航标题鼠标经过文字颜色
	 
	    if($mytheme_header_li_hover&&$mytheme_header_li_hover!="#ffffff"){$mytheme_style.= '.header_pic_nav li:hover{background:'.$mytheme_header_li_hover.'}';}//导航标题鼠标经过文字颜 
		
		   if($mytheme_header_li_hover2&&$mytheme_header_li_hover2!="#0096fe"){$mytheme_style.= '.header_pic_nav li.current-menu-item{border-top: 3px solid '.$mytheme_header_li_hover2.';}';}//导航标题鼠标经过文字颜  
   
    if($mytheme_header_icon_color){$mytheme_style.= '.menu_header li.search_box_btn{background:'.$mytheme_header_icon_color.'}';}//导航标题图标颜色
   
   //工具栏
if(!$mytheme_toolbar_bac){
	if($mytheme_toolbar_color&&$mytheme_toolbar_color!='#333333'||$mytheme_toolbar_images_b){$mytheme_style.= '.toolbar_line{background:'.$mytheme_toolbar_color.'  '.$mytheme_toolbar_images_b.'}';};//工具栏背景
	}else{$mytheme_style.= '.toolbar_line{background:none;}';};

if($mytheme_toolbar_btn_color&&$mytheme_toolbar_btn_color!='#333333'){$mytheme_style.= '.toolbar_line_in .my_tool_box{background:'.$mytheme_toolbar_btn_color.'}';};//工具栏整个背景

if($mytheme_toolbar_btn_color2&&$mytheme_toolbar_btn_color2!='#f30000'){$mytheme_style.= '.toolbar_line_in .my_tool_box:hover  span,.toolbar_line_in .my_tool_box:hover,.toolbar_line_in .my_tool_box span#severs_tool p.severs_tool_head{background:'.$mytheme_toolbar_btn_color2.'}';};//工具栏按钮背景
   
   
   
$mytheme_style.= '}';
$mytheme_style.= '@media screen and (min-width:1px) and (max-width:1024px){';
//顶部
 if($mytheme_form_pic2||$mytheme_header_color2){$mytheme_style.= '.header_background{background:'.$mytheme_header_color2.' '.$mytheme_form_pics2.';'.$mytheme_header_opacitys2.'}';}//顶部整个背景图片move
 
 if($mytheme_toolbar_color_m&&$mytheme_toolbar_color_m!='#333333'){$mytheme_style.= '.toolbar_line,.toolbar_line_in .my_tool_box{background:'.$mytheme_toolbar_color_m.'}';};//工具栏背景
 
 if($mytheme_toolbar_color_m2&&$mytheme_toolbar_color_m2!='#f30000'){$mytheme_style.= '.toolbar_line_in .my_tool_box.s_account_page,.toolbar_line_in .my_tool_box:hover  span,.toolbar_line_in .my_tool_box:hover,.toolbar_line_in .my_tool_box span#severs_tool p.severs_tool_head{background:'.$mytheme_toolbar_color_m2.'}';};//工具栏按钮背景 
$mytheme_style.= '} </style>';
if(!$echo){
	echo $mytheme_style;
	}else{
	return $mytheme_style;
	};
 }};
add_action( 'wp_head', 'extraordinaryvision_customize_css');   