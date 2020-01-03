<?php

/*
 * function takes array of html attributes and
 * returns string of html attributes
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