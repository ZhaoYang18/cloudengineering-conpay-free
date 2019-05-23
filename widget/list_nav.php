<?php 
class list_nav extends WP_Widget {

	function __construct()
	{
		$widget_ops = array('classname'=>'list_nav','description' => get_bloginfo('template_url').'/images/xuanxiang/2.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::__construct($id_base="list_nav",$name='4伸缩图文并排模块【首页/侧栏】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	        
		
         $title= esc_attr($instance['title']);
		 $title2= esc_attr($instance['title2']);
		 $title3= esc_attr($instance['title3']);
		
		 $texts= esc_attr($instance['texts']);
			
		
		
		 $btn_link= esc_attr($instance['btn_link']);
			 $img_nb=4;
	for ($x=0; $x<=($img_nb-1); $x++) {
		${'img_pic'.$x}= esc_attr($instance['img_pic'.$x]);
	
		${'img_title_b'.$x}= esc_attr($instance['img_title_b'.$x]);
		${'img_title_s'.$x}= esc_attr($instance['img_title_s'.$x]);
		${'img_title_f'.$x}= esc_attr($instance['img_title_f'.$x]);
	  
		${'img_title_r'.$x}= esc_attr($instance['img_title_r'.$x]);
	}
	
		 $titleseo= esc_attr($instance['titleseo']);
	   	 $detects=esc_attr($instance['detects']);
		 $margin_up=esc_attr($instance['margin_up']);
		 $margin_dwon=esc_attr($instance['margin_dwon']);
		 $bac_color=esc_attr($instance['bac_color']);
		 $bac_imgage=esc_attr($instance['bac_imgage']);
				 $bac_imgage2=esc_attr($instance['bac_imgage2']);
	     $seo_out1=esc_attr($instance['seo_out1']);
	     $bac_video=esc_attr($instance['bac_video']);
	?>

<br />



<p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题（带颜色）:</label><br />
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">标题的前半部分，带有颜色</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('title2'); ?>">标题（黑色）:</label><br />
 <input type="text" size="40" value="<?php echo $title2 ; ?>" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">标题的后半部分，为黑色</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('texts'); ?>">文字描述</label><br />
<textarea style="width:96%" id="<?php echo $this->get_field_id('texts'); ?>" name="<?php echo $this->get_field_name('texts'); ?>"cols="52" rows="4" ><?php echo stripslashes($texts); ?></textarea> 
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">支持html，支持换行</em>
</p>
	
	
<p>
 <label  for="<?php echo $this->get_field_id('btn_link'); ?>">文字链接:</label><br />
 <input type="text" size="40" value="<?php echo $btn_link ; ?>" name="<?php echo $this->get_field_name('btn_link'); ?>" id="<?php echo $this->get_field_id('btn_link'); ?>"/>

</p>	




<p>
<?php if($bac_imgage2){echo '<img style="width:70px; height: auto;" src="'.chact_url_http($bac_imgage2).'"/>'; } ?><br>

 <label  for="<?php echo $this->get_field_id('bac_imgage2'); ?>">背景纹理图片(1920*293):</label><br />
 <input type="text" size="40" value="<?php echo $bac_imgage2 ; ?>" name="<?php echo $this->get_field_name('bac_imgage2'); ?>" id="<?php echo $this->get_field_id('bac_imgage2'); ?>"/>
  <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
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

<p>
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
 <label  for="<?php echo $this->get_field_id('seo_out1'); ?>">外层标签使用section</label>
 <input type="checkbox" <?php if($seo_out1=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out1'); ?>" id="<?php echo $this->get_field_id('seo_out1'); ?>"/>
 </p>
 







	
<p>
  <label  for="<?php echo $this->get_field_id('margin_up'); ?>">模块上边距：</label><br />
 <input type="text" size="40" value="<?php echo $margin_up ; ?>" name="<?php echo $this->get_field_name('margin_up'); ?>" id="<?php echo $this->get_field_id('margin_up'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('margin_dwon'); ?>">模块下边距:</label><br />
 <input type="text" size="40" value="<?php echo $margin_dwon; ?>" name="<?php echo $this->get_field_name('margin_dwon'); ?>" id="<?php echo $this->get_field_id('margin_dwon'); ?>"/>
 </p>

 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">上下默认30px，填写数字带有单位，如 30px</em>

<p>
 <label  >并排图片数量【付费版解锁】:</label><br />
 <input type="text"readonly="readonly" size="40"value="4"  />
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版支持4的倍数数量，最多可支持到12个图片，免费版只能显示固定的4个，升级到付费版可解锁<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>
 </p>
	
<?php $img_nb=4;	for ($x=0; $x<=($img_nb-1); $x++) { ?>
<div  class="btnsss"  style=" padding:10px 2%; background:#f0f0f0; width:95%; border:solid 1px #ccc; margin:10px 0; overflow:hidden; cursor:pointer;">
<img style="max-height: 20px; width: auto; float: left; margin-right: 5px;" src="<?php echo ${'img_pic'.$x} ; ?>" /><strong style="float:left; ">第<?php echo $x+1; ?>张图片</strong>

<span style="float:right;">+展开</span>
</div>	
<div class="searchbox" style="display:none; background:#f0f0f0; width:96%; padding:2%;">

<p>

 <label  for="<?php echo $this->get_field_id('img_pic'.$x); ?>">图片:</label><br />
 <?php if( ${'img_pic'.$x}){?><img style="height: auto; max-width:80%;  margin-right: 5px;" src="<?php echo ${'img_pic'.$x} ; ?>" /><br><?php };?>
 <input type="text" size="40" value="<?php echo ${'img_pic'.$x} ; ?>" name="<?php echo $this->get_field_name('img_pic'.$x); ?>" id="<?php echo $this->get_field_id('img_pic'.$x); ?>"/>
  <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('img_title_r'.$x); ?>">链接</label><br />
<input type="text" size="40" value="<?php echo ${'img_title_r'.$x} ; ?>" name="<?php echo $this->get_field_name('img_title_r'.$x); ?>" id="<?php echo $this->get_field_id('img_title_r'.$x); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">填写链接，以http开头，不填写则无链接。</em>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('img_title_b'.$x); ?>">标题</label><br />
<input type="text" id="<?php echo $this->get_field_id('img_title_b'.$x); ?>" value="<?php echo stripslashes(${'img_title_b'.$x}); ?>" name="<?php echo $this->get_field_name('img_title_b'.$x); ?>" />

</p>
<p>
 <label  for="<?php echo $this->get_field_id('img_title_f'.$x); ?>">符标题</label><br />
<input type="text"  id="<?php echo $this->get_field_id('img_title_f'.$x); ?>" name="<?php echo $this->get_field_name('img_title_f'.$x); ?>" value="<?php echo stripslashes(${'img_title_f'.$x}); ?>" />

</p>
<p>
 <label  for="<?php echo $this->get_field_id('img_title_s'.$x); ?>">描述</label><br />
<textarea style="width:96%" id="<?php echo $this->get_field_id('img_title_s'.$x); ?>" name="<?php echo $this->get_field_name('img_title_s'.$x); ?>"cols="52" rows="4" ><?php echo stripslashes(${'img_title_s'.$x}); ?></textarea> 

</p>

</div>





<?php
			 }							  }
		
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
		$bac_imgages='';
		
	     $title  = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		 $texts  = apply_filters('texts', empty($instance['texts']) ? __('') : $instance['texts']);
		 $title2  = apply_filters('title2', empty($instance['title2']) ? __('') : $instance['title2']);
			 $title3  = apply_filters('title2', empty($instance['title3']) ? __('') : $instance['title3']);
		
		 $btn_link  = apply_filters('btn_link', empty($instance['btn_link']) ? __('') : $instance['btn_link']);
	$zhezhao= apply_filters('zhezhao', empty($instance['zhezhao']) ? __('') : $instance['zhezhao']);
		
		
       
		
		 $bac_imgage2=apply_filters('bac_imgage2', empty($instance['bac_imgage2']) ? __('') : $instance['bac_imgage2']);
	   
		 $detects= apply_filters('detects', empty($instance['detects']) ? __('') : $instance['detects']); 
		 $margin_up=apply_filters('margin_up', empty($instance['margin_up']) ? __('') : $instance['margin_up']);
		 $margin_dwon=apply_filters('margin_dwon', empty($instance['margin_dwon']) ? __('') : $instance['margin_dwon']);
		 $seo_out1=apply_filters('seo_out1', empty($instance['seo_out1']) ? __('') : $instance['seo_out1']);
	     $titleseo=  apply_filters('titleseo', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
		 $img_nb  = 4;
		
		for ($x=0; $x<=($img_nb-1); $x++) {
		${'img_pic'.$x}=  apply_filters('img_pic'.$x, empty($instance['img_pic'.$x]) ? __('') : $instance['img_pic'.$x]);
		
		${'img_title_b'.$x}=  apply_filters('img_title_b', empty($instance['img_title_b'.$x]) ? __('') : $instance['img_title_b'.$x]);
		${'img_title_s'.$x}=  apply_filters('img_title_s', empty($instance['img_title_s'.$x]) ? __('') : $instance['img_title_s'.$x]);
		${'img_title_f'.$x}=  apply_filters('img_title_f', empty($instance['img_title_f'.$x]) ? __('') : $instance['img_title_f'.$x]);

		${'img_title_r'.$x}=  apply_filters('img_title_r', empty($instance['img_title_r'.$x]) ? __('') : $instance['img_title_r'.$x]);
		
		}
		
		
		if($margin_up||$margin_dwon||$height){$marginss ='padding:'.$margin_up.' 0 '.$margin_dwon;}
		if( $bac_imgage2 ){ $bac_imgage2s='background: url('.chact_url_http($bac_imgage2).');';}
		if($margin_up||$margin_dwo||$bac_imgage2){
			$margins ='style="'.$bac_imgage2s.$marginss.'"';}
		
		
		
		?>

<?php if($seo_out1){echo '<section id="list_nav" class="index_boxs '.$color.' " '.$margins.'>';}else{echo ' <div id="list_nav" class="index_boxs  '.$color.' "'.$margins.'>';} ?>  

<a  class="list_nav_title" <?php if( $btn_link){echo ' href="'.$btn_link.'" target="_blank"';} ?> >
	
	
	<?php if($title||$title2){ ?>

	<?php if($titleseo){echo '<'.$titleseo.'  class="list_nav_ts">';}else{echo '<div  class="list_nav_ts">';} ?>
	
	<?php if($title) {echo '<font>'.$title.'</font>' ;} if($title2) {echo $title2 ;} ?> 
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
	<?php } ?>
		<div class="xianxs"></div>
	<?php if($texts){  ?> <p><?php echo  str_replace("\r\n","<br />",$texts);; ?></p><?php } ?>

</a>

	<ul class="list_nav_ul">
	<?php for ($x=0; $x<=($img_nb-1); $x++) {?>
		<li>
			<a target="_blank" href="<?php echo ${'img_title_r'.$x}; ?>">
				<div class="text_list_nav">
					<span class="text_list_nav_title"><?php echo ${'img_title_b'.$x}; ?></span>
					<span><?php echo ${'img_title_f'.$x}; ?></span>
					<p><?php echo ${'img_title_s'.$x}; ?></p>
				</div>
				<div class="zhezhao2"></div>
			<img src="<?php echo chact_url_http(${'img_pic'.$x}); ?>" alt="<?php echo ${'img_title_b'.$x}; ?>" />
			</a>
		</li>
		<?php } ?>
		
		
		
	</ul>



 <?php if($seo_out1){echo '</section>';}else{echo '</div>';}?>


<?php
	}
}
register_widget('list_nav');
?>