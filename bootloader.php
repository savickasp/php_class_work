<?php
session_start();

define('ROOT', __DIR__);

$incudeArr = [
    '/config/config',
    '/functions/form/callbacks',
    '/functions/form/core',
    '/functions/form/validators',
    '/functions/auth',
    '/functions/functions',
    '/functions/html',
    '/functions/tracking',
];

foreach ($incudeArr as $filePath) {
    include ROOT . $filePath . '.php';
}