<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="keywords" content="CBCI Card"/>
<meta name="description" content="CBCI Card"/> 
<link rel="shortcut icon" href=""<?php bloginfo("template_url"); ?>/images/favicon.ico" type="image/x-icon">
<link href="<?php bloginfo("template_url"); ?>/css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo("template_url"); ?>/css/advanced.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo("template_url"); ?>/css/camera.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,300italic,300,400italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- menu -->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/tinydropdown.js"></script>
<!--latest news -->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/contentslider.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript">
var $x = jQuery.noConflict();
    $x(function () {
        $x('#js-news').ticker();
    });
</script>
<!-- news & events Js -->
<script src="<?php bloginfo("template_url"); ?>/js/jquery-latest.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
var $d = jQuery.noConflict();
$d(function() {
	$d(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>

<!-- photo change js -->
<script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/camera.min.js'></script> 
     <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/camera.js'></script>   
    <script>
	var $s = jQuery.noConflict();
		$s(function(){
			
			$s('#camera_wrap_1').camera({
				thumbnails: true
			});

			$s('#camera_wrap_2').camera({
				height: '384px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>


		<!--Slider CSS-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style/advanced.css">
		<!--jQuery-->
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-u.js"></script>
		<!--Slider JS-->
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery011.js"></script>
        <!--Initialize-->
		<script type="text/javascript">
			$(document).ready(function() {
				//Slider init JS
				$(".advanced-slider").advancedSlider({
					pauseRollOver:true
				});
				
				//Theme change button actions - Remove these codes
				$(".thumbbutton").click(function() {
					var oldTheme = $(".selector .selected").attr("rel");
					$(".selector .selected").removeClass("selected");
					if (!$(this).hasClass("selected")) {
						$(this).addClass("selected");
						var currentTheme = $(this).attr("rel");
						var url = $("link.theme").attr("href");
						url = url.replace(oldTheme, currentTheme);
						$("link.theme").attr("href", url);
						if (currentTheme=="dark") {
							$(".advanced-slider-arrows .next").css("right", "55px");
						} else {
							$(".advanced-slider-arrows .next").css("right", "24px");	
						}
					}
				});
			});		
		</script>
		<?php wp_head(); ?>
</head>

<body>
<!-- top panel --->
<div id="top-wrapper">

<div id="topheader">

<div class="topmenu">
 <?php
		$defaults = array('menu' => 'top','after' => '',
		'items_wrap' => '<ul>%3$s</ul>',
		'depth' => 0,
		'container' => '',
		'walker'    => new MenuList
			);
		wp_nav_menu($defaults);		
		?>           
<!--<ul>
<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/donate.png"/></a></li>
<li><a href="#">Ministries</a></li>
<li><a href="#">Resources</a></li>
<li><a href="#">Announcements</a></li>
<li><a href="#">News&nbsp;&&nbsp;Events</a></li>


</ul>!-->
</div>

<div class="social-links"><ul>

<li><a href="<?php echo of_get_option('snb_socil_link');?>"><img src="<?php bloginfo("template_url"); ?>/images/social1.png" alt=""></a></li>
<li><a href="<?php echo of_get_option('snb_twitter_link');?>"><img src="<?php bloginfo("template_url"); ?>/images/social2.png" alt=""></a></li>
<li><a href="<?php echo of_get_option('snb_facebook_link');?>"><img src="<?php bloginfo("template_url"); ?>/images/social3.png" alt=""></a></li>
<li><a href="<?php echo of_get_option('snb_youtube_link');?>"><img src="<?php bloginfo("template_url"); ?>/images/social4.png" alt=""></a></li>
<li><a href="<?php echo of_get_option('snb_linked_link');?>"><img src="<?php bloginfo("template_url"); ?>/images/social5.png" alt=""></a></li>
</ul></div>

</div>
</div>
<!-- header starts here -->
<div id="header-panel">
<div id="header">
<div id="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo("template_url"); ?>/images/logo.jpg" alt=""></a></div>
<div class="toplinks">

<?php
		$defaults = array('menu' => 'linksmenu','after' => '',
		'items_wrap' => '<ul>%3$s</ul>',
		'depth' => 0,
		'container' => '',
		'walker'    => new MenuList
			);
		wp_nav_menu($defaults);		
		?>      

</div>
<div id="header-img">
 <div id="search-panel">
 <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
	
		<input type="text" class="srch-input" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" class="srch-btn" value="" />
	</div>
</form>
 
 
</div>
</div>
</div>
<!-- menu starts here -->
<div id="menucover">
 <div id="menu-container">
<div id='cssmenu'>
<?php
		$defaults = array('menu' => 'main','after' => '',
		'items_wrap' => '<ul>%3$s</ul>',
		'depth' => 0,
		'container' => '',
		'walker'    => new MenuList
			);
		wp_nav_menu($defaults);		
		?>      

<!--<ul>
	<li class='current'><a href='#' class="current"><span>Home</span></a></li>
    <li class="has-sub">                <a href='#'>
                <span>About Us</span></a>
                                <ul>
                    <li class="has-sub">                        
                        <a href='#'>Introduction</a>
                         <ul><li> <a href='#'>Catholic Health Network</a></li>
                             <li> <a href='#'>Revised Nation TB Control Programme</a></li>
                         </ul>
                    </li>
                     <li ><a href='#'>Office Bearers</a></li>
                     <li><a href='#'>Our Vision & Mission</a></li>	
                     <li><a href='#'>Message of Executive Directors</a></li>		 
                </ul>
            </li>
            
        <li class="has-sub">                <a href='#'>
                <span>Careers</span></a>
                                <ul>
                    <li>                        
                        <a href='#'>
                        Internship</a>                    </li>
                    <li >                        
                        <a href='#'>
                        Job Opportunities</a>                    </li>
                </ul>
            </li>
        <li class="last">                <a href='#'>
                <span>Get Involved</span></a>            </li>
        <li class="has-sub">                <a href='#'>
                <span>Interventions</span></a>
                <ul><li  class="has-sub" ><a href='#'>Project</a>
                    <ul><li ><a href='#'>RCC Success Stories</a></li>
                        <li><a href='#'>Axshya Success Stories</a></li>
                    </ul>
                </li>
                     <li><a href='#'>Success Stories</a></li>
                     </ul>
            </li>
        <li class="has-sub">                <a href='#'>
                <span>Projects</span></a>
                                <ul>
                    <li  class="has-sub" >                        
                        <a href='#'>
                        Axshya</a>
                        <ul><li><a href='#'>Introduction</a></li>
                        <li><a href='#'>Human Resource</a></li>
                        <li><a href='#'>Maps of implementing Districts</a></li>
                        <li><a href='#'>Activities of Project Axshya</a></li>
                        <li><a href='#'>innovations</a></li>
                        <li><a href='#'>Axshya Photogallery</a></li>
                        <li><a href='#'>Model Axshya Village</a></li>
                        <li><a href='#'>Annual Report-2013</a></li>
                        </ul>
                    </li>
                    <li class="last">                        
                        <a href='#'>
                        Global Fund RCC Project</a>                    </li>
                </ul>
            </li>
        <li class="last">                <a href='#'>
                <span>Gallery</span></a>            </li>
        <li class="last">                <a href='#'>
                <span>Contact Us</span></a>            </li>
</ul>!-->
</div>
 </div>
</div>
