<?php

session_start();
include "db.php";

if(isset($_GET['edit'])) {

    $id = $_GET['edit'];

    $sql = "SELECT * FROM student WHERE id = {$id}";
    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $email = $row["email"];
        $pass = $row["pass"];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
  
        <h1>Update your data</h1>
        <a href="index.php" class="btn btn-primary">Home</a>
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                <form action="update.php?update=<?php echo $id;?>" method="POST">
                    <div class="mb-3">
                        <h1>
                           ID : <?php echo $id; ?>
                        </h1>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="pass" value="<?php echo $pass; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="updatebtn">Update</button>
                    
                    <?php 
                    // if(isset($_POST["updatebtn"])) {

                    //     $email = $_POST["email"];
                    //     $pass = $_POST["pass"];
                    
                    //         $sql = "UPDATE student SET email='$email', pass='$pass' WHERE id = {$id}";
                    //         $update = mysqli_query($connection,$sql);
                    //         if($update) {
                    //             $_SESSION["success"] = "<div class=\"alert alert-success\">Data updated successfully</div>";
                    //             header("Location:index.php");
                    //         }
                    
                    // }
                    
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

