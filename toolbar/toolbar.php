<?php include(dirname(dirname(__FILE__))."/options/data_cache.php");$thiscss='';; 


?>
<div class="toolbar">
<div class="toolbar_line">
  <div class="toolbar_line_in">
  <?php  if(get_option('wp_user_dashboard')){ ?>
   <a <?php  if(!is_page(get_option('wp_user_dashboard'))){ echo ' href="'.get_permalink( get_option('wp_user_dashboard') ).'"';}else{$thiscss='s_account_page';} ?> class="my_tool_box mycenter_tool <?php echo $thiscss; ?>"><i></i><span class="pc_tool"><?php echo $mytheme_toolbar_t1; ?></span></a>
  <?php } ?>
  
  
   <?php if($mytheme_toolbar_tm2!='1'){ ?> <a  class="my_tool_box tool_cat_btn"><i></i></a><?php } ?>
   
   
       <?php if($mytheme_toolbar_tm3=='1'&&$mytheme_toolbar_t4=='1'){}else{
		   
		   if($mytheme_toolbar_tm3=='1'){ $class_top='id="PcOnly"';}elseif($mytheme_toolbar_t4=='1'){$class_top='id="MovePnly"';}
		   ?>
    <div class="my_tool_box mysever_tool"<?php echo $class_top; ?> >
     <i></i>
    <span id="severs_tool" class="all_tool">
    <p class="severs_tool_head"><?php echo $mytheme_toolbar_t4; ?><a class="close_severs_tool">x</a></p>
    <div class="severs_tool_qq">
   
   <?php echo $mytheme_qq_code;?>
   
   
    <a  class="toobar_tell_btn" href="tel://<?php echo $mytheme_toolbar_tel_b2; ?>"><?php echo $mytheme_toolbar_tel_b. $mytheme_toolbar_tel_b2; ?></a>
 <a class="toobar_tell_btn" href="mailto:<?php echo $mytheme_toolbar_tel_b4; ?>"><?php echo $mytheme_toolbar_tel_b3; ?>：<br /><?php echo $mytheme_toolbar_tel_b4; ?></a>
   
    </div>
  

  <p class="severs_tool_footer">
   
<?php echo $mytheme_toolbar_sm_text; ?>

    
    </p>
    </span>
  <?php if($mytheme_toolbar_tm3!=1){?> <span class="move_tool"><?php echo $mytheme_toolbar_tm3; ?></span><?php } ?>
    </div>
    <?php };?>
    
    
    <?php if($mytheme_toolbar_wechat){
		$mytheme_toolbar_tm6=get_themepark_option('mytheme_toolbar_tm6','微信');
		if($mytheme_toolbar_tm6=='1'&&$mytheme_toolbar_t5=='1'){}else{
		   
		   if($mytheme_toolbar_tm6=='1'){ $class_top2='id="PcOnly"';}elseif($mytheme_toolbar_t6=='1'){$class_top2='id="MovePnly"';}}
		
		 ?>
    <a class="my_tool_box myweixin_tool"<?php echo $class_top2; ?>>  
     <i></i>
 <?php if($mytheme_toolbar_tm6!='1'){ ?> <span class="move_tool"><?php echo $mytheme_toolbar_tm6; ?></span><?php } ?>
    <span id="severs_tool"  class="all_tool">
    <p class="severs_tool_head"><?php echo $mytheme_toolbar_t5; ?> <span class="close_severs_tool">x</span></p>
    <div class="weixin_img"><img src="<?php echo $mytheme_toolbar_wechat; ?>" /></div>
    </span>
    </a>
    <?php } ?>
    
    
    
     <?php
	 $mytheme_toolbar_zdy_b_1=get_option('mytheme_toolbar_zdy_b_1');
	  $mytheme_toolbar_zdy_p_1=get_option('mytheme_toolbar_zdy_p_1');
	   $mytheme_toolbar_zdy_u_1=get_option('mytheme_toolbar_zdy_u_1');
	 
	  if($mytheme_toolbar_zdy_b_1){ ?> <a  class="my_tool_box" href="<?php echo $mytheme_toolbar_zdy_u_1; ?>">
      <i id="MovePnly" <?php if($mytheme_toolbar_zdy_p_1){echo 'style=" background:url('.$mytheme_toolbar_zdy_p_1.') no-repeat center bottom;"';} ?> ></i>
      <i id="PcOnly" <?php if($mytheme_toolbar_zdy_p_1){echo 'style=" background:url('.$mytheme_toolbar_zdy_p_1.') no-repeat center;"';} ?> ></i>

      <span class="move_tool"><?php echo  $mytheme_toolbar_zdy_b_1; ?></span>
      <span class="pc_tool"><?php echo  $mytheme_toolbar_zdy_b_1; ?></span>
      
      </a><?php } ?>
    
    
        <?php 
		$mytheme_toolbar_tm5=get_themepark_option('mytheme_toolbar_tm5','顶部');
		if($mytheme_toolbar_tm5 =='1'&& $mytheme_toolbar_t6=='1'){}else{
		if(get_themepark_option('mytheme_toolbar_tm5','顶部')=='1'){ $class_top3='id="PcOnly"';}elseif($mytheme_toolbar_t6=='1'){$class_top3='id="MovePnly"';}?> 
    <a class="my_tool_box mytop_tool"<?php echo $class_top3; ?> href="#top">
              <i></i>
     
    <?php if(get_themepark_option('mytheme_toolbar_tm5','顶部')!='1'){ ?> <span class=" move_tool "><?php echo  get_themepark_option('mytheme_toolbar_tm5','顶部'); ?></span><?php } ?>
    
    <span class="pc_tool"><?php echo $mytheme_toolbar_t6; ?></span></a> <?php  }?>  
   </div>
</div>

<div  class="my_tool_fox_hidden">




</div>

</div>