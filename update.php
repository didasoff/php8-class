<?php 
session_start();
include "db.php";

if(isset($_POST["updatebtn"])) {

    $id = $_GET['edit'];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

        $sql = "UPDATE student SET email='$email', pass='$pass' WHERE id = {$id}";
        $update = mysqli_query($connection,$sql);
        if($update) {
            header("Location:index.php");
        }

}

?>