<?php

?>

<html>
<body>
    <h1> Hack it!</h1>
    <h2><?php print $_POST['vardas'] ?? ''; ?></h2>
    <form method="post">
        <input type="text" name="vardas">
        <input type="submit">
    </form>
</body>
</html>
