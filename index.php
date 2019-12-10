<?php

$h2 = 'Ducho sertifikatas';

if (isset($_POST['form'])) {
    $inputArr = $_POST['form'];
} else {
    $inputArr = [];
}

?>
<html>
<head>
    <title>Class_work</title>
</head>
<body>
<form method="post">
    <input type="text" name="form[name]" placeholder="Vardas" required>
    <input type="text" name="form[surname]" placeholder="Pavarde" required>
    <input type="number" name="form[age]" placeholder="Age">
    <select name="form[level]">
        <option value="1" selected>Pradedantysis</option>
        <option value="2">Pazenges</option>
        <option value="3">Profesionalas</option>
    </select>
    <button>Submit</button>
</form>
<section>
    <h2><?php print $h2;?></h2>
    <?php foreach ($inputArr as $key => $input): ?>
    <div><?php printf('%s: %s', $key, $input );?></div>
    <?php endforeach;?>
</section>
</body>
</html>
