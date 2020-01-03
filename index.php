<?php
define('ROOT', __DIR__);
include_once ROOT . '/core/bootloader.php';
include_once ROOT . '/app/views/pages/form.page.php';

if (!empty($_POST)) {
    $inputs = get_filtered_input($form);
    fill_form($form, $inputs);
    validate_form($form, $inputs);
}

$arrayTable = renderTable(file_to_array(DB_FILE));

$templates = ['form', 'table'];
include_once ROOT . '/app/views/templates/page.tpl.php';
