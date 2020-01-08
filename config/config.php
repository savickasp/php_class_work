<?php

define('INPUT_TYPES', [
    'color',
    'date',
    'datetime-local',
    'email',
    'file', // set extra => ['attr' =>['multiple']]
    'hidden',
    'image', // set extra => ['attr' =>['src' => '', 'alt' => '']]
    'month',
    'number', // set extra => ['attr' =>['min' => '', 'max' => '']]
    'password',
    'range', // set extra => ['attr' =>['min' => '', 'max' => '', 'step' => '']]
    'reset',
    'search',
    'tel',
    'text',
    'time',
    'url',
    'week',
]);

define('DB_FILE', ROOT . '/data/db.txt');
define('STEP_TRACKING', ROOT . '/data/steps.txt');

define('ROOT_URL', 'http://phplocal.lt/php_class_work/');