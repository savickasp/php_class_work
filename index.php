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
            'label' => 'name1',
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
