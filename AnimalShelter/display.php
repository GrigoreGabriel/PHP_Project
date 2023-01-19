<?php
include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>After Login</title>
</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="display.php">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="staff.php">Staff</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="animals.php">Pets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adopters.php">Adopters</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adoptions.php">Adoptions</a>
        </li>

    </ul>
    <br>
    <h5 class="center">Users List</h5>
    <div>
        <div class="container">
            <button class="btn btn-primary my-5 ">
                <a class="text-light" href="users.php">Add User</a>
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">PhoneNo</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    $sql = "select * from `users`";
    $result=mysqli_query($connection,$sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $phoneNo = $row['phoneNo'];
            $role = $row['role'];
            echo 
            '<tr>
            <th scope="row">' . $user_id . '</th>
            <td>' . $username . '</td>
            <td>' . $phoneNo . '</td>
            <td>' . $role . '</td>
            <td>
                <button class="btn btn-primary"><a href="update.php?updateId='.$user_id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteId='.$user_id.'" class="text-light">Delete</a></button>
            </td>
           </tr>'
           ;
        }
    }
    
    ?>
                    </script>
                    <script src="alerts.js"></script>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>