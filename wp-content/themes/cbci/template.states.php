<?php
/*
 * Template Name: States
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
<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

<?php
$args = array( 'posts_per_page' =>25, 'order'=> 'ASC', 'orderby' => 'ID','post_type' => 'region');
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	
		<div id="stories">
   <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
   </div>
		
	
<?php
endforeach; 
wp_reset_postdata();
?>


</div>



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
    </div><a href="<?php echo site_url(); ?>/news-events"><div  class="more"></div></a>
</div>

<div class="mother-photo-panel">

<!-- Latest News starts here -->
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
