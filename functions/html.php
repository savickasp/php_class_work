<?php

/**
 * @param $array
 * @return string
 */
function html_attr($array)
{
    $stringArr = [];
    foreach ($array as $attr => $value) {
        if (is_numeric($attr)) {
            $stringArr[] = $value;
        } else {
            $stringArr[] = "$attr=\"$value\"";
        }
    }
    return implode(' ', $stringArr);
}