<?php

/*
 * $field_input - field input verta praejusi per filtra
 * $field - input field array
 *
 * function validates if input field is empty
 */
function validate_not_empty($field_input, &$field)
{
    if ($field_input == '') {
        $field['error'] = 'Laukelis paliktas tuscias';
        return false;
    }
    return true;
}

/*
 * $field_input - field input verta praejusi per filtra
 * $field - input field array
 *
 * function checks input email with regex
 */
function validate_email($field_input, &$field)
{
    $regex = '/^[a-zA-Z0-9._-]+[@]{1}[a-zA-Z0-9.]+[.]{1}[a-zA-Z0-9]{1,5}$/';
    if (!preg_match($regex, $field_input)) {
        $field['error'] = 'Netinakams el pasto formatas';
        return false;
    }
    return true;
}

/*
 * $field_input - field input verta praejusi per filtra
 * $field - input field array
 *
 * functions checks if char leght is less then 255
 */
function validate_chars_length_255($field_input, &$field)
{
    if (strlen($field_input) > 255) {
        $field['error'] = 'Virsytas leistinu simboliu kiekis';
        return false;
    }
    return true;
}

/*
 *
 */
function validate_is_number($field_input, &$field)
{
    if (!is_numeric($field_input)) {
        $field['error'] = 'reikia ivesti skaiciu';
        return false;
    }
    return true;
}

/*
 *
 */
function validate_form_match($inputs, &$fields, $params)
{
    foreach ($params as $index) {
        $compare = $compare ?? $inputs[$index];
        if ($inputs[$index] !== $compare) {
            $fields[$index]['error'] = 'nesutampa reiksmes';

            return false;
        }
    }
    return true;
}


/*
 *
 */
function validate_string_lenght($field_input, &$field, $params)
{
    if (strlen($field_input) < $params['from']['value']) {
        $field['error'] = $params['from']['message'];
        return false;
    } elseif (strlen($field_input) > $params['to']['value']) {
        $field['error'] = $params['to']['message'];
        return false;
    }
    return true;
}

/*
 *
 *
 */
function validate_capthca($inputs, &$fields, $params)
{
    $numb = explode('%20%2B%20', $inputs[$params[0]]);
    $sum = $numb[0] + $numb[1];
    var_dump($sum);
    if ($sum != $inputs[$params[1]]) {
        $fields[$params[1]]['error'] = 'nesutampa';
    }
}

/**
 * @param $field_input
 * @param $field
 * @return bool
 */
function validate_username($field_input, &$field) {
    foreach(file_to_array(DB_FILE) as $arr) {
        if ($arr['username'] === $field_input) {
            $field['error'] = 'username already exist';
            return false;
        }
    }
    return true;
}