<?php 
session_start();
if( empty($_SESSION['counter']) ){
    //första gången
    $_SESSION['counter']= 0;
}
$_SESSION['counter']++;

header("Content-type: text/html; charset = utf-8");
echo <<<HTML
<h1> Sidan har visats {$_SESSION['counter']} gånger.</h1>
<p>Ladda om sidan med CTRL/CMD+R eller F5. </p>
HTML;
?>