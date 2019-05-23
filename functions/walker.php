<?php 

 class  header_menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$imgclasss=$attributes=$images_full=$imgclass='';
		$class_names = $value = ' ';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		if(!$item->attr_title){$imgclass='class="imgclass"';$imgclasss=' noft';}
	
		$class_names = ' class="' . esc_attr( $class_names ) .$imgclasss. '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		
		if($item->url!='#' ){$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';}
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
       if($item->attr_title =="1"){$images_full='class="images_fullss"';}
		$item_output = $args->before;
		$item_output .= '<a '. $attributes.$imgclass.'>';
		$item_output .= $args->link_before . $args->link_after;
		 if(! empty( $item->description )){$item_output .= '<figure><img '.$images_full.' src=' .'"' . chact_url_http($item->description) .'"'.'alt="'.  apply_filters( 'the_title', $item->title, $item->ID ) . '"/><figcaption>'. apply_filters( 'the_title', $item->title, $item->ID ).'</figcaption></figure>';}
		if($item->attr_title !="1"){
		 $item_output .=  '<div class="nave_spaen"><div>'. apply_filters( 'the_title', $item->title, $item->ID ).'</div>';
		 if($item->attr_title){  $item_output .=  '<p>'.  esc_attr( $item->attr_title ).'</p>';}
		$item_output .= '</div>';}
		$item_output .= '</a>';
		$item_output .= '</a><i class="fa"></i>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
};

class pic_full extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$item_output='';
		$class_names = $value =	$imgclasss=$attributes=$images_full=$mrfull=$onetitle=$urlss=' ';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		if($item->title=="1"){ $mrfull="adpic";};
		if(! $item->description&&!$item->attr_title){ $onetitle='onetitle';}
		$class_names = ' class="' . esc_attr( $class_names ) .' '.$mrfull.' '.$onetitle.' "';
        
		$output .= $indent . '<div class="swiper-slide">';
     
		
		if($item->url!="#"){$urlss= ' href="' . esc_attr( $item->url ).'"' ;}
		$attributes .= ! empty( $item->url ) ?  $urlss  : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		
		$item_output = $args->before;
		$bage='style="background:center url('.$item->description.')"';
		$item_output .= '<a'. $attributes.' '.$bage.'>';
		$item_output .= $args->link_before . $args->link_after;
		$imgs_alt= $item->attr_title;
		
		 $item_output .= '<img src=' .'"' . chact_url_http($item->description) .'"'.'alt="'. $imgs_alt . '"/>';
		
		$item_output .= '</a>';
		
		$item_output .= '</div>';

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
};




class text_nav extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$item_output='';
		$class_names = $value =	$imgclasss=$attributes=$images_full=$mrfull=$onetitle=$urlss=' ';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		if($item->title=="1"){ $mrfull="adpic";};
		if(! $item->description&&!$item->attr_title){ $onetitle='onetitle';}
		$class_names = ' class="' . esc_attr( $class_names ) .' '.$mrfull.' '.$onetitle.' "';
        
	
     
		
		if($item->url!="#"){$urlss= ' href="' . esc_attr( $item->url ).'"' ;}
		$attributes .= ! empty( $item->url ) ?  $urlss  : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		

		
		$item_output .= '<a'. $attributes.'>';
		
		$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= '</a>';
		


		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
};