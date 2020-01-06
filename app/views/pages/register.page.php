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
        'validate_form_match' => [
            'password',
            'password_repeat',
        ]
    ],
    'fields' => [
        'username' => [
            'label' => '',
            'type' => 'text',
            'error' => '',
            'filter' => FILTER_SANITIZE_ENCODED,
            'extra' => [
                'attr' => [
                    'class' => 'username',
                    'placeholder' => 'username'
                ],
            ],
            'validators' => [
                'validate_not_empty',
                'validate_username',
            ],
        ],
        'password' => [
            'label' => '',
            'type' => 'text',
            'error' => '',
            'filter' => FILTER_SANITIZE_ENCODED,
            'extra' => [
                'attr' => [
                    'class' => 'name1',
                    'placeholder' => 'password'
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
        'password_repeat' => [
            'label' => '',
            'type' => 'text',
            'error' => '',
            'filter' => FILTER_SANITIZE_ENCODED,
            'extra' => [
                'attr' => [
                    'class' => 'name1',
                    'placeholder' => 'repeat password'
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
    'show_form' => true,
];