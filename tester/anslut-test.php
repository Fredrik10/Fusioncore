<?php
header("Content-type: text/html; charset= utf-8");
$dbh = new PDO('mysql:host=localhost;dbname=fusincore;charset=utf8' , 'phpuser','fredrikhatarmig');
if(!$dbh){
    echo "Kontakta ej etablerade";
    exit;
}
echo "<h1>Kontakta etablerade. Hurra!</h1>";

//Förbered en SQL fråga att ställa till databasen
$sql = "SELECT * FROM users ORDER BY regdate DESC";
$stmt = $dbh->prepare($sql);
//utanför frågan
$stmt->execute();
//loppa igenom resultaten och dumpa varje rad.
while($user = $stmt->fetch()){
    var_dump($user);
}

