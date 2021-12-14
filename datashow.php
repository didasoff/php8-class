<?php 
@include "db.php";

$sql = "SELECT * FROM student";
$showData = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
    <br>
    <br>
    <a href="index.php" class="btn btn-success">Back</a>
    <br>
    <br>
    <h1>Data Table</h1>
<div class="card">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>DATE</th>
            <th>ACTION</th>
        </tr>
        <?php 



if(mysqli_num_rows($showData) > 0) {
            
                while($row = mysqli_fetch_assoc($showData)) {
                    $id = $row["id"];
                    $email = $row["email"];
                    $pass = $row["pass"];
                    $date = $row["date"];
                
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $pass; ?></td>
            <td><?php echo $date; ?></td>
            
            <td>
                <a href="" class="btn btn-info btn-sm">view</a>
                <a href="" class="btn btn-warning btn-sm">edit</a>
                <a href="" class="btn btn-danger btn-sm">delete</a>
            </td>
        </tr>
        <?php 
                }
            }
            else {
                echo "no data";
            }
        ?>
    </table>
</div>
</div>
    
</body>
</html>