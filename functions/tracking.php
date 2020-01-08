<?php

function page_visits()
{
    $array = file_to_array(STEP_TRACKING) ?: [];
    $array[] = [
        'PHPSESSID' => session_id(),
        'username' => $_SESSION['username'] ?? null,
        'current_page' => $_SERVER['REQUEST_URI'] ?? '',
        'came_from_page' => $_SERVER['HTTP_REFERER'] ?? '',
        'timestamp' => time(),
    ];
    array_to_file($array, STEP_TRACKING);
}

function set_user_page_visits($username)
{
    $array = file_to_array(STEP_TRACKING) ?: [];
    foreach ($array as &$values) {
        if ($values['PHPSESSID'] === session_id()) {
            $values['username'] = $_SESSION['username'];
        }
    }
    array_to_file($array, STEP_TRACKING);
}