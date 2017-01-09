<?php
/**
	 * Plugin Name: JBD Instagram Plugin
	 * Plugin URI: http://www.howhigh.ca
	 * Description: An Instagram plugin which will allow the user to include a grid based or slider based instagram feed to any page of your site
	 * Version: 1
	 * Author: Sanka Abeysinghe
	 * Author URI: http://www.howhigh.ca
	 * License: GPL licence
	 * Date: September 14, 2016
	 */

// Register the Custom Post Type
function register_instagram() {
	// the labels for the Post Type
	$labels = array(
		'name' => _x( 'Instagram Feeds', 'instagram-feeds' ),
		'singular_name' => _x( 'Instagram Feed', 'instagram-feed' ),
		'add_new' => _x( 'Add New', 'instagram-feed' ),
		'add_new_item' => _x( 'Add New Instagram Feed', 'instagram-feed' ),
		'edit_item' => _x( 'Edit Instagram Feed', 'instagram-feed' ),
		'new_item' => _x( 'New Instagram Feed', 'instagram-feed' ),
		'view_item' => _x( 'View Instagram Feed', 'instagram-feed' ),
		'search_items' => _x( 'Search Instagram Feeds', 'instagram-feed' ),
		'not_found' => _x( 'No instagram feed found', 'instagram-feed' ),
		'not_found_in_trash' => _x( 'No instagram feed found in Trash', 'instagram-feed' ),
		'parent_item_colon' => _x( 'Parent Instagram Feeds:', 'instagram-feed' ),
		'menu_name' => _x( 'Instagram Feeds', 'instagram-feed' ),
	);

	// the registration arguments
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Instagram Feed for any page or post within the site',
		'supports' => array( 'title', 'author' ),
		//'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 21,
		'menu_icon' => 'dashicons-share',
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
	register_post_type( 'instagram-feed', $args );

	// custom fields
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_57d99f859eb64',
		'title' => 'Instagram',
		'fields' => array (
			array (
				'key' => 'field_57d99f85a1d8e',
				'label' => 'Settings',
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
				'placement' => 'left',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_57d99f85a1df9',
				'label' => 'Display Type',
				'name' => 'display_type',
				'type' => 'select',
				'instructions' => 'Select if you wish to show the instagram feed as a slider or as a grid',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'slider' => 'Slider',
					'grid' => 'Grid',
				),
				'default_value' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_57d99f85a1e63',
				'label' => 'API Key',
				'name' => 'api_key',
				'type' => 'text',
				'instructions' => 'Enter your Access key
https://rudrastyh.com/tools/access-token',
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
				'key' => 'field_57d99f85a1ece',
				'label' => 'Instagram Username',
				'name' => 'instagram_username',
				'type' => 'text',
				'instructions' => 'Enter the username for the instagram account',
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
				'key' => 'field_57d99f85a1f38',
				'label' => 'Max To Show',
				'name' => 'max_to_show',
				'type' => 'number',
				'instructions' => 'Enter the maximum number of items to show',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 12,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_57d99f85a1fa2',
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
				'placement' => 'left',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_57d99f85a200e',
				'label' => 'Insert Social Media Links',
				'name' => 'insert_social_media_links',
				'type' => 'select',
				'instructions' => 'Insert Social Media logos and links into the mix',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'yes' => 'Yes',
					'no' => 'No',
				),
				'default_value' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_57d99f85a2078',
				'label' => 'Facebook Image',
				'name' => 'facebook_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
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
				'key' => 'field_57d99f85a20e2',
				'label' => 'Facebook Link',
				'name' => 'facebook_link',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array (
				'key' => 'field_57d99f85a214c',
				'label' => 'Instagram Image',
				'name' => 'instagram_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
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
				'key' => 'field_57d99f85a21b6',
				'label' => 'Instagram Link',
				'name' => 'instagram_link',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array (
				'key' => 'field_57d99f85a2220',
				'label' => 'Twitter Image',
				'name' => 'twitter_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
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
				'key' => 'field_57d99f85a228a',
				'label' => 'Twitter Link',
				'name' => 'twitter_link',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57d99f85a200e',
							'operator' => '==',
							'value' => 'yes',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'instagram-feed',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'excerpt',
			1 => 'custom_fields',
			2 => 'discussion',
			3 => 'comments',
			4 => 'revisions',
			5 => 'author',
			6 => 'format',
			7 => 'featured_image',
			8 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	));

	endif;
	
	// lets build the short code for this plugin
	function jbd_instagram_shortcode($atts) {
		$parseHtml = "";
		
		$a = shortcode_atts( array(
			//'instagramslug' => '',
			'id' => '',
			'showcontrols' => 'true',
			'keyboard' => 'false',
			'interval' => 2000,
			'pause' => 'true',
			'loop' => 'true',
		), $atts );

		// get the instagram page assets
		
		$args = array(
			'post_type'         => 'instagram-feed',
			//'pagename'          => $a['instagramslug'],
			'p'          		=> $a['id'],
			'orderby'           => 'date',
			'order'             => 'desc',
			'posts_per_page'    => 1
		);
		
		$iGram = query_posts($args);
		
		while ( have_posts() ) : the_post();
		$access_token = get_field('api_key');
		$username  = get_field('instagram_username');
		$user_search = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $access_token);
		$count = 0;
		$max_to_show = get_field('max_to_show');
		$inst_url = "http://www.instagram.com/".$username;

		// $user_search is an array of objects of all found users
		// we need only the object of the most relevant user - $user_search->data[0]
		// $user_search->data[0]->id - User ID
		// $user_search->data[0]->first_name - User First name
		// $user_search->data[0]->last_name - User Last name
		// $user_search->data[0]->profile_picture - User Profile Picture URL
		// $user_search->data[0]->username - Username

		$user_id = $user_search->data[0]->id; // or use string 'self' to get your own media
		$return = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $access_token);
		$leftArrow = "<span class='fa fa-angle-left' aria-hidden='true'></span>";
		$rightArrow = "<span class='fa fa-angle-right' aria-hidden='true'></span>";
		if(get_field('display_type') == "slider"){
			$parseHtml = '';
			
			
			$parseHtml .='<!-- Section --><section id="social_slider_full">';
			$parseHtml .= '<link href="'.plugins_url().'/jbd-instagram/owl-carousel/owl.carousel.css" rel="stylesheet">';
			$parseHtml .= '<script type="text/javascript" src="'.plugins_url().'/jbd-instagram/owl-carousel/owl.carousel.js"></script>';
			$parseHtml .= '<script type="text/javascript">';
			$parseHtml .= '$(document).ready(function() {

				var owl = $("#owl-demo");

				owl.owlCarousel({
					navigation : '.$a['showcontrols'].',
					autoPlay : '.$a['interval'].',
					stopOnHover : '.$a['pause'].',
					loop : '.$a['loop'].',
					navigationText : ["'.$leftArrow.'","'.$rightArrow.'"],
					rewindSpeed : 1,
				});

			});';
			$parseHtml .= '</script>';
			
			$parseHtml .= '<div class="fluid-container" class="row no-gutters">';
			$parseHtml .= '<div id="owl-demo" class="owl-carousel owl-theme">';
			foreach ($return->data as $post) {
				$parseHtml .= '<div id="instagram-img-'.$count.'" style="background:url('. $post->images->standard_resolution->url .') center center; background-size:cover;"><img class="img-responsive width100Per" src="'. plugins_url() .'/jbd-instagram/images/sq-shim.gif" /></div>';
			}
			$parseHtml .= '</div>';
			$parseHtml .= '</div>';
			$parseHtml .= '<div class="instagram-icon"><a href="'.$inst_url.'" target="_blank" title="Visit us on Instagram">
			<span class="fa fa-instagram"  aria-hidden="true"></span>
			</a></div>';
			$parseHtml .= '</section><!-- /.row -->';
		}elseif(get_field('display_type') == "grid"){
			$parseHtml ='<!-- Section --><section id="social_grid_full">';
			$parseHtml .= '<div class="fluid-container"><div class="row no-gutters">';
			
			foreach ($return->data as $post) {

				$parseHtml .= '<div class="post-item col-md-3 whiteBG">';
				if(get_field('insert_social_media_links') == "yes"){
					if($count == 0){
						// Facebook link
						if(get_field('facebook_image') != ""){
							$parseHtml .= '<a href="'.get_field('facebook_link').'" target="_blank" title="Like us on Facebook"><img class="img-responsive width100Per" src="'. get_field('facebook_image') .'" /></a>';
						}
					}else if($count == 6){
						// Instagram link
						if(get_field('instagram_image') != ""){
							$parseHtml .= '<a href="'.get_field('instagram_link').'" target="_blank" title="Follow us on Instagram"><img class="img-responsive width100Per" src="'. get_field('instagram_image') .'" /></a>';
						}
					}else if($count == 11){
						// Twitter link
						if(get_field('twitter_image') != ""){
							$parseHtml .= '<a href="'.get_field('twitter_link').'" target="_blank" title="Follow us on Twitter"><img class="img-responsive width100Per" src="'. get_field('twitter_image') .'" /></a>';
						}
					}else{
						$parseHtml .= '<div id="instagram-img-'.$count.'" style="background:url('. $post->images->standard_resolution->url .') center center; background-size:cover;"><img class="img-responsive width100Per" src="'. plugins_url() .'/jbd-instagram/images/sq-shim.gif" /></div>';
					}
				}else{
					$parseHtml .= '<div id="instagram-img-'.$count.'" style="background:url('. $post->images->standard_resolution->url .') center center; background-size:cover;"><img class="img-responsive width100Per" src="'. plugins_url() .'/jbd-instagram/images/sq-shim.gif" /></div>';
				}
				
				$parseHtml .= '</div>';
				$count ++;
				if($count >= $max_to_show){
					break;
				}

			}
			$parseHtml .= '<div class="instagram-icon"><a href="'.$inst_url.'" target="_blank" title="Visit us on Instagram">
				<span class="fa fa-instagram"  aria-hidden="true"></span>
				</a></div>';
			$parseHtml .= '</div></div>';
			$parseHtml .= '</section><!-- /.row -->';
		}
		

		return $parseHtml;
		endwhile;
		
		wp_reset_query();
	}
	
	add_shortcode('jbd_instagram', 'jbd_instagram_shortcode');
	
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


	$cssFileName = $dir.$pluginFolder.'/instagram_plugin_style_override.css';
	if(!file_exists ( $cssFileName )){
		$dateStamp = date("F jS, Y", strtotime(now));
		$fileContent = '
/**
 * Plugin Name: JBD Instagram Feed
 * Author: Sanka Abeysinghe
 * Author URI: http://www.howhigh.ca
 * Date: November 15th, 2016
 * 
 * Override the plugin styles
 *
**/

#social_slider_full{

}

