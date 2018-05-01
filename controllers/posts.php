<?php

require 'Models/Post.php';

$posts = [
    new Post('My First Post', 'RO', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'RO', true),
    new Post('My Fourth Post', 'DW', false),
];
// dd($posts,true); //use <pre> tags to format the var_dump
// i need some way to figure out which ones have not been published
// filter this $posts array where published is false
$unpublishedPosts = array_filter($posts, function ($post){
    return ! $post->published;
});
// filter this $posts array where published is true
$publishedPosts = array_filter($posts, function ($post){
    return $post->published;
});


// dd($unpublishedPosts);
// dd($publishedPosts);

// now want to map over each post and change published to true
// $modified = array_map(function($post){
//     $post->published = true;
//     return $post;
// }, $posts);

// foreach($posts as $post)  // does same thing as array_map above
// {
//     $post->published = true;
// }
// dd($posts);

// so when does array_map become useful
// when you want to modify the result but not change the original array
// $modified = array_map(function($post){
//     // return (array) $post;
//     return ['title' => $post->title];
// }, $posts);
// dd($modified);
// when you need to modify what gets returned
// dd($posts); //no format...use this if chrome extension will format var_dump
// var_dump($posts);
// dd($posts);

// $posts = $app['database']->selectAll('todos', 'Post');



// return the titles only
// $titles = array_map(function($post){
//     return $post->title;
// },$posts);

// $titles = array_column($posts,'title'); // key in the array, or the public property of the object that you want to fetch
$titles = array_column($posts,'author','title'); // key in the array, or the public property of the object that you want to fetch
dd($titles);

// require 'views/index.view.php'; 