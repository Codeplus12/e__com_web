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
            <h1 class="bg-secondary text-warning col-md-10">LOGIN</h1>
        </center>
    </div>
<form action="" class="container" method="post">
    <center>
  <div class="mb-3 mt-3 col-md-10">
    
    
    <input type="email" class="form-control"  placeholder="Enter email id" name="email">
  </div>
  <div class="mb-3 mt-3 col-md-10">
    
    <input type="text" class="form-control"  placeholder="Enter password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary col-md-10" name="send">Submit</button>
</center>

</form>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
<h6 class="ms-4">Can't have an account?</h6>
<a href="sign_up.php"><button class="btn btn-primary col-md-1 ms-4">sign up</button></a></div>
</div>
<?php

if(isset($_POST['send'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM `sign_up` WHERE `email_id`='$email' and `password`='$pass'";

    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);

    $_SESSION['login']=true;

    $_SESSION['email']=$email;

    if($num==1){
        echo "<script>alert('login success')</script>";
        echo "<script>location.href='form.php'</script>";
    }else{
        echo "your id and password is wrong";
    }
}


?>

</body>
</html>