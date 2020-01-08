<html>
<head>
    <title>Class_work</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <a href="<?php print ROOT . 'index.php';?>">Home</a>
    <a href="<?php print ROOT . 'pages/register.page3.page.php';?>">Register</a>
    <a href="<?php print ROOT . 'pages/register.page3.page.php';?>">Login</a>
    <a href="<?php print ROOT . 'pages/logout.page3.page.php';?>">Logout</a>
</header>
<?php include ROOT . '/app/views/templates/' . $template . '.tpl.php'?>
</body>
</html>