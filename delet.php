<?php
include "con_db.php";

$id=$_GET['id'];
$query="DELETE FROM `users` WHERE id=$id";
$res=mysqli_query($con,$query);
    if($res){
        header('location:all_users.php');
    }

?>