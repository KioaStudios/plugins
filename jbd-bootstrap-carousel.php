<?php
/**
	 * Plugin Name: JBD Bootstrap Carousel
	 * Plugin URI: http://www.howhigh.ca
	 * Description: A custom post type and ACF that allows the user to add images into a carousel. This plugin assumes that you are using Bootstrap css and JS. Also it assumes that you are using a version of ACF (Advance Custom Field)
	 * Version: 2
	 * Author: Sanka Abeysinghe
	 * Author URI: http://www.howhigh.ca
	 * License: GPL licence
	 */

// echo '<a href="javascript:void callPlayer(&quot;whateverID&quot;,&quot;playVideo&quot;)">Start</a> &bull; <a href="javascript:void callPlayer(&quot;whateverID&quot;,&quot;pauseVideo&quot;)">Pause</a> &bull; <a href="javascript:void callPlayer(&quot;whateverID&quot;,&quot;stopVideo&quot;)">Stop</a> - Hover over the links to see the called function';
// Register the Custom Post Type

function register_image_carousel() {
	// the labels for the Post Type
	$labels = array(
		'name' => _x( 'Image Carousels', 'image-carousel' ),
		'singular_name' => _x( 'Image Carousel', 'image-carousel' ),
		'add_new' => _x( 'Add New', 'image-carousel' ),
		'add_new_item' => _x( 'Add New Image Carousel', 'image-carousel' ),
		'edit_item' => _x( 'Edit Image Carousel', 'image-carousel' ),
		'new_item' => _x( 'New Image Carousel', 'image-carousel' ),
		'view_item' => _x( 'View Image Carousel', 'image-carousel' ),
		'search_items' => _x( 'Search Image Carousels', 'image-carousel' ),
		'not_found' => _x( 'No image carousel found', 'image-carousel' ),
		'not_found_in_trash' => _x( 'No image carousel found in Trash', 'image-carousel' ),
		'parent_item_colon' => _x( 'Parent Image Carousels:', 'image-carousel' ),
		'menu_name' => _x( 'Image Carousels', 'image-carousel' ),
	);

	// the registration arguments
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Image carousel for any page or post within the site',
		'supports' => array( 'title', 'author' ),
		//'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-format-gallery',
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
	register_post_type( 'image-carousel', $args );

	// custom fields
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_5797623c9ec54',
		'title' => 'Carousel',
		'fields' => array (
		array (
		'key' => 'field_5797633647917',
		'label' => 'Carousel Grouping',
		'name' => 'carousel_grouping',
		'type' => 'repeater',
		'instructions' => 'Create a Grouping of images based on a collection',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'collapsed' => 'field_5797658a47921',
		'min' => '',
		'max' => '',
		'layout' => 'row',
		'button_label' => 'New Carousel Item',
		'sub_fields' => array (
		array (
		'key' => 'field_57fe59619385cc',
		'label' => 'Carousel Content',
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
		'key' => 'field_5797658a47921',
		'label' => 'Carousel Content',
		'name' => 'carousel_content',
		'type' => 'flexible_content',
		'instructions' => 'Select One Layout type',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'button_label' => 'Add Carousel Item',
		'min' => 1,
		'max' => 1,
		'layouts' => array (
		array (
		'key' => '5797658e2633b',
		'name' => 'image',
		'label' => 'Image Only',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_579765f647922',
		'label' => 'Image',
		'name' => 'image',
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
	),
		'min' => '0',
		'max' => '1',
	),
		array (
		'key' => '57c711f2453ab',
		'name' => 'image_with_description',
		'label' => 'Image With Description',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_57c711f2453ac',
		'label' => 'Image',
		'name' => 'image',
		'type' => 'image',
		'instructions' => '',
		'required' => 1,
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
		'key' => 'field_57c717bb12d83',
		'label' => 'Image Title',
		'name' => 'image_title',
		'type' => 'text',
		'instructions' => 'Enter The title for the image',
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
		'key' => 'field_57c71a2112379',
		'label' => 'Title Colour',
		'name' => 'title_colour',
		'type' => 'color_picker',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '#XXXXXX',
	),
		array (
		'key' => 'field_5797637d47918',
		'label' => 'Image Description',
		'name' => 'image_description',
		'type' => 'textarea',
		'instructions' => 'Add a description for the image',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '',
		'placeholder' => '',
		'maxlength' => '',
		'rows' => '',
		'new_lines' => '',
	),
		array (
		'key' => 'field_57c71b7a1237a',
		'label' => 'Description Colour',
		'name' => 'description_colour',
		'type' => 'color_picker',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '#XXXXXX',
	),
		array (
		'key' => 'field_57c7182f12378',
		'label' => 'CSS Animation',
		'name' => 'css_animation',
		'type' => 'select',
		'instructions' => 'Select The CSS Animation style you wish to use. Animation samples available at https://daneden.github.io/animate.css/',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'no-animation' => 'No Animation',
		'bounce' => 'Bounce',
		'flash' => 'Flash',
		'pulse' => 'Pulse',
		'rubberBand' => 'RubberBand',
		'shake' => 'Shake',
		'swing' => 'Swing',
		'tada' => 'Tada',
		'wobble' => 'Wobble',
		'jello' => 'Jello',
		'bounceIn' => 'BounceIn',
		'bounceInDown' => 'BounceInDown',
		'bounceInLeft' => 'BounceInLeft',
		'bounceInRight' => 'BounceInRight',
		'bounceInUp' => 'BounceInUp',
		'bounceOut' => 'BounceOut',
		'bounceOutDown' => 'BounceOutDown',
		'bounceOutLeft' => 'BounceOutLeft',
		'bounceOutRight' => 'BounceOutRight',
		'bounceOutUp' => 'BounceOutUp',
		'fadeIn' => 'FadeIn',
		'fadeInDown' => 'FadeInDown',
		'fadeInDownBig' => 'FadeInDownBig',
		'fadeInLeft' => 'FadeInLeft',
		'fadeInLeftBig' => 'FadeInLeftBig',
		'fadeInRight' => 'FadeInRight',
		'fadeInRightBig' => 'FadeInRightBig',
		'fadeInUp' => 'FadeInUp',
		'fadeInUpBig' => 'FadeInUpBig',
		'fadeOut' => 'FadeOut',
		'fadeOutDown' => 'FadeOutDown',
		'fadeOutDownBig' => 'FadeOutDownBig',
		'fadeOutLeft' => 'FadeOutLeft',
		'fadeOutLeftBig' => 'FadeOutLeftBig',
		'fadeOutRight' => 'FadeOutRight',
		'fadeOutRightBig' => 'FadeOutRightBig',
		'fadeOutUp' => 'FadeOutUp',
		'fadeOutUpBig' => 'FadeOutUpBig',
		'flip' => 'Flip',
		'flipInX' => 'FlipInX',
		'flipInY' => 'FlipInY',
		'flipOutX' => 'FlipOutX',
		'flipOutY' => 'FlipOutY',
		'lightSpeedIn' => 'LightSpeedIn',
		'lightSpeedOut' => 'LightSpeedOut',
		'rotateIn' => 'RotateIn',
		'rotateInDownLeft' => 'RotateInDownLeft',
		'rotateInDownRight' => 'RotateInDownRight',
		'rotateInUpLeft' => 'RotateInUpLeft',
		'rotateInUpRight' => 'RotateInUpRight',
		'rotateOut' => 'RotateOut',
		'rotateOutDownLeft' => 'RotateOutDownLeft',
		'rotateOutDownRight' => 'RotateOutDownRight',
		'rotateOutUpLeft' => 'RotateOutUpLeft',
		'rotateOutUpRight' => 'RotateOutUpRight',
		'slideInUp' => 'SlideInUp',
		'slideInDown' => 'SlideInDown',
		'slideInLeft' => 'SlideInLeft',
		'slideInRight' => 'SlideInRight',
		'slideOutUp' => 'SlideOutUp',
		'slideOutDown' => 'SlideOutDown',
		'slideOutLeft' => 'SlideOutLeft',
		'slideOutRight' => 'SlideOutRight',
		'zoomIn' => 'ZoomIn',
		'zoomInDown' => 'ZoomInDown',
		'zoomInLeft' => 'ZoomInLeft',
		'zoomInRight' => 'ZoomInRight',
		'zoomInUp' => 'ZoomInUp',
		'zoomOut' => 'ZoomOut',
		'zoomOutDown' => 'ZoomOutDown',
		'zoomOutLeft' => 'ZoomOutLeft',
		'zoomOutRight' => 'ZoomOutRight',
		'zoomOutUp' => 'ZoomOutUp',
		'hinge' => 'Hinge',
		'rollIn' => 'RollIn',
		'rollOut' => 'RollOut',
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
	),
		'min' => '0',
		'max' => '1',
	),
		array (
		'key' => '57c7128a453b5',
		'name' => 'video',
		'label' => 'Video',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_5797670e47928',
		'label' => 'video',
		'name' => 'video',
		'type' => 'oembed',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'width' => '',
		'height' => '',
	),
	),
		'min' => '0',
		'max' => '1',
	),
	),
	),
		array (
		'key' => 'field_57fe59619385dv',
		'label' => 'Carousel Values',
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
		'key' => 'field_579764814791d',
		'label' => 'URL Link (optional)',
		'name' => 'url_link',
		'type' => 'url',
		'instructions' => 'Enter a URL to an external site or page (this is optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '',
		'placeholder' => '',
	),
		array (
		'key' => 'field_579764c74791e',
		'label' => 'Page Link (optional)',
		'name' => 'page_link',
		'type' => 'page_link',
		'instructions' => 'Select a post, page or taxonomie to link this image to (optional)
DO NOT ENTER A VALUE if you have already done so in the URL LINK page',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'post_type' => array (
	),
		'taxonomy' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'allow_archives' => 1,
	),
		array (
		'key' => 'field_579764c74791f',
		'label' => 'Anchor (optional)',
		'name' => 'anchor',
		'type' => 'text',
		'instructions' => 'Enter an Anchor(optional)',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '',
		'placeholder' => '',
	),
		array (
		'key' => 'field_57c71255453b3',
		'label' => 'Start Date (optional)',
		'name' => 'start_date',
		'type' => 'date_picker',
		'instructions' => 'Select the date to start showing this image. Leave blank for immediate release',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'display_format' => 'F j, Y',
		'return_format' => 'F j, Y',
		'first_day' => 1,
	),
		array (
		'key' => 'field_57c7126f453b4',
		'label' => 'End Date (optional)',
		'name' => 'end_date',
		'type' => 'date_picker',
		'instructions' => 'Select the date to end showing this image.	Leave blank for immediate release',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'display_format' => 'F j, Y',
		'return_format' => 'F j, Y',
		'first_day' => 1,
	),
	),
	),
	),
		'location' => array (
		array (
		array (
		'param' => 'post_type',
		'operator' => '==',
		'value' => 'image-carousel',
	),
	),
		array (
		array (
		'param' => 'page_type',
		'operator' => '==',
		'value' => 'front_page',
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
	function jbd_image_carousel_shortcode($atts) {
		$a = shortcode_atts( array(
			'pagename' => '',
			'id' => '',
			'showindicators' => true,
			'showcontrols' => true,
			'keyboard' => false,
			'interval' => 5000,
			'pause' => 'hover',
			'wrap' => true,
		), $atts );		
		
				
		if($a['id'] != ''){
			$id = $a['id'];
		}else{
			$id = "";
		}
		
		if($a['pagename'] != ''){
			$pagename = $a['pagename'];
		}else{
			$pagename = "";
		}
		
		// get the slider images
		if($a['id'] != '' || $a['pagename'] != ''){
			$args = array(
				'post_type'         => 'image-carousel',
				'name'         		=> $pagename,
				'p'          		=> $id,
				'orderby'           => 'date',
				'order'             => 'desc',
				'posts_per_page'    => 1
			);
		}

		$imgCarousel = query_posts($args);
		
		while ( have_posts() ) : the_post();
			$count = 0;
			$img_count = 0;
			$link = "";
			$parseHtml = '<script type="text/javascript" src="'.plugins_url().'/jbd-bootstrap-carousel/js/jquery.viewport.js"></script>';
			$parseHtml = '<script type="text/javascript" src="'.plugins_url().'/jbd-bootstrap-carousel/js/jquery.visible.js"></script>';
			$parseHtml .= '<script type="text/javascript">';
			$parseHtml .= '
						function callPlayer(frame_id, func, args) {
							if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
							var iframe = document.getElementById(frame_id);
							if (iframe && iframe.tagName.toUpperCase() != \'IFRAME\') {
								iframe = iframe.getElementsByTagName(\'iframe\')[0];
							}
							if (iframe) {
								// Frame exists, 
								iframe.contentWindow.postMessage(JSON.stringify({
									"event": "command",
									"func": func,
									"args": args || [],
									"id": frame_id
								}), "*");
							}
						}
				';
			$parseHtml .= '</script>';
			$parseHtml .= '<script type="text/javascript">';
			$parseHtml .= '
					$(document).ready(function() {
						$(\'#mainSlider\').bind(\'slide.bs.carousel\', function (e) {

							if($(\'#iFrameVidPlayer\').visible(true, true, \'both\')){

							}else{
								callPlayer("whateverID","pauseVideo");
							}
						});
					});';
			$parseHtml .= '</script>';

			$parseHtml .= '<div id="mainSlider" class="height100Per carousel slide" data-ride="carousel" data-interval="'.$a['interval'].'" data-pause="'.$a['pause'].'" data-wrap="'.$a['wrap'].'" data-keyboard="'.$a['keyboard'].'">';

				if($a['showindicators'] == true) {
					$parseHtml .= '<!-- Indicators -->
										<ol class="carousel-indicators">';
					while( have_rows('carousel_grouping') ): the_row();

					if($count == 0){
						$active = "active";
					}else{
						$active = "";
					}
					// if the image has a start date
					if(get_sub_field('start_date') != "" && get_sub_field('end_date') != ""){
						$startDate = strtotime(get_sub_field('start_date'));
						$endDate = strtotime(get_sub_field('end_date')  . ' + 23 hours 59 minutes');
						$currentDate = strtotime('now');
					}else{
						$startDate = strtotime('now');
						$endDate = strtotime('now' . ' + 24 hours');
						$currentDate = strtotime('now');
					}

					if($currentDate >= $startDate && $currentDate <= $endDate){
						while ( have_rows('carousel_content') ) : the_row();

						$parseHtml .= '<li data-target="#mainSlider" data-slide-to="'.$count.'" class="'.$active.'"></li>';
						$count ++;
						endwhile;
					}
					endwhile;

					$parseHtml .= '</ol>';
				}

				if($a['showcontrols'] == true){
					$parseHtml .= '<!-- Indicators -->
										<!-- Left and right controls -->
										<div class="leftContainer">
											<a class="left arrows" href="#mainSlider" role="button" data-slide="prev">
												<span class="fa fa-angle-left" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
										</div>
										<div class="rightContainer">
											<a class="right arrows" href="#mainSlider" role="button" data-slide="next">
												<span class="fa fa-angle-right" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>';
				}

				$parseHtml .= '<!-- Wrapper for slides -->
									<div class="carousel-inner height100Per" role="listbox">';
				while( have_rows('carousel_grouping') ): the_row();
				if($img_count == 0){
					$active = "active";
				}else{
					$active = "";
				}

				// if the image has an external link
				if(get_sub_field('url_link') != ""){
					$urlLink = 	get_sub_field('url_link');
				}else{
					$urlLink = "";
				}

				// if the image has a page link
				if(get_sub_field('page_link') != ""){
					$pageLink = get_sub_field('page_link');
				}else{
					$pageLink = "";
				}

				// if the image has a custom link
				if(get_sub_field('anchor') != ""){
					$anchor_link = get_sub_field('anchor');
				}else{
					$anchor_link = "";
				}

				// if the image has a start date
				if(get_sub_field('start_date') != "" && get_sub_field('end_date') != ""){
					$startDate = strtotime(get_sub_field('start_date'));
					$endDate = strtotime(get_sub_field('end_date') . ' + 23 hours 59 minutes');
					$currentDate = strtotime('now');
				}else{
					$startDate = strtotime('now');
					$endDate = strtotime('now' . ' + 24 hours');
					$currentDate = strtotime('now');
				}

				if($currentDate >= $startDate && $currentDate <= $endDate){
					$parseHtml .= '<div class="carousel height100Per item '.$active.'">';
					while ( have_rows('carousel_content') ) : the_row();
						if(get_row_layout() == 'image' || get_row_layout() == 'image_with_description') {
							$imgSrc = get_sub_field('image');
							// external links
							if($urlLink != ""){
								$parseHtml .= '<a class="block height100Per" href="'.$urlLink.'" target="_blank">';
							}

							if($pageLink != ""){ // page link
								$parseHtml .= '<a class="block height100Per"  href="'.$pageLink.'">';
							}

							if($pageLink != "" && $anchor_link != ""){ // anchor link
								$parseHtml .= '<a class="block height100Per"  href="'.$pageLink.'#'.$anchor_link.'">';
							}

							$parseHtml .= '<div class="fullScreen" style="background:url('. get_sub_field('image') .') center center; background-size:cover; ">';

							//layout for a left aligned copy vertically centered.
							$titleColour = "";
							$descColour = "";
							$cssAnimation = "";

							if(get_row_layout() == 'image_with_description'){
								if(get_sub_field('title_colour') != "#XXXXXX"){
									$titleColour = get_sub_field('title_colour');
								}

								if(get_sub_field('description_colour') != "#XXXXXX"){
									$descColour = get_sub_field('description_colour');
								}

								if(get_sub_field('css_animation') != "no-animation"){
									$cssAnimation = get_sub_field('css_animation');
								}
							}
							$parseHtml .= ' <div class="width100Per panelLayout panelRightText">
																	<div class="panelCopyContainer width100Per center_vert_unknown">';
							$parseHtml .= '<div class="container">
																	<div class="col-sm-7">';
							$parseHtml .= '<h2 class="animated '.$cssAnimation.'" style="color:'.$descColour.' !important"><span class="brandedFont2 branded1" style="color:'.$titleColour.' !important">'.get_sub_field('image_title').'</span><br />'.get_sub_field('image_description').'</h2>';
							$parseHtml .= '</div>
														</div>
														</div>
														</div>';

							$parseHtml .= '</div>';

							if($urlLink != "" || $pageLink != ""){
								$parseHtml .= '</a>';
							}

							$img_count ++;
						}else{ // then it's a video
							// get iframe HTML
							$iframe = get_sub_field('video');


							// use preg_match to find iframe src
							preg_match('/src="(.+?)"/', $iframe, $matches);
							$src = $matches[1];

							// add extra params to iframe src
							$params = array(
								'enablejsapi'	=> 1,
								'controls'    	=> 1,
								'hd'        	=> 1,
								'autohide'    	=> 0,
								'auoplay'    	=> 0
							);

							$new_src = add_query_arg($params, $src);

							$iframe = str_replace($src, $new_src, $iframe);


							// add extra attributes to iframe html
							$attributes = 'id="iFrameVidPlayer" frameborder="0"';

							$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


							// echo $iframe
							$parseHtml .= '<div id="whateverID" class="embed-container">'.$iframe.'</div>';
						}
					endwhile;
					$parseHtml .= '</div>';
				}
			endwhile;
			$parseHtml .= '</div></div>';
		endwhile;
		wp_reset_query();
		
		if($a['id'] != '' || $a['pagename'] != ''){
			$data = getimagesize($imgSrc);
			$width = $data[0];
			$height = $data[1];

			$parseHtml .= '<script type="text/javascript">';
			$parseHtml .= '
							$(document).ready(function() {
								$(\'.carousel-inner\').height('.$height.');
							});';
			$parseHtml .= '</script>';
		}
		return $parseHtml;
	}
	add_shortcode('jbd_img_carousel', 'jbd_image_carousel_shortcode');

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


	$cssFileName = $dir.$pluginFolder.'/carousel_plugin_style_override.css';
	if(!file_exists ( $cssFileName )){
		$dateStamp = date("F jS, Y", strtotime(now));
		$fileContent = '

		/**
		 * Plugin Name: JBD Bootstrap Carousel
		 * Author: Sanka Abeysinghe
		 * Author URI: http://www.howhigh.ca
		 * Date: November 15th, 2016
		 * 
		 * Override the plugin styles
		 *
		**/

			#mainSlider{

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
	function que_override_carouselcss($pluginFolder, $verDate = null) {
		$css_override_path = get_bloginfo( 'stylesheet_directory' ) . '/plugins/'.$pluginFolder.'/carousel_plugin_style_override.css';
		wp_enqueue_style('carousel_plugin_css', $css_override_path, '', $verDate);
	}

	if ( ! is_admin() && $GLOBALS['pagenow'] !== "wp-login.php") {
		add_action( 'wp_enqueue_scripts', 'que_override_carouselcss', 100, 2 );
		do_action( 'wp_enqueue_scripts', $pluginFolder, $verDate );
	} else {
		//echo "You are viewing the WordPress Administration Panels";
	}

}

// initiate the carousel plugin
add_action( 'init', 'register_image_carousel' );

