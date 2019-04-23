<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $admintitle; ?></title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href = 'http:// fonts.googleapis.com/css?family=Merienda+One' rel ='stylesheet'/>
    
   <link href="navigationbord.css" rel = "stylesheet"/>

</head>
<body class= "subpage">
<?php
require "masthead.php";
require "menu.php";
    
require "{$adminbody}.php";

require "footer.php";
?>
</body>
</html>
