<?php

$incudeArr = [
    '/core/classes/View.php',
    '/core/config/config.php',
    '/core/functions/functions.php',
    '/core/functions/form/core.php',
    '/core/functions/form/validators.php',
    '/core/functions/form/callbacks.php',
    '/core/functions/html.php',
];

foreach ($incudeArr as $filePath) {
    include ROOT . $filePath;
}