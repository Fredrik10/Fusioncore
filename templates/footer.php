<?php

if(empty($_SESSION['username'])){
    $f_linktext = 'Logga in som admin';
    $f_loginstatus = 'Ej inloggad';
}else{
    $f_linktext = 'Gå till adminsidan';
    $f_loginstatus = "Du är inloggad som {$_SESSION['username']}";
}
 echo <<<FOOTER
    <footer>
     <small><strong>&copy; Fredrik, David och Alex AB </small>
     <a href = "admin.php">{$f_linktext}</a>
     <small>{$f_loginstatus}</small>
</footer>
FOOTER;
?>