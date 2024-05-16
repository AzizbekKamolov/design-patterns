<?php
include_once ('LinkedInPoster.php');
include_once ('FacebookPoster.php');

$likedInPoster = new LinkedInPoster('john', 'john123');
$likedInPoster->createPost('<b>LinkedIn post</b>');
echo "<br>";
echo "<br>";

$facebookPoster = new FacebookPoster('john@gmail.com', 'john123');
$facebookPoster->createPost('<b>create post for facebook</b>');




