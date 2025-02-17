<?php
include('connection.php');

$con = connection();
$sql = "SELECT * FROM employees";
$query = mysqli_query($con,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Employees CRUD</title>
</head>
<body>

    <div class="users-form">
        <form action="insert_employee.php" method="post">
            <h1>Create Employee</h1>

            <input type="text" name="name" placeholder="your first name here">
            <input type="text" name="lastname" placeholder="your lastname here">
            <input type="text" name="username" placeholder="nickname">
            <input type="text" name="password" placeholder="secret password">
            <input type="text" name="email" placeholder="name@mail.com">
            <input type="submit" value="Add employee">


        </form>
    </div>

    <div class="users-table">
        <h2>Registered users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th><?=$row['ID']?> </th>
                    <th><?=$row['name']?></th>
                    <th><?=$row['lastname']?></th>
                    <th><?=$row['username']?></th>
                    <th><?=$row['password']?></th>
                    <th><?=$row['email']?></th>

                    <th><a href="update.php?ID=<?=$row['ID']?>"class="users-table--edit">Edit</a></th>
                    <th><a href="delete_employee.php?ID=<?=$row['ID']?>"class="users-table--delete">Delete</a></th>

            
                </tr>
                <?php endwhile;?>
            </tbody>
                
        </table>

    </div>
    
</body>
</html>