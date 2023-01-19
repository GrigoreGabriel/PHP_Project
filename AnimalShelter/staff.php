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
    <h5 class="center">Staff List</h5>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">PhoneNo</th>
                        <th scope="col">isVolunteer</th>
                        <th scope="col">isVet</th>
                        <th scope="col">isAvailable</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
    $sql = "SELECT
    u.user_id,
    u.username,
    u.phoneNo,
    s.isVolunteer,
    s.isVet,
    s.isAvailable
FROM
    staff s
INNER JOIN users u ON
    s.user_id = u.user_id";
    $result=mysqli_query($connection,$sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $phoneNo = $row['phoneNo'];
            $isVolunteer = $row['isVolunteer']; 
            $isVet = $row['isVet']; 
            $isAvailable = $row['isAvailable']; 

            if($isVolunteer)
              $isVolunteer = '🦮';
            else
              $isVolunteer = '⭕';

            if($isVet)
              $isVet = '👨‍⚕️';
            else
              $isVet = '⭕';

            if($isAvailable)
              $isAvailable = '✔️';
            else
              $isAvailable = '⭕';

            echo 
            '<tr>
            <th scope="row">' . $user_id . '</th>
            <td>' . $username . '</td>
            <td>' . $phoneNo . '</td>
            <td>' . $isVolunteer . '</td>
            <td>' . $isVet . '</td>
            <td>' . $isAvailable . '</td>
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