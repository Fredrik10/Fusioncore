<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "{$blogpost['title']} - Fusioncores Blogg"; ?></title>
    <script type="text/javascript" src="buttons.js"></script>
    <link rel="stylesheet" href="navigationbords.php">
</head>
<body>
    <?php 
require ("masthead.php");
require ("menu.php");

echo <<<MAIN
<div role="main">
<form action="editblogpost.php" method="post" class="editblog">
<input type="hidden" name="articlesID" value="{$blogpost['articlesID']}" />
<p>
<label for="b_title">
Inläggets rubrik
<strong class="error">{$b_error['title']}</strong>
</label>
<input name="title" id="b_title" value="{$blogpost['title']}" />
</p>
<p>
<label for="b_title">
Inläggets brödtext
<strong class="error">{$b_error['text']}</strong>
</label>
<textarea name="text" id="b_text">{$blogpost['text']}</textarea>
</p>
<!-- YEET -->
<p>
<small>Postat: <i>{$blogpost['ctime']}</i> av
                <i>{$blogpost['username']}</i>.
                Slug: <i>{$blogpost['slug']}</i></small>
                </p>
                <p>
                <input type="submit" value="spara" />
                </p>
                </form>
                </div>
MAIN;

require ("footer.php");

    ?>


</body>
</html>