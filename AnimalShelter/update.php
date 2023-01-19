<?php
include 'db_con.php';
$id = $_GET['updateId'];

$query = "select * from `users` where user_id= $id";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $password=$row['password'];     
    $role=$row['role'];
    $phoneNo=$row['phoneNo'];

if(isset($_POST['submit'])){    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $phoneNo=$_POST['phoneNo']; 
    $sql = "update `users` set
    username='$username',
    password='$password',
    role='$role',
    phoneNo='$phoneNo' 
    where user_id=$id";

    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Updated successfully!";
    }
}

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="sweetalert2.all.min.js"></script>
    <script src="alerts.js"></script> -->
    <h1 class="center">Welcome to our Pet Shelter!</h1>
    <h5 class="center">Edit user</h5>
    <title>Login</title>
</head>

<body>
    <script src="alerts.js"></script>
    <script src="sweetalert2.all.min.js"></script>
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
    <a class="nav-link" href="adoptions.php">Adoptions</a>
  </li>
</ul>
    <div class="container">
        <form method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username"
                    value=<?php echo $username;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password"
                    value=<?php echo $password;?> autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phoneNo"
                    value=<?php echo $phoneNo;?> autocomplete="off">
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" class="form-control" placeholder="Enter your role" name="role"
                    value=<?php echo $role;?> autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>

</html>