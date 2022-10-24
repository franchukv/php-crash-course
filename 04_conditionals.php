<?php

$time = date('H');

// if ($time < 12) {
//     echo 'Good Morning';
// } elseif ($time < 17) {
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstPosts = !empty($posts) ? $posts[0] : 'No Posts';
// $firstPosts = !empty($posts) ? $posts[0] : null;
// $firstPosts = $posts[0] ?? null;

// echo $firstPosts;

$favcolor = 'red';
switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, green or blue';
}
