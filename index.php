<?php
define('ROOT', __DIR__);
include_once 'config/config.php';
include_once 'functions/function.php';

include_once 'arrays/arrays.php';


//thermo_set_low($thermo);

$id = get_thermo_id();
thermo_set_level($thermo, $_COOKIE['id']);
set_thermo_id(++$id > 3 ? 0 : $id);


?>
<html>
<head>
    <title>Class_work</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>

<?php include ROOT . '/templates/form.tpl.php' ?>

<?php include ROOT . '/templates/thermo.tpl.php' ?>

<?php include ROOT . '/templates/stories.tpl.php' ?>

</body>
</html>