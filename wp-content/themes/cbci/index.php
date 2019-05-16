<?php

get_header();

?>

<!-- container starts here -->

<div id="wrapper-out">

<div id="wrapper">

<div id="container">

<div id="menu-banner-panel">

<!-- banner starts here -->

<div id="banner">

<div class="fluid_container">





 

			

        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">

		

		<?php

$args = array( 'posts_per_page' => 10, 'order'=> 'Desc','author_name'=>'admin','orderby' => 'ID','post_type' => 'banner');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post ); 

  $postid = get_the_ID();

                $banner = get_field('banner');

  

  ?> 

	



	<div data-thumb="<?php echo $banner;?>" data-src="<?php echo $banner;?>">

                <div class="camera_caption fadeFromBottom">

                    <?php the_title(); ?>               </div>

            </div>

	

<?php

endforeach; 

wp_reset_postdata();

?>

            

            

        </div></div>

</div>

</div>



<!-- home contents starts here -->

<div id="homecontent-panel">



<!-- home left side starts here -->

<div id="homeLHS">

<!-- about content starts here -->

<div class="LHSbox1">

<?php

$args = array( 'posts_per_page' => 1, 'order'=> 'ASC', 'orderby' => 'title','post_type' => 'post');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post ); ?> 

	

<h3><?php the_title(); ?>   </h3>

	<?php get_the_content_limit(490, 'READ MORE'); ?>

	

<?php

endforeach; 

wp_reset_postdata();

?>

</div>

<div class="LHSbox1">

<h3>Thought Provoking Stories</h3>



<?php

$args = array( 'posts_per_page' => 3, 'order'=> 'Desc', 'orderby' => 'ID','post_type' => 'success-stories');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post ); ?> 

	

		<div id="stories">

   <h4><?php the_title(); ?></h4>

   <p>

  <?php get_the_content_limit(100, 'More'); ?></p>

 </div>

		

	

<?php

endforeach; 

wp_reset_postdata();

?>

</div>

<div class="LHSbox1">

<div class="imagegal">

<h3>Photo Gallery</h3>

<div class="home-photogallery">

<a href="photo-gallery"><img src="<?php bloginfo("template_url"); ?>/images/thumbs_1.jpg" width="305" height="160" /></a>

<?php 



?>

<!--<ul>

//[Best_Wordpress_Gallery id="3" gal_title="vidi1"]

[Best_Wordpress_Gallery id="1" gal_title="home"]

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li class="last"><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>



<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li class="last"><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

</ul>!-->

<a href="http://indiawordpressdeveloper.com/cbci/"><div class="view"><a href="photo-gallery"><img src="<?php bloginfo("template_url"); ?>/images/view.jpg"/>

</div></a>

</div></div>

<div class="videogal">

<h3>Video Gallery</h3>

<div class="cmc-video-panel">

<iframe src="//www.youtube.com/embed/MzHPiB6f-c4" frameborder="0" allowfullscreen="" style="

    height: 160px;

    width: 305px;

"></iframe>

<div class="view"><a href="#"></a><a href="videos/"><img src="http://cbcicard.org/wp-content/themes/cbci/images/view.jpg">

</a></div>

<?php

/*$args = array( 'posts_per_page' => 1, 'order'=> 'ASC', 'orderby' => 'ID','post_type' => 'videos');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post ); ?> 

	  

  <?php the_content(); ?>

		

	

<?php

endforeach; 

wp_reset_postdata();*/

?>

</div>

</div></div>







</div>

<div id="homeRHS">

<!-- news & events contents starts here -->

<h4>Upcoming Events</h4>

<div class="newspanel">

<div class="newsticker-jcarousellite">

		<ul>

		<?php

$args = array( 'posts_per_page' => 10, 'order'=> 'Desc', 'orderby' => 'ID','post_type' => 'events');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post ); 

   $postid = get_the_ID();

 $start_date = get_field('event_start_date');  

 $dates=explode("/", $start_date);

// gives 201152

$event_date=$dates[2]."-".$dates[1]."-".$dates[0];
$current_date=date( 'd-m-Y');
$curdate=strtotime($current_date);
$mydate=strtotime($event_date);
if($curdate > $mydate)
{
    
}else{



  ?> 

	

		 <li>

				<div class="thumbnail">

                  <div id="month_outer">

                     <div id="month"><?php echo date("M", strtotime($start_date));?> </div>

                     <div id="date"><?php echo $dates[2];?></div>

                   </div>

                </div>

				<div class="info">

					<a href="<?php echo get_permalink(); ?>" class="style9" style="text-decoration:none;"><h3><?php the_title(); ?></h3>

  <?php get_the_content_limit(50, ''); ?></div>

				<div class="clear"></div>

			</li>

		

	

<?php
}

endforeach; 

wp_reset_postdata();

?>

		

          

        </ul>

    </div><a href="news-events"><div  class="more"></div></a>

</div>





<!-- Latest News starts here -->

<h4>Latest News</h4>

<div class="mother-photo-panel"><div id="slider2" class="sliderwrapper">

	<?php

$args = array( 'posts_per_page' => 25, 'order'=> 'Desc', 'orderby' => 'ID','post_type' => 'latestnews');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post );

   $postid = get_the_ID();

   $image = get_field('image');

   ?> 

<div class="contentdiv">



<img src="<?php echo $image;?>" width="294" height="127" alt=""><a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

<p><?php get_the_content_limit(100, ''); ?></p><a href="latest-news"><div  class="more"></div></a>

</div>

<?php

endforeach; 

wp_reset_postdata();

?>

</div>

<div id="paginate-slider2" class="pagination"></div>



<script type="text/javascript">



featuredcontentslider.init({

	id: "slider2",  //id of main slider DIV

	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]

	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]

	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.

	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"

	enablefade: [true, 0.2],  //[true/false, fadedegree]

	autorotate: [true, 3000],  //[true/false, pausetime]

	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide

		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)

		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)

	}

})



</script>

</div>

</div>

<div id="highlights">

 <div id="highlt1">

    <img src="<?php echo of_get_option('snb_image1');?>" width="184" height="122"/>

    <h3><?php echo of_get_option('snb_caption1');?></h3>

    <p><?php echo of_get_option('snb_desc1');?></p>

    <a href="<?php echo of_get_option('snb_link1');?>"><div class="more_hlt" align="center"></div></a>

 </div>

 

  <div id="highlt1">

    <img src="<?php echo of_get_option('snb_image2');?>" width="184" height="122"/>

    <h3><?php echo of_get_option('snb_caption2');?></h3>

    <p><?php echo of_get_option('snb_desc2');?></p>

    <a href="<?php echo of_get_option('snb_link2');?>"><div class="more_hlt" align="center"></div></a>

 </div>

 <div id="highlt1">

    <img src="<?php echo of_get_option('snb_image3');?>" width="184" height="122"/>

    <h3><?php echo of_get_option('snb_caption3');?></h3>

    <p><?php echo of_get_option('snb_desc3');?></p>

    <a href="<?php echo of_get_option('snb_link3');?>"><div class="more_hlt" align="center"></div></a>

 </div>



 <div id="highlt1">

    <img src="<?php echo of_get_option('snb_image4');?>" width="184" height="122"/>

    <h3><?php echo of_get_option('snb_caption4');?></h3>

    <p><?php echo of_get_option('snb_desc4');?></p>

    <a href="<?php echo of_get_option('snb_link4');?>"><div class="more_hlt" align="center"></div></a>

 </div>



  <div id="highlt1" class="last">

    <img src="<?php echo of_get_option('snb_image5');?>" width="184" height="122"/>

    <h3><?php echo of_get_option('snb_caption5');?></h3>

    <p><?php echo of_get_option('snb_desc5');?></p>

    <a href="<?php echo of_get_option('snb_link5');?>"><div class="more_hlt" align="center"></div></a>

 </div>

 

 

 

</div>

</div>



</div>

</div>

</div>

<?php 



get_footer();



?>

