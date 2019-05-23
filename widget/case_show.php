<?php 

class case_show extends WP_Widget {

	function __construct()
	{
		$widget_ops = array('classname'=>'case_show','description' => get_bloginfo('template_url').'/images/xuanxiang/8.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::__construct($id_base="case_show",$name='文章调用模块【首页/侧栏】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
    $title = esc_attr($instance['title']);
	$title2 = esc_attr($instance['title2']);
	$title3 = esc_attr($instance['title3']);

	$cat_n=1;
	for ($x=0; $x<=($cat_n-1); $x++) {	
	${'w_cat'.$x} = esc_attr($instance['w_cat'.$x]);
	}

	 $zhiding = esc_attr($instance['zhiding']);
	  $zhiding2 = esc_attr($instance['zhiding2']);
	 $titleseo= esc_attr($instance['titleseo']);

	 $titleseo3= esc_attr($instance['titleseo3']);

 $nnmber = esc_attr($instance['nnmber']);
	 $color=esc_attr($instance['color']);
	
	    $bac_color=esc_attr($instance['bac_color']);
		 $bac_imgage=esc_attr($instance['bac_imgage']);
		  $li=4;
		 $thumails=esc_attr($instance['thumails']);
		 
		  $seo_out1=esc_attr($instance['seo_out1']);
		   $seo_out2=esc_attr($instance['seo_out2']);
		   $margin_up=esc_attr($instance['margin_up']);
		 $margin_dwon=esc_attr($instance['margin_dwon']);
	
	?>
	
<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>模块属性设置</strong></p>

 <p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题（带有颜色）:</label>
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
 </p>
  <p>
 <label  for="<?php echo $this->get_field_id('title3'); ?>">标题（黑色）:</label>
 <input type="text" size="40" value="<?php echo $title3 ; ?>" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>"/>
 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('title2'); ?>">文字模块-副标题:</label>
 <input type="text" size="40" value="<?php echo $title2 ; ?>" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>"/>
 </p>


   <label for="<?php echo $this->get_field_id('li'); ?>">一行显示几个？【付费版解锁】</label>
			<select  disabled="disabled" >
		
           
            <option  >4个</option>
           
			</select>

<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版此模块可选一行排版数量，升级付费版可解锁:<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>



<p>

 <p>
 <label  for="<?php echo $this->get_field_id('cat_n'); ?>">需要调用多少个分类？:</label>
 <input type="text" size="40" value="1" />
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版可调用多个分类并滚动展示，升级付费版可解锁:<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>
 </p>

<?php
	$x=1;
	

	
	
	?>
<label  for="<?php echo $this->get_field_id('w_cat'.$x); ?>">调用文章分类(<?php echo $x; ?>):</label><br />
             <select id="<?php echo $this->get_field_id('w_cat'.$x); ?>" name="<?php echo $this->get_field_name('w_cat'.$x); ?>" >
              <option value=''>不显示</option>
<?php 
		 $categorys = get_categories();
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  ${'w_cat'.$x} == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
</p>


 



<p><label for="<?php echo $this->get_field_id('nnmber'); ?>"><?php esc_attr_e('显示数量(默认8):'); ?> <input class="widefat" id="<?php echo $this->get_field_id('nnmber'); ?>" name="<?php echo $this->get_field_name('nnmber'); ?>" type="text" value="<?php echo $nnmber; ?>" /></label></p>



<p>   
    <label  for="<?php echo $this->get_field_id('zhiding'); ?>">文章排序:</label><br />
             <select id="<?php echo $this->get_field_id('zhiding'); ?>" name="<?php echo $this->get_field_name('zhiding'); ?>" >
              <option value=''<?php if ($zhiding == "" ) {echo "selected='selected'";}?> >显示最新文章</option>
               <option value='1'<?php if ($zhiding == "1" ) {echo "selected='selected'";}?> >置顶文章优先（至少有一篇文章置顶）</option>
              <option value='2'<?php if ($zhiding == "2" ) {echo "selected='selected'";}?>>显示随机文章</option>
		
	</select>

<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">如果调用的文章，那么对于置顶的文章是有效的，如果调用的商品，商品中可以设置排序，这对于选择最新文章排序有效。</em>




</p>




<b>seo标签设置</b><br />
   
    <label  for="<?php echo $this->get_field_id('titleseo'); ?>">模块标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo'); ?>" name="<?php echo $this->get_field_name('titleseo'); ?>" >
                <option value=''<?php if ($titleseo == "" ) {echo "selected='selected'";}?> > div标签</option>
              <option value='h2'<?php if ($titleseo == "h2" ) {echo "selected='selected'";}?> > 	H2标签</option>
              <option value='h3'<?php if ($titleseo == "h3" ) {echo "selected='selected'";}?> > H3标签</option>
               <option value='h4'<?php if ($titleseo == "h4" ) {echo "selected='selected'";}?> > H4标签</option>
                  <option value='h5'<?php if ($titleseo == "h5" ) {echo "selected='selected'";}?> > H5标签</option>
                <option value='strong'<?php if ($titleseo == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
	          
	</select>

</p>




<p>

    <label  for="<?php echo $this->get_field_id('titleseo3'); ?>">文章标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo3'); ?>" name="<?php echo $this->get_field_name('titleseo3'); ?>" >
               <option value=''<?php if ($titleseo3 == "" ) {echo "selected='selected'";}?> > div标签</option>
              <option value='h2'<?php if ($titleseo3 == "h2" ) {echo "selected='selected'";}?> > 	H2标签</option>
              <option value='h3'<?php if ($titleseo3 == "h3" ) {echo "selected='selected'";}?> > H3标签</option>
               <option value='h4'<?php if ($titleseo3 == "h4" ) {echo "selected='selected'";}?> > H4标签</option>
                  <option value='h5'<?php if ($titleseo3 == "h5" ) {echo "selected='selected'";}?> > H5标签</option>
                <option value='strong'<?php if ($titleseo3 == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
              
             
             
           
                 
	          
	</select>
</p>

 <p>
 <label  for="<?php echo $this->get_field_id('seo_out1'); ?>">外层标签使用section</label>
 <input type="checkbox" <?php if($seo_out1=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out1'); ?>" id="<?php echo $this->get_field_id('seo_out1'); ?>"/>
 </p>

 <p>
 <label  for="<?php echo $this->get_field_id('seo_out2'); ?>">文章使用article包裹（使用之后，文章标题建议选择h2）</label>
 <input type="checkbox" <?php if($seo_out2=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out2'); ?>" id="<?php echo $this->get_field_id('seo_out2'); ?>"/>
 </p>
 

 
 
 
<p>
 <label  for="<?php echo $this->get_field_id('bac_color'); ?>">模块背景颜色:</label><br />
 <input type="text" size="40" value="<?php echo $bac_color; ?>" name="<?php echo $this->get_field_name('bac_color'); ?>" id="<?php echo $this->get_field_id('bac_color'); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">请填写色值如#f6f6f6</em>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('bac_imgage'); ?>">模块背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $bac_imgage ; ?>" name="<?php echo $this->get_field_name('bac_imgage'); ?>" id="<?php echo $this->get_field_id('bac_imgage'); ?>"/>
  <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
</p>

<p>
  <label  for="<?php echo $this->get_field_id('margin_up'); ?>">模块上边距：</label><br />
 <input type="text" size="40" value="<?php echo $margin_up ; ?>" name="<?php echo $this->get_field_name('margin_up'); ?>" id="<?php echo $this->get_field_id('margin_up'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('margin_dwon'); ?>">模块下边距:</label><br />
 <input type="text" size="40" value="<?php echo $margin_dwon; ?>" name="<?php echo $this->get_field_name('margin_dwon'); ?>" id="<?php echo $this->get_field_id('margin_dwon'); ?>"/>
 </p>
<p>
<label for="<?php echo $this->get_field_id('detects'); ?>">设备识别【付费版解锁】</label>
			<select  disabled="disabled" >
				<option >移动端和PC端都显示</option>
                <option >只显示在PC端</option>
                <option>只显示在移动端</option>

</select>
	<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版可兼容移动端访问，此选项可让你决定模块显示在哪一些设备上，升级到付费版可解锁<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>
</p>



	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	   
	    $title  = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$title2  = apply_filters('title2', empty($instance['title2']) ? __('') : $instance['title2']);
		$title3  = apply_filters('title3', empty($instance['title3']) ? __('') : $instance['title3']);
	
		
		$x=1;

	${'w_cat'.$x} = apply_filters('w_cat'.$x, empty($instance['w_cat'.$x]) ? __('6') : $instance['w_cat'.$x]);
	
		
       $nnmber = apply_filters('nnmber', empty($instance['nnmber']) ? __('6') : $instance['nnmber']);
	   $zhiding2  = apply_filters('zhiding2', empty($instance['zhiding2']) ? __('') : $instance['zhiding2']);
	
		$zhiding  = apply_filters('zhiding', empty($instance['zhiding']) ? __('') : $instance['zhiding']);
		$titleseo=  apply_filters('titleseo', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
		$titleseo3=  apply_filters('titleseo3', empty($instance['titleseo3']) ? __('0') : $instance['titleseo3']);
		
		$detects= apply_filters('detects', empty($instance['detects']) ? __('') : $instance['detects']); 
		$bac_imgage=apply_filters('bac_imgage', empty($instance['bac_imgage']) ? __('') : $instance['bac_imgage']);
	    $bac_color=apply_filters('bac_color', empty($instance['bac_color']) ? __('') : $instance['bac_color']);
		$color=apply_filters('color', empty($instance['color']) ? __('') : $instance['color']);
		$li=apply_filters('li', empty($instance['li']) ? __('') : $instance['li']);
		$thumails=apply_filters('thumails', empty($instance['thumails']) ? __('') : $instance['thumails']);
		 $seo_out1=apply_filters('seo_out1', empty($instance['seo_out1']) ? __('') : $instance['seo_out1']);
		   $seo_out2=apply_filters('seo_out2', empty($instance['seo_out2']) ? __('') : $instance['seo_out2']);
		$margin_up=apply_filters('margin_up', empty($instance['margin_up']) ? __('') : $instance['margin_up']);
		 $margin_dwon=apply_filters('margin_dwon', empty($instance['margin_dwon']) ? __('') : $instance['margin_dwon']);
		
		 $nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('4') : $instance['nnmber']);
			$oder=$bac_imgages=$bac_colors=$sticky='';
		if($margin_up||$margin_dwon){$marginss ='padding:'.$margin_up.' 0 '.$margin_dwon.' 0;';}
		if($bac_imgage){$bac_imgages=' center url('.$bac_imgage.')';}
		if($bac_color){$bac_colors='style="background:'.$bac_color.' '.$bac_imgages.';'.$marginss.'"';}
		
if( $zhiding =="1" ){  $sticky = get_option( 'sticky_posts' );}
if( $zhiding =="2" ){ $oder="rand";}else{ $oder="ASC";}	
	

	

	if(${'w_cat'.$x} ){
	 ${'args'.$x}= array( 'cat' => ${'w_cat'.$x} , 'showposts' => $nnmber ,'post__in' => $sticky,'orderby' => $oder); 
		${'ding'.$x}=query_posts(${'args'.$x});
		${'query'.$x}= new WP_Query(  ${'args'.$x} );
		}
	

 
	 
     $stickys= get_option('mytheme_stickys');
	 if($w_cat){$w_cat_link= get_category_link( $w_cat);}
	



 ?>

<div id="case_index_show" <?php echo 'class="index_boxs '.$color.' '.$detects.'"' ; echo $bac_colors;?> >
<?php if($seo_out1){echo '<section>';} ?>
<div class="case_index_show_in box_in">

	
<a  class="list_nav_title" <?php if( $btn_link){echo ' href="'.$btn_link.'" target="_blank"';} ?> >
	
	
	<?php if($title||$title2){ ?>

	<?php if($titleseo){echo '<'.$titleseo.'  class="list_nav_ts">';}else{echo '<div  class="list_nav_ts">';} ?>
	
	<?php if($title) {echo '<font>'.$title.'</font>' ;} if($title3) {echo $title3 ;} ?> 
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
	<?php } ?>
		<div class="xianxs"></div>
	<?php if($title2){  ?> <p><?php echo  str_replace("\r\n","<br />",$title2);; ?></p><?php } ?>

</a>

       
	<div class="swiper-container case_show<?php echo ${'w_cat0'} ?>">
        <div class="swiper-wrapper"> 
          
 
          <div class="swiper-slide">
           <ul class="case_loop loop_list4" >
                    <?php if(${'w_cat'.$x} ){
							
							 if(${'query'.$x}->have_posts()) :         
					  while ( ${'query'.$x}->have_posts() ) :${'query'.$x}->the_post(); 
							case_loops('medium',$titleseo3,$seo_out2);
							
						 endwhile;  wp_reset_query();endif;	
						   if( $num>0){
						 if(${'w_cat'.$x}&&$zhiding =="1"){$num=$nnmber-count(${'ding'.$x});
					
					  ${'argss'.$x} = array( 'cat' => ${'w_cat'.$x} , 'showposts' => $num , 'post__not_in' => $sticky,'orderby' => $oder);
					 ${'querys'.$x} = new WP_Query( $argss );          
					    if(${'querys'.$x}->have_posts()) :   while (${'querys'.$x}->have_posts() ) :${'querys'.$x}->the_post();   
					  case_loops( 'medium',$titleseo3 );
					   endwhile;  wp_reset_query();endif;
					  } }
							
							}
						?>
                     
                    </ul>
	              </div>
           
                 </div>
                 </div>
	
       
                      
                
               </div> 
<?php if($seo_out1){echo '</section>';} ?>
</div>

 
        <?php
 
	}
}
register_widget('case_show');
?>