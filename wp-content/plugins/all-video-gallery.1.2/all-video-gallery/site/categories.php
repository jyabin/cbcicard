<?php

/******************************************************************
/* Build Player
******************************************************************/
class Categories {

	public function remove_qs_key($url, $key) {
		return preg_replace('/(?:&|(\?))' . $key . '=[^&]*(?(1)&|)?/i', "$1", $url);
	}
	
	public function buildGallery( $profileid = 1, $count = 0 ) {
		global $wpdb;
		global $allvideogallery_plugin_dir;
		
		$profile    = $wpdb->get_row("SELECT * FROM ".$wpdb->prefix."allvideogallery_profiles WHERE id=".$profileid);
		$categories = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."allvideogallery_categories");
		$custid     = ( $profile->custom_gallery_id ) ? $profile->custom_gallery_id : 'avs_gallery';
		$custpage   = ( $profile->custom_page_url ) ? $profile->custom_page_url : '';		
		$limit      = $profile->rows * $profile->cols;
		$count      = ( $count != 0 && $count < count($categories) ) ? $count : count($categories);
		$total      = ceil( $count / $limit );
		$start      = isset( $_GET['start'] ) ? $_GET['start'] : 1;
		$limitstart = ($start - 1) * $limit;
		$limitend   = $start * $limit;
		if($count < $limitend) $limitend = $count;
		
		$output  = '<style type="text/css">';
		$output .= $profile->gallery_css;
		$output .= '</style>';
		$output .= '<div id="' . $custid . '">';
		
		$column = 0;
		$row    = 0;
  		for ($i=$limitstart, $n=$limitend; $i < $n; $i++) {   
			$clear = ''; 
    		if($column >= $profile->cols) {
				$clear  = '<div style="clear:both;"></div>';
				$column = 0;
				$row++;
			}
			$column++;
			$output .= $clear;
			$output .= '<div class="avs_thumb" style="width:' . $profile->thumb_width . 'px;">';
  			$custhref = $custpage ? @add_query_arg("catid", $categories[$i]->slug, $custpage) : @add_query_arg("catid", $categories[$i]->slug);
  			$output .= '<a href="' . $this->remove_qs_key($custhref, "start") . '">';
    		$output .= '<div class="left">';
        	$output .= '<img class="arrow" src="' . get_option('siteurl') . '/wp-content/plugins/' . $allvideogallery_plugin_dir . '/assets/play.gif" style="margin-left:' . ($profile->thumb_width - 30) / 2 . 'px; margin-top:' . ($profile->thumb_height - 26) / 2 . 'px" border="0" />';
            $output .= '<img class="image" src="' . $categories[$i]->thumb . '" width="' . $profile->thumb_width . '" height="' . $profile->thumb_height . '" title="' . $categories[$i]->name . '" border="0" />';
        	$output .= '</div>';
    		$output .= '<div class="right">';
        	$output .= '<span class="title">' . $categories[$i]->name . '</span>';
        	$output .= '</div>';
    		$output .= '</a>';
  			$output .= '</div>';
  		}
  		
		$output .= '<div style="clear:both"></div>';
		$output .= '</div>';
		
		$args = array(
    		'base'      => $this->remove_qs_key(@add_query_arg('start', '%#%'), "catid"),
    		'format'    => '',
    		'total'     => $total,
    		'current'   => $start,
    		'end_size'  => 3,
    		'prev_text' => __('prev'),
    		'next_text' => __('next'),
			'type'      => 'list'
		); 

		$output .= paginate_links( $args );
		
		return $output;
	}
}

?>