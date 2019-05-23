<?php 
/**
将动态生成的脚本放入footer，以防止脚本加载阻塞

**/
class load_script_in_footer
{
var $name;
var $name2;
var $id;
var $autoplay;
var $cat1;
var $effect;	
var $code;	
 public function loads_script_onfoots()
    {
        
         add_action( 'wp_footer_script', array( $this, 'load_swipers_thumbnails' ) );
    }	
public function load_swipers_thumbnails(){
	
	echo $this->code;
}	
	
 public function loads_script_onfoot()
    {
    add_action( 'wp_footer_script', array( $this, 'load_script_swiper' ) );
    }		
 public function load_script_swiper(){
	if($this->autoplay){$autoplay= 'autoplay: { delay: '.$this->autoplay.'000, stopOnLastSlide: false, disableOnInteraction: true, },';}
	  if( $this->effect){$effect='effect:"'.$this->effect.'",';};
	if($this->cat1){ 
	$pagination=" pagination: {
        el: '.pagination".$this->id."',
		   clickable: true,
   
      },";
	}
	$scripts="

 var ".$this->name.$this->id." = new Swiper('.".$this->name.$this->id." ',{ 

 speed:800,
 lazy: true,
 ".$pagination."
 
 on: {
    slideChangeTransitionStart: function(){
      $('.".$this->name2.$this->id." .active').removeClass('active')
      $('.".$this->name2.$this->id." a').eq(".$this->name.$this->id.".activeIndex).addClass('active')  
    }}
  });
   $('.".$this->name2.$this->id." a').on('touchstart mouseover',function(e){
    e.preventDefault()
    $('".$this->name2.$this->id."  .active').removeClass('active')
    $(this).addClass('active')
   ".$this->name.$this->id.".slideTo( $(this).index() )
  })
  $('.".$this->name2.$this->id."  a').mouseover(function(e){
    e.preventDefault()
  }) 
   
	";
echo  	$scripts;
	
}
	
 public function loads_images_script_onfoot()
    {
         //add your actions to the constructor!
         add_action( 'wp_footer_script', array( $this, 'load_images_script' ) );
    }	

 public function load_images_script(){
	 if( $this->effect){$effect='effect:"'.$this->effect.'",';};
	 if($this->autoplay){$autoplay= 'autoplay: { delay: '.$this->autoplay.'000, stopOnLastSlide: false, disableOnInteraction: true, },';}
	 $sctipt='
 var '.$this->name.$this->id.' = new Swiper(".'.$this->name.$this->id.' ",{ 
 speed:800,
'.$effect.'
'.$autoplay.'
 calculateHeight : true,
lazy: {
    loadPrevNext: true,
  },
	 pagination: {
        el: ".top_viedio_p_'.$this->id.'",
		clickable: true,
      }
  });
	 
	
 
	 ';
echo $sctipt;	 
	 
	 
 }
	
	
	
	}




function footer_index_script(){
	if(is_home()){
		echo "
		
$(window).scroll(function() {  
	$('.donghua').children('.index_boxs').each(function(){
	if( $(window).scrollTop() >= $(this).offset().top-650 ){
		 $(this).addClass('dong');
	}
		
		});
	
});


		";
		
	}
	
}
 add_action( 'wp_footer_script',  'footer_index_script'  );







