<?php 
    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    // echo count($fruits);

    // Search array (have or not)
    // var_dump(in_array('apple', $fruits));

    // Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'strawberry');
    array_unshift($fruits, 'mango');

    // Remove form array
    array_pop($fruits);
    array_shift($fruits);
    // unset($fruits[2]);

    // Split into 2 chunks
    // $chunked_array = array_chunk($fruits, 2);
    // print_r($chunked_array);
    // print_r($fruits);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    // print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];     
    $c = array_combine($a, $b);

    $keys = array_keys($c);
    // print_r($keys);

    $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(1, 30);
    // print_r($numbers);

    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    // print_r($newNumbers);

    $lessThen10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($lessThen10);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    // var_dump($sum);
    