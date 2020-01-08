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

}

/**
 * @param $form
 * @param $inputs
 */
function form_fail(&$form, $inputs)
{
    fill_form($form, $inputs);
    $encode = json_encode($inputs);
    setcookie('formData', $encode, time() +3600);
}

function login_success($form, $inputs) {
    $_SESSION = [
        'loggedin' => true,
        'username' => $inputs['username'],
        'password' => $inputs['password'],
    ];

    set_user_page_visits($inputs['username']);
    header('location:' . ROOT_URL);
}

function login_fail(&$form, $inputs) {
    $form['message'] = 'login failed';
}