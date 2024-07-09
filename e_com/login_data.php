<!-- connection to database ===============-->
<?php
include 'db.php';
?>
<!-- connection complete============= -->

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

if(!isset($_SESSION['login'])||$_SESSION['login']=!true){

    echo "<script>location.href='log_in.php'</script>";

    exit;
}


?>

<body>

<a href="sign_up.php"><button class="btn btn-warning btn-hover mt-3">Insert data</button></a>
    <a href="login_data.php"><button href="data" class="btn btn-success btn-hover mt-3">Student data</button></a>
<div class="container mt-5" id="data">
    <CENTER>
<h1 class="bg-secondary text-warning col-md-12">Login data</h1>
  </CENTER>
              
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>email id</th>
        <th>password</th>
        <th>Delete</th>
        <!-- <th>Edit</th> -->
      </tr>
    </thead>
<!-- show query start=========== -->
<?php
$sql="SELECT `id`, `first_name`, `last_name`, `email_id`, `password` FROM `sign_up` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){


?>

    <tbody>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['email_id']?></td>
        <td><?php echo $row['password']?></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a></td>
        <!-- <td><a href="edit.php?id=<?php echo $row['id']?>"><button class="btn btn-warning">Edit</button></a></td> -->
      </tr>    
    </tbody>

<?php
}
?>
  </table>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
<a href="log_out.php"><button class="btn btn-primary col-md-1 ms-4">log out</button></a></div>
</div>
</div>
</body>
</html>