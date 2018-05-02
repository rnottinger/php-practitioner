<?php

// require 'Models/Post.php';

$posts = [
    new Post('My First Post', 'RO', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'RO', true),
    new Post('My Fourth Post', 'DW', false),
];

$unpublishedPosts = array_filter($posts, function ($post){
    return ! $post->published;
});
// filter this $posts array where published is true
$publishedPosts = array_filter($posts, function ($post){
    return $post->published;
});

$titles = array_column($posts,'author','title'); // key in the array, or the public property of the object that you want to fetch

// require 'views/index.view.php'; 