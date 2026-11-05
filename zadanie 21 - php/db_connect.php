<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse"; 


    $conn = new mysqli($host, $username, $password, $database);

    if($conn->connect_error){
        die("Połączenie nie powiodło się: " . $conn->connect_error); 
    }
    echo "Połączenie się powiodło";

?>