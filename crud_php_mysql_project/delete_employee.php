<?php
include('connection.php');

$con = connection();

$id = $_GET['ID'];
$sql = "DELETE FROM employees WHERE ID = '$id'";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
};

?>