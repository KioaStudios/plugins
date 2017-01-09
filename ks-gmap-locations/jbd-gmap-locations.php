<?php
/**
	 * Plugin Name: JBD GMAP Locations Plugin
	 * Plugin URI: http://www.howhigh.ca
	 * Description: A location plugin that will allow you to input address, and data that will allow for a map and table display, make sure you activate the LocationsCoordinates plugin.
	 * Version: 2
	 * Author: Sanka Abeysinghe
	 * Author URI: http://www.howhigh.ca
	 * License: GPL licence
	 * Date: September 15, 2016
	 */

// Register the Custom Post Type
function register_locations() {
	// the labels for the Post Type
	$labels = array(
		'name' => _x( 'Locations', 'location' ),
		'singular_name' => _x( 'Location', 'location' ),
		'add_new' => _x( 'Add New', 'location' ),
		'add_new_item' => _x( 'Add New Location', 'location' ),
		'edit_item' => _x( 'Edit Location', 'location' ),
		'new_item' => _x( 'New Location', 'location' ),
		'view_item' => _x( 'View Location', 'location' ),
		'search_items' => _x( 'Search Locations', 'location' ),
		'not_found' => _x( 'No location found', 'location' ),
		'not_found_in_trash' => _x( 'No location found in Trash', 'location' ),
		'parent_item_colon' => _x( 'Parent Location:', 'location' ),
		'menu_name' => _x( 'Locations', 'location' ),
	);

	// the registration arguments
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Locations on any page or post within the site',
		'supports' => array( 'title', 'author' ),
		//'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 23,
		'menu_icon' => 'dashicons-location-alt',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	// register the post type
	register_post_type( 'location', $args );

	// custom fields
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_57c85b9d334dc',
		'title' => 'Locations Fields',
		'fields' => array (
		array (
		'placement' => 'left',
		'endpoint' => 0,
		'key' => 'field_57daddbdb690e',
		'label' => 'Location Settings',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'new_lines' => 'br',
		'maxlength' => '',
		'placeholder' => '',
		'rows' => '',
		'key' => 'field_57c86bd066a2c',
		'label' => 'Address',
		'name' => 'loc_address',
		'type' => 'textarea',
		'instructions' => 'enter the location address
eg:
[Number] [Street, Avenue Name], [City],
[Province/State] [X0X 0X0]',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dad99ab68f8',
		'label' => 'Location Longitude',
		'name' => 'location_lng',
		'type' => 'text',
		'instructions' => 'Do not enter a value here, it will be automagically populated',
		'required' => 0,
		'readonly' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dad9d1b68f9',
		'label' => 'Location Latitude',
		'name' => 'location_lat',
		'type' => 'text',
		'instructions' => 'Do not enter a value here, it will be automagically populated',
		'required' => 0,
		'readonly' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'multiple' => 0,
		'allow_null' => 0,
		'choices' => array (
		'open' => 'Open',
		'close' => 'Closed',
		'comingsoon' => 'Coming Soon',
		'underconstruction' => 'Under Construction',
	),
		'default_value' => array (
	),
		'ui' => 0,
		'ajax' => 0,
		'placeholder' => '',
		'return_format' => 'value',
		'key' => 'field_57dc348506280',
		'label' => 'Location Status',
		'name' => 'status',
		'type' => 'select',
		'instructions' => 'Is this location Open, Closed, Under Construction?',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'placement' => 'top',
		'endpoint' => 0,
		'key' => 'field_5850314cc45be',
		'label' => 'Location Hours',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'sub_fields' => array (
		array (
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dada64b68fb',
		'label' => 'Day(s) of the week',
		'name' => 'day_of_the_week',
		'type' => 'text',
		'instructions' => 'You can enter the information like this
Monday
Mon - Wed',
		'required' => '',
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'display_format' => 'g:i a',
		'return_format' => 'g:i a',
		'key' => 'field_57dadbadb6903',
		'label' => 'Opening Time',
		'name' => 'opening_time',
		'type' => 'time_picker',
		'instructions' => 'Select the Opening Time
* Do NOT enter a value if the location is closed on this day',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'display_format' => 'g:i a',
		'return_format' => 'g:i a',
		'key' => 'field_57dadbc6b6904',
		'label' => 'Closing Time',
		'name' => 'closing_time',
		'type' => 'time_picker',
		'instructions' => 'Select the Closing Time
* Do NOT enter a value if the location is closed on this day',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
	),
		'min' => 0,
		'max' => 0,
		'layout' => 'block',
		'button_label' => '',
		'collapsed' => 'field_57dada64b68fb',
		'key' => 'field_5850342cc45c3',
		'label' => 'Hours Repeater',
		'name' => 'hours_repeater',
		'type' => 'repeater',
		'instructions' => 'Store Hours, enter one entry per day of the week',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'placement' => 'top',
		'endpoint' => 0,
		'key' => 'field_5850319cc45bf',
		'label' => 'Location Contact',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '(123) 456 - 7890',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dada4ab68fa',
		'label' => 'Phone Number',
		'name' => 'phone_number',
		'type' => 'text',
		'instructions' => 'Location Phone Number',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '(123) 456 - 7890',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dadb13b6902',
		'label' => 'Fax Number',
		'name' => 'fax_number',
		'type' => 'text',
		'instructions' => 'Location Fax Number (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'key' => 'field_57dadbf8b6906',
		'label' => 'Email',
		'name' => 'email',
		'type' => 'email',
		'instructions' => 'Location Email (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'key' => 'field_57dadc13b6908',
		'label' => 'URL',
		'name' => 'url',
		'type' => 'url',
		'instructions' => 'Location Website (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'placement' => 'top',
		'endpoint' => 0,
		'key' => 'field_585031cac45c1',
		'label' => 'Social Media',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'key' => 'field_57dadcadb690b',
		'label' => 'Facebook',
		'name' => 'facebook',
		'type' => 'url',
		'instructions' => 'Facebook Address (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'key' => 'field_57dadc44b690a',
		'label' => 'Twitter',
		'name' => 'twitter',
		'type' => 'url',
		'instructions' => 'Twitter Address (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'key' => 'field_57dadd26b690c',
		'label' => 'Instagram',
		'name' => 'instagram',
		'type' => 'url',
		'instructions' => 'Instagram Address (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
		array (
		'default_value' => '',
		'placeholder' => '',
		'key' => 'field_57dadd32b690d',
		'label' => 'Youtube',
		'name' => 'youtube',
		'type' => 'url',
		'instructions' => 'YouTube Channel (optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	),
	),
		'location' => array (
		array (
		array (
		'param' => 'post_type',
		'operator' => '==',
		'value' => 'location',
	),
	),
	),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'format',
		7 => 'page_attributes',
		8 => 'featured_image',
		9 => 'categories',
		10 => 'tags',
		11 => 'send-trackbacks',
	),
		'active' => 1,
		'description' => '',
	));

	endif;
	
	// lets build the short code for this plugin
	function jbd_locations_shortcode($atts) {
		$mapIcon = wp_get_attachment_image_src(get_option( 'options_map_icon' ));
		$geoLocationActive = get_option( 'options_activate_geo_location_search' );
		$geo_active = false;
		$templateOverride = false;
		$currentTemplate = get_page_template_slug();
		
		if($geoLocationActive[0] == "geo_active"){
			$geo_active = true;
		}
		
		
		if($currentTemplate == "tpl/page_tpl_locations.php"){ // the override template file name
			$templateOverride = true;	
		}
		
		if(!$templateOverride){ // this is for the template override
			$parseHtml = "";
			//$parseHtml .= '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&key='.get_option( 'options_google_maps_api_key' ).'"></script>';
			$parseHtml .= '<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,geometry&key='.get_option( 'options_google_maps_api_key' ).'"></script>';
			$parseHtml .= '<script type="text/javascript" src="'.plugins_url().'/jbd-gmap-locations/js/gmap.js"></script>';

			// if the geo location is active then add the storlocator and single location scripts
			if($geo_active == true){
				$parseHtml .= '<style>';
				$parseHtml .= 'div#searchResults > div.col-md-4 > div.location.locationListContainer.col-md-3{
					width: 100% !important;
				}';
				$parseHtml .= '</style>';
				$parseHtml .= '<script type="text/javascript">
									var locMarker = "'.$mapIcon[0].'";
									var srchMarker = "'.plugins_url().'/jbd-gmap-locations/current_location_marker.png";
							   </script>';
				$parseHtml .= '<script type="text/javascript" src="'.plugins_url().'/jbd-gmap-locations/js/storeLocator.js"></script>';
			} // end geo location option

			$parseHtml .= '<script type="text/javascript">var icoF = "'.$mapIcon[0].'";</script>';
			$parseHtml .= '<script type="text/javascript" src="'.plugins_url().'/jbd-gmap-locations/js/locations.js"></script>';




			// get the locations
			$args = array(
				'post_type'         => 'location',
				'orderby'           => 'title',
				'order'             => 'asc',
				'posts_per_page'    => -1
			);

			$locations = query_posts($args);
			$locIndex = 0;
			if($geo_active != true){
				$parseHtml .= '<div id="map" class="gmapContainer margin-b40"></div>';
			}

			// the search input
			if($geo_active == true){
				$parseHtml .= '<div class="container whiteBG">
								<div class="row padding-t20 padding-b20">
									<form id="" class="" action="#" method="POST">
										<div class="col-md-6"><input class="form-control pull-left aleo" id="yourAddressInput" placeholder="Enter your city, province or postal code" value="'.$_POST['search'] . '"></div>
										<div id="locationNav" class="col-md-4">	
											<a href="#search" class="btn btn-bb blackBG white uppercase margin-r15 norwester text-uppercase pull-left" id="searchLocation"><span>Go</span><i class="fa fa-angle-right"></i></a>
											<a href="#" id="nearest" class="btn btn-bb blackBG white uppercase margin-r15 norwester text-uppercase pull-left"><span>Nearest</span> <i class="fa fa-map-marker"></i></a>
											<a href="#list" aria-controls="bbLocationList"  class="btn btn-bb blackBG white uppercase margin-r30 norwester text-uppercase pull-left" role="tab" data-toggle="tab"><span>List All</span> <i class="fa fa-list"></i></a>
										</div>
									</form>
								</div>
							</div>';


				$parseHtml .= '<div class="tab-content"><div id="search" role="tabpanel" class="tab-pane active"><div id="results" class="container whiteBG padding-b20"><div id="map" class="gmapContainer margin-b40"></div>
					<div class="row margin-b40  padding-t40">
						<div class="col-md-6">
							<h2 class="margin-b0 uppercase"><span id="searchResultsTitle"></span>Search Results <small>Within 25km</small></h2>
						</div>
						<div class="col-md-6 norwester">
							<div class="pull-right">
								Store Location <img src="'.$mapIcon[0].'" class="height30" />
							</div>
						</div>
					</div><!--.row-->

					<div id="searchResults" class="row">
						<div class="col-md-12"><p>Looking for a '.get_bloginfo().' Location?</p><p>No Results found.</p></div>
					</div><!--.row-->
				</div>
				</div>';
			}

			$parseHtml .= '<div id="list" role="tabpanel" class="tab-pane margin-b40"><div class="container padding-t20">';
			$parseHtml .= '<div class="row">';
			$parseHtml .= ($locIndex % 4 == 0?'<div class="col-md-12 margin-t20 margin-b20"><hr /></div>':"");

			while ( have_posts() ) : the_post();
			$hours = array();
			if( have_rows('hours_repeater', $locations[$i]->ID) ){

				// loop through the rows of data
				while ( have_rows('hours_repeater', $locations[$i]->ID) ) : the_row();

				$hours[] = array(
					'dow' => get_sub_field('day_of_the_week'),
					'open_hours' => get_sub_field('opening_time'),
					'close_hours' => get_sub_field('closing_time'),
				);
				endwhile;
			}
			//jbd_debug($hours);
				$parseHtml .= '<div class="location locationListContainer col-md-3" lat="'.get_field('location_lat').'" lng="'.get_field('location_lng').'">';
				$parseHtml .= '<div class="pull-right"><span class="locationMeta"></span><span class="distance grey block"></span></div>';
				$parseHtml .= '<h3>'.get_the_title().'</h3>';
				$parseHtml .= '<p>'.get_field('loc_address').'</p>';
				$parseHtml .= '<div class="contactInfo">
													<hr />
													<p><i class="fa fa-phone" aria-hidden="true"></i>: '.get_field('phone_number').'</p>
													<hr />
													<p class="margin-b0">Hours</p>
													<p class="margin-b0">';
															if(count($hours) != 0){
															echo '<p>';
																foreach($hours as $locHIndex => $locationH){
																if($locationH['open_hours'] == ""){
																	$parseHtml .=  ($locationH['dow']?'<i class="fa fa-clock-o" aria-hidden="true"></i> '.$locationH['dow'].' : Closed<br />':"");
																}else{
																	$parseHtml .=  ($locationH['dow']?'<i class="fa fa-clock-o" aria-hidden="true"></i> '.$locationH['dow'].' : '.$locationH['open_hours'].' - '.$locationH['close_hours'].'<br />':"");
																}
															}
															echo '</p>';
														}
													$parseHtml .= '</p>	
													<hr /><p>'
														. (get_field('facebook')?'<a href="'.get_field('facebook').'" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>&nbsp;&nbsp;':"")
														. (get_field('twitter')?'<a href="'.get_field('twitter').'" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>&nbsp;&nbsp;':"")
														. (get_field('instagram')?'<a href="'.get_field('instagram').'" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>&nbsp;&nbsp;':"")
														. (get_field('youtube')?'<a href="'.get_field('youtube').'" target="_blank"><span class="fa fa-youtube" aria-hidden="true"></span></a>&nbsp;&nbsp;':"");
													$parseHtml .=  '</p>
												</div>';
				$parseHtml .= '</div>'; 
				$locIndex++;		
			endwhile;

			wp_reset_postdata();

			$parseHtml .= '</div>';
			$parseHtml .= '</div>';
			$parseHtml .= '</div>';

			return $parseHtml;
		}else{ // if it's using the template override
			$parseHtml = '<script type="text/javascript">var locMarker = "'.$mapIcon[0].'";</script>';
			$parseHtml .= '<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,geometry&key='.get_option( 'options_google_maps_api_key' ).'"></script>';
			$parseHtml .= '<script type="text/javascript" src="'.plugins_url().'/jbd-gmap-locations/js/gmap.js"></script>';
			
			// get the locations
			$args = array(
				'post_type'         => 'location',
				'orderby'           => 'title',
				'order'             => 'asc',
				'posts_per_page'    => -1
			);

			$locations = query_posts($args);
			$content = array();
			
			if($locations){
				for($i = 0; $i < count($locations); $i++){
					$hours = array();
					if( have_rows('hours_repeater', $locations[$i]->ID) ){
						
						// loop through the rows of data
						while ( have_rows('hours_repeater', $locations[$i]->ID) ) : the_row();
						
							$hours[] = array(
								'dow' => get_sub_field('day_of_the_week'),
								'open_hours' => get_sub_field('opening_time'),
								'close_hours' => get_sub_field('closing_time'),
							);
						endwhile;
					}
					
					
					$content[] = array(
						'type'=>'location',
						'title'=> get_the_title($locations[$i]),
						'address' => get_field('loc_address', $locations[$i]->ID),
						'lat' => get_field('location_lat', $locations[$i]->ID),
						'lng' => get_field('location_lng', $locations[$i]->ID),
						'status'=> get_field('status', $locations[$i]->ID),
						'phone'=> get_field('phone_number', $locations[$i]->ID),
						'fax'=> get_field('fax_number', $locations[$i]->ID),
						'email'=> get_field('email', $locations[$i]->ID),
						'url'=> get_field('url', $locations[$i]->ID),
						'facebook'=> get_field('facebook', $locations[$i]->ID),
						'twitter'=> get_field('twitter', $locations[$i]->ID),
						'instagram'=> get_field('instagram', $locations[$i]->ID),
						'youtube'=> get_field('youtube', $locations[$i]->ID),
						'hours'=>$hours,
					);
				}
				
				$tplData[] = array(
					'title'=> get_the_title(),
					'icon'=> $mapIcon[0],
					'content'=> $content,
				);
			}
			
			$apiKey = get_option( 'options_google_maps_api_key' );
			add_action( 'wp_enqueue_scripts', 'jbd_css_js', 10, 2);//add outside of the site-inner for fullscreen.
			do_action( 'wp_enqueue_scripts', $apiKey, $parseHtml);
			
			add_action( 'genesis_after_header', 'jbd_parseLocMap', 10, 1);//add outside of the site-inner for fullscreen.
			do_action( 'genesis_after_header', $tplData);
		}
	}
	
	add_shortcode('jbd_locations', 'jbd_locations_shortcode');
	
	// the override style
	$currentTheme = get_stylesheet_directory();
	$dir = $currentTheme."/plugins/";
	if (!is_dir($dir)) {
		mkdir($dir);         
	}

	$pluginFolder = substr(plugin_basename(__FILE__), 0, strpos(plugin_basename(__FILE__), "/"));

	if (!is_dir($dir.$pluginFolder)) {
		echo $pluginFolder;       
		mkdir($dir.$pluginFolder);    
	}


	$cssFileName = $dir.$pluginFolder.'/location_plugin_style_override.css';
	if(!file_exists ( $cssFileName )){
		$dateStamp = date("F jS, Y", strtotime(now));
		$fileContent = '

		/**
		 * Plugin Name: JBD Google Maps Location Plugin
		 * Author: Sanka Abeysinghe
		 * Author URI: http://www.howhigh.ca
		 * Date: November 15th, 2016
		 * 
		 * Override the plugin styles
		 *
		**/

			#list{

			}

			div.tab-pane{

			}

			div.locationListContainer{

			}

			div.contactInfo{

			}

	';

		if (file_put_contents($cssFileName, $fileContent) !== false) {
			//echo "File created (" . basename($cssFileName) . ")";
		} else {
			//echo "Cannot create file (" . basename($cssFileName) . ")";
		}

	}

	$verDate = filemtime( $cssFileName );

	/**
	 * Include CSS file for MyPlugin.
	 */
	function que_override_locationcss($pluginFolder, $verDate = null) {
		$css_override_path = get_bloginfo( 'stylesheet_directory' ) . '/plugins/'.$pluginFolder.'/location_plugin_style_override.css';
		wp_enqueue_style('location_plugin_css', $css_override_path, '', $verDate);
	}

	if ( ! is_admin() && $GLOBALS['pagenow'] !== "wp-login.php") {
		add_action( 'wp_enqueue_scripts', 'que_override_locationcss', 120, 2 );
		do_action( 'wp_enqueue_scripts', $pluginFolder, $verDate );
	} else {
		//echo "You are viewing the WordPress Administration Panels";
	}

	
}

// initiate the locations plugin
add_action( 'init', 'register_locations' );

// pre-fetch
add_action( 'wp_head', 'my_dns_prefetch', 0 );
function my_dns_prefetch() {
	echo '<link rel="dns-prefetch" href="//maps.google.com"/>';
}

/*
Description: Hooks into locations content type
Version: 1.0
*/

// the coordinates
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

if ( ! class_exists( 'LocCoord' ) ) {
	class LocCoord
	{
		/**
		 * Tag identifier used by file includes and selector attributes.
		 * @var string
		 */
		protected $tag = 'loccoord';

		/**
		 * User friendly name used to identify the plugin.
		 * @var string
		 */
		protected $name = 'LocCoord';

		/**
		 * Current version of the plugin.
		 * @var string
		 */
		protected $version = '1.0';

		public function __construct()
		{
			add_action( 'save_post', array( &$this, 'addLocCoord'), 11, 3);
		}

		/**
		 * Save post metadata when a post is saved.
		 *
		 * @param int $post_id The post ID.
		 * @param post $post The post object.
		 * @param bool $update Whether this is an existing post being updated or not.
		 */
		public function addLocCoord($post_id, $post, $update)
		{
			// If this is just a revision, don't send the email.
			if ( wp_is_post_revision( $post_id ) ){return;}
			if($post->post_type == 'location'){
				$post_title = get_the_title( $post_id );
				$post_url = get_permalink( $post_id );
				$subject = 'A post has been updated';

				//getting custom fields
				$address = get_post_meta($post_id,'loc_address');

				if(isset($address[0])){

					$geoCode = $this->getLocCoord($address[0]);

					if(isset($geoCode['lat'])){
						update_post_meta( $post_id, 'location_lat', sanitize_text_field( $geoCode['lat'] ) );
					}
					if(isset($geoCode['lng'])){
						update_post_meta( $post_id, 'location_lng', sanitize_text_field( $geoCode['lng'] ) );
					}

					/*	
					$message = "A post has been updated on your website:\n\n";
					$message .= $post_title . ": " . $post_url;
					$message .=  "<br />" . $post->post_type;
					$message .=  "<br />lat: " . $geoCode['lat'];
					$message .=  "<br />long: " . $geoCode['lng'];
					$message .=  '\n\r'.$address[0] .' '. $city[0] .' '. $region[0];

					wp_mail( 'arthur@howhigh.ca', $subject, $message );
					*/
				}
			}// Send email to admin.		
		}//addLocCoord

		//send a request to google maps
		//returns array with geocode coordinates
		public function getLocCoord($address){
			$address = addslashes(trim($address));

			$address = trim(str_replace(" ", "+", preg_replace( "/\r|\n/", " ", $address))); // replace all the white space with "+" sign to match with google search pattern
			$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
			$response = file_get_contents($url);
			$json = json_decode($response,TRUE); //generate array object from the response from the web

			if(isset($json['results'][0]['geometry']['location']['lat']) && isset($json['results'][0]['geometry']['location']['lng'])){
				$returnarray = [
					'lat'=>$json['results'][0]['geometry']['location']['lat'],
					'lng'=>$json['results'][0]['geometry']['location']['lng']
				];
			}else{
				$returnarray = [
					'lat'=>'',
					'lng'=>''
				];
			}
			return $returnarray;

		}//getLocCoord

	}
	new LocCoord;
}

