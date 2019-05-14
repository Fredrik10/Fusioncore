<?php
session_start();
if ( empty($_SESSION['username']) ) {
    $_SESSION['referer'] = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);
    header("Location: admin.php");
   
}
header("Content-type: text/html; charset=utf-8");
echo <<<TEMP
    <h1>Du är inloggad</h1>
    <p><a href="logout.php">Logga ut</p>
TEMP;
?>