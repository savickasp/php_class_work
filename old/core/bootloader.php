<?php

$incudeArr = [
    '/core/config/config',
    '/app/functions/form/callbacks',
    '/app/functions/form/validators',
    '/core/functions/functions',
    '/core/functions/html',
    '/core/functions/core',
];

foreach ($incudeArr as $filePath) {
    include ROOT . $filePath . '.php';
}