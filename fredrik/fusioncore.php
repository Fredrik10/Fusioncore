<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fusion Core</title>
<script type="text/javascript" src="buttons.js"></script>
</head>
<body>
<link rel="stylesheet" href="navigationbords.php">
 <?php
require"../templates/menu.php";
require"../templates/masthead.php";
?>
  
 
  <img class="logo" src="fusioncore.png" alt="fusioncore logo">



  <ul class = "buttonav button1">
    <li><a class = "link1" href = "highscore.html">HighScore</a></li>
    </ul>

    <ul class= "buttonav button2">
        <li><a class = "link1" href = "classes.html">Classes</a></li>
    </ul>

    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eligendi nesciunt fuga! Ipsa cum amet quam. Quaerat mollitia minus sit reiciendis cumque earum accusantium, nam soluta, rem possimus omnis reprehenderit.</p>
    
<?php

require"../templates/footer.php";
?>

</body>
</html>