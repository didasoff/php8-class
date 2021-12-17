<?php 

session_start();
@include "db.php";

if(isset($_GET["view"])) {
    $id = $_GET["view"];
    $sql = "SELECT * FROM student WHERE id = {$id}";
    $viewData = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($viewData);
    $id = $row["id"];
    $email = $row["email"];
    $pass = $row["pass"];
    $date = $row["date"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
    <br>
    <br>
    <a href="datashow.php" class="btn btn-success">Home</a>
    <br>
    <br>  
    <div class="card">
        <div class="card-body">
        <table class="table">
            <tr>
                <th>ID</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><?php echo $pass; ?></td>
            </tr>
            <tr>
                <th>DATE</th>
                <td><?php echo $date; ?></td>
            </tr>
        </table>
        </div>
    </div>
</div>
    
</body>
</html>