<?php


?>

<!DOCTYPE html> 
<html lang="sv"> 
<head> 
  <meta charset="utf‐8" /> 
  <title><?php echo "{$blogpost['title']} - Fusioncore Articles"; ?></title> 
  <meta http‐equiv="X‐UA‐Compatible" content="IE=edge">
  <link rel="stylesheet" href="navigationbords.php">
  <script type="text/javascript" src="buttons.js"></script>
  </head>
<body>
<?php
Require "../templates/menu.php";
Require "masthead.php";


    
    echo <<<MAIN
    <main>
    <article class ="singleblogpost">
    
    <h2>{$blogpost['title']}</h2>
    <p><small>Postad {$blogpost['pubdate']} av {$blogpost['username']}</small></p>
    <div class="blogtext">
    </div>
    </article>
MAIN;
foreach ( $comments as $cmt ) {
  echo <<<CMT
  <article class="comment">
  <h4><a class="c_name" rel="nofollow" href="{$cmt['website']}">{$cmt['name']}</a> säger:</h4>
  <p class= "c_time"><small>{$cmt['ctime']}</small></p>
  <div class="c_text">
  {$cmt['text']}
  </div>
  </article>
CMT;
}
if ( empty($comments) ) {
  echo "<p> Inga kommentarer finns ännu.</p>\n";
}
if ( isset($_SESSION['username']) ) {
  echo <<<ELINK

  <p class="editlink">
  <a href="editblogpost.php?id={blogpost['articlesID']}">Redigera inlägg </a></p>

ELINK;
} 


require "footer.php";

?>
</main>
</body>
</html>
