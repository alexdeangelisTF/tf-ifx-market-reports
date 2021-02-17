<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_602cf8ac82a5f',
		'title' => 'Market Report Options',
		'fields' => array(
			array(
				'key' => 'field_602cf8bcabc1d',
				'label' => 'Market Report JSON URL',
				'name' => 'ifx_market_report_json_url',
				'type' => 'url',
				'instructions' => 'Include the IFX Market Report JSON URL here',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_602cf8fcabc1e',
				'label' => 'Market Report Title',
				'name' => 'ifx_market_report_title',
				'type' => 'text',
				'instructions' => 'This text field serves two purposes. First it is prepended to the formatted current JSON date to create a title to check. This is then checked against all posts. If no posts are found with this title, a new post is created, using this field plus the formatted date in the JSON.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
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
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-market-report-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'acfe_display_title' => '',
		'acfe_autosync' => '',
		'acfe_form' => 0,
		'acfe_meta' => '',
		'acfe_note' => '',
	));

endif;
?>