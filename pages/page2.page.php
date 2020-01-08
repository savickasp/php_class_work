<?php
include '../bootloader.php';
page_visits();
$log_status = is_logged_in();

?>
<html>
<head>
    <title>page2</title>
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
<div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto aut deserunt dolores doloribus, esse est et eveniet exercitationem incidunt libero magni molestias nobis odio omnis quis rerum unde voluptatum.
</div>
<div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto aut deserunt dolores doloribus, esse est et eveniet exercitationem incidunt libero magni molestias nobis odio omnis quis rerum unde voluptatum.
</div>
</body>
</html>
