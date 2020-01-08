<?php

/**
 * @param $array
 * @param array $columns
 * @return array|bool
 */
function renderTable($array, $columns = [])
{
    $ret = [];

    if (!empty($array)) {

        foreach ($array as $values) {
            $compare = $compare ?? array_keys($values);
            if (array_keys($values) !== $compare) {
                return false;
            }
        }

        $ret['thead'] = $compare;
        $ret['tbody'] = $array;
    }

    return $ret;
}