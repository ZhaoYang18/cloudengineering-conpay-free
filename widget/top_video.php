<?php 
class top_video extends WP_Widget {

	function __construct()
	{
		$widget_ops = array('classname'=>'top_video','description' => get_bloginfo('template_url').'/images/xuanxiang/6.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::__construct($id_base="top_video",$name='通栏图片模块',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	        
		
		 $top= esc_attr($instance['top']);
        

$x=1;
		 ${'title_margin'.$x}= esc_attr($instance['title_margin'.$x]);
		 ${'title'.$x}= esc_attr($instance['title'.$x]);
		 ${'title2'.$x}= esc_attr($instance['title2'.$x]);
		 ${'texts'.$x}= esc_attr($instance['texts'.$x]);
	
		 ${'zhezhao'.$x}= esc_attr($instance['zhezhao'.$x]);
	     ${'btn_link'.$x}= esc_attr($instance['btn_link'.$x]);
	     ${'color'.$x}= esc_attr($instance['color'.$x]);
	
		
		 $height= esc_attr($instance['height']);
		
	
	
		
	
		 $titleseo= esc_attr($instance['titleseo']);
	   	 $detects=esc_attr($instance['detects']);
		 $margin_up=esc_attr($instance['margin_up']);
		 $margin_dwon=esc_attr($instance['margin_dwon']);
		
	     $seo_out1=esc_attr($instance['seo_out1']);
	     
	?>

<br />




	
<b>不推荐使用在侧栏</b>
	
	
		
	
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
 <label  for="<?php echo $this->get_field_id('top'); ?>">是否显示鼠标向下滚动提示？</label>
 <input type="checkbox" <?php if($top=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('top'); ?>" id="<?php echo $this->get_field_id('top'); ?>"/>
 </p>
 
<p>
 <label  for="<?php echo $this->get_field_id('seo_out1'); ?>">外层标签使用section</label>
 <input type="checkbox" <?php if($seo_out1=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out1'); ?>" id="<?php echo $this->get_field_id('seo_out1'); ?>"/>
 </p>
 
<p>
 <label  >自动播放【付费版解锁】:</label><br />
 <input type="text" size="40"readonly="readonly" />
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版此模块可作为幻灯片展示，若需要幻灯片模式，请升级到付费版解锁<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>

</p>	
	
	
<p>
<label >幻灯片特效【付费版解锁】</label>
			<select  disabled="disabled" >
				<option >默认左右滑动</option>
                <option>淡入淡出效果</option>
                <option>3D效果</option>
               <option>3D效果2</option>

</select>

<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">一般幻灯片宽度为1920像素，使用背景图片的幻灯片需要输入幻灯片高度，等比例幻灯片无法插入背景视频。</em>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版此模块可作为幻灯片展示，若需要幻灯片模式，请升级到付费版解锁<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>

</p>	


 <p>
 <label  for="<?php echo $this->get_field_id('height'); ?>">模块高度:</label><br />
 <input type="text" size="40" value="<?php echo $height ; ?>" name="<?php echo $this->get_field_name('height'); ?>" id="<?php echo $this->get_field_id('bac_imgage'); ?>"/>
  <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">单位像素</em>	
</p>

<p>
  <label  for="<?php echo $this->get_field_id('margin_up'); ?>">模块上边距：</label><br />
 <input type="text" size="40" value="<?php echo $margin_up ; ?>" name="<?php echo $this->get_field_name('margin_up'); ?>" id="<?php echo $this->get_field_id('margin_up'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('margin_dwon'); ?>">模块下边距:</label><br />
 <input type="text" size="40" value="<?php echo $margin_dwon; ?>" name="<?php echo $this->get_field_name('margin_dwon'); ?>" id="<?php echo $this->get_field_id('margin_dwon'); ?>"/>
 </p>

 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">上下默认无边距，填写数字带有单位，如 30px</em>
 
 <p>
 <label  >幻灯片数量【付费版解锁】:</label><br />
 <input type="text" size="40" readonly="readonly" />
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版此模块可作为幻灯片展示，输入数字可上传多个幻灯片，付费版解锁可获取。<a target="_blank" href="https://www.themepark.com.cn/ydgcwoocommercegjzt.html">商城高级版本</a>  <a target="_blank" href="https://www.themepark.com.cn/ydgcwordpressqyzt.html">企业版</a></em>
 </p>
 
<?php 	$x=1;  ?>
<div  class="btnsss"  style=" padding:10px 2%; background:#f0f0f0; width:95%; border:solid 1px #ccc; margin:10px 0; overflow:hidden; cursor:pointer;">
<img style="max-height: 20px; width: auto; float: left; margin-right: 5px;" src="<?php echo ${'img_pic'.$x} ; ?>" /><strong style="float:left; ">第<?php echo $x+1; ?>张图片</strong>

<span style="float:right;">+展开</span>
</div>	
<div class="searchbox" style="display:block; background:#f0f0f0; width:96%; padding:2%;">

<p>
 <label  for="<?php echo $this->get_field_id('title'.$x); ?>">标题:</label><br />
 <input type="text" size="40" value="<?php echo ${'title'.$x} ; ?>" name="<?php echo $this->get_field_name('title'.$x); ?>" id="<?php echo $this->get_field_id('title'.$x); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">输入标题，标题将以粗体字显示</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('title2'.$x); ?>">小标题:</label><br />
 <input type="text" size="40" value="<?php echo ${'title2'.$x} ; ?>" name="<?php echo $this->get_field_name('title2'.$x); ?>" id="<?php echo $this->get_field_id('title2'.$x); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">小标题在标题的右上角显示</em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('texts'.$x); ?>">文字描述</label><br />
<textarea style="width:96%" id="<?php echo $this->get_field_id('texts'.$x); ?>" name="<?php echo $this->get_field_name('texts'.$x); ?>"cols="52" rows="4" ><?php echo stripslashes(${'texts'.$x}); ?></textarea> 
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">支持自动换行</em>
</p>

	
<p>
 <label  for="<?php echo $this->get_field_id('btn_link'.$x); ?>">文字链接:</label><br />
 <input type="text" size="40" value="<?php echo ${'btn_link'.$x} ; ?>" name="<?php echo $this->get_field_name('btn_link'.$x); ?>" id="<?php echo $this->get_field_id('btn_link'.$x); ?>"/>

</p>	
<p>
 <label  for="<?php echo $this->get_field_id('title_margin'.$x); ?>">标题距离顶部边距:</label><br />
 <input type="text" size="40" value="<?php echo  ${'title_margin'.$x} ; ?>" name="<?php echo $this->get_field_name('title_margin'.$x); ?>" id="<?php echo $this->get_field_id('title_margin'.$x); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">输入带有单位的数字。如50px,或者20%</em>
</p>

 <p>
<label for="<?php echo $this->get_field_id('color'.$x); ?>">文字颜色(默认白色)</label>
		<input type="text" size="40" value="<?php echo  ${'color'.$x}; ?>" name="<?php echo $this->get_field_name('color'.$x); ?>" id="<?php echo $this->get_field_id('color'.$x); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">请填写色值如#fffff</em>	

</p>
<p>
<?php if($bac_imgage){echo '<img style="width:70px; height: auto;" src="'.chact_url_http($bac_imgage).'"/>'; } ?><br>
 <label  for="<?php echo $this->get_field_id('bac_imgage'.$x); ?>">模块背景图片(pc:宽度1920，高度与自定义相同):</label><br />
 <input type="text" size="40" value="<?php echo  ${'bac_imgage'.$x}; ?>" name="<?php echo $this->get_field_name('bac_imgage'.$x); ?>" id="<?php echo $this->get_field_id('bac_imgage'.$x); ?>"/>
  <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
</p>


<p>
<?php if($bac_imgage){echo '<img style="width:70px; height: auto;" src="'.chact_url_http($bac_imgage2).'"/>'; } ?><br>
 <label  for="<?php echo $this->get_field_id('bac_imgage2'.$x); ?>">模块背景图片:（手机：宽度768，高度保持一致即可）</label><br />
 <input type="text" size="40" value="<?php echo  ${'bac_imgage2'.$x}; ?>" name="<?php echo $this->get_field_name('bac_imgage2'.$x); ?>" id="<?php echo $this->get_field_id('bac_imgage2'.$x); ?>"/>
  <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
</p>

<p>
 <label >模块背景视频【付费版解锁】:</label><br />
 <input type="text" size="40" readonly="readonly"/>
  <a id="ashu_upload" class="button" href="#">上传</a>
  <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">付费版支持视频背景</em>
</p>

</div>




	



<?php
										  }
		
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
		$bac_imgages='';
		
		
	
$x=1; 
		
		 ${'title'.$x}= apply_filters( 'title'.$x, empty($instance['title'.$x]) ? __('') : $instance['title'.$x]);
		 ${'title2'.$x}= apply_filters('title2'.$x, empty($instance['title2'.$x]) ? __('') : $instance['title2'.$x]);
		 ${'texts'.$x}= apply_filters('texts'.$x, empty($instance['texts'.$x]) ? __('') : $instance['texts'.$x]);
		
		 ${'bac_imgage'.$x}=apply_filters('bac_imgage'.$x, empty($instance['bac_imgage'.$x]) ? __('') : $instance['bac_imgage'.$x]);
	     ${'bac_imgage2'.$x}=apply_filters('bac_imgage2'.$x, empty($instance['bac_imgage2'.$x]) ? __('') : $instance['bac_imgage2'.$x]);
		
	     ${'btn_link'.$x}= apply_filters('btn_link'.$x, empty($instance['btn_link'.$x]) ? __('') : $instance['btn_link'.$x]);
	     ${'title_margin'.$x}= apply_filters('title_margin'.$x, empty($instance['title_margin'.$x]) ? __('') : $instance['title_margin'.$x]);
	  ${'color'.$x}= apply_filters('color'.$x, empty($instance['color'.$x]) ? __('') : $instance['color'.$x]);

		
		
		
		
	   
		$top= apply_filters('top', empty($instance['top']) ? __('') : $instance['top']);
		
		$height= apply_filters('height', empty($instance['height']) ? __('') : $instance['height']);
         
		
	   
		
		 $margin_up=apply_filters('margin_up', empty($instance['margin_up']) ? __('') : $instance['margin_up']);
		 $margin_dwon=apply_filters('margin_dwon', empty($instance['margin_dwon']) ? __('') : $instance['margin_dwon']);
		 $seo_out1=apply_filters('seo_out1', empty($instance['seo_out1']) ? __('') : $instance['seo_out1']);
	     $titleseo=  apply_filters('titleseo', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
		
		if($margin_up||$margin_dwon||$height){$marginss ='padding:'.$margin_up.' 0 '.$margin_dwon.' 0;height:'.$height.'px;';}
		
		if($margin_up||$margin_dwo||$height){
			$margins ='style="'.$marginss.'"';}
		$margins2='style="height:'.$height.'px;"';
		
		
		?>

<?php if($seo_out1){echo '<section id="top_video"  '.$margins.'>';}else{echo ' <div id="top_video" '.$margins.'>';} ?>  


<?php 


		
		
		if( ${'title_margin'.$x}){$title_margins='style="padding-top:'. ${'title_margin'.$x}.'"';}
		if( ${'color'.$x}){$colors='style="color:'. ${'color'.$x}.'"';}								 
?>


	<a <?php if(${'btn_link'.$x}){ ?>href="<?php echo ${'btn_link'.$x}; ?>" target="_blank" <?php } ?>class="top_video_in" <?php echo $title_margins; ?>>
	
	<?php if(${'title'.$x}){ ?>

	<?php if($titleseo){echo '<'.$titleseo.'  '.$colors.'class="top_video_title">';}else{echo '<div  '.$colors.' class="top_video_title">';} ?>
		<?php if(${'title2'.$x}){  ?> <div <?php echo  $colors; ?> class="top_video_title2"><?php echo ${'title2'.$x}; ?></div><?php } ?>
	<?php echo ${'title'.$x} ; ?> 
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
	<?php } ?>
	<?php if(${'texts'.$x}){  ?> <p <?php echo  $colors; ?>><?php echo  str_replace("\r\n","<br />", ${'texts'.$x});; ?></p><?php } ?>
	<?php if($top){ ?>
	<div class="top_video_gundong">
	<div class="gdong1"></div>
	<div class="gdong2"></div>
   <div class="gdong3"></div>
	
    </div>
    <?php } ?>
	</a>
	<?php if(${'bac_imgage2'.$x}){echo '<img class="move_img swiper-lazy" data-src="'.chact_url_http(${'bac_imgage2'.$x}).'" alt="'.${'title'.$x}.'"/>';} ?>
	<?php $lazyclass="";$backse='style="background-image: url('.chact_url_http(${'bac_imgage'.$x}).');"'; ?>

<div  class="top_video_bac <?php echo $lazyclass; ?>" <?php if(${'bac_imgage'.$x}){echo $backse;} ?>>


</div>

 <?php 
		
		
if($seo_out1){echo '</section>';}else{echo '</div>';}?>



<?php
	}
}
register_widget('top_video');
?>