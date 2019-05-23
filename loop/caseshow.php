<?php 
function case_loop($modlie,$titleseo3,$seo_out2){

			 $tit= get_the_title();
		             $id =get_the_ID(); 
	                 $content= get_the_content();
					 $linkss=get_post_meta($id,"hoturl", true); 
					 $vedio=get_post_meta($id,"vedios", true); 
		             if($linkss !=""){ $links1=  $linkss;}else{$links1=  get_permalink();}; 
					if(get_post_meta($id ,"links_p", true)){ $contact_btn_url=get_post_meta($id ,"links_p", true);}else{$contact_btn_url=get_option('mytheme_btn_url');}
					  if( $modlie=='like'){$show=40;}else{$show=100;}
	
					  ?>          
                              <li>
                          <?php if($seo_out2){echo '<article>';} ?>   
                    <div class="case_pic"> 
						<a <?php if(!$vedio||$modlie=='like'){ echo 'href="'.$links1.'"target="_blank" ' ;}else{echo 'id="vedio_link"';}; ?>  >
						 <figure>
						<?php  themepark_thumbnails('medium',''); ?>
                       
                        <?php  if($vedio&&$modlie!='like'){echo '<div class="vedio_btn"><div class="icon"></div></div>'; }else{ ; ?>
							 <figcaption><span><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,100,"...",'utf-8'); ?></span></figcaption>
                        <?php } ?>
                         </figure>
                        
                        </a>
							<?php  if($vedio&&$modlie!='like'){echo '<div class="vedio_code"><noscript>'.stripslashes($vedio).'</noscript></div>
							';} ?>
							
                            </div>
                     <div class="case_text post_text">
                       <?php if($titleseo3){echo '<'.$titleseo3.'  class="posts_title">';}else{echo '<div  class="posts_title">';} ?>
                        <a href="<?php echo $links1 ; ?>"target="_blank"><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"...",'utf-8'); ?></a>
                         <?php if($titleseo3){echo '</'.$titleseo3.'>';}else{echo '</div>';} ?>
                     
          <?php  echo '<a href="'.$links1.'"target="_blank" class="vedio_url">'.get_themepark_option("language_i1","详细信息").'</a>'; ?>
                       
                  </div>
                <?php if($seo_out2){echo '</article>';} ?>    
                </li>
<?php }
function case_loops($modlie,$titleseo3,$seo_out2){

					 $tit= get_the_title();
		             $id =get_the_ID(); 
	                 $content= get_the_content();
					 $linkss=get_post_meta($id,"hoturl", true); 
					 $vedio=get_post_meta($id,"vedios", true); 
		             if($linkss !=""){ $links1=  $linkss;}else{$links1=  get_permalink();}; 
					if(get_post_meta($id ,"links_p", true)){ $contact_btn_url=get_post_meta($id ,"links_p", true);}else{$contact_btn_url=get_option('mytheme_btn_url');}
					  if( $modlie=='like'){$show=40;}else{$show=100;}
					  ?>          
                              <li>
                          <?php if($seo_out2){echo '<article>';} ?>   
                    <div class="case_pic"> 
						<a <?php if(!$vedio||$modlie=='like'){ echo 'href="'.$links1.'"target="_blank" ' ;}else{echo 'id="vedio_link"';}; ?>  >
						 <figure>
						<?php  themepark_thumbnails('medium',''); ?>
                       
                        <?php  if($vedio&&$modlie!='like'){echo '<div class="vedio_btn"><div class="icon"></div></div>'; }else{ ; ?>
							 <figcaption><span><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,100,"...",'utf-8'); ?></span></figcaption>
                        <?php } ?>
                         </figure>
                          
                        </a>
							<?php  if($vedio&&$modlie!='like'){echo '<div class="vedio_code"><noscript>'.stripslashes($vedio).'</noscript></div>
							';} ?>
							
                            </div>
                     <div class="case_text post_text">
                       <?php if($titleseo3){echo '<'.$titleseo3.'  class="posts_title">';}else{echo '<div  class="posts_title">';} ?>
                        <a href="<?php echo $links1 ; ?>"target="_blank"><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"...",'utf-8'); ?></a>
                         <?php if($titleseo3){echo '</'.$titleseo3.'>';}else{echo '</div>';} ?>
                     
          <?php  echo '<a href="'.$links1.'"target="_blank" class="vedio_url">'.get_themepark_option("language_i1","详细信息").'</a>'; ?>
                       
                  </div>
                <?php if($seo_out2){echo '</article>';} ?>    
                </li>
<?php }function news_loops($modlie,$titleseo3,$seo_out2,$x){
	
	                 $tit= get_the_title();
		             $id =get_the_ID(); 
	                 $content= get_the_content();
					 $linkss=get_post_meta($id,"hoturl", true); 
					 $vedio=get_post_meta($id,"vedios", true); 
		             if($linkss !=""){ $links1=  $linkss;}else{$links1=  get_permalink();}; 
					if(get_post_meta($id ,"links_p", true)){ $contact_btn_url=get_post_meta($id ,"links_p", true);}else{$contact_btn_url=get_option('mytheme_btn_url');}
	
	?>

	<?php if($x==1){ ?>
	<div class="top_news">
		<a class="top_news_pic" target="_blank" href="<?php echo  get_permalink(); ?>">
		<?php  themepark_thumbnails($modlie,'lazy'); ?>
			<div class="top_news_text">
				<div class="top_news_left">
					<time>
						<span><?php echo get_the_time('d') ; ?></span>
						<span><?php echo get_the_time('Y-m') ; ?></span>
					</time>
					
				</div>
				<div class="top_text_right">
					<?php if($titleseo3){echo '<'.$titleseo3.'  class="posts_title">';}else{echo '<div  class="posts_title">';} ?>
                        <?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"...",'utf-8'); ?>
                         <?php if($titleseo3){echo '</'.$titleseo3.'>';}else{echo '</div>';} ?>
					<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,180,"...",'utf-8'); ?></p>
				</div>
				
				
			</div>
			
			
		
		</a>
		
	</div>
	
				<?php }else{ ?>
			
<li>
<?php if($titleseo3){echo '<'.$titleseo3.'  class="posts_title">';}else{echo '<div  class="posts_title">';} ?>
          <a href="<?php echo $links1 ; ?>"target="_blank"><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"...",'utf-8'); ?></a>
<?php if($titleseo3){echo '</'.$titleseo3.'>';}else{echo '</div>';} ?>
	<time><?php echo get_the_time('Y/m/d') ; ?></time>
</li>
				
				<?php } ?>



	
<?php	
}