<?php
/**
 * Page controler för adminsidan
 * 
 * Denna ska skapas i kapitel 15
 */
session_start();

require "../includes/settings.php";
require "../includes/global.inc.php";

//Pos 0
require "../includes/users.php";

$dbh = get_dbh();

if ( empty($_SESSION['username']) && empty($_POST) ){
    $h1span = "Logga in";
    $admintitle = "Logga in som admin på Fusioncore";
    $adminbody = "loginform";
    $login_username = "";
    $login_errormsg = "";
    
} 
elseif ( empty($_SESSION['username']) ){
    $username = filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
    $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
    
    $login_ok = users::verify_login($username, $password, $dbh, $errormsg);
    
    if ( $login_ok )
    {
        
        session_regenerate_id(true);
        $_SESSION['username'] = $username;

        if ( isset($_SESSION['referer']) ) {
            
            $referer = $_SESSION['referer'];

            unset($_SESSION['referer']);

            header("Location: {$refererer}");
            
        }

        $h1span = "Administration";
        $admintitle = "Administration av Fusioncore";
        $adminbody = "adminpanel";
    } else {
        $h1span = "Logga in";
        $admintitle = "Logga in som admin på Fusioncore";
        $adminbody = "loginform";
        $login_username = htmlspecialchars($username, ENT_QUOTES);
        $login_errormsg = "<p class=\"error\">Inloggningen misslyckades. Orsak: {$errormsg}.</p>";
       exit;
    }
} elseif (empty($_POST) )
{
    echo "<h2>Inloggad som {$_SESSION['username']}</h2>";
    echo "<p><a href=\"logout.php\">Logga Ut</p>";
    exit;
    
}
else {
    if ( isset($_POST['new password']) )
    {
        exit ("Position 4 kod ej skriven ännu");
    } else {
        echo "<h2>Inloggad som {$_SESSION['username']}</h2>";
        echo "<p><a href=\"logout.php\">Logga Ut</p>";
        exit;
    }
}

header("Content-type: text/html; charset=utf-8");
require "../templates/admintemplate.php";
?>

