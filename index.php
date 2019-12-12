<?php
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
                    'class' => 'name1',
                    'id' => 'name1',
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
<?php include 'templates/form.tpl.php' ?>
</body>
</html>
