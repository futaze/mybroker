<?php
use Entities\OwnerSpace;
use Entities\SysSpaceType;

/**
 * Menu callback for space/new.
 */
function mbOwner_new_space_page()
{
    $module_path= drupal_get_path('module', 'mbOwner');
    drupal_add_js($module_path. '/js/mbOwner.js');
	drupal_add_css($module_path. '/css/mbOwner.css');

	$params['form'] = drupal_render(drupal_get_form('mbOwner_add_new_space_form'));

	return theme('mbOwnerNewSpace',$params);
}

function mbOwner_add_new_space_form($form)
{
 global $em;

	$owner_space = new OwnerSpace();
	$owner_space->setName('Vishal');

	$space_type = $em->find('Entities\SysSpaceType',1);
	$owner_space->setSpaceType($space_type);

	$state = $em->find('Entities\SysState',1);
	$owner_space->setState($state);

	$city = $em->find('Entities\SysCity',1);
	$owner_space->setCity($city);

	//$em->persist($owner_space);
    //$em->flush();

	$owner = $em->find('Entities\OwnerSpace',1);

	$form['#attributes'] = array('class' => 'form-horizontal');

	$form['advertiser_details'] = array(
		'#type' => 'fieldset',
		'#title' => t('<span class="badge badge-inverse">1</span>Your Details'),
	);

	$form['advertiser_details']['name'] = array(
		'#type' => 'textfield',
		'#title' => t('Advertiser Name'),
		'#required' => true,
		'#attributes' => array('placeholder' => 'Your full name')
	);

	$form['advertiser_details']['email'] = array(
		'#type' => 'textfield',
		'#title' => t('Email'),
		'#prepend' => '<i class="icon-envelope"></i>',
		'#attributes' => array('placeholder' => 'Email')
	);

	$form['advertiser_details']['phone_number'] = array(
		'#type' => t('textfield'),
		'#title' => t('Phone Number'),
		'#prepend' => '+91',
		'#help' => t('Primary Contact Number (cell or landline).'),
	);

	$form['space_details'] = array(
		'#type' => 'fieldset',
		'#title' => t('<span class="badge badge-inverse">2</span>Space Details'),
	);

	$form['space_details']['space_type'] = array(
		'#type' => 'select',
		'#title' => t('Space Type'),
		'#options' => array( 1 => 'House', 2 => 'Apartment')
	);

	$form['space_details']['floor_area'] = array(
		'#type' => t('textfield'),
		'#title' => t('Floor Area'),
		'#append' => 'Sq. meter',
		'#attributes' => array('placeholder' => 'Floor Area')
	);

	$form['space_details']['bedrooms'] = array(
		'#type' => 'select',
		'#title' => t('Bedrooms'),
		'#options' => range(1,10),
		'#help' => t("This refers to the number of rooms that have beds and are meant for sleeping. Does not include the living room."),
	);

	$form['space_details']['bathrooms'] = array(
		'#type' => 'select',
		'#title' => t('Bathrooms'),
		'#options' => range(1,5),
	);

	$form['space_details']['floor_position'] = array(
		'#type' => 'textfield',
		'#title' => t('Floor Position/ House Mala'),
		'#attributes' => array('placeholder' => 'Floor Position')
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
		'#attributes' => array('class' => array('span2')),
		'#attributes' => array('placeholder' => 'Rent')
	);

	$form['space_details']['negotiable'] = array(
		'#type' => 'checkbox',
		'#title' => t('Is this amount negotiable?'),
	);

	$form['space_details']['broker_fee'] = array(
		'#type' => 'checkbox',
		'#title' => t('Broker fee applicable?'),
	);

	$form['contact_details'] = array(
		'#type' => 'fieldset',
		'#title' => t('Contact Details'),
	);

	$form['contact_details']['address_line_1'] = array(
		'#type' => t('textfield'),
		'#title' => t('Address Line 1'),
		'#description' => t('Street address, P.O. box, company name, c/o...'),
	);

	$form['contact_details']['address_line_2'] = array(
		'#type' => t('textfield'),
		'#title' => t('Address Line 2'),
		'#description' => t('Apartment, suite, unit, building, floor...'),
	);

	$form['contact_details']['city'] = array(
		'#type' => t('select'),
		'#title' => t('City'),
		'#options' => array( 1 => 'indore')
	);

	$form['contact_details']['State'] = array(
		'#type' => t('select'),
		'#title' => t('State'),
		'#options' => array( 1 => 'indore')
	);

	$form['contact_details']['locality'] = array(
		'#type' => t('textfield'),
		'#title' => t('Locality'),
	);

	$form['contact_details']['landmark'] = array(
		'#type' => t('textfield'),
		'#title' => t('Landmark (if any)'),
	);

	$form['contact_details']['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Save and Continue'),
		'#prefix' => '<div class="form-actions">',
		'#suffix' => '</div>'
	);

	return $form;
 }

function mbOwner_add_new_space_form_submit($form,$form_state)
{
	$values = (object)$form_state['values'];

}