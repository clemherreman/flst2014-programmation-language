<?php
// pages/create.php
require_once __DIR__.'/../code/BlogPost.php';
require_once __DIR__.'/../code/MagicBox.php';

if (empty($_POST['title']) ||
    empty($_POST['text'])) {
    echo 'You need to provide a title & a text';
    exit;
}

$title = $_POST['title'];
$content = $_POST['text'];

$magicBox = new MagicBox();
$allBlogPosts = $magicBox->retrieveAllBlogPosts();

$newBlogPostId = count($allBlogPosts) + 1;

$blogPost = new BlogPost($newBlogPostId, $title);
$blogPost->setText($content);

$magicBox->putBlogPost($blogPost);
$magicBox->save();

header('Location: all.php', null, 302);