<?php 

    $string = 'Hello World';

    // Get the length of the string
    echo strlen($string);

    // Find the position of the first occurrance of a substring in a string
    echo strpos($string, 'o');

    // Find the position of the last occurrance of a substring in a string
    echo strrpos($string, 'o');

    // Reverse a string
    echo strrev($string);

    // String to uppercase
    echo strtoupper($string);

    // String to lowercase
    echo strtolower($string);

    // Uppercase the first character of each word
    echo ucwords($string);

    // String replace
    echo str_replace('World', 'Everyone', $string);

    // Return portion of a string specified by the offset and lenght
    echo substr($string, 0, 7);
    echo substr($string, 5);

    // String starts with
    if(str_starts_with($string, 'Hello')) {
        echo 'YES';
    }

    // String ends with
    if(str_ends_with($string, 'ld')) {
        echo 'YES';
    }


    $string2 = "<h1>${string}</h1>";
    echo $string2;
    echo htmlspecialchars($string2);

    printf('%s likes to %s', 'Brad', 'code');
    printf('1+1=%d', 1+1);
    printf('1+1=%f', 1+1);