ol.carousel-indicators li{

}

ol.carousel-indicators li.active{

}

div.leftContainer{

}

div.leftContainer span{

}

div.rightContainer{

}

div.rightContainer span{

}

.owl-prev{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	z-index: 10000;
	left: 40px;
}

.owl-next{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	z-index: 10000;
	right: 40px;
}

.owl-prev span, .owl-next span{
	color: #4fb3cf;
	font-size: 8.6rem;
}

.section-heading{
	display: none;
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
	function que_override_instagramcss($pluginFolder, $verDate = null) {
		$css_override_path = get_bloginfo( 'stylesheet_directory' ) . '/plugins/'.$pluginFolder.'/instagram_plugin_style_override.css';
		wp_enqueue_style('instgram_plugin_css', $css_override_path, '', $verDate);
	}

	if ( ! is_admin() && $GLOBALS['pagenow'] !== "wp-login.php") {
		add_action( 'wp_enqueue_scripts', 'que_override_instagramcss', 110, 2 );
		do_action( 'wp_enqueue_scripts', $pluginFolder, $verDate );
	} else {
		//echo "You are viewing the WordPress Administration Panels";
	}

}

// initiate the carousel plugin
add_action( 'init', 'register_instagram' );

// this is what we use for the Instagram feed
function rudr_instagram_api_curl_connect( $api_url ){
	$connection_c = curl_init(); // initializing
	curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
	curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
	curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
	$json_return = curl_exec( $connection_c ); // connect and get json data
	curl_close( $connection_c ); // close connection
	return json_decode( $json_return ); // decode and return
}