$(document).ready(function() {
	
$(".xiala").mouseenter(function() {$("#waper_drog_nav").fadeIn(500);});
$(".header_pic_nav li").not(".xiala").mouseenter(function() {$("#waper_drog_nav").fadeOut(500);});

	$("#waper_drog_nav_ul li.menu-item-has-children:first-child .sub-menu").fadeIn();
$("#waper_drog_nav_ul").children("li.menu-item-has-children").mouseenter(function() {
$("#waper_drog_nav_ul li").not($(this)).children(".sub-menu").hide();
$(this).children(".sub-menu").fadeIn(500);
    });

$("#waper_drog_nav").mouseleave(function() {$(this).fadeOut(500);});


$("ul#waper_drog_nav li,.header_pic_nav li,.swiper-container,.case_pic a").hover(function() {
   
        $(this).children(".sub-menu,.index_next,.index_prve,.thumbnails,#comment_pic_bottom ,.vedio_btn").stop(true, true).fadeIn("200");
    }, function() {

        $(this).children(".sub-menu,.index_next,.index_prve,.thumbnails,#comment_pic_bottom,.vedio_btn").stop(true, true).fadeOut("1000");
    });	
	
	


	

$(".my_tool_box").stop().mouseenter(function(){$(this).children("span.pc_tool,span.all_tool").delay(200).fadeIn(500);});
$(".my_tool_box").stop().mouseleave(function(){$(this).children("span.pc_tool,span.all_tool").fadeOut(0);});

	
		
	
	 $(".close_seach").click(function(){ $(".search_box_out").fadeOut(500); });	
 $(".search_box_btn").click(function(){ $(".search_box_out").fadeIn(500); });	
$(".menu_header li,.gallery_xz").hover(function() {
   
        $(this).children(".sub-menu,.index_next,.index_prve").stop(true, true).fadeIn("200");
    }, function() {

        $(this).children(".sub-menu,.index_next,.index_prve").stop(true, true).fadeOut("1000");
    });	
	
	$(".index_nav_ul li i").not(".current-menu-item").click(function() {
   
   if($(this).hasClass("opens")){
	   $(this).removeClass("opens");
   }else{
	   $(this).addClass("opens");
	   
   }

        $(this).next(".sub-menu").stop(true, true).slideToggle("1000");
    });	
	 

    $('.caseshow ul li .case_pic .thumbnails .thumbnail_swiper .swiper-wrapper').children("a").on('click', function(e){
		
	$(this).parent('.swiper-wrapper').children("a").removeClass("this");
    $(this).addClass("this");
	
    $(this).parent('.swiper-wrapper').parent('.thumbnail_swiper').parent(".thumbnails").prev("a").children("img").attr("src",$(this).children("img").attr("src"));
	 $(this).parent('.swiper-wrapper').parent('.thumbnail_swiper').parent(".thumbnails").prev("a").children("img").attr("srcset",$(this).children("img").attr("srcset"));
 $(this).parent('.swiper-wrapper').parent('.thumbnail_swiper').parent(".thumbnails").prev("a").children("img").attr("url",$(this).children("img").attr("url"));
 $(this).parent('.swiper-wrapper').parent('.thumbnail_swiper').parent(".thumbnails").prev("a").children("img").attr("alt",$(this).children("img").attr("alt"));
	

		
 
    });
	
	
	

	
		 $(".search_box_in p span").click(function(){
		 
		var placeholders= $(this).attr("placeholder");
		 var cats= $(this).attr("category");
		 var taxonomy=$(this).attr("taxonomy");
		 var post_type= $(this).attr("post_type");
		 $("#keywords").attr("placeholder",placeholders);
	    $("#category").attr("value",cats);
		  $("#category").attr("name",taxonomy);
		 $("#post_type").attr("value",post_type);
		 
		 $(".search_box_in p span").removeClass("sel");
		 $(this).addClass("sel");
	 });
	
 
	
  });
  
$(window).scroll(function() {
	
	if($("#per27").length > 0) {	
var tops=	$("#per27").offset().top ;
var heights=$("#per27").height();
    $("#per27 .fixed_m").css({
		
        width: ($("#per27").width()-($("#per27").width()*0.09))+ "px",
		padding:"10px "+($("#per27").width()*0.02)+ "px",
        left: $("#per27").offset().left + "px"
    });
	
	 
	 if ($(window).scrollTop() > tops + heights) {
        $("#per27 .fixed_m").fadeIn("300");
    } else {
        $("#per27 .fixed_m").fadeOut("300");
    }
	}
	
	 if ($(window).scrollTop() > 500) {
        $(".header").addClass("header_drop");
    } else {
      $(".header").removeClass("header_drop");
    }

	
	  });
