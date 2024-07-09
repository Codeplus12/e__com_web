<!-- database connection =============-->
<?php

include 'db.php';


?>
<!-- database connection complete =======-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php

session_start();

if(!isset($_SESSION['login'])||$_SESSION['login']!=true){

    echo "<script>location.href='log_in.php'</script>";

    exit;
}


?>


<body>

<a href="form.php"><button class="btn btn-success mt-3">insert data</button></a>

<a href="log_out.php"><button class="btn btn-primary col-md-1 ms-auto mt-3">log out</button></a></div>

    <div class="container mt-3">

    <center>
        <h2>Product data</h2>
    </center>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Delete Price</th>
                <th>Original Price</th>
                <th>Category</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>

        <!-- show query start========================== -->
<?php

//  $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE 1";

// $sql="SELECT * FROM `p_data`
// LIMIT 10
// OFFSET 5";

$sql="SELECT * 
FROM `p_data`
ORDER BY original_price ASC";


$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>

<tbody>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><img src="pic/<?php echo $row['product_image'] ?>" alt=""></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['delete_price'] ?></td>
                <td><?php echo $row['original_price'] ?></td>
                <td><?php echo $row['category'] ?></td>
                <td><a href="delete.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>"><button class="btn btn-warning">Edit</button></a></td>
            </tr>
        </tbody>
   <?php
}
?>     

    </table>


    

    </div>
</body>
</html>