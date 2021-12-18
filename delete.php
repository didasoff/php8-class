<?php 
session_start();
@include "db.php";

if(isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $sql = "DELETE FROM student WHERE id = {$id}";
    $deleteData = mysqli_query($connection, $sql);
    if($deleteData) {
       $_SESSION["success"] = "<div class=\"alert alert-success\">Data delete successfully</div>";
       header("Location:index.php");
    } else {
        $_SESSION["error"] = "<div class=\"alert alert-danger\">something error</div>";
       header("Location:index.php");
    }
}
?>