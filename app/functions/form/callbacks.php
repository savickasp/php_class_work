<?php

/**
 * @param $form
 * @param $inputs
 */
function form_success(&$form, $inputs)
{
    $array = file_to_array(DB_FILE);
    unset($inputs['password_repeat']);
    $array[] = $inputs;
    array_to_file($array, DB_FILE);

    $form['message'] = 'registration was succesfull!';
    $form['show_form'] = false;

//    setcookie('submit', 1, time() + 3600);
//    $template = 'table';
}

/**
 * @param $form
 * @param $inputs
 */
function form_fail($form, $inputs)
{
    $encode = json_encode($inputs);
    setcookie('formData', $encode, time() +3600);
}
