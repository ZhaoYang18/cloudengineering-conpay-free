<?php
ob_start();
include_once("load.php");

include_once("functions/ajax_comments_fun.php");
include_once("meta_boxes.php"); 
include_once("widget.php"); 
include_once("functions/script.php");
include_once("functions/seo.php");
include_once("functions/walker.php");
include_once("functions/breadcrumbs.php");
include_once("functions/functions_z.php");
include_once("options/header.php");
include_once("options/footer.php");
include_once("options/initialization.php");
include_once("options/customize_css.php");
include_once("options/toolbar.php");
include_once("themeoption/themeoption.php"); 
include_once("loop/caseshow.php"); 

if (!function_exists( 'chact_url_http' ) ){
function chact_url_http($url){
$replaseur= get_option('replaseur');
	if(!$replaseur){
	if(strstr($url,'uploads')){ 
$strlen = strlen($url);  
$tp = strpos($url,"/wp-content");  
$sql = substr($url,-$strlen,$tp);  
$strlens = strlen($sql);
$sql2 = substr($url,$strlens); 
	if($sql==get_bloginfo('url')){return $url;}	else{
	return get_bloginfo('url').$sql2;	
	}
	}else{
		return $url;
	}}
	else{
		return $url;
	}
}
}
