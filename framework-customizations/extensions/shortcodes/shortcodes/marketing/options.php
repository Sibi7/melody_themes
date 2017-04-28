<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'services' => array(
        'type' => 'addable-popup',
        'label' => __('Услуги', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 4, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type'  => 'text',
                'label' => __('Название вкладки', '{domain}'),
            ),
            'description' => array(
                'type'  => 'textarea',
                'label' => __('Label', '{domain}'),
            ),
            'photos' => array(
                'type'  => 'multi-upload',
                'label' => __('Photos', '{domain}'),
                'images_only' => true,
            ),
            'videos' => array(
                'type'  => 'addable-option',
               /* 'value' => array('Value 1', 'Value 2', 'Value 3'),*/
                'label' => __('Videos', '{domain}'),
                'option' => array( 'type' => 'text' ),
                'sortable' => true,
            ),
            'packages' => array(
                'type' => 'addable-popup',
                'label' => __('Пакеты', '{domain}'),
                'template' => '{{- title }}',
                'popup-title' => null,
                'size' => 'large', // small, medium, large
                'limit' => 3, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'title' => array(
                        'label' => __('Название пакета', '{domain}'),
                        'type' => 'text',
                    ),
                    'price' => array(
                        'label' => __('Цена', '{domain}'),
                        'type' => 'text',
                    ),
                    'description' => array(
                        'type'  => 'wp-editor',
                        'label' => __('Label', '{domain}'),
                        'size' => 'large', // small, large
                        'editor_height' => 400,
                        'wpautop' => true,
                        'editor_type' => false, // tinymce, html
                    )
                ),
            )
        ),
    )
);
