<?php
/**
 * Mall för sidornas fot
 */
if( empty($_SESSION['username'])){
    $f_linktext = "Logga in som admin";
    $f_loginstatus = "Ek inloggad";
}else{
    $f_linktext = "Gå till adminsidan";
    $f_loginstatus= "Du är inloggad som {$_SESSION['username']}";
}
echo <<<FOOTER
<footer>
    <small>&copy;Fredrik, David och Alex AB </small>
    <a href = "admin.php">{$f_linktext}</a>
    <small>{$f_loginstatus}</small>  
</footer>
FOOTER;
?>