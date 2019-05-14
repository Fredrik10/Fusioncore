<?php
session_start();
if ( empty($_SESSION['username']) ) {
    $_SESSION['referer'] = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);
    header("Location: admin.php"); //
   require "../includes/settings.php";
   require "../includes/global.inc.php";
   // require "../includes/artiklar.php";

   $dbh = get_dbh();

   $b_error['title'] = "";
   $b_error['text'] = "";

   if (empty ($_GET['id']) && empty($_POST) ) {
       $blogpost['articlesID'] = "";
       $blogpost['slug'] = "(Skapas automatiskt";
       $blogpost['title'] = "";
       $blogpost['text'] = "";
       $blogpost['username'] = $_SESSION['username'];
       $blogpost['ctime'] = "snart (nytt inlägg)";

   }
   elseif (empty($_POST)) {
       $b_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
       $stmt = $dbh->prepare("SELECT * FROM articles WHERE articlesID = :id");
       $stmt->bindParam(":id", $b_id);
       $stmt->execute();
       $blogpost = $stmt->fetch();
       if (empty($blogpost)) {
           exit("<h1>Det finns inget bloginlägg med id = {$b_id}</h1>\n");
       }
   } else {
       exit("<h1> Kontroller och lagring ej klara ännu</h1>\n");
   }
   $blogpost['title'] = htmlspecialchars($blogpost['title'], ENT_QUOTES);
   $blogpost['slug'] = htmlspecialchars($blogpost['slug'], ENT_QUOTES);
   $blogpost['text'] = htmlspecialchars($blogpost['text'], ENT_QUOTES);
   $blogpost['username'] = htmlspecialchars($blogpost['username'], ENT_QUOTES);

   $h1span = "Redigera blogginlägg";
}
header("Content-type: text/html; charset=utf-8");
echo <<<TEMP
    <h1>Du är inloggad</h1>
    <p><a href="logout.php">Logga ut</p>
TEMP;
?>