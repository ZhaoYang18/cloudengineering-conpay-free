<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?> >
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1" />	


<?php include("options/data_cache.php"); 

if(is_single()){
$id=get_the_ID(); 
$description=get_post_meta($id, "描述",true);
$keyworeds=get_post_meta($id, "关键字",true);
$posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { $tagess.=$tag->name.',';}}
}
 ?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('mytheme_eso_jr') == ""){ ?>
<meta name="keywords" content="<?php  if(is_single()&&!$keyworeds){echo $tagess;}else{theme_keyworeds();} ?>" />
<meta name="description" content="<?php  if(is_single()&&!$description){echo  mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200,"",'utf-8'); ;}else{theme_description();}; ?>" />
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php }} ;?>
<title><?php 
			 $singletitle_p =get_post_meta($post->ID, "title_p",true);
			 $singletitle =get_post_meta($post->ID, "title",true);
			 global $wp_query;
             $cat_obj = $wp_query->get_queried_object_id();
			 $term_id = $cat_obj;
			
             $cat_title=get_option('cat_title_'.$term_id);
             $cat_title_p=get_option('cat_title_p_'.$term_id);
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title($language_th1."_"); echo '_'; }
		      elseif (is_archive()) {
				
		        if( $cat_title){echo  $cat_title;}else{wp_title(''); echo '_'.get_bloginfo('name');; }
					 
				 }
		      elseif (is_search()) {
		         echo $language_th2.'_'.wp_specialchars($s).'_'; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		      
		        if( $singletitle){echo  $singletitle;}else{ wp_title(''); echo '_'.get_bloginfo('name');; }
					 
			    }
		      elseif (is_404()) {
		         echo $language_th3.'_'; }
		        else if (is_home()) {
				  
				
						 
		        if(get_option('mytheme_title')){echo get_option('mytheme_title');}else{  bloginfo('name'); echo '_'; bloginfo('description'); }
					 
		        }else{wp_title(''); echo '_'.get_bloginfo('name');;}
		      if ($paged>1) {
		         echo '_page'. $paged;echo '_'; bloginfo('description'); }
		   ?></title>





<?php wp_head();  echo stripslashes(get_option('code_in_head'));
if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


<!--[if lt IE 9]>
    <link id="stylesheet-css" rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/css/ie_hack.css'; ?>" type="text/css" media="all">
    
    <script> 
   (function() {
     if (! 
     /*@cc_on!@*/
     0) return;
     var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
     var i= e.length;
     while (i--){
         document.createElement(e[i])
     } 
})() 
</script>
<![endif]-->




</head>


<body <?php body_class();?> >
	<header class="header">
		<div class="top">
			<p class="top_ad_text"><?php echo get_themepark_option("mytheme_top_languge_title","欢迎访问WEB主题公园，原创中文WordPress主题、woocommerce商城系统") ?></p>
			<div class="top_right_nav">
		
				<?php  
				if(get_option("mytheme_top_languge_nav")){
				wp_nav_menu(array( 'walker' => new text_nav(),'container' => false,'menu'=> get_option("mytheme_top_languge_nav"),'items_wrap' => '%3$s' ) );
				}
				?>
			<span class="tels">TEL . 400-800-5566</span>
			</div>
			
			<div class="wp_clear"></div>
		</div>
		<div class="nav">
			 <?php
		    if(is_home()){ $logo_out_s='<h1 class="logo"><a href="'.get_bloginfo('url').'">';  $logo_out_w='</a></h1>';}else{ $logo_out_s='<div class="logo"><a href="'.get_bloginfo('url').'">';  $logo_out_w='</a></div>';}
				         if(get_option("mytheme_logo")){$logo=get_option("mytheme_logo");}else{$logo=get_bloginfo('template_url').'/images/logo.png';}
						  if(get_option("mytheme_logo2")){$logo2=get_option("mytheme_logo2");}
						  
						 $logos='<img class="pclogo" src="'.$logo.'" alt="'.get_bloginfo('name').'"/>'.get_bloginfo('name');
				         echo $logo_out_s.$logos.$logo_out_w ;
		   ?>
		   <nav class="menu_header header_pic_nav">
	 	 		<?php   wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'theme_location' => 'header-menu','items_wrap' => '%3$s' ) );?>
			   <li class="search_box_btn">
				   <i class="search_iocn"></i>
			   </li>
			   <li class="gapodu"></li>
	 	 	</nav>
	 	 	 
			<span class=" header_nav_move_btn"><i></i></span>
	     <span class="search_box_btn"> <i class="search_iocn"></i> </span>
	    
		    <div id="waper_drog_nav"> 
            <div class="waper_drog_nav_in box_in">
             <div class='gobanks'><i class=""></i></div>
               <ul id="waper_drog_nav_ul">
                        
                        <?php  wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'theme_location' => 'cat-menu' ,'items_wrap' => '%3$s' ) ); ?>
                         <li class="gapodu"></li>
                          
                </ul>  
               
                  <div class='gobank'><i class=""></i></div>
                   <div class="wp_clear"></div>          
             </div>           
      </div>
			<div class="wp_clear"></div>
		</div>
		
	</header>
	<div class="search_box_out">
		<div class="search_box_in">
			
			 <?php get_template_part( 'searchform' ); ?> 
		</div>
		
	</div>