<?php
    $server='localhost';
    $username='root';
    $password='';
    $db='univ_db';

    $conn = mysqli_connect($server, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    session_start();
?>