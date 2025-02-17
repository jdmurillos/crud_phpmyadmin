<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "bd_employees_crud";

    $connect = mysqli_connect($host,$user,$pass,$bd,3308);

    mysqli_select_db($connect,$bd);

    return $connect;


}

?>