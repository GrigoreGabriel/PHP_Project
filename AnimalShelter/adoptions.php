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
                        <th width="125" scope="col">Adoption ID</th>
                        <th width="100" scope="col">Pet ID</th>
                        <th width="125" scope="col">Pet Name</th>
                        <th width="100" scope="col">Breed</th>
                        <th width="125" scope="col">Adopter ID</th>
                        <th width="150" scope="col">Adopter Name</th>
                        <th width="150" scope="col">Adopter Phone No</th>
                        <th width="100" scope="col">Staff ID</th>
                        <th width="100" scope="col">Staff Name</th>
                        <th width="100" scope="col">Staff Phone No</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT
            ad.`id` AS 'Adoption ID',
            an.`id` AS 'Animal ID',
            an.name,
            an.breed,
            `adopter_id`,
            us.username AS 'Adopter Name',
            us.phoneNo AS 'Adopter Phone No',
            s.id AS 'Staff Id',
            usStaff.username AS 'Staff Name',
            usStaff.phoneNo
        FROM
            `adoptions` ad
        INNER JOIN animals an ON
            ad.animal_id = an.id
        INNER JOIN adopters adopter ON
            ad.adopter_id = adopter.id
        INNER JOIN users us ON
            us.user_id = adopter.user_id
        INNER JOIN staff s ON
            ad.staff_id = s.id
        INNER JOIN users usStaff ON
            s.user_id = usStaff.user_id";

    $result=mysqli_query($connection,$sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $adoption_id = $row['Adoption ID'];
            $animal_id = $row['Animal ID'];
            $animal_name = $row['name'];
            $animal_breed = $row['breed'];
            $adopter_id = $row['adopter_id'];
            $adopter_name = $row['Adopter Name'];
            $adopter_phone = $row['Adopter Phone No'];
            $staff_id = $row['Staff Id'];
            $staff_name = $row['Staff Name'];
            $staff_phone = $row['phoneNo'];

            echo 
            '<tr>
            <th scope="row">' . $adoption_id . '</th>
            <td>' . $animal_id . '</td>
            <td>' . $animal_name . '</td>
            <td>' . $animal_breed . '</td>
            <td>' . $adopter_id . '</td>
            <td>' . $adopter_name . '</td>
            <td>' . $adopter_phone . '</td>
            <td>' . $staff_id . '</td>
            <td>' . $staff_name . '</td>
            <td>' . $staff_phone . '</td>
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