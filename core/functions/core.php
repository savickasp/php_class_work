<?php

/*
 * function filters POST method submitted inputs and returns array of filtered inputs
 * index = inout name
 */
function get_filtered_input($array)
{
    $inputArr = [];
    foreach ($array['fields'] as $name => $value) {
        $inputArr[$name] = ($value['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS);
    }
    return filter_input_array(INPUT_POST, $inputArr);
}

/*
 * fucntions fills form with content preveusly submitted
 * !------NOT completed ------
 */
function fill_form(&$form, $inputs)
{
    foreach ($inputs as $name => $value) {
        $form['fields'][$name]['value'] = urldecode($value);
    }
}

/*
 * $form - takes form with specified what to validate e.g. fields
 * $inputs - takes filtered inputs array
 */
function validate_form(&$form, $inputs, &$h1 = '')
{
    $status = true;

    foreach ($form['fields'] as $name => &$field) {
        if (isset($field['validators'])) {
            foreach ($field['validators'] as $valKey => $validator) {
                if (is_array($validator)) {
                    if (!$valKey($inputs[$name], $field, $validator)) {
                        $status = false;
                        break;
                    }
                } else {
                    if (!$validator($inputs[$name], $field)) {
                        $status = false;
                        break;
                    }
                }
            }
        }
    }

    if ($status) {
        foreach ($form['validators'] as $valKey => $validator) {
            if (is_array($validator)) {
                $status = $valKey($inputs, $form['fields'], $validator) ? $status : false;
            } else {
                $status = $validator($inputs, $form['fields']) ? $status : false;
            }
        }
    }
    if (isset($form['callbacks'])) {
        $index = $status ? 'success' : 'fail';
        if ($form['callbacks'][$index] ?? false) $form['callbacks'][$index]($form, $inputs);
    }

}

function array_to_file($array, $file)
{
    $string = json_encode($array);
    $bytes_written = file_put_contents($file, $string);

    if (is_numeric($bytes_written)) {
        return true;
    } else {
        return false;
    }
}

function file_to_array($file)
{
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), 'true');
    } else {
        return false;
    }
}