<?php

echo <<<MAIN
<div role= "main">
<article class = "singelblogpost">
<h2>{$blogpost['title']}</h2>
<p><small>Postad  {$blogpost['pubdate']} av {$blogpost[username]}</small></p>
<div class = ""blogtext">
{$blopost['text']}
</div>
<h3> Kommentarer</h3>
MAIN;

foreach($comments as $cmt){
    echo <<<CMT
    <article class = "comment">
    <h4><a class ="c_name" rel = "no follow" 
    href = "{$cmt['website']}">{$cmt['name']}</a> säger:</h4>
    <p class = "c_time"><small>{$cmt['ctime']}</small></p>
    <div class = "c_text">
    {$cmt['text']}
    </div>
    </article>
CMT;
}
if(empty($comments)){
    echo "<p> Inga kommentarer ännu.</p>\n";
}
echo <<<MAIN
</article>
</div>
MAIN;

if(isset($_SESSION['username'])){
    echo <<<ELINK
    <p class = "editlink">
    <a href = "editblogpost.php?id?={$blogpost['artivleID']}">Redigera
    inlägg </a></p>
ELINK;
}
