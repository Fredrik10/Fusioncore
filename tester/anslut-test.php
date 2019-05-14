<?php
header("Content-type: text/html; charset= utf-8");
$dbh = new PDO('mysql:host=localhost;dbname=fusincore;charset=utf8' , 'Fredrik','Davidhatarmig');
if(!$dbh){
    echo "Kontakta ej etablerade";
    exit;
}
echo "<h1>Kontakta etablerade. Hurra!</h1>";
//Felmeddelanden från PDO => Inga Fel = en array med bara nycklar print_r($dbh->errorInfo())
//Förbered en SQL fråga att ställa till databasen
$sql = "SELECT * FROM users ORDER BY regdate DESC";
$stmt = $dbh->prepare($sql);
//utanför frågan
$stmt->execute();
//loppa igenom resultaten och dumpa varje rad.
while($user = $stmt->fetch()){
    var_dump($user);
}

