<?php




get_header();
get_template_part( 'top/top' ); 
$id =get_the_ID();
 $product_modle = get_post_meta($id,"product_modle", true); 
 if( $product_modle){include("single_product.php");}else{
include("options/data_cache.php");
$category = get_the_category($id );
$category_id = $category[0]->term_id;
$modle_single=get_post_meta($id,"modle_single", true);
$catce = get_post_meta($id,"catce", true); 
if(!get_option('catce_'.$category_id )){$cat_widget='sidebar-widgets4';}else{$cat_widget=get_option('catce_'.$category_id );}
if(!$catce){ $widget_id=$cat_widget;}else{$widget_id=$catce;}
?>

 
<div class="content_page">
<aside class="left_mian" id="per27"><?php dynamic_sidebar($widget_id);?></aside>



<div class="right_mian <?php if($modle_single){echo 'full_main'; }?>">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  




  <div class="enter"> 
  <article>
  <header>
  <div class="title_page"><h1><?php the_title();?></h1><div class="des_page">


         <?php
		 $id =get_the_ID();
		  $vedio=get_post_meta($id,"vedios", true);  
		 if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
		  if(!get_post_meta($id,"bbs_shoppingbox", true)){?>
            <p class="infot"><time><?php echo $language_c3.':'.get_the_time('Y/m/d') ; ?></time>
            <em><?php echo $language_c4.':'.$getPostViews; ?>  </em>
            <em> <?php   foreach((get_the_category()) as $category) { echo $language_s1.'<a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a> ';} }?></em>
            </p>
          
          
        
</div></div>
</header>

<div class="single_contents">
<section class="single_content_box">
	
  <?php the_content(); ?>
  <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

  
  <div class="single_tag"><?php $posttags = get_the_tags(); if ($posttags) {echo $language_s5; foreach($posttags as $tag) { echo '<a target="_blank" id="tagss" href="'.get_bloginfo('url').'/tag/'.$tag->slug.'">' .$tag->name .'</a>';}}?></div>
    </section>
  <section>
<div class="next_post">
 <p><?php if (get_previous_post()) { previous_post_link($language_s3.': %link','%title',true);}?> </p>  
 <p><?php if (get_next_post()) { next_post_link($language_s4.': %link','%title',true);} ?></p> 
</div>
</section>
</div>
 
   </article>


<div id="vedio_like">
<section>
<?php get_template_part( 'top/relevant_text' );  ?>

</section>
</div>








 <?php 

 if(get_option('mytheme_fenxiang')&&show_fenxang('single')=='single'){echo '<div class="single_contents"><div class="guding">'.wpautop(trim(stripslashes(get_option('mytheme_fenxiang')))).'</div>  </div>'; }?>

  
 </div>

 <?php endwhile; endif;
 

 ?>





 <?php if ( comments_open() ){?>
<div id="respond">
<section>
 <?php comments_template(); ?>
 </section>
</div>
 <?php  } ?>



</div>
<div style="clear:both;"></div>
</div>

<?php };get_footer(); ?>