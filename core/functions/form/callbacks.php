<?php

// form call backs functions

/*
 * funtions take: $form, $inputs
 * do something if validation succeeds
 */
function form_success($form, $inputs)
{
    $array = file_to_array(DB_FILE);
    unset($inputs['password_repeat']);
    $array[] = $inputs;
    array_to_file($array, DB_FILE);
}

/*
 * funtions take: $form, $inputs
 * do something if validation fails
 */
function form_fail($form, $inputs)
{
}
