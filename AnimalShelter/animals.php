<?php
include 'db_con.php';
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
    <title>Adopters</title>
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
    <h5 class="center">Pets List</h5>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Age</th>
                        <th scope="col">Adoption Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
$sql = "SELECT * from animals";
    $result=mysqli_query($connection,$sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $breed = $row['breed'];
            $age = $row['age']; 
            $adoption_status = $row['adoption_status']; 

            if($adoption_status)
              $adoption_status = '✔️';
            else
              $adoption_status = '⭕';

            echo 
            '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $breed . '</td>
            <td>' . $age . '</td>
            <td>' . $adoption_status . '</td>
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