<?php
include "db_con.php";
if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $sql = "delete from `users` where user_id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location:display.php'); 
    }
}   
?>