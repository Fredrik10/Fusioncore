<?php
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
Require"menu.php";
Require"masthead.php";
?>
  <h1>Patch Notes</h1>
<?php
foreach ($stmt as $blogpost){

  $blogpost ['slug'] = urlencode($blogpost['slug']);
  echo <<<ARTICLE
  <article class="blogpostlist">
      <h3><a href="artiklar.php?slug={$blogpost['slug']}">{$blogpost['title']}</a></h3>
      <p><small>Postad {$blogpost['pubdate']} av {$blogpost['username']}</small></p>
      <div class="blogtext">
      {$blogpost['text']}
      </div>
          </article>
  
ARTICLE;
}
?>

</body>
<?php require"../templates/footer.php"; ?>
</html>