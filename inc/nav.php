<?php $mytheme_top_languge_title=get_themepark_option("mytheme_top_languge_title",'语言选择'); $mytheme_top_languge_nav=get_option("mytheme_top_languge_nav"); ?>
<nav class="header_pic_nav">
<?php if($mytheme_top_languge_nav){ ?><li class="language_btn_m"><a><div class="nave_spaen"><i></i><?php echo $mytheme_top_languge_title ?></div></a></li><?php } ?>
<?php   wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'theme_location' => 'header-menu','items_wrap' => '%3$s' ) );?>
<div class="header_height"></div>
</nav>
          
          
       