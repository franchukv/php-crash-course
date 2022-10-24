<?php 
    session_start();

    if(isset($_SESSION['username'])) {
        echo '<h1>Weclome ' . $_SESSION['username'] . '</h1>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<h1>Weclome Guest</h1>';
        echo '<a href="../13_sessions.php">Home</a>';
    }