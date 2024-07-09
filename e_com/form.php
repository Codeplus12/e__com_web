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


<style>

    .h20{height:20px}
    .h50{height:50px}
</style>

<?php

session_start();

if(!isset($_SESSION['login'])||$_SESSION['login']!=true){

    echo "<script>location.href='log_in.php'</script>";

    exit;
}


?>
</head>
<body>

<a href="show.php"><button class="btn btn-success mt-3">show data</button></a>
    <!-- <h2>welcome<?php echo $_SESSION['$fname']?></h2> -->
<!-- form start ===============-->
<center>
    <form action="" method="post" class="container" enctype="multipart/form-data">

<input type="file" placeholder=" Product image*" class="h50 col-md-10" name="file">

<div class="h20 w-100"></div>


    <input type="text" placeholder="Product name*" class="h50 col-md-10" name="name">
    <div class="h20 w-100"></div>
    <input type="number" placeholder="Product delete Price*" class="h50 col-md-10" name="dprice">
    <div class="h20 w-100"></div>

    <input type="number" placeholder="Product original Price*" class="h50 col-md-10" name="oprice">
    <div class="h20 w-100"></div>

    <select name="select" id="" class="h50 col-md-10">
        <option value="SELECT CATEGORY">SELECT CATEGORY</option>
        <option value="AIR CONDITIONER">AIR CONDITIONER</option>
        <option value="AUDIO & VIDEO">AUDIO & VIDEO</option>
        <option value="GADGETS">GADGETS</option>
        <option value="HOME APPLIANCES">HOME APPLIANCES</option>
        <option value="KITCHEN APPLIANCES">KITCHEN APPLIANCES</option>
        <option value="PCS & LAPTOP">PCS & LAPTOP</option>
        <option value="REFRIGERATOR">REFRIGERATOR</option>
        <option value="SMART HOME">SMART HOME</option>
    </select>
    <div class="h20 w-100"></div>

    <!-- <input type="time" placeholder="in time*" class="h50 col-md-10" name="in">
    <div class="h20 w-100"></div>

    <input type="time" placeholder="out time*" class="h50 col-md-10" name="out">
    <div class="h20 w-100"></div>
    <input type="number" placeholder="Total fees*" class="h50 col-md-10" name="tf">
    <div class="h20 w-100"></div>
    <input type="number" placeholder="Pending fees*" class="h50 col-md-10" name="pf">
    <div class="h20 w-100"></div> -->

    <button name="send" style="height:50px;border-radius:10px;border:none; background:yellow;color:black" class="col-md-10">
                                    <p class="fs mt-2">Send</p>
                                </button>

                                

</form>

</center>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
<a href="log_out.php"><button class="btn btn-primary col-md-1 ms-4">log out</button></a></div>
</div>
<!-- form end================= -->
<?php

if(isset($_POST['send'])){

    $file=$_FILES['file']['name'];
    $name=$_POST['name'];
    $dprice=$_POST['dprice'];
    $oprice=$_POST['oprice'];
    $select=$_POST['select'];

    $sql="INSERT INTO `p_data`( `product_image`, `product_name`, `delete_price`, `original_price`, `category`) VALUES ('$file','$name','$dprice','$oprice','$select')";

    $result=mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('data submitted in database')</script>";
        echo "<script>location.href='show.php'</script>";
    }else{
        echo "not subnitted in database";
    }


$target="pic/";

$fname=$target.basename($_FILES['file']['name']);

$move=move_uploaded_file($_FILES['file']['tmp_name'],$fname);
}

?>
</body>
</html>