<?php
// Simple Array
$numbers = [1, 22, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// print_r($fruits);

// echo $fruits[0];

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];
// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
// echo $hex['blue'];


$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];
// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'Vova',
        'last_name' => 'Franchuk',
        'email' => 'vova@gmail.com'
    ]
];

// print_r($people);
// echo $people[1]['email'];

var_dump(json_encode($people));
