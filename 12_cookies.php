<?php

// Set cookie
setcookie('name', 'Brad', time() + 86400);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// Delete cookie (technically unset)
setcookie('name', '', time() - 86400);