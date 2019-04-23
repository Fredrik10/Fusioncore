<?php
echo <<<HTML
    <h1>Inloggnig lyckades för {$_SESSION['username']}</h1>
    
    <p><a href="logout.php">Logga ut</a></p>
HTML;
?>