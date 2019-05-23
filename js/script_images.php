<?php
//焦点图动效
function images_swipers($id,$autoplay,$effect){
	?>
	
<script>	
$(function () {
	function c<?php echo $id ; ?>() {
		a<?php echo $id ; ?>.bullets.eq(0).addClass("firsrCurrent")
	}
	var b<?php echo $id ; ?>, a<?php echo $id ; ?> = new Swiper(".index_pics<?php echo $id ; ?>", {
		 <?php if($autoplay){echo 'autoplay:'.$autoplay.'000,';} ?>
		 <?php if($effect){echo 'effect:'.'"fade",';} ?>
 
		speed: 1e3,
		loop: !0,
		runCallbacksOnInit: !1,
		watchSlidesProgress: !0,
		pagination: ".paginations<?php echo $id ; ?>",
		paginationClickable: !0,
		
		nextButton: ".index_pics<?php echo $id ; ?> .index_next",
		prevButton: ".index_pics<?php echo $id ; ?> .index_prve",
		onProgress: function (a<?php echo $id ; ?>) {
			var b<?php echo $id ; ?>, c<?php echo $id ; ?>, d<?php echo $id ; ?>, e<?php echo $id ; ?>, f<?php echo $id ; ?>, g<?php echo $id ; ?>;
			for (b<?php echo $id ; ?> = 0; b<?php echo $id ; ?> < a<?php echo $id ; ?>.slides.length; b<?php echo $id ; ?>++) {
				for (c<?php echo $id ; ?> = a<?php echo $id ; ?>.slides.eq(b<?php echo $id ; ?>), d<?php echo $id ; ?> = c<?php echo $id ; ?>[0].progress, d<?php echo $id ; ?> > 0 ? (e<?php echo $id ; ?> = .9 * d<?php echo $id ; ?> * a<?php echo $id ; ?>.width, scale = 1 - .1 * d<?php echo $id ; ?>, d<?php echo $id ; ?> > 1 && (scale = .9), txtPositionX = 0, txtPositionY = 30 * d<?php echo $id ; ?> + "px") : (e<?php echo $id ; ?> = 0, scale = 1, txtPositionX = 1e3 * -d<?php echo $id ; ?> + "px", txtPositionY = 0), f<?php echo $id ; ?> = c<?php echo $id ; ?>.find(".pic_text_box"), g<?php echo $id ; ?> = 0; g<?php echo $id ; ?> < f<?php echo $id ; ?>.length; g<?php echo $id ; ?>++) f<?php echo $id ; ?>.eq(g<?php echo $id ; ?>).transform("translate3d(" + txtPositionX + "," + txtPositionY + ",0)");
				c<?php echo $id ; ?>.transform("translate3d(" + e<?php echo $id ; ?> + "px,0,0) scale(" + scale + ")")
			}
		},
		onSetTransition: function (a<?php echo $id ; ?>, b<?php echo $id ; ?>) {
			var c<?php echo $id ; ?>, d<?php echo $id ; ?>, e<?php echo $id ; ?>;
			for (c<?php echo $id ; ?> = 0; c<?php echo $id ; ?> < a<?php echo $id ; ?>.slides.length; c<?php echo $id ; ?>++)
				for (slide = a<?php echo $id ; ?>.slides.eq(c<?php echo $id ; ?>), slide.transition(b<?php echo $id ; ?>), d<?php echo $id ; ?> = slide.find(".pic_text_box"), e<?php echo $id ; ?> = 0; e<?php echo $id ; ?> < d<?php echo $id ; ?>.length; e<?php echo $id ; ?>++) d<?php echo $id ; ?>.eq(e<?php echo $id ; ?>).transition(b<?php echo $id ; ?>)
		},
		onSlideChangeStart: function (a<?php echo $id ; ?>) {
			a<?php echo $id ; ?>.autoplaying && (a<?php echo $id ; ?>.bullets.eq(a<?php echo $id ; ?>.realIndex - 1).addClass("replace"), a<?php echo $id ; ?>.bullets.eq(a<?php echo $id ; ?>.realIndex - 1).removeClass("current firsrCurrent"), a<?php echo $id ; ?>.bullets.eq(a<?php echo $id ; ?>.realIndex).addClass("current"), 0 == a<?php echo $id ; ?>.realIndex && a<?php echo $id ; ?>.bullets.removeClass("replace"))
		},
		onAutoplayStop: function (a<?php echo $id ; ?>) {
			a<?php echo $id ; ?>.$(".autoplay").removeClass("autoplay")
		}
	});
	for (b<?php echo $id ; ?> = 0; b<?php echo $id ; ?> < a<?php echo $id ; ?>.slides.length; b<?php echo $id ; ?>++) a<?php echo $id ; ?>.slides[b<?php echo $id ; ?>].style.zIndex = b<?php echo $id ; ?>;
	setTimeout(c<?php echo $id ; ?>, 1)
});
</script>	
	
<?php
}