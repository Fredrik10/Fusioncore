<?php

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $admintitle; ?></title>
    <script type="text/javascript" src="buttons.js"></script>
    <link rel="stylesheet" href="navigationbords.php">
</head>
<body class="subpage">
<?php
require "../templates/menu.php";
require "../templates/masthead.php";
require "{$adminbody}.php";
require "../templates/footer.php";
?>    
</body>
</html>