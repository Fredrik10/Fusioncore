<?php


session_start();
// En array som innehåller tre fingerade inlägg
// Varje inlägg är en inre array
$slug = filter_input(INPUT_GET, 'slug', FILTER_SANITIZE_URL);
$h1span = "Fusioncore";

require "../includes/settings.php";
require "../includes/global.inc.php";

$dbh = get_dbh();

if (empty($slug)) {
    $sql = "SELECT * FROM articles ORDER BY pubdate DESC LIMIT 0,5";
    $stmt = $dbh->prepare($sql);
    $stmt -> execute();
    $template = 'list-blog-posts';
}
else {
    $sql = "SELECT * FROM articles WHERE slug =:slug";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":slug", $slug);
    $stmt->execute();
    $blogpost = $stmt->fetch();

    if (empty($blogpost)) {
        header("HTTP/1.0 404 Not Found");
        $template = 'not-found';

    }
    else {
        $comments = fetch_blog_comments($blogpost['articlesID'], $dbh);
        $template = 'single-blog-post';
    }
}


header ("Content-type: text/html; charset=utf-8");

require "../templates/{$template}.php";
