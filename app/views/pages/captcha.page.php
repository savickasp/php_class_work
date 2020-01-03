<?php
$form = [
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'validators' => [
        'validate_capthca' => [
            'captcha',
            'enter_captcha',
        ],
    ],
    'fields' => [
        'captcha' => [
            'label' => 'captcha',
            'type' => 'text',
            'value' => '',
            'error' => '',
            'filter' => FILTER_SANITIZE_ENCODED,
            'extra' => [
                'attr' => [
                    'class' => 'name1',
                    'readonly',
                ],
            ],
            'validators' => [
                'validate_not_empty',
                'validate_string_lenght' => [
                    'from' => [
                        'value' => 10,
                        'message' => 'per mazai',
                    ],
                    'to' => [
                        'value' => 15,
                        'message' => 'per daug',
                    ],
                ],
            ],
        ],
        'enter_captcha' => [
            'label' => 'enter_captcha',
            'type' => 'text',
            'error' => '',
            'filter' => FILTER_SANITIZE_ENCODED,
            'extra' => [
                'attr' => [
                    'class' => 'enter',
                    'placeholder' => 'ivesk captcha'
                ],
            ],
            'validators' => [
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'button1' => [
            'title' => 'siusti',
            'extra' => [
                'attr' => [
                    'class' => 'klase',
                    'id' => 'id',
                ],
            ],
        ],
    ],
    'message' => 'Zinute nuo formos',
];

$num1 = rand(0, 50);
$num2 = rand(0, 50);
$form['fields']['captcha']['value'] = $num1 . ' + ' . $num2;
