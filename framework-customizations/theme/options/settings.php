<?php

$options = array(
    'option_id' => array(
        'type'  => 'text',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    )
);