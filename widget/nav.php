<?php 
class nav extends WP_Widget {

	function __construct()
	{
		$widget_ops = array('classname'=>'nav','description' => get_bloginfo('template_url').'/images/xuanxiang/10.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::__construct($id_base="nav",$name='折叠菜单模块[侧边栏专用]',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
         $title= esc_attr($instance['title']);

	     $nav = esc_attr($instance['nav']);
	    
		
	     $bac_color=esc_attr($instance['bac_color']);
		 $bac_imgage=esc_attr($instance['bac_imgage']);
		 $detects=esc_attr($instance['detects']);
		 $titleseo= esc_attr($instance['titleseo']);
		 $text_color=esc_attr($instance['text_color']);
		 $seo_out1=esc_attr($instance['seo_out1']);
		 $fixed=esc_attr($instance['fixed']);  
	?>

<br />
<p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题:</label><br />
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
 
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
 <label  for="<?php echo $this->get_field_id('seo_out1'); ?>">外层标签使用section</label>
 <input type="checkbox" <?php if($seo_out1=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out1'); ?>" id="<?php echo $this->get_field_id('seo_out1'); ?>"/>
 </p>


<p>   
<?php 	$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) ); ?>
   <label for="<?php echo $this->get_field_id('nav'); ?>">选择一个菜单</label>
			<select id="<?php echo $this->get_field_id('nav'); ?>" name="<?php echo $this->get_field_name('nav'); ?>">
				<option value="0"><?php _e( '&mdash; Select &mdash;' ) ?></option>
		<?php
			foreach ( $menus as $menu ) {
				echo '<option value="' . $menu->term_id . '"'
					. selected( $nav, $menu->term_id, false )
					. '>'. esc_html( $menu->name ) . '</option>';
			}
		?>
			</select>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">图片和文字都是通过菜单进行输出的，你需要在外观--菜单中新建一个全新的菜单，并在上面的选项指定他。【注意，在上传图片时，请务必保证所有的图片尺寸一致。】</em>
<?php if($nav){ ?>
<a class="button-secondary" target="_blank"  href="<?php echo get_admin_url().'nav-menus.php?action=edit&menu='.$nav; ?>">点击编辑菜单</a>
<?php }else{?>
<a class="button-secondary" target="_blank"  href="<?php echo get_admin_url().'nav-menus.php'; ?>">上面选择一个菜单或者创建菜单</a>
<?php } ?>
</p>

 
 
<p>
 <label  for="<?php echo $this->get_field_id('fixed'); ?>">是否悬浮</label>
 <input type="checkbox" <?php if($fixed=="fixed_m"){echo 'checked="checked"';} ?>size="40" value="fixed_m" name="<?php echo $this->get_field_name('fixed'); ?>" id="<?php echo $this->get_field_id('fixed'); ?>"/>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">悬浮功能可放入30%宽度布局和侧边栏最后，每一个位置只能放一个悬浮模块，移动设备和70%布局无效(注意：悬浮模块浏览器到设置的布局区域最底部时出现，在顶部不显示)</em>

 </p>

 

<p>
<label for="<?php echo $this->get_field_id('detects'); ?>">设备识别</label>
			<select id="<?php echo $this->get_field_id('detects'); ?>" name="<?php echo $this->get_field_name('detects'); ?>">
				<option <?php if($detects==''){echo 'selected="selected"';} ?>value="">移动端和PC端都显示</option>
                <option <?php if($detects=='PcOnly'){echo 'selected="selected"';} ?>value="PcOnly">只显示在PC端</option>
                <option <?php if($detects=='MovePnly'){echo 'selected="selected"';} ?> value="MovePnly">只显示在移动端</option>

</select>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">通过这个选项，你可以让某些模块只显示在某一个设备类型上，或者都显示，你可以在自定义--初始化中，设置输出的技术规则，响应式适配或者是代码适配</em>
</p>







 

<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	   
	    $bac_imgages=$text_color=$detects2='';
        $nav = apply_filters('nav', empty($instance['nav']) ? __('') : $instance['nav']);
		$speed=apply_filters('speed', empty($instance['speed']) ? __('') : $instance['speed']);
	    $bac_color=apply_filters('bac_color', empty($instance['bac_color']) ? __('') : $instance['bac_color']);
		$title=apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		
		$detects=apply_filters('detects', empty($instance['detects']) ? __('') : $instance['detects']);
	 
		$seo_out1=apply_filters('seo_out1', empty($instance['seo_out1']) ? __('') : $instance['seo_out1']);
		$titleseo=apply_filters('seo_out1', empty($instance['titleseo']) ? __('') : $instance['titleseo']);
        $fixed=apply_filters('show', empty($instance['fixed']) ? __('0') : $instance['fixed']);
		
		 if($detects){$detects2= 'id="'.$detects.'"';}
		
		?>
<?php if($seo_out1){echo '<section class="modle_box index_nav '.$detects.' '.$text_color.' '.$fixed.'" '.$detects2.'>';}else{echo ' <div class="nav modle_box'.$detects.' '.$text_color.' '.$fixed.'" '.$detects2.'>';} ?>    

<div class="modle_box_title">
<?php if($titleseo){echo '<'.$titleseo.'  class="mantitle">';}else{echo '<div  class="mantitle">';} ?>
<?php echo $title ?>
<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>



</div>
<ul class="index_nav_ul">
<?php   wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'menu' => $nav ,'items_wrap' => '%3$s' ) ); ?>
</ul>

<?php if($seo_out1){echo '</section>';}else{echo '</div>';} ?>


        <?php
	}
}
register_widget('nav');
?>