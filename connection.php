<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "login";
    $conn = new mysqli($servername, $username, $password, $db_name,);
    if($conn->connect_error){
        die("Connection faild".$conn->connect_error);
    }
    echo "";
?>