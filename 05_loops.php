<?php

// for ($i = 0; $i <= 10; $i++) {
//     echo $i;
// }

$i = 1;

// while ($i <= 15) {
//     echo 'Number ' . $i . '<br>';
//     $i++;
// }

// do {
//     echo 'Number ' . $i . '<br>';
//     $i++;
// } while ($i <= 5);

$posts = ['First Post', 'Second Post', 'Third Post'];

// for ($i = 0; $i < count($posts); $i++) {
//     echo $posts[$i] . '<br>';
// }

// foreach ($posts as $post) {
//     echo $post . '<br>';
// }

// foreach ($posts as $index => $post) {
//     echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach ($person as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
