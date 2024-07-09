<!-- database connection ====-->

<?php

include 'db.php';

?>
<!-- database connection complete -->

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

?>

<body>

<div class="mt-5">
        <center>
            <h1 class="bg-secondary text-warning col-md-10">DATA</h1>
        </center>
    </div>
<form action="" class="container" method="post">
    <center>
  <div class="mb-3 mt-3 col-md-10">
    
    <input type="text" class="form-control" placeholder="Enter first name" name="fname">
  </div>

  <div class="mb-3 mt-3 col-md-10">
    
    <input type="text" class="form-control"  placeholder="Enter last name" name="lname">
  </div>
  <div class="mb-3 col-md-10">
    
    <input type="email" class="form-control"  placeholder="Enter email id" name="email">
  </div>
  <div class="mb-3 mt-3 col-md-10">
    
    <input type="text" class="form-control"  placeholder="Enter password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary col-md-10" name="send">Submit</button>
</center>
</form>

<?php

if(isset($_POST['send'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="INSERT INTO `sign_up`( `first_name`, `last_name`, `email_id`, `password`) VALUES ('$fname','$lname','$email','$pass')";

    $result=mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('sign up complete')</script>";
        echo "<script>location.href='log_in.php'</script>";

    }else{
        echo "Error";
    }
}


?>
    
</body>
</html>