<?php
include 'bootloader.php';

page_visits();

$log_status = is_logged_in();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) header('location:' . ROOT_URL . 'pages/login.page.php');

?>
<html>
<head>
    <title>Class_work</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php if ($log_status): ?>
        <a href="<?php print ROOT_URL . 'index.php'; ?>">Home</a>
    <?php endif; ?>
    <?php if (!$log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/register.page.php'; ?>">Register</a>
    <?php endif; ?>
    <?php if (!$log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/login.page.php'; ?>">Login</a>
    <?php endif; ?>
    <?php if ($log_status): ?>
        <a href="<?php print ROOT_URL . 'pages/logout.page.php'; ?>">Logout</a>
    <?php endif; ?>
    <a href="<?php print ROOT_URL . 'pages/page1.page.php'; ?>">Page1</a>
    <a href="<?php print ROOT_URL . 'pages/page2.page.php'; ?>">Page2</a>
    <a href="<?php print ROOT_URL . 'pages/page3.page.php'; ?>">Page3</a>
    <a href="<?php print ROOT_URL . 'pages/page4.page.php'; ?>">Page4</a>
    <a href="<?php print ROOT_URL . 'pages/page5.page.php'; ?>">Page5</a>
</header>
<section>
    <table>
        <thead>
        <tr>
            <td>phpsessis</td>
            <td>username</td>
            <td>current</td>
            <td>came from</td>
            <td>time stamp</td>
        </tr>
        </thead>
        <div>Labas, <?php ?></div>
        <tbody>
        <?php foreach (file_to_array(STEP_TRACKING) ?? [] as $row): ?>
            <tr>
                <?php foreach ($row as $data): ?>
                    <td><?php print $data; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
</html>