<?php
var_dump($_POST);
define('ROOT', __DIR__);
define('ROOT_URL', 'http://phplocal.lt/php_class_work');

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'name1' => [
            'label' => 'Vardas Pirmas',
            'type' => 'text',
            'value' => 'PpPpP',
            'error' => 'Klaida',
            'extra' => [
                'attr' => [
                    'class' => 'name1',
                    'id' => 'name1',
                ],
            ],
        ],
        'option1' => [
            'label' => 'Option first',
            'type' => 'select',
            'option' => [
                '0' => 'vienas',
                '1' => 'trys',
                '2' => 'du',
            ],
            'error' => 'Klaida',
            'extra' => [
                'attr' => [
                    'class' => 'option1_class',
                    'id' => 'option1_id',
                ],
            ],
        ],
        'radio1' => [
            'label' => 'Radio first',
            'type' => 'radio',
            'option' => [
                '0' => 'vienas',
                '1' => 'trys',
                '2' => 'du',
            ],
            'error' => 'Klaida',
            'extra' => [
                'attr' => [
                    'class' => 'radio1_id',
                    'id' => 'radio1_id',
                ],
            ],
        ],
        'gerimai' => [
            'label' => 'Radio second',
            'type' => 'radio',
            'option' => [
                '0' => 'vynas',
                '1' => 'alus',
                '2' => 'sidras',
            ],
            'error' => 'Klaida',
            'extra' => [
                'attr' => [
                    'class' => 'gerimai_id',
                    'id' => 'gerimai_id',
                ],
            ],
        ],
        'checkbox1' => [
            'label' => 'Checkbox first',
            'type' => 'checkbox',
            'option' => [
                '0' => 'vienas',
                '1' => 'trys',
                '2' => 'du',
            ],
            'error' => 'Klaida',
            'extra' => [
                'attr' => [
                    'class' => 'check1_class',
                    'id' => 'chech1_id',
                ],
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

function html_attr($array)
{
    $stringArr = [];
    foreach ($array as $attr => $value) {
        $stringArr[] = "$attr=\"$value\"";
    }
    return implode(' ', $stringArr);
}

?>
<html>
<head>
    <title>Class_work</title>
</head>
<body>
<?php include ROOT . '/templates/form.tpl.php' ?>
</body>
</html>
