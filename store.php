<?php
session_start();
include "db.php";

if(isset($_POST["btn"])) {

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO student(email,pass) VALUES('$email','$pass')";
    $insertData = mysqli_query($connection,$sql);
    
    if($insertData) {
        $_SESSION["success"] = "<div class=\"alert alert-success\">Data inserted successfully</div>";
        header("Location:insert.php");
    } else {
        $_SESSION["error"] = "<div class=\"alert alert-danger\">Data Not insert Error</div>";
        header("Location:insert.php");
    }
}

?>