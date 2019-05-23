
    <?php 
     $mytheme_search_cat1=get_option("mytheme_search_cat1");
	 $mytheme_search_cat2=get_option("mytheme_search_cat2");
	 $mytheme_search_cat3=get_option("mytheme_search_cat3");
	 $mytheme_search_cat4=get_option("mytheme_search_cat4");
	 $mytheme_search_cat5=get_option("mytheme_search_cat5");
	$mytheme_search_text=get_themepark_option("mytheme_search_text",'输入搜索-');
				
				?> 
<p>
	 	 <?php 
				echo get_option("mytheme_search_text");
				if($mytheme_search_cat1){$alls='';}else{$alls='all';}
				search_span_echo($mytheme_search_cat1,'sel',$alls);
				search_span_echo($mytheme_search_cat2,'','');
					search_span_echo($mytheme_search_cat3,'','');
					search_span_echo($mytheme_search_cat4,'','');
					search_span_echo($mytheme_search_cat5,'','');
				
				?>
  
 	 		 
	 			
	 				
	 						
 	 			
	 	 			
	 	 	</p>
	<div class="search_boxs">

                   <form action="<?php bloginfo("url"); ?>" id="searchform" method="get">
                      <input name="s" id="keywords" placeholder="<?php echo get_option("mytheme_search_text") ?>" autocomplete="off" type="text">
                      <input value="搜索" type="submit">
                    
                      
                      <input id="category" name="<?php if($mytheme_search_cat1){search_type_tp( get_term($mytheme_search_cat1)->taxonomy,'taxonomy');} ?>" value="<?php if($mytheme_search_cat1){ echo $mytheme_search_cat1;}else{echo '0';} ?>" type="hidden">

	 	            
	 	              <input id="post_type" name="post_type" value="<?php if($mytheme_search_cat1){search_type_tp( get_term($mytheme_search_cat1)->taxonomy,'post_tpye'); }else{echo '0';}?>" type="hidden">
 	 	            </form>        
  </div>
<div class="close_seach"></div>