<?php 

session_start();
include "db.php";

if(isset($_POST["register-btn"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!empty($email) && !empty($pass)) {  

        $sql1 = "SELECT * FROM user WHERE email='$email' AND pass='$pass'" ;
        $result1 = mysqli_query($connection,$sql1);
        $row = mysqli_fetch_assoc($result1);  

        if(mysqli_num_rows($result1) == 1){
            echo "Email already used";
        }else{

            $sql = "INSERT INTO user(name,email,pass) VALUES('$name','$email','$pass')";

            $result = mysqli_query($connection,$sql);
            if ($result) {
                echo "Register successfully";
            }
        }
    }else {
        echo "Empty field";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Register Now</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pass" class="form-control" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="register-btn" class="btn btn-success" value="Login">
                    </div>
                    <span>already a accout, <a href="login.php">login </a></span>
                </form>
            </div>
        </div>
    </div>



    
</body>
</html>



