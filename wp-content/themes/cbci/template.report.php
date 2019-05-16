<?php

/*

 * Template Name: Report

*/

get_header();

?>



<!-- container starts here -->

<div id="wrapper-out">

<div id="wrapper">

<div id="container">



<!-- home contents starts here -->

<div id="homecontent-panel">



<!-- home left side starts here -->

<div id="homeLHS">

<!-- about content starts here -->

<div class="LHSbox1">

<h3><?php the_title(); ?></h3>

<?php
$url=$_SERVER['REQUEST_URI'];
$path=explode("?",$url);
$writer=$path['1'];
$args = array( 'posts_per_page' =>25, 'order'=> 'Desc','author_name'=>''.$writer.'', 'orderby' => 'ID','post_type' => 'reports');

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







</div>

<div id="homeRHS">

<!-- news & events contents starts here -->




<h4>Latest News</h4>

<div class="mother-photo-panel"><div id="slider2" class="sliderwrapper">

	<?php

$args = array( 'posts_per_page' => 25, 'order'=> 'Desc','author_name'=>''.$writer.'', 'orderby' => 'ID','post_type' => 'latestnews');

$postslist = get_posts( $args );

foreach ( $postslist as $post ) :

  setup_postdata( $post );

   $postid = get_the_ID();

   $image = get_field('image');

   ?> 

<div class="contentdiv">



<img src="<?php echo $image;?>" width="294" height="127" alt=""><a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

<p><?php get_the_content_limit(100, ''); ?></p><a href="<?php echo site_url(); ?>/latest-news"><div  class="more"></div></a>

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



</div>



</div>

</div>

</div>

<?php 



get_footer();



?>

