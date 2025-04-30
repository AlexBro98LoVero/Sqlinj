<?php 
    $hostname = "localhost";
    $password = "";
    $username = "root";
    $db = "sqlinj";

    $conn = mysqli_connect($hostname, $username, $password, $db);

    if(!$conn){
        die("errore nella connesione");
    }
?>