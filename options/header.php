<?php
function mytheme_header_options($wp_customize){
		$wp_customize->add_section('mytheme_header_options', array(
        'title'    => __('网站顶部设置', 'mytheme'),
        'description' => '通过这个选项设置网站顶部的样式和内容
		</br> </br>需要帮助？<a target="_blank" href="https://www.themepark.com.cn/wkscwoocommercegjztspjc.html">[观看视频教程]</a>',
        'priority' => 60,
    ));

	class Ari_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {

 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value()); ?></textarea>
  </label>
  <p><?php echo esc_html( $this->description); ?></p>
<?php 
  }
}



class Ari_Customize_select_nav_Control extends WP_Customize_Control {
  public $type = 'select_nav';
  public function render_content() {

 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
   
    
    <select style="width:100%;" <?php $this->link(); ?>>
			<option value="0">请选择一个菜单</option>
		<?php
		$big_pic_nav= $this->value();
		$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );
			foreach ( $menus as $menu ) {
				echo '<option value="' . $menu->term_id . '"'
					. selected( $big_pic_nav, $menu->term_id, false )
					. '>'. esc_html( $menu->name ) . '</option>';
			}
		?>
			</select> 
    
    
    
  </label>
  <p><?php 
  if(!$big_pic_nav){$big_pic_nav=0;};
  $url='href="'.admin_url().'/nav-menus.php?action=edit&menu='.$big_pic_nav.'"';
  echo esc_html( $this->description); echo'<br><a '.$url.' class="button" >进入菜单进行编辑或者创建</a>';?></p>
<?php 
  }
}

	
class Ari_Customize_select_cat extends WP_Customize_Control {
  public $type = 'select_cat';
  public function render_content() {
$cat_ids=esc_textarea( $this->value()); 
 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
   

             <select <?php $this->link(); ?> >
              <option value=''<?php if ($cat_ids == "" ) {echo "selected='selected'";}?> >请选择</option>
             <?php 
			
		$cats = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));
		foreach( $cats AS $catr ) { 
		 $cat_id=$catr->term_id;
		  $cat_name=get_term($cat_id)->name;
		?>
       
			<option 
				value='<?php echo  $cat_id; ?>'
				<?php
					if ( $cat_ids == $cat_id ) {
						echo "selected='selected'";
					}
				?>><?php echo $cat_name; ?></option>
		<?php } 
				 
				 	$cats2 = get_terms( array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
));
		foreach( $cats2 AS $catr ) { 
		 $cat_id=$catr->term_id;
		  $cat_name=get_term($cat_id)->name;
		?>
       
			<option 
				value='<?php echo  $cat_id; ?>'
				<?php
					if ( $cat_ids == $cat_id ) {
						echo "selected='selected'";
					}
				?>><?php echo $cat_name; ?></option>
		<?php } ?>
				 
			
		
		
		
   
	</select></label>
  <p><?php echo esc_html( $this->description); ?></p>
<?php 
  }
}
		
	
	
	
class Ari_Customize_select_pages extends WP_Customize_Control {
  public $type = 'select_pages';
  public function render_content() {
$page_ids=esc_textarea( $this->value()); 
 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
   

             <select <?php $this->link(); ?> >
              <option value=''<?php if ($page_ids == "" ) {echo "selected='selected'";}?> >请选择</option>
             <?php 
			
		$pages = get_pages();
		foreach( $pages AS $page ) { 
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		?>
       
			<option 
				value='<?php echo  $page_id; ?>'
				<?php
					if ( $page_ids == $page_id ) {
						echo "selected='selected'";
					}
				?>><?php echo $page_name; ?></option>
		<?php } ?>
   
	</select></label>
  <p><?php echo esc_html( $this->description); ?></p>
<?php 
  }
}



class Ari_Customize_fengexian_Control extends WP_Customize_Control {
  public $type = 'fengexian';
  public function render_content() {

 ?>
 <div style="width:100%; background:#333; margin:15px 0; height:1px;"></div>
  
<?php 
  }
}


$wp_customize->add_setting('mytheme_header_donghua', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));	
 $wp_customize->add_control('mytheme_header_donghua', array(
        'label'      => __('首页动画模块开关', 'mytheme_header_donghua'),
          'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_header_donghua',
		 
		'type'    => 'select',
		 'choices'    => array(
            '' => '默认开启',
            'move_white' => '关闭首页动画',
			
          
        ),
    )); 
	



$wp_customize->add_setting('mytheme_top_languge_title', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( 'mytheme_top_languge_title', array(
         'label'      => __('顶部左侧广告语', 'mytheme_top_languge_title'),
          'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_top_languge_title',
         'description' => '不填写则不显示',
      ));
	

 $wp_customize->add_setting('mytheme_top_languge_nav', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_nav_Control($wp_customize, 'mytheme_top_languge_nav', array(
        'label'    => __('顶部右侧菜单', 'mytheme_top_languge_nav'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_top_languge_nav',
		'description' => '在登录注册之后',
     )
    )); 





  $wp_customize->add_setting('mytheme_logo', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo', array(
        'label'    => __('电脑版本logo上传[尺寸高度：79px，宽度不要超过200px]', 'mytheme_logo'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo',
     )
    )); 
	
	
 $wp_customize->add_setting('mytheme_logo2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo2', array(
        'label'    => __('手机版本logo上传[尺寸高度：70px*70px]', 'mytheme_logo2'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo2',
     )
    )); 	
//----------------------------logo------------------------------------------------	
	
 
	
	
	
	
	
	
	
 
	  
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
//----------------------------header------------------------------------------------		

	
	
   
//----------------------------pc header------------------------------------------------	
	 


//----------------------------pc nav------------------------------------------------	


	
$wp_customize->add_setting('mytheme_header_title', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_header_title', array(
        'label'    => __('导航标题颜色', 'mytheme_header_title'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_header_title',
	
    )));	
	
$wp_customize->add_setting('mytheme_header_icon_color', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_header_icon_color', array(
        'label'    => __('顶部搜索按钮背景颜色', 'mytheme_header_icon_color'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_header_icon_color',
	
    )));	
	
	
$wp_customize->add_setting('mytheme_header_title_hover', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_header_title_hover', array(
        'label'    => __('导航鼠标经过颜色', 'mytheme_header_title_hover'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_header_title_hover',
	
    )));	
	
	
$wp_customize->add_setting('mytheme_header_li_hover', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_header_li_hover', array(
        'label'    => __('导航鼠标经过背景颜色', 'mytheme_header_li_hover'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_header_li_hover',
	
    )));	
		

$wp_customize->add_setting('mytheme_header_li_hover2', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_header_li_hover2', array(
        'label'    => __('导航当前页面上描边颜色', 'mytheme_header_li_hover2'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_header_li_hover2',
	
    )));	
		


	$wp_customize->add_setting('mytheme_search_text', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( 'mytheme_search_text', array(
         'label'      => __('搜索提示语', 'mytheme_search_text'),
          'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_text',
         'description' => '如：请搜索',
      ));
	
	
	 $wp_customize->add_setting('mytheme_search_cat1', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_cat($wp_customize, 'mytheme_search_cat1', array(
        'label'    => __('搜索分类1', 'mytheme_search_cat1'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_cat1',
		'description' => '你可以设置5个分类应用于搜索上，用户可以点击进行切换，【这个选项不选择则是搜索全站】',
     )
    )); 

	
	
		 $wp_customize->add_setting('mytheme_search_cat2', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_cat($wp_customize, 'mytheme_search_cat2', array(
        'label'    => __('搜索分类2', 'mytheme_search_cat2'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_cat2',
		'description' => '你可以设置5个分类应用于搜索上，用户可以点击进行切换，【这个选项不选择则不显示】',
     )
    )); 

	
		 $wp_customize->add_setting('mytheme_search_cat3', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_cat($wp_customize, 'mytheme_search_cat3', array(
        'label'    => __('搜索分类3', 'mytheme_search_cat3'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_cat3',
		'description' => '你可以设置5个分类应用于搜索上，用户可以点击进行切换，【这个选项不选择则不显示】',
     )
    )); 

	
	
	
		 $wp_customize->add_setting('mytheme_search_cat4', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_cat($wp_customize, 'mytheme_search_cat4', array(
        'label'    => __('搜索分类4', 'mytheme_search_cat4'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_cat4',
		'description' => '你可以设置5个分类应用于搜索上，用户可以点击进行切换，【这个选项不选择则不显示】',
     )
    )); 

	
		 $wp_customize->add_setting('mytheme_search_cat5', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new Ari_Customize_select_cat($wp_customize, 'mytheme_search_cat5', array(
        'label'    => __('搜索分类5', 'mytheme_search_cat5'),
      'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_search_cat5',
		'description' => '你可以设置5个分类应用于搜索上，用户可以点击进行切换，【这个选项不选择则不显示】',
     )
    )); 
	
	

	
	

	 
	
 //----------------------------pc text------------------------------------------------	  
};
add_action('customize_register', 'mytheme_header_options');
?>