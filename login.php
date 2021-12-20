<?php 

session_start();
include "db.php";

if(isset($_POST["login-btn"])) {

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM user  WHERE email='$email' AND pass='$pass'" ;
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];

    if ($email == $row['email'] && $pass == $row['pass']) {
        header("Location:index.php");
    }else{
        echo "Invalid email or password";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1> User Login</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pass" class="form-control" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="login-btn" class="btn btn-success" value="Login">
                    </div>
                    <span><a href="register.php">You have no accout, Register Now </a></span>
                </form>
            </div>
        </div>
    </div>



    
</body>
</html>