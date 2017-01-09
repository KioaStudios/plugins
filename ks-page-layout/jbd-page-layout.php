<?php
/**
	 * Plugin Name: JBD Custom Page Layout
	 * Plugin URI: http://www.howhigh.ca
	 * Description: A custom page layout plugin
	 * Version: 2
	 * Author: Sanka Abeysinghe
	 * Author URI: http://www.howhigh.ca
	 * License: GPL licence
	 */

// Register the Custom Post Type
function register_page_layout() {
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_580f9bc04b139',
		'title' => 'Featured Image Alternates',
		'fields' => array (
		array (
		'key' => 'field_580fa1f019a74',
		'label' => 'Image Settings',
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
		'key' => 'field_580f9bec93879',
		'label' => 'Tablet Screens',
		'name' => 'tablet_screens',
		'type' => 'image',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'return_format' => 'array',
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
		'key' => 'field_580f9bfa9387a',
		'label' => 'Mobile Screens - Landscape',
		'name' => 'mobile_screens_landscape',
		'type' => 'image',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'return_format' => 'array',
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
		'key' => 'field_580fa20119a75',
		'label' => 'Image Copy',
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
		'key' => 'field_580fa24419a77',
		'label' => 'Header Tag',
		'name' => 'header_tag',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'-- Select --' => '-- Select --',
		'h1' => 'H1',
		'h2' => 'H2',
		'h3' => 'H3',
		'h4' => 'H4',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580fa1b95d0b6',
		'label' => 'Header',
		'name' => 'header',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_580fa21119a76',
		'label' => 'Copy',
		'name' => 'image_copy',
		'type' => 'textarea',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '',
		'placeholder' => '',
		'maxlength' => '',
		'rows' => 4,
		'new_lines' => 'br',
	),
		array (
		'key' => 'field_5810bd079b7a1',
		'label' => 'Copy Alignment',
		'name' => 'copy_alignment',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'none' => 'None',
		'text-center' => 'Center',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5810bd7e740c8',
		'label' => 'Padding',
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
		'key' => 'field_5810bd87740c9',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5810bdb5740cb',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5810bda6740ca',
		'label' => 'Margin',
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
		'key' => 'field_5810bdcd740cc',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5810bde5740cd',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'location' => array (
		array (
		array (
		'param' => 'post_type',
		'operator' => '==',
		'value' => 'page',
	),
	),
	),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
		0 => 'the_content',
	),
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_57fd08230ed57',
		'title' => 'Page Fields',
		'fields' => array (
		array (
		'key' => 'field_57fd08549cb67',
		'label' => 'Section',
		'name' => 'section',
		'type' => 'repeater',
		'instructions' => 'Select what kind of layout you wish to have',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'collapsed' => '',
		'min' => '',
		'max' => '',
		'layout' => 'block',
		'button_label' => 'Add Section',
		'sub_fields' => array (
		array (
		'key' => 'field_58067b0d2cb8e',
		'label' => 'Section Settings',
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
		'key' => 'field_582b5a8849a9f',
		'label' => 'Section ID',
		'name' => 'section_id',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_583c9f418fc69',
		'label' => 'Section Outside of Container?',
		'name' => 'section_breakout',
		'type' => 'select',
		'instructions' => 'Select if this section should be outside the container class (full width)',
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
		0 => 'no',
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_57fd183fa8b69',
		'label' => 'Section Background',
		'name' => 'section_background',
		'type' => 'select',
		'instructions' => 'Select what kind of background to use',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'-- Select Background Type --' => '-- Select Background Type --',
		'image' => 'Image',
		'pattern1BG' => 'pattern1BG',
		'pattern2BG' => 'pattern2BG',
		'pattern3BG' => 'pattern3BG',
		'whiteBG' => 'whiteBG',
		'branded6BG' => 'branded6BG',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_57fd08929cb69',
		'label' => 'Image',
		'name' => 'image',
		'type' => 'image',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => array (
		array (
		array (
		'field' => 'field_57fd183fa8b69',
		'operator' => '==',
		'value' => 'image',
	),
	),
	),
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'return_format' => 'array',
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
		'key' => 'field_57fd08a79cb6a',
		'label' => 'Copy Position (Layout)',
		'name' => 'copy_position',
		'type' => 'select',
		'instructions' => 'Select where the copy should show',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'fullwidthimage' => 'Full Width Image',
		'copyleft' => 'Copy Left',
		'copyright' => 'Copy Right',
		'copycenter-half' => 'Copy Center-Half',
		'copycenter' => 'Copy Center',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5852efbde4a8d',
		'label' => 'Section Start Date',
		'name' => 'publish_section_startdate',
		'type' => 'date_picker',
		'instructions' => 'Select the date to publish this section.
If this is left blank the section will be displayed when published',
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
		'key' => 'field_58531445db6d2',
		'label' => 'Section End Date',
		'name' => 'publish_section_enddate',
		'type' => 'date_picker',
		'instructions' => 'Select the date to expire this section. * the section will expire at midnight of the date selected
If this is left blank the section will be displayed when published',
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
		'key' => 'field_5852ee51e4a8c',
		'label' => 'Disable Section',
		'name' => 'disable_section',
		'type' => 'checkbox',
		'instructions' => 'Check this box if you want this section to be disabled.
Please note that the content will be available for future use. This will overwrite any date settings above',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'true' => 'Yes',
	),
		'default_value' => array (
	),
		'layout' => 'vertical',
		'toggle' => 0,
		'return_format' => 'value',
	),
		array (
		'key' => 'field_580e27d8a80c1',
		'label' => 'Section Call to Action',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => array (
		array (
		array (
		'field' => 'field_57fd183fa8b69',
		'operator' => '==',
		'value' => 'image',
	),
	),
	),
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'placement' => 'left',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_5810e95609130',
		'label' => 'A Tag Title',
		'name' => 'a_tag_title',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_5810e6d901c3b',
		'label' => 'Screen Reader Copy',
		'name' => 'screen_reader_copy',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_580e2806a80c2',
		'label' => 'External Link',
		'name' => 'external_link',
		'type' => 'url',
		'instructions' => '',
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
		'key' => 'field_580e2821a80c3',
		'label' => 'Internal Link',
		'name' => 'internal_link',
		'type' => 'page_link',
		'instructions' => '',
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
		'allow_archives' => 1,
		'multiple' => 0,
	),
		array (
		'key' => 'field_580e2841a80c4',
		'label' => 'Anchor',
		'name' => 'anchor',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_58067b322cb8f',
		'label' => 'Section Content',
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
		'key' => 'field_57fd0c0eb1d62',
		'label' => 'Content',
		'name' => 'content',
		'type' => 'flexible_content',
		'instructions' => 'Flexible Copy Content',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'button_label' => 'Add Content',
		'min' => '',
		'max' => '',
		'layouts' => array (
		array (
		'key' => '57fd0c2363c73',
		'name' => 'header',
		'label' => 'Header',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f72557d350',
		'label' => 'Header Content',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_57fd219eaafa8',
		'label' => 'Tag',
		'name' => 'tag',
		'type' => 'select',
		'instructions' => 'Select the Tag',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'-- Select --' => '-- Select --',
		'h2' => 'H2',
		'h3' => 'H3',
		'h4' => 'H4',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_57fd08c69cb6b',
		'label' => 'Title Text',
		'name' => 'title_text',
		'type' => 'text',
		'instructions' => 'Enter the Title you wish to use',
		'required' => 0,
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
		'key' => 'field_57fd09929cb73',
		'label' => 'Title Text Colour',
		'name' => 'title_text_colour',
		'type' => 'color_picker',
		'instructions' => 'Select The Colour to Choose',
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
		'key' => 'field_57fd1be9a8b6a',
		'label' => 'Title Alignment Overwrite',
		'name' => 'title_alignment_overwrite',
		'type' => 'select',
		'instructions' => 'Modify the Text Alignment from the defualt',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'none' => 'None',
		'left' => 'Left',
		'center' => 'Center',
		'right' => 'Right',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_57fd220baafa9',
		'label' => 'Stylize',
		'name' => 'stylize',
		'type' => 'radio',
		'instructions' => 'Stylize the Header',
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
		'allow_null' => 0,
		'other_choice' => 0,
		'save_other_choice' => 0,
		'default_value' => 'no',
		'layout' => 'horizontal',
		'return_format' => 'value',
	),
		array (
		'key' => 'field_57fd2254aafaa',
		'label' => 'Stylize Type',
		'name' => 'stylize_type',
		'type' => 'select',
		'instructions' => 'Select the style type',
		'required' => 0,
		'conditional_logic' => array (
		array (
		array (
		'field' => 'field_57fd220baafa9',
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
		'choices' => array (
		'-- Select --' => '-- Select --',
		'branded1Title' => 'Branded 1 Title',
		'branded2Title' => 'Branded 2 Title',
		'branded3Title' => 'Branded 3 Title',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f728c7d351',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_580679247ddbe',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5806799b7ddbf',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f731cba734',
		'label' => 'Margins',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58067fef1886c',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58067fef1886d',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
		array (
		'key' => '57fd0c6fb1d63',
		'name' => 'content',
		'label' => 'Content',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f7357ba736',
		'label' => 'Copy Content',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_57fd08e29cb6c',
		'label' => 'Copy',
		'name' => 'copy',
		'type' => 'textarea',
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
		'maxlength' => '',
		'rows' => '',
		'new_lines' => 'br',
	),
		array (
		'key' => 'field_57fd097b9cb72',
		'label' => 'Copy Colour',
		'name' => 'copy_colour',
		'type' => 'color_picker',
		'instructions' => 'Select The Colour to Choose',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'default_value' => '#XXXXXX',
	),
		array (
		'key' => 'field_57fd1c25a8b6b',
		'label' => 'Copy Alignment Overwrite',
		'name' => 'copy_alignment_overwrite',
		'type' => 'select',
		'instructions' => 'Modify the Text Alignment from the defualt',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'none' => 'None',
		'left' => 'Left',
		'center' => 'Center',
		'right' => 'Right',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7373ba737',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58067fa318866',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58067fa318867',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f737eba738',
		'label' => 'Margin',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58067ff11886f',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58067ff118870',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
		array (
		'key' => '57fd0cafb1d65',
		'name' => 'call_to_action',
		'label' => 'Call to Action',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f73bdba73b',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_57fd09129cb6d',
		'label' => 'Call To Action Copy',
		'name' => 'call_to_action_copy',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_57fd09249cb6e',
		'label' => 'Call To Action Link Title',
		'name' => 'call_to_action_link_title',
		'type' => 'text',
		'instructions' => 'This is the a tag title',
		'required' => 0,
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
		'key' => 'field_57fd09359cb6f',
		'label' => 'Call To Action (external)',
		'name' => 'call_to_action_external',
		'type' => 'url',
		'instructions' => 'Select an External Page to link to. (this is optional)',
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
		'key' => 'field_57fd09499cb70',
		'label' => 'Call To Action (internal)',
		'name' => 'call_to_action_internal',
		'type' => 'page_link',
		'instructions' => 'Select an Internal Page to link to. (this is optional)',
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
		'allow_archives' => 1,
		'multiple' => 0,
	),
		array (
		'key' => 'field_57fd09629cb71',
		'label' => 'Anchor',
		'name' => 'anchor',
		'type' => 'text',
		'instructions' => 'This is the anchor if you need to drop to a specific location, this fields requires the link above to be active',
		'required' => 0,
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
		'key' => 'field_57fd09d29cb74',
		'label' => 'Call to Action Button',
		'name' => 'call_to_action_button',
		'type' => 'text',
		'instructions' => 'Enter the button text',
		'required' => 0,
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
		'key' => 'field_57fd09f89cb75',
		'label' => 'Button Colour',
		'name' => 'button_colour',
		'type' => 'color_picker',
		'instructions' => 'Select The Colour to Choose',
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
		'key' => 'field_57fd1c72a8b6c',
		'label' => 'Call to Action Alignment Overwrite',
		'name' => 'call_to_action_alignment_overwrite',
		'type' => 'select',
		'instructions' => 'Modify the Text Alignment from the defualt',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'none' => 'None',
		'left' => 'Left',
		'center' => 'Center',
		'right' => 'Right',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f73a5ba73a',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_5809102fcc3e5',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5809103bcc3e6',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7399ba739',
		'label' => 'Margin',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58091048cc3e7',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58091051cc3e8',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
		array (
		'key' => '57fd24e143dd1',
		'name' => 'image',
		'label' => 'Image',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f73faba73c',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_57fd24e143dd9',
		'label' => 'Image',
		'name' => 'image',
		'type' => 'image',
		'instructions' => 'select an image to be added',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'return_format' => 'array',
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
		'key' => 'field_57fd253043dda',
		'label' => 'Image Alignment Overwrite',
		'name' => 'image_alignment_overwrite',
		'type' => 'select',
		'instructions' => 'Modify the Image Alignment from the defualt',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'none' => 'None',
		'left' => 'Left',
		'center' => 'Center',
		'right' => 'Right',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7410ba73e',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58067fc118869',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58067fc11886a',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f741cba73f',
		'label' => 'Margin',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58067a827ddc1',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_58067a827ddc2',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
		array (
		'key' => '580789f903433',
		'name' => 'grid',
		'label' => 'Grid',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f7442ba742',
		'label' => 'Grid Settings',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58078a220343b',
		'label' => 'Grid Size',
		'name' => 'grid_size',
		'type' => 'select',
		'instructions' => 'Select the Grid Size',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'-- Select Grid --' => '-- Select Grid --',
		2 => '2 Column Grid',
		3 => '3 Column Grid',
		4 => '4 Column Grid',
		6 => '6 Column Grid',
		12 => '12 Column Grid',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5807c990747ea',
		'label' => 'Grid with Gutter?',
		'name' => 'grid_with_gutter',
		'type' => 'select',
		'instructions' => 'Should this grid have a gutter?',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'Yes' => 'Yes',
		'no-gutters' => 'No',
	),
		'default_value' => array (
		0 => 'no-gutters',
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 0,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7455ba743',
		'label' => 'Grid Content',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58079ec5396f0',
		'label' => 'Grid Repeater',
		'name' => 'grid_repeater',
		'type' => 'repeater',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'collapsed' => 'field_58078b5c0343c',
		'min' => '',
		'max' => '',
		'layout' => 'block',
		'button_label' => 'Add Grid Item',
		'sub_fields' => array (
		array (
		'key' => 'field_58078b5c0343c',
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
		'return_format' => 'array',
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
		'key' => 'field_5807b051bc251',
		'label' => 'Title',
		'name' => 'title',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_580a655c43634',
		'label' => 'Tagline',
		'name' => 'tagline',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_58078b690343d',
		'label' => 'Content',
		'name' => 'content',
		'type' => 'textarea',
		'instructions' => '',
		'required' => 0,
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
		'new_lines' => 'wpautop',
	),
		array (
		'key' => 'field_58078b8c0343e',
		'label' => 'Link',
		'name' => 'link',
		'type' => 'page_link',
		'instructions' => 'Select a page link if needed',
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
		'allow_archives' => 1,
		'multiple' => 0,
	),
		array (
		'key' => 'field_5807cbc8ba56d',
		'label' => 'Anchor',
		'name' => 'anchor',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
		'key' => 'field_58078c220343f',
		'label' => 'Screen Reader Text',
		'name' => 'screen_reader_text',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
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
	),
	),
		array (
		'key' => 'field_580f742bba740',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_58078a150343a',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580789f903437',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7436ba741',
		'label' => 'Margin',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_580789f903438',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580789f903439',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
		array (
		'key' => '5808f596266a6',
		'name' => 'form_shortcode',
		'label' => 'Form Shortcode',
		'display' => 'block',
		'sub_fields' => array (
		array (
		'key' => 'field_580f7463ba744',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_5808f596266a7',
		'label' => 'Shortcode',
		'name' => 'shortcode',
		'type' => 'text',
		'instructions' => 'enter the shortcode for the form',
		'required' => 0,
		'conditional_logic' => '',
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
		'key' => 'field_580f7470ba745',
		'label' => 'Padding',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_5808f596266b0',
		'label' => 'Padding Top',
		'name' => 'padding_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-t0' => 'Padding Top 0px',
		'padding-t10' => 'Padding Top 10px',
		'padding-t20' => 'Padding Top 20px',
		'padding-t30' => 'Padding Top 30px',
		'padding-t40' => 'Padding Top 40px',
		'padding-t50' => 'Padding Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5808f596266b1',
		'label' => 'Padding Bottom',
		'name' => 'padding_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'padding-b0' => 'Padding Bottom 0px',
		'padding-b10' => 'Padding Bottom 10px',
		'padding-b20' => 'Padding Bottom 20px',
		'padding-b30' => 'Padding Bottom 30px',
		'padding-b40' => 'Padding Bottom 40px',
		'padding-b50' => 'Padding Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_580f7476ba746',
		'label' => 'Margin',
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
		'placement' => 'top',
		'endpoint' => 0,
	),
		array (
		'key' => 'field_5808f596266b2',
		'label' => 'Margin Top',
		'name' => 'margin_top',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-t0' => 'Margin Top 0px',
		'margin-t10' => 'Margin Top 10px',
		'margin-t20' => 'Margin Top 20px',
		'margin-t30' => 'Margin Top 30px',
		'margin-t40' => 'Margin Top 40px',
		'margin-t50' => 'Margin Top 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
		array (
		'key' => 'field_5808f596266b3',
		'label' => 'Margin Bottom',
		'name' => 'margin_bottom',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => '',
		'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
		'choices' => array (
		'margin-b0' => 'Margin Bottom 0px',
		'margin-b10' => 'Margin Bottom 10px',
		'margin-b20' => 'Margin Bottom 20px',
		'margin-b30' => 'Margin Bottom 30px',
		'margin-b40' => 'Margin Bottom 40px',
		'margin-b50' => 'Margin Bottom 50px',
	),
		'default_value' => array (
	),
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 0,
		'ajax' => 1,
		'return_format' => 'array',
		'placeholder' => '',
	),
	),
		'min' => '',
		'max' => '',
	),
	),
	),
	),
	),
	),
		'location' => array (
		array (
		array (
		'param' => 'post_type',
		'operator' => '==',
		'value' => 'page',
	),
	),
	),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
		0 => 'the_content',
	),
		'active' => 1,
		'description' => '',
	));

	endif;
	
	
	// custom layout loop
	function jbd_customLayoutLoop(){
		while ( have_posts() ) : the_post();

		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

			/*$thumbnail_id = get_post_thumbnail_id($post->ID);
			$thumbnail_object = get_post($thumbnail_id); 
			echo '<div>';
			echo '<img src="'.$thumbnail_object->guid.'" alt="'.$thumbnail_object->title.'" class="img-responsive width100Per hidden-xs" />';
			if(get_field('mobile_screens_landscape')){
				echo '<img src="'.get_field('mobile_screens_landscape')['url'].'" alt="'.$thumbnail_object->title.'" class="img-responsive width100Per visible-xs" />';	
			}
			echo '</div>';
			*/
			if(get_field('mobile_screens_landscape')){

				echo '<section class="whiteBG visible-xs mobile-only">';
				echo '<div class="container">
						<div class="row">';
				echo '<div class="col-md-12">';
				echo '<'.get_field('header_tag')['value'].' class="text-center brandedFont2 branded1 margin-t0 margin-b0 padding-t0 padding-b0">'. get_field('header') .'</'.get_field('header_tag')['value'].'>';
				echo '<p class="'.get_field('copy_alignment')['value'].' '.get_field('padding_top')['value'].' '.get_field('padding_bottom')['value'].' '.get_field('margin_top')['value'].' '.get_field('margin_bottom')['value'].'">'.get_field('image_copy') .'</p>';
				echo '</div>
						</div>
					</div>
				</section>';
			}
		}

		// build the data array
		$tplData = array(
			'title'=>get_the_title(),
			'section'=> jbd_getContentSections(),
		);

		// loop through the sections
		for($i = 0; $i < count($tplData['section']); $i++){
			$inDateRange = false;

			if($tplData['section'][$i]['startDate_date'] != "" && $tplData['section'][$i]['endDate_date'] != ""){
				$startDate = strtotime($tplData['section'][$i]['startDate_date']);
				$endDate = strtotime($tplData['section'][$i]['endDate_date'] . ' + 24 hours');
				$currentDate = strtotime('now');
			}else{
				$startDate = strtotime('now');
				$endDate = strtotime('now' . ' + 24 hours');
				$currentDate = strtotime('now');
			}

			if($currentDate >= $startDate && $currentDate <= $endDate){
				$inDateRange = true;	
			}

			$dissableSection = $tplData['section'][$i]['dissable'];

			if($dissableSection == true){
				$showSection = "hidden";
			}else{
				$showSection = "show";
			}
			
			// check the section type
			if($inDateRange == true){
				if($tplData['section'][$i]['section_background'] == "image"){ // it's an image
					$sectionType = "image";
					$imageHeight = $tplData['section'][$i]['background_image']['height'];

					if($imageHeight == 700){
						echo '<section id="' . $tplData['section'][$i]['section_id'] . '" '.($sectionType?'class="background-image '.$showSection.'" ':"class=\"'.$showSection.'\"").'style="background:url('.$tplData['section'][$i]['background_image']['url'].') center center; background-size:cover;" class="'.$showSection.'">';
					}else{
						echo '<section id="' . $tplData['section'][$i]['section_id'] . '" '.($sectionType?'class="background-image-c2a '.$showSection.'" ':"class=\"'.$showSection.'\"").'style="background:url('.$tplData['section'][$i]['background_image']['url'].') center center; background-size:cover;" class="'.$showSection.'">';
					}

					if($tplData['section'][$i]['section_ext_link'] != ""){ // if it's an external link then
						echo '<a title="'.$tplData['section'][$i]['a_tag_title'].'" href="'.$tplData['section'][$i]['section_ext_link'].($tplData['section'][$i]['section_link_anchor']?'#'.$tplData['section'][$i]['section_link_anchor']:"").'" target="_blank">';
						echo '<span class="sr-only">'.$tplData['section'][$i]['screen_reader_content'].' - Opens in new window</span>';
					}else if($tplData['section'][$i]['section_int_link'] != ""){ // if it's an internal link then
						echo '<a title="'.$tplData['section'][$i]['a_tag_title'].'" href="'.$tplData['section'][$i]['section_int_link'].($tplData['section'][$i]['section_link_anchor']?'#'.$tplData['section'][$i]['section_link_anchor']:"").'">';
						echo '<span class="sr-only">'.$tplData['section'][$i]['screen_reader_content'].'</span>';
					}
					if($imageHeight == 700){
						echo '<img src="'. get_bloginfo( 'stylesheet_directory' ) . '/images/place-holder1920-700.gif" alt="'.$tplData['section'][$i]['background_image']['alt'].'" class="img-responsive width100Per" />';
					}else{
						echo '<img src="'. get_bloginfo( 'stylesheet_directory' ) . '/images/place-holder1920-223.gif" alt="'.$tplData['section'][$i]['background_image']['alt'].'" class="img-responsive width100Per" />';	
					}		


					if($tplData['section'][$i]['section_ext_link'] != ""){ // if it's an external link then
						echo '</a>'; // close the a tag
					}else if($tplData['section'][$i]['section_int_link'] != ""){ // if it's an internal link then
						echo '</a>'; // close the a tag
					}
				}else if($tplData['section'][$i]['section_breakout'] == "yes"){
					$breakout = true;
				}else{ // not an image section
					$sectionType = "";
					echo '<section id="' . $tplData['section'][$i]['section_id'] . '" class="'. $tplData['section'][$i]['section_background'] .' padding-t50  padding-b50 '.$showSection.'">';
				}

				// if this is the section content (the individual section content)
				foreach($tplData['section'][$i]['section_content'] as $tplIndex => $tplContent){
					if($breakout == true){ // the override template file name
						$divClass = "";
						$divMarginLeft = "margin-r0";
						$paddingR = "padding-r0";
					}else{
						$divClass = "container";
						$divMarginLeft = "";
						$paddingR = "";
					}

					echo '<div class="'.$divClass.'">
							<div class="row '.$divMarginLeft.'">';
					if($tplContent['txtColor'] != "#XXXXXX"){
						$titleStyle = ($tplContent['txtColor']?'style="color:'.$tplContent['txtColor'].' !important;"':"");
					}

					// align overwrites
					if($tplContent['txtAlign'] != ""){
						$titleOvrWrite = "text-".$tplContent['txtAlign'];
					}else{
						$titleOvrWrite = "text-center";	
					}

					if($tplContent['contentAlign'] != ""){
						$contentOvrWrite = "text-".$tplConten['contentAlign'];
					}else{
						$contentOvrWrite = "text-center";	
					}

					if($tplContent['c2a']['alignmnt'] != ""){
						$c2aOvrWrite = "text-".$tplContent['c2a']['alignmnt'];
					}else{
						$c2aOvrWrite = "text-center";	
					}

					if($tplContent['imgAlgnOwrt'] != ""){
						$imgOvrWrite = "text-".$tplContent['imgAlgnOwrt'];
					}else{
						$imgOvrWrite = "";	
					}

					// header section
					if($tplContent['title'] != ""){ 
						echo '<div class="col-md-12">';
						if($tplContent['style'] != ""){ // removed brandedTitle2Lines
							echo '<'.$tplContent['tag'].' class="'.$titleOvrWrite.' brandedFont2 branded1 brandedTitle pull-left '. $tplContent['style'] .' '. $tplContent['txtmarginTop']. ' ' .$tplContent['txtmarginBottom']. ' ' .$tplContent['txtpaddingTop']. ' ' .$tplContent['txtpaddingBottom'].'" '.$titleStyle.'>'. $tplContent['title'] .'</'.$tplContent['tag'].'>';
						}else{
							echo '<'.$tplContent['tag'].' class="'.$titleOvrWrite.' branded1 '. $tplContent['style'] .' '. $tplContent['txtmarginTop']. ' ' .$tplContent['txtmarginBottom']. ' ' .$tplContent['txtpaddingTop']. ' ' .$tplContent['txtpaddingBottom'].'" '.$titleStyle.'>'. $tplContent['title'] .'</'.$tplContent['tag'].'>';
						}
						echo '</div>';
					};

					// copy section
					if($tplContent['content'] != ""){
						echo '<div class="col-md-12">';
						echo '<p class="'.$contentOvrWrite.' '.$tplContent['contentmarginTop']. ' ' .$tplContent['contentmarginBottom']. ' ' .$tplContent['contentpaddingTop']. ' ' .$tplContent['contentpaddingBottom'].'">'.$tplContent['content'].'</p>';
						echo '</div>';
					};

					// c2a section
					if(count($tplContent['c2a']) != 0){
						echo '<div class="'.$c2aOvrWrite.' col-md-12 '.$tplContent['c2amarginTop'].' '.$tplContent['c2amarginBottom'].' '.$tplContent['c2apaddingTop'].' '.$tplContent['c2apaddingBottom'].'">';
						// internal link
						if($tplContent['c2a']['link_int']){
							echo ($tplContent['c2a']['title'] && $tplContent['c2a']['link_int']?'<p class="'.$c2aOvrWrite.' margin-t40"><a class="branded1BG white btn btn-sm btn-NoBR uppercase" href="'.$tplContent['c2a']['link_int'].'" title="'.$tplContent['c2a']['title'].'">'.$tplContent['c2a']['btn'].' <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>':"");
						}

						// external link
						if($tplContent['c2a']['link_ext']){
							echo ($tplContent['c2a']['title'] && $tplContent['c2a']['link_ext']?'<p class="'.$c2aOvrWrite.' margin-t40"><a class="branded1BG white btn btn-sm btn-NoBR uppercase" href="'.$tplContent['c2a']['link_ext'].'"target="_blank" title="'.$tplContent['c2a']['title'].'">'.$tplContent['c2a']['btn'].' <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>':"");
						}
						echo '</div>';
					};

					// image section
					if($tplContent['image'] != ""){
						echo '<div class="'.$imgOvrWrite.' col-md-12 '.$tplContent['imgmarginTop'].' '.$tplContent['imgmarginBottom'].' '.$tplContent['imgpaddingTop'].' '.$tplContent['imgpaddingBottom'].'">';
						echo '<img src="'. $tplContent['image'] .'" alt="'. $tplContent['imageAlt'] .'" />';
						echo '</div>';	
					};

					// grid section
					if($tplContent['gridsize'] != ""){
						$gridItemColSize = 12/$tplContent['gridsize'];
						echo '<div class="row '. $tplContent['gridGutter']['value'] .'">';
						foreach($tplContent['gridItems'] as $tpl_mindex => $tpl_gridItem){
							echo ($tpl_gridItem['link'])?'<a href="'. $tpl_gridItem['link'] .'#'.$tpl_gridItem['anchor'].'" title="'. $tpl_gridItem['title'] .'">':'';
							if($tpl_gridItem['link']){
								if($tpl_gridItem['image']){
									echo '<span class="sr-only">'. $tpl_gridItem['screenreader'] .'</span>';
								}
							}
							echo '<div class="page-grid col-md-'. $gridItemColSize . ( $tpl_gridItem['content'] ?" margin-b50":" margin-b10") . ( $tpl_gridItem['link'] ?" padding-l0 padding-r0":""). '">'; // checks the description if it doesn't exit a tighter margin bottom.
							// the grid items
							echo ($tpl_gridItem['image'])?'<img src="'. $tpl_gridItem['image'] .'" alt="'. $tpl_gridItem['alt'] .'" class="img-responsive width100Per" />':'';
							echo ($tpl_gridItem['title'])?'<h5 class="branded1 margin-t10 margin-b20 text-center">'. $tpl_gridItem['title'] .'</h5>':'';
							echo ($tpl_gridItem['gridContent'])?$tpl_gridItem['gridContent']:'';

							echo '</div>';	
							echo ($tpl_gridItem['link'])?'</a>':'';

							if($tpl_mindex % $tplContent['gridsize'] == $tplContent['gridsize']-1){
								echo '<div class="col-md-12"></div>';
							}
						}
						echo '</div>';	
					}

					// shortcode section
					if($tplContent['scode'] != ""){
						echo '<div class="col-md-12 '.$tplContent['scodemarginTop'].' '.$tplContent['scodemarginBottom'].' '.$tplContent['scodepaddingTop'].' '.$tplContent['scodepaddingBottom'].' ' .$paddingR. '">';
							echo do_shortcode($tplContent['scode']);
						echo '</div>';
					}

					echo '</div>'; // row
					echo '</div>'; // container
				}
				echo '</section>'; // close the section
			}
		}
		endwhile;
	}
	
	// add the action
	add_action( 'jbd_content_area', 'jbd_customLayoutLoop' );
	
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


	$cssFileName = $dir.$pluginFolder.'/pagelayout_plugin_style_override.css';
	if(!file_exists ( $cssFileName )){
		$dateStamp = date("F jS, Y", strtotime(now));
		$fileContent = '
	/**
	 * Plugin Name: JBD Page Layout
	 * Author: Sanka Abeysinghe
	 * Author URI: http://www.howhigh.ca
	 * Date: '.$dateStamp.'
	 * 
	 * Override the plugin styles
	 *
	**/


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
	function que_override_pageLayoutcss($pluginFolder, $verDate = null) {
		$css_override_path = get_bloginfo( 'stylesheet_directory' ) . '/plugins/'.$pluginFolder.'/pagelayout_plugin_style_override.css';
		wp_enqueue_style('pagelayout_carousel_plugin_css', $css_override_path, '', $verDate);
	}
	
	
	if ( ! is_admin() && $GLOBALS['pagenow'] !== "wp-login.php") {
		add_action( 'wp_enqueue_scripts', 'que_override_pageLayoutcss', 130, 2 );
		do_action( 'wp_enqueue_scripts', $pluginFolder, $verDate );
	}
}

// initiate the carousel plugin
add_action( 'init', 'register_page_layout' );


// get the content section
function jbd_getContentSections(){
	$rows = get_field('section');	
	

	// create a new instance of the section array
	$section = array();
	// the section repeater
	if($rows){
		// the section repeater
		for($i = 0; $i < count($rows); $i++){
			// section content
			$subsectionrows = $rows[$i]['content'];
			// create a new isntance of the sectionContent array
			$sectionContent = array();

			for($j = 0; $j < count($subsectionrows); $j++){
				if( $subsectionrows[$j]['acf_fc_layout'] == 'header' ){ // the header content type
					$type = 'header';
					// the header type
					$tag = $subsectionrows[$j]['tag']['value'];
					$ttlText = $subsectionrows[$j]['title_text'];
					$txtColour = $subsectionrows[$j]['title_text_colour'];
					$txtAlgnOwrt = $subsectionrows[$j]['title_alignment_overwrite']['value'];
					$txtStylize = $subsectionrows[$j]['stylize_type']['value'];								
					// the padding
					$txtpaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$txtpaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$txtmarginTop = $subsectionrows[$j]['margin_top']['value'];
					$txtmarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'bg'=>$background['value'],

						'tag'=>$tag,
						'style'=>$txtStylize,
						'title'=>$ttlText,
						'txtColor'=>$txtColour,
						'txtAlign'=>$txtAlgnOwrt,
						'txtStyl'=>$txtStylize,
						'txtmarginTop'=>$txtmarginTop,
						'txtmarginBottom'=>$txtmarginBottom,
						'txtpaddingTop'=>$txtpaddingTop,
						'txtpaddingBottom'=>$txtpaddingBottom,
					);

				}else if( $subsectionrows[$j]['acf_fc_layout'] == 'content' ){ // content content type
					$type = 'copy';
					// copy content
					$cntnt = $subsectionrows[$j]['copy'];
					$cntntClr = $subsectionrows[$j]['copy_colour'];
					$cntntAlgnOwrt = $subsectionrows[$j]['copy_alignment_overwrite']['value'];
					// the padding
					$cntpaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$cntpaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$cntmarginTop = $subsectionrows[$j]['margin_top']['value'];
					$cntmarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'bg'=>$background['value'],

						'content'=>$cntnt,
						'contentColor'=>$cntntClr,
						'contentAlign'=>$cntntAlgnOwrt,
						'contentmarginTop'=>$cntmarginTop,
						'contentmarginBottom'=>$cntmarginBottom,
						'contentpaddingTop'=>$cntpaddingTop,
						'contentpaddingBottom'=>$cntpaddingBottom,

					);

				}else if( $subsectionrows[$j]['acf_fc_layout'] == 'call_to_action' ){ // call to acion content type
					$type = 'c2a';
					// call to action
					$c2aCopy = $subsectionrows[$j]['call_to_action_copy'];
					$c2aLnkTtl = $subsectionrows[$j]['call_to_action_link_title'];
					$c2aExtLink = $subsectionrows[$j]['call_to_action_external'];
					$c2aIntLink = $subsectionrows[$j]['call_to_action_internal'];
					$c2aAnchor = $subsectionrows[$j]['anchor'];
					$c2aBtn = $subsectionrows[$j]['call_to_action_button'];
					$c2aBtnClr = $subsectionrows[$j]['button_colour'];
					$c2aAlgnOwrt = $subsectionrows[$j]['call_to_action_alignment_overwrite']['value'];

					// the padding
					$c2apaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$c2apaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$c2amarginTop = $subsectionrows[$j]['margin_top']['value'];
					$c2amarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					$c2aArray = array( 
						'copy' => $c2aCopy,
						'title' => $c2aLnkTtl,
						'link_ext' => $c2aExtLink,
						'link_int' => $c2aIntLink,
						'link_anchr' => $c2aAnchor,
						'btn' => $c2aBtn,
						'btnColor' => $c2aBtnClr,
						'alignmnt' => $c2aAlgnOwrt,
					);

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'bg'=>$background['value'],


						'c2a'=>$c2aArray,
						'c2amarginTop'=>$c2amarginTop,
						'c2amarginBottom'=>$c2amarginBottom,
						'c2apaddingTop'=>$c2apaddingTop,
						'c2apaddingBottom'=>$c2apaddingBottom,
					);

				}else if( $subsectionrows[$j]['acf_fc_layout'] == 'image' ){ // image content type
					$type = 'image';
					// the image
					$img = $subsectionrows[$j]['image'];
					$imgAlgnOwrt = $subsectionrows[$j]['image_alignment_overwrite']['value'];
					// the padding
					$imgpaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$imgpaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$imgmarginTop = $subsectionrows[$j]['margin_top']['value'];
					$imgmarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'image'=>$img['url'],
						'imageAlt'=>$img['alt'],
						'imgmarginTop'=>$imgmarginTop,
						'imgmarginBottom'=>$imgmarginBottom,
						'imgpaddingTop'=>$imgpaddingTop,
						'imgpaddingBottom'=>$imgpaddingBottom,
						'bg'=>$background['value'],
						'imgAlgnOwrt'=>$imgAlgnOwrt,
					);

				}else if( $subsectionrows[$j]['acf_fc_layout'] == 'grid' ){ // grid content type
					$type = 'grid';
					// the grid
					$gridSize = $subsectionrows[$j]['grid_size']['value'];

					// grid items
					$gridItemrows = $subsectionrows[$j]['grid_repeater'];
					$gridGutter = $subsectionrows[$j]['grid_with_gutter'];

					// loop through the grid repeater
					if($gridItemrows){
						// create new instance of the grid items array
						$gridItems = array();

						// menu items repeater
						for($k = 0; $k < count($gridItemrows); $k++){
							$gridImg = $gridItemrows[$k]['image'];
							$gridTitle = $gridItemrows[$k]['title'];
							$tagline = $gridItemrows[$k]['tagline'];
							$gridContent = $gridItemrows[$k]['content'];
							$gridLink = $gridItemrows[$k]['link'];
							$gridAnchor = $gridItemrows[$k]['anchor'];
							$gridScrnRdr = $gridItemrows[$k]['screen_reader_text'];

							$gridItems[] = array(
								'image'=>$gridImg['url'],
								'alt'=>$gridImg['alt'],
								'title'=>$gridTitle,
								'tagline'=>$tagline,
								'gridContent'=>$gridContent,
								'link' => $gridLink,
								'anchor' => $gridAnchor,
								'screenreader' => $gridScrnRdr,
							);
						}
					}
					// the padding
					$gridpaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$gridpaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$gridmarginTop = $subsectionrows[$j]['margin_top']['value'];
					$gridmarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'bg'=>$background['value'],

						'gridsize'=>$gridSize,
						'gridGutter'=>$gridGutter,
						'gridItems'=>$gridItems,
						'gridmarginTop'=>$gridmarginTop,
						'gridmarginBottom'=>$gridmarginBottom,
						'gridpaddingTop'=>$gridpaddingTop,
						'gridpaddingBottom'=>$gridpaddingBottom,
					);

				}else if( $subsectionrows[$j]['acf_fc_layout'] == 'form_shortcode' ){ // shortcode content
					$type = 'shortcode';
					// the grid
					$shortCode = $subsectionrows[$j]['shortcode'];
					// the padding
					$scodepaddingTop = $subsectionrows[$j]['padding_top']['value'];
					$scodepaddingBottom = $subsectionrows[$j]['padding_bottom']['value'];
					// the margin
					$scodemarginTop = $subsectionrows[$j]['margin_top']['value'];
					$scodemarginBottom = $subsectionrows[$j]['margin_bottom']['value'];

					// section data
					$sectionContent[] = array(
						'type'=>$type,
						'size'=>'full',
						'bg'=>$background['value'],

						'scode'=>$shortCode,
						'scodemarginTop'=>$scodemarginTop,
						'scodemarginBottom'=>$scodemarginBottom,
						'scodepaddingTop'=>$scodepaddingTop,
						'scodepaddingBottom'=>$scodepaddingBottom,
					);
				}
			}
			
			// section data
			$section[] = array(
				'section_background'=>$rows[$i]['section_background']['value'],
				'section_breakout'=>$rows[$i]['section_breakout']['value'],
				'section_id'=>$rows[$i]['section_id'],
				'background_image'=>$rows[$i]['image'],
				'section_ext_link'=>$rows[$i]['external_link'],
				'section_int_link'=>$rows[$i]['internal_link'],
				'screen_reader_content'=>$rows[$i]['screen_reader_copy'],
				'a_tag_title'=>$rows[$i]['a_tag_title'],
				'section_link_anchor'=>$rows[$i]['anchor'],
				'default_copy_position'=>$rows[$i]['copy_position']['value'],
				'desc'=> $rows[$i]['section_description'],
				'section_content'=>$sectionContent,
				'dissable'=> $rows[$i]['disable_section'][0],
				'startDate_date'=> $rows[$i]['publish_section_startdate'],
				'endDate_date'=> $rows[$i]['publish_section_enddate'],
			);

		}
	}
	
	// return the array
	return $section;	
}
