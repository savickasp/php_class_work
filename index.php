<?php

$url_car = 'https://media.wired.com/photos/5d09594a62bcb0c9752779d9/master/pass/Transpo_G70_TA-518126.jpg';
$vh = $_POST['size'] ?? 30;
?>
<html>
<head>
    <title>Class_work</title>
    <style>
        .car {
            height: <?php print $vh; ?>vh;
            object-fit: contain;
        }
    </style>
</head>
<body>
<form method="post">
    <input name="size" type="range" min="1" max="90" value="<?php print $vh; ?>">
    <button>Submit</button>
</form>
<img class="car" src="<?php print $url_car; ?>">
</body>
</html>
