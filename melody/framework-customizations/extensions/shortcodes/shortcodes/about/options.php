<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
    ),
    'description' => array(
        'type'  => 'textarea',
        'label' => __('Описание', '{domain}'),
    ),
);
