<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "kideapp";

    $connect = mysqli_connect($server, $user, $pass, $db);

    if(!$connect){
        die("Connection Failed : ".mysqli_connect_error());
    }

?>