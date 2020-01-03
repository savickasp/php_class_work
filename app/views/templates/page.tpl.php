<html>
<head>
    <title>Class_work</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
<?php foreach ($templates as $templateName): ?>
<?php include ROOT . '/app/views/templates/' . $templateName . '.tpl.php'?>
<?php endforeach; ?>
</body>
</html>