<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



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

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */?>
						<div id="stories">
   <h4><?php the_title(); ?></h4>
   <p>
  <?php get_the_content_limit(150, 'More Details'); ?></p>
 </div><?php
					endwhile;
					// Previous/next post navigation.
					//twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					the_content();

				endif;
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
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'ID','post_type' => 'events');
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	
		 <li>
				<div class="thumbnail">
                  <div id="month_outer">
                     <div id="month">AUG</div>
                     <div id="date">01</div>
                   </div>
                </div>
				<div class="info">
					<a href="<?php echo get_permalink(); ?>" class="style9" style="text-decoration:none;"><h3><?php the_title(); ?></h3>
  <?php get_the_content_limit(50, ''); ?></div>
				<div class="clear"></div>
			</li>
		
	
<?php
endforeach; 
wp_reset_postdata();
?>
		
          
        </ul>
    </div><a href="#"><div  class="more"></div></a>
</div>



<!-- Latest News starts here -->




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