// this section is for the creation of the setting feature within the wordpress admin tab, this section will allow us to add and save the API key
if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 	'Location Settings',
		'menu_title' 	=> 	'Location Settings',
		'menu_slug' 	=> 	'location-settings',
		'capability' 	=> 	'edit_posts',
		'parent' 		=> 	'edit.php?post_type=location', // this is so we can put the settings to the locations page.
		'position'		=>	23,
		'autoload' 		=> 	true,
		'redirect' 		=> 	false
	));
	
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_57dae88bdf52c',
		'title' => 'Google Maps API Key',
		'fields' => array (
			array (
				'key' => 'field_57dae8a5c9aa8',
				'label' => 'Enter the Google Maps API Key',
				'name' => 'google_maps_api_key',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57dc02daf109c',
				'label' => 'Location Map Icon',
				'name' => 'map_icon',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_57dc516967c94',
				'label' => 'Activate GEO Location & Search',
				'name' => 'activate_geo_location_search',
				'type' => 'checkbox',
				'instructions' => 'Check this if you want to activate the Geo location and search feature',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'geo_active' => 'Activate',
				),
				'default_value' => array (
				),
				'layout' => 'vertical',
				'toggle' => 0,
				'return_format' => 'value',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'location-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	endif;

}

// check to see if the function for the plugin is active
if(function_exists('register_locations')){
	$page = get_page_by_path( 'get' , OBJECT );
	
	
	if ( !isset($page) ){
		// create the get page
		$post_args = array (
			'menu_order' => 1000,
			'page_template' => 'Default Page',
			'comment_status' => 'closed',
			'ping_status' => 'closed',
			'post_author' => get_current_user_id(),
			'post_content' => 'This is some custom content I\'m adding to the post editor because I hate re-typing it.',
			'post_name' => 'get',
			'post_status' => 'publish',
			'post_title' => 'get',
			'post_type' => 'page'
		);
		
		// Insert the post into the database
		wp_insert_post( $post_args );	
		
		$page = get_page_by_path( 'get' , OBJECT );
		$subpage = get_page_by_path( 'geolocation' , OBJECT );
		$parentID = $page->ID;
		
		// create the get page
		$sub_post_args = array (
			'post_type' => 'page',
			'page_template' => 'tpl_scripts/script_geolocation.php',
			'comment_status' => 'closed',
			'ping_status' => 'closed',
			'post_author' => get_current_user_id(),
			'post_content' => 'This is some custom content I\'m adding to the post editor because I hate re-typing it.',
			'post_name' => 'geolocation',
			'post_status' => 'publish',
			'post_title' => 'geolocation',
			'post_parent' => $parentID
		);

		// Insert the post into the database
		wp_insert_post( $sub_post_args );

	}	
}
