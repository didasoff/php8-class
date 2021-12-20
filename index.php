<?php 
session_start();
include "db.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"/>
</head>

<body>
    <header class="bg-light shadow p-4">
        <div class="container">
            <?php 
             if (isset($_SESSION['name'])) {  
                 ?>
                 <a href="logout.php" class="btn btn-danger">Logout</a>
                 <?php }else{ ?>
            <a href="login.php" class="btn btn-primary">Login</a>
            <?php } ?>
            <a href="addPost.php" class="btn btn-warning">Add Post</a>
        </div>
    </header>

    <div class="container">

        <?php 
     if(isset( $_SESSION["success"])) {
        echo  $_SESSION["success"];
    }
    if(isset( $_SESSION["error"])) {
        echo  $_SESSION["error"];
    }
     
     ?>

        <br>
        <div class="card">
            <div class="card-body">
            <h1 class="text-muted">Welcome Dashboard</h1>
            <span class="fw-bold h2 text-danger">
            <?php 
            if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            }
            ?>
            </span>
            </div>
        </div>
      
        <div class="card">
            <div class="card-body">
            <h3>Data Table</h1>
            <span class="badge bg-danger text-white">
            <?php 
        // visitor
            $sql = "UPDATE view SET views=`views`+1 WHERE id='1'";
            $result = mysqli_query($connection,$sql);

            $sql = "SELECT * FROM view";
            $visitor = mysqli_query($connection, $sql);
            while($row = mysqli_fetch_assoc($visitor)){
                $views = $row['views'];
                echo "Page Views $views";
            }
        
            ?>
        </span>
                    
                <a href="insert.php" class="btn btn-success">Insert</a>

            </div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>
                <?php 


$sql = "SELECT * FROM student ORDER BY id DESC";
$showData = mysqli_query($connection, $sql);
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
                        <a href="view.php?view=<?php echo $id; ?>" class="btn btn-info btn-sm">view</a>
                        <a href="edit.php?edit=<?php echo $id; ?>" class="btn btn-warning btn-sm">edit</a>
                        <a href="delete.php?delete=<?php echo $id; ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('A r you sure ?')">delete</a>
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

<?php 

if(isset( $_SESSION["success"])) {
    unset($_SESSION["success"]);
}
if(isset( $_SESSION["error"])) {
    unset($_SESSION["error"]);
}
// if (isset($_SESSION['name'])) {  
//     unset($_SESSION['name']);
// }

?>