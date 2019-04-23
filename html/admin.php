<?php
session_start();
/**
 * Page controler för adminsidan
 * 
 * Denna ska skapas i kapitel 15
 */

require "../includes/settings.php";
require "../includes/global.inc.php";
require "../includes/users.php";


$dbh = get_dbh();


if(empty($_SESSION['username'])&& empty ($_POST)){
    $h1span = "Logga in";
    $admintitle = "Logga in som admin på Läxhjälpen";
    $adminbody ="loginform";
    $login_username ="";
    $login_errormsg ="";
}
elseif(empty($_SESSION['username'])) {
  $username = filter_input(INPUT_POST,'username',FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
  $password = filter_input(INPUT_POST,'password',FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

  $login_ok = users::verify_login($username, $password, $dbh, $errormsg);
  if(isset($_SESSION['referer'])){
    //Kopiera till en icke-sessionsvariabel
    $referer =($_SESSION['referer']);

    //Ta bort sessionsvariabeln så den inte följer i framtiden
    unset($_SESSION['referer']);

    header("Location:{$referer}");
    exit; //Viktig att stoppa exekveringen efter omdiriering
  }
  
  if($login_ok){
    
    session_regenerate_id(true);
      $_SESSION['username']= $username;
      $h1span = "Administration";
      $admintitle = "Administration av Läxhjälpen";
      $adminbody = "adminpanel";
  }else {
    echo "inte inloggad";
    $h1span = "Logga in";
    $admintitle ="Logga in som admin på Läxhjälpen";
    $adminbody = "loginform";
    $login_username = htmlspecialchars($username, ENT_QUOTES);
    $login_errormsg= "<p class =\"error\">Inloggning misslyckad. Orsak: {$errormsg}.</p>"; 
  }
}elseif(empty($_POST)){
     //Pos3
     echo "<h2>Inloggad som {$_SESSION['username']}</h2>";
     echo "<p><a href=\"logout.php\">Logga ut</p>";
     exit;
  }
  else{
  if(isset($_POST['new_password'])){

      exit("Position 4 kod ej skriven ännu");
  }

else{
    echo "<h2>Inloggad som {$_SESSION['username']}</h2>";
     echo "<p><a href=\"logout.php\">Logga ut</p>";
     exit;
    }
}
header("Content-type: text/html; charset=utf-8");
require "../templates/admintemplate.php";
?>