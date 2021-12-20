<?php 
session_start();
include "db.php";

if (!isset($_SESSION['email'])) {

    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Add</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <br><br>
        <div class="card">
           <div class="card-body">
           <h1>Add Post</h1>
           <form action="" method="post">
               <div class="mb-3">
                   Image :
                   <input type="file" name="image" class="form-control">
               </div>

           </form>
           </div>
        </div>
    </div>
</body>
</html>