<?php
/**
 * Menu callback for space/new.
 */
function mbOwner_new_space_page()
{
    $module_path= drupal_get_path('module', 'mbOwner');
    drupal_add_js($module_path. '/js/mbOwner.js');
	drupal_add_css($module_path. '/css/mbOwner.css');

	$form = drupal_get_form('mbOwner_add_new_space_form');
	return $form;
}

function mbOwner_add_new_space_form($form)
{
	$form['#attributes'] = array('class' => 'form-horizontal');

	$form['name'] = array(
		'#type' => 'textfield',
		'#title' => t('Advertiser Name'),
		'#required' => true
	);

	$form['space_details'] = array(
		'#type' => 'fieldset',
		'#title' => t('Space Details'),
	);

	$form['space_details']['space_type'] = array(
		'#type' => 'select',
		'#title' => t('Space Type'),
		'#options' => array('house' => 'House', 'apartment' => 'Apartment')
	);

	$form['space_details']['floor_area'] = array(
		'#type' => t('textfield'),
		'#title' => t('Floor Area'),
		'#append' => 'Sq. meter',
	);

	$form['space_details']['bedrooms'] = array(
		'#type' => 'select',
		'#title' => t('Bedrooms'),
		'#options' => range(1,10),
		'#help' => t("This refers to the number of rooms that have beds and are meant for sleeping. Does not include the living room."),
	);

	$form['space_details']['floor_position'] = array(
		'#type' => 'textfield',
		'#title' => t('Floor Position/ House Mala'),
	);

	$form['space_details']['description'] = array(
		'#type' => 'textarea',
		'#title' => t('Description'),
		'#cols' => 20,
		'#help' => t("Tell people about comforts and amenities, closeness to sites and attractions, and basics like internet, cable, parking. Are you a great host?  Tell them that too!")
	);

	$form['space_details']['rent'] = array(
		'#type' => 'textfield',
		'#title' => t('Rent'),
		'#append' => t('Rs.'),
		'#attributes' => array('class' => array('span2'))
	);

	$form['space_details']['negotiable'] = array(
		'#type' => 'checkbox',
		'#title' => t('Is this amount negotiable?'),
	);

	$form['contact_details'] = array(
		'#type' => 'fieldset',
		'#title' => t('Contact Details'),
	);

	$form['contact_details']['email'] = array(
		'#type' => 'textfield',
		'#title' => t('Email'),
		'#prepend' => '<i class="icon-envelope"></i>',
	);

	$form['contact_details']['phone_number'] = array(
		'#type' => t('textfield'),
		'#title' => t('Phone Number'),
		'#prepend' => '+91',
		'#help' => t('Primary Contact Number (cell or landline).'),
	);

	$form['contact_details']['phone_number'] = array(
		'#type' => t('textfield'),
		'#title' => t('Phone Number'),
		'#prepend' => '+91',
		'#help' => t('Primary Contact Number (cell or landline).'),
	);

	$form['contact_details']['address_line_1'] = array(
		'#type' => t('textfield'),
		'#title' => t('Address Line 1'),
		'#description' => t('Street address, P.O. box, company name, c/o...')
	);

	$form['contact_details']['address_line_2'] = array(
		'#type' => t('textfield'),
		'#title' => t('Address Line 2'),
		'#description' => t('Apartment, suite, unit, building, floor...'),
	);

	$form['contact_details']['city'] = array(
		'#type' => t('textfield'),
		'#title' => t('City'),
	);

	$form['contact_details']['State'] = array(
		'#type' => t('textfield'),
		'#title' => t('State'),
	);

	$form['contact_details']['zipcode'] = array(
		'#type' => t('textfield'),
		'#title' => t('Zip/Postal Code'),
	);

	$form['contact_details']['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Save and Continue'),
		'#prefix' => '<div class="form-actions">',
		'#suffix' => '</div>'
	);

	return $form;
 }