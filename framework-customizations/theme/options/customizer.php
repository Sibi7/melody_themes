<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_contacts' => array(
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => array(
			'phone' => array(
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '+7 (498) 453-45-24',
			),
		),
	),
	'panel_social' => array(
		'title'   => __( 'Социальные сети', '{domain}' ),
		'options' => array(
			'skype' => array(
				'type'  => 'text',
				'label' => __( 'Skype', '{domain}' ),
				'value' => 'https://www.skype.com/',
			),
			'instagram' => array(
				'type'  => 'text',
				'label' => __( 'Instagram', '{domain}' ),
				'value' => 'https://www.instagram.com/',
			),
			'vk' => array(
				'type'  => 'text',
				'label' => __( 'Vk', '{domain}' ),
				'value' => 'http://vk.com/',
			),
		),
	),
);