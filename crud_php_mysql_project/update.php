<?php
include('connection.php');

$con = connection();

$id = $_GET['ID'];
$sql = "SELECT * FROM employees WHERE ID='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Edit employees</title>
</head>
<body>

    <div class="users-form">
        <form action="edit_user.php" method="post">
            <h1>Edit Employee</h1>
            <input type="hidden" name="ID" value="<?=$row['ID']?>">
            <input type="text" name="name" value="<?=$row['name']?>">
            <input type="text" name="lastname" value="<?=$row['lastname']?>">
            <input type="text" name="username" placeholder="nickname" value="<?=$row['username']?>">
            <input type="text" name="password" placeholder="secret password" value="<?=$row['password']?>" >
            <input type="text" name="email" placeholder="name@mail.com" value="<?=$row['email']?>">
            <input type="submit" value="Update user">

        </form>
    </div>
    
</body>
</html>