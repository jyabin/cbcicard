<?php

/*

 * Template Name: Region

*/

get_header();

$url=get_permalink($post->ID); 

$path=explode("/",$url);

$writer=$path['4'];

?>

<!-- container starts here -->

<div id="wrapper-out">

<div id="wrapper">

<div id="container">

<?php

$args = array( 'posts_per_page' => 10, 'order'=> 'Desc','author_name'=>''.$writer.'', 'orderby' => 'ID','post_type' => 'banner');

$postslist = get_posts( $args );

if(count($postslist)>0){?>

<div id="menu-banner-panel">

<!-- banner starts here -->





<div id="banner">

<div class="fluid_container">





 

			

        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">

		

		<?php



foreach ( $postslist as $post ) :

  setup_postdata( $post ); 

  $postid = get_the_ID();

                $banner = get_field('banner');

  

  ?> 

	



	<div data-thumb="<?php echo $banner;?>" data-src="<?php echo $banner;?>">

                <div class="camera_caption fadeFromBottom">

                    <?php the_title();     ?>      </div>

            </div>

	

<?php

endforeach; 

wp_reset_postdata();

?>

            

            

        </div></div>

</div>

</div>

<?php }?>

<!-- home contents  here -->

<div id="homecontent-panel">



<!-- home left side starts here -->

<div id="homeLHS">

<div class="LHSbox1">

<h3>About CBCI- CARD <?php echo the_title();?> Region</h3>

<p>

<?php 

$postid = get_the_ID();

$page_data = get_page( $postid);



echo $page_data->post_content;

 ?>

</p>





</div>

<div class="LHSbox1">

<h3>Reports</h3>



<?php

$args = array( 'posts_per_page' => 10, 'author_name'=>''.$writer.'','order'=> 'Desc', 'orderby' => 'ID','post_type' => 'reports');

$postslist = get_posts( $args );



if(count($postslist)>0){



foreach ( $postslist as $post ) :

  setup_postdata( $post ); ?> 

	

		<div id="stories">

   <h4><?php the_title(); ?></h4>

   <p>

  <?php get_the_content_limit(50, 'More'); ?></p>

 </div>

		

	

<?php

endforeach; 

wp_reset_postdata();

?>
<a href="<?php echo site_url(); ?>/reports/?<?php echo $writer;?>"><div  class="more"></div></a>

<?php }else{?>

<p>No Reports Found....</p>



<?php }?>

</div>

<div class="LHSbox1">

<h3>Thought Provoking Stories</h3>



<?php

$args = array( 'posts_per_page' => 3, 'author_name'=>''.$writer.'','order'=> 'Desc', 'orderby' => 'ID','post_type' => 'success-stories');

$postslist = get_posts( $args );



if(count($postslist)>0){



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
<a href="<?php echo site_url(); ?>/success-stories/?<?php echo $writer;?>"><div  class="more"></div></a>
<?php
}else{?>



<p>No Success Stories Found...</p>

<?php }?>

</div>

<div class="LHSbox1">

<div class="imagegal">

<h3>Photo Gallery</h3>

<div class="home-photogallery">

<a href="<?php echo site_url(); ?>/photo-gallery"><img src="<?php bloginfo("template_url"); ?>/images/thumbs_1.jpg" width="300" height="120" /></a>

<!--<ul>

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li class="last"><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>



<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

<li class="last"><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/gal1.jpg" alt=""></a></li>

</ul>!-->

<a href="http://indiawordpressdeveloper.com/cbci/"><div class="view"><a href="<?php echo site_url(); ?>/photo-gallery"><img src="<?php bloginfo("template_url"); ?>/images/view.jpg"/>



</div></a>

</div></div>

<div class="videogal">

<h3>Video Gallery</h3>

<div class="cmc-video-panel"><iframe  id="video" src="//www.youtube.com/embed/MzHPiB6f-c4" frameborder="0" allowfullscreen></iframe></div>

</div></div>







</div>

<div id="homeRHS">

<!-- Latest News starts here -->

<h4>Latest News</h4>

<div class="mother-photo-panel"><div id="slider2" class="sliderwrapper">

	<?php

$args = array( 'posts_per_page' => 25,'author_name'=>''.$writer.'', 'order'=> 'Desc', 'orderby' => 'ID','post_type' => 'latestnews');

$postslist = get_posts( $args );



if(count($postslist)>0){

?>





<?php 

foreach ( $postslist as $post ) :

  setup_postdata( $post );

   $postid = get_the_ID();

   $image = get_field('image');

   ?> 

<div class="contentdiv">



<img src="<?php echo $image;?>" width="294" height="127" alt=""><a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

<p><?php get_the_content_limit(100, ''); ?></p><a href="<?php echo site_url(); ?>/latest-news/?<?php echo $writer;?>"><div  class="more"></div></a>

</div>

<?php

endforeach; 

wp_reset_postdata();

}else{?>



<p>No Latest News Found...</p>

<?php }?>

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





</div>

</div>

</div>

<?php 



get_footer();



?>

