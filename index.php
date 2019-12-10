<?php

$r = $_POST['red'] ?? 255;
$g = $_POST['green'] ?? 255;
$b = $_POST['blue'] ?? 255;
$a = $_POST['transparacy'] ?? 0;
?>
<html>
<head>
    <title>Class_work</title>
    <style>
        body {
            background-color: rgba(<?php print $r; ?>, <?php print $g; ?>, <?php print $b; ?>,<?php print $a; ?>);
        }
    </style>
</head>
<body>
<form method="post">
    <label>
        <span>red</span>
        <input name="red" type="range" step="1" min="0" max="255" value="<?php print $r; ?>">
    </label>
    <label>
        <span>green</span>
        <input name="green" type="range" step="1" min="0" max="255" value="<?php print $g; ?>">
    </label>
    <label>
        <span>blue</span>
        <input name="blue" type="range" step="1" min="0" max="255" value="<?php print $b; ?>">
    </label>
    <label>
        <span>transparacy</span>
        <input name="transparacy" type="range" step="0.01" min="0" max="1" value="<?php print $a; ?>">
    </label>
    <button>Submit</button>
</form>
</body>
</html>
