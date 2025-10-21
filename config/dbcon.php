<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "web-ecommerce";

    //creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    //check connection
    if(!$con){
        die("Connect failed:".mysqli_connect_error());
    }
    else{
        //echo("Connected successfully");
    }
?>