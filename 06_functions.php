<?php
    // function registerUser($email) {
    //     echo $email . ' register';
    // }
    // registerUser('Brad');


    // function sum($num1 = 1, $num2 = 1) {
    //     return $num1 + $num2;
    // }
    // $number = sum();
    // echo $number;


    // $subtract = function($n1, $n2) {
    //     return $n1 - $n2;
    // };
    // echo $subtract(10, 5);


    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(10, 5);