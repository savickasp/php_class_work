<?php
define('ROOT', __DIR__);
include_once ROOT . '/core/bootloader.php';

// get URL
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

//actions
$action = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : 'Home';
unset($url);

include_once ROOT . '/app/views/pages/register.page.php';

if (!isset($_COOKIE['submit'])) {
    if (!empty($_POST)) {
        $inputs = get_filtered_input($form);
        fill_form($form, $inputs);
        validate_form($form, $inputs);
    } elseif (isset($_COOKIE['formData'])) {
        $array = json_decode($_COOKIE['formData']);
        fill_form($form, $array);
    }

    $template = 'form';

} else {
    $arrayTable = renderTable(file_to_array(DB_FILE));
    $template = 'table';

}

include_once ROOT . '/app/views/templates/page.tpl.php';