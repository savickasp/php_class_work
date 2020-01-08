<?php
include '../bootloader.php';

page_visits();

$log_status = is_logged_in();

$form = [
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
    'attr' => [
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


    if (!empty($_POST)) {
        $inputs = get_filtered_input($form);
        validate_form($form, $inputs);
    }

?>
<html>
<head>
    <title>Class_work</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php if($log_status): ?>
        <a href="<?php print ROOT_URL . 'index.php'; ?>">Home</a>
    <?php endif; ?>
    <?php if(!$log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/register.page.php'; ?>">Register</a>
    <?php endif; ?>
    <?php if(!$log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/login.page.php'; ?>">Login</a>
    <?php endif; ?>
    <?php if($log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/logout.page.php'; ?>">Logout</a>
    <?php endif; ?>
    <a href="<?php print ROOT_URL . 'pages/page1.page.php'; ?>">Page1</a>
    <a href="<?php print ROOT_URL . 'pages/page2.page.php'; ?>">Page2</a>
    <a href="<?php print ROOT_URL . 'pages/page3.page.php'; ?>">Page3</a>
    <a href="<?php print ROOT_URL . 'pages/page4.page.php'; ?>">Page4</a>
    <a href="<?php print ROOT_URL . 'pages/page5.page.php'; ?>">Page5</a>
</header>
    <?php include ROOT . '/templates/form.tpl.php'?>
</body>
</html>