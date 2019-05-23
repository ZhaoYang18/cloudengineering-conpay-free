<?php include(dirname(dirname(__FILE__))."/options/data_cache.php");
$archive_top_box=get_option("archive_top_box");

if($archive_top_box){$archive_top_boxs='style="background: center top url('.$archive_top_box.')"';}else{$archive_top_boxs='';}
?>
<div class="archive_top_box"<?php echo $archive_top_boxs; ?> >

</div>
<div id="page_muen_nav">
<div class="page_muen_nav_in">

<?php if( is_front_page() || is_home()) {echo "<a>首页</a>";}else{if (function_exists('woo_breadcrumbs')){woo_breadcrumbs() ;}}

	$url='href="'.get_bloginfo('url').'"';
	

?>
</div>  
</div>

<div id="blank">
<a class="blank blank_url" href="<?php echo get_bloginfo('url'); ?>" ><i></i><?php echo  $language_c7;?></a>

</div>