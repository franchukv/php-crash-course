<?php

$int = 10;
$string = 'string';
$float = 10.10;
$bool = true;

$literalString = "${int} lalala '${string}'";
echo $literalString;


// here is constant
define('HOST', 'localhost');
echo HOST;
