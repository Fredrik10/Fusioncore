<?php
session_start();
$_SESSION = array();
session_regenerate_id(true);
header("Location: admin.php");
?>