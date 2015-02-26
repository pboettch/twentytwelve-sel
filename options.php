<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options()
{
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Front Page', 'selzeceux'),
		'type' => 'heading'
	);

	$slidecount = 4; // of_get_option('slidecount');
	for ($i = 0; $i < $slidecount; $i++) {
		$options[] = array(
			'name'  => __('Startpage Image '. $i, 'selzeceux'),
			'desc'  => __('Image (200x200) #'.$i, 'selzeceux'),
			'id'    => 'image'.$i,
			'type'  => 'upload'
		);

		$options[] = array(
			'desc' => __('Text', 'selzeceux'),
			'id' => 'imagetext'.$i,
			'std' => 'Text for '.$i,
			'type' => 'textarea'
		);
	}

	return $options;
}
