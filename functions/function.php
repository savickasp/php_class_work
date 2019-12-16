<?php

function html_attr($array)
{
    $stringArr = [];
    foreach ($array as $attr => $value) {
        $stringArr[] = "$attr=\"$value\"";
    }
    return implode(' ', $stringArr);
}

function thermo_set_low(&$array)
{
    foreach ($array as &$figure) {
        $figure['color'] = 'red';
    }
}

function thermo_set_level(&$array, $id)
{
    foreach ($array as $key => &$element) {
        if ($key > $id) {
            $element['color'] = 'grey';
        }
        if ($key !== $id) {
            unset($element['text']);
        }
    }
}

function set_thermo_id($id) {
    setcookie('id', $id);
}

function get_thermo_id()
{
    return $_COOKIE['id'] ?? 0;
}