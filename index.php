
<?php
include 'e_com/db.php';

?>

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

    <!-- fa fa cdn==============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- latest fafa icon -->
    <script src="https://kit.fontawesome.com/e15f0cadc5.js" crossorigin="anonymous"></script>

    <style>
        .h1 {
            height: 1px;
        }

        .h10 {
            height: 10px;
        }

        .h20 {
            height: 20px;
        }

        .h30 {
            height: 30px;
        }

        .h40 {
            height: 40px;
        }

        .h50 {
            height: 50px;
        }

        .h60 {
            height: 60px;
        }

        .h70 {
            height: 70px;
        }

        .h90 {
            height: 90px;
        }

        .h150 {
            height: 150px;
        }

        .h260 {
            height: 240px;
        }

        .h440 {
            height: 440px;
        }



        .w90 {
            width: 90%;
        }



        .fs {
            font-size: 18px;
        }

        .fs1 {
            font-size: 48px;
        }

        .fs2 {
            font-size: 30px;
        }

        .fs3 {
            font-size: 14px;
        }


        .fw1 {
            font-weight: 100;
        }

        .fw2 {
            font-weight: 200;
        }

        .fw3 {
            font-weight: 300;
        }

        .fw4 {
            font-weight: 400;
        }

        .fw5 {
            font-weight: 500;
        }

        .fw6 {
            font-weight: 600;
        }

        .fw7 {
            font-weight: 700;
        }

        .fw8 {
            font-weight: 800;
        }

        .lh {
            line-height: 1.2;
        }

        .bg {
            background: rgb(7, 105, 218);
        }

        .bg1 {
            background: rgb(5, 115, 240);
        }


        .cl {
            color: rgb(39, 50, 63)
        }

        .bi {
            background-image: url(img/electronic-store-hero-image.jpg);
            background-size: cover;
            background-position: center;


        }


        @media(max-width:500px) {

            .d {
                display: none
            }
        }
    </style>


</head>

<body>
    <div class="container-fluid d">
        <div class="row bg text-light">
            <div class="col-md-4">
                <p class="p-0 m-0 fs">24/7 Customer service 1-800-234-5678</p>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-8 p-0">
                        <p class="p-0 m-0 fs">Shipping & return</p>
                    </div>
                    <div class="col-md-4 p-0">
                        <p class="p-0 m-0 fs">Track order</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bg1 p-4">
            <div class="col-md-3">
                <img src="img/electronic-store-logo.svg" alt="">
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <div class="row">
                <form action="" method="post">

<input type="search" name="search" id="">
<button type="submit" name="go">go</button>
</form>


<?php

if(isset($_POST['go'])){

$search=$_POST['search'];


setcookie("laptop",$search,time()+60);

}
?>
<!-- <form  method="post">
                <input type="search" placeholder=" Search product ..." class="h40 col-md-9 text-secondary d" name="search">
                <button class="btn btn-light col-md-2 h40" name="hyy" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass text-primary"></i></button>
            </form> -->
            </div>
            </div>
        </div>
    </div>



    <div class="h1 w-100 bg-dark p-0 m-0"></div>

    <div class="container-fluid d">

        <div class="row bg1 text-light">
            <div class="h10 w-100"></div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <p class="p-0 m-0 fs">All products</p>
                    </div>
                    <div class="col-md-4">
                        <p class="p-0 m-0 fs">Home appliances</p>
                    </div>
                    <div class="col-md-4">
                        <p class="p-0 m-0 fs">Audio & video</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-2 p-0">
                        <p class="p-0 m-0 fs">Refrigerator</p>
                    </div>
                    <div class="col-md-2 p-0">
                        <p class="p-0 m-0 fs">New arrivals</p>
                    </div>
                    <div class="col-md-2 p-0">
                        <p class="p-0 m-0 fs">Today's deal</p>
                    </div>
                    <div class="col-md-2 p-0">
                        <p class="p-0 m-0 fs">Gift cards</p>
                    </div>
                    <div class="col-md-1 p-0">
                        <p class="p-0 m-0 fs">More</p>
                    </div>
                    <div class="col-md-1 p-0">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-2">
                        <p class="p-0 m-0 fs"> Log in</p>
                    </div>
                </div>
            </div>
            <div class="h10 w-100"></div>

        </div>
    </div>
    <div class="container-fluid bi">
        <div class="row">
            <div class="h150 w-100"></div>
            <div class="col-md-7"></div>
            <div class="col-md-5 px-5">
                <div class="bg-light px-4">
                    <div class="h40 w-100"></div>
                    <img src="img/electronic-store-brand-logo-00.png" alt="">
                    <p class="fs1 fw6 p-0 lh">The best home
                        entertainment
                        system is here</p>
                    <div class="h20 w-100"></div>
                    <p class="fs2 fw4 p-0">
                        Sit diam odio eget rhoncus volutpat est nibh
                        velit posuere egestas.
                    </p>
                    <div class="h20 w-100"></div>
                    <p class="fs2 fw6 p-0 text-primary">
                        Shop now
                    </p>
                    <div class="h40 w-100"></div>
                </div>
            </div>
            <div class="h50 w-100"></div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-md-3 h60">
                        <i class="fa-solid fa-truck-fast fs2 mt-3 text-primary"></i>
                    </div>
                    <div class="col-md-9 py-1">
                        <p class="fs m-0 p-0">Free shipping</p>
                        <p class="text-secondary fs3 m-0 p-0">When you spend $80 or more</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-md-3 h60">
                        <i class="fa-solid fa-comment-dots fs2 mt-3 text-primary"></i>
                    </div>
                    <div class="col-md-9 py-1">
                        <p class="fs m-0 p-0">We are available 24/7</p>
                        <p class="text-secondary fs3 m-0 p-0">Need help? contact us anytime</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-md-3 h60">
                        <i class="fa-solid fa-rotate-left fs2 mt-3 text-primary"></i>
                    </div>
                    <div class="col-md-9 py-1">
                        <p class="fs m-0 p-0">Satisfied or return</p>
                        <p class="text-secondary fs3 m-0 p-0">Easy 30-day return policy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-md-3 h60">
                        <i class="fa-solid fa-credit-card fs2 mt-3 text-primary"></i>
                    </div>
                    <div class="col-md-9 py-1">
                        <p class="fs m-0 p-0">100% secure payments</p>
                        <p class="text-secondary fs3 m-0 p-0">Visa, Mastercard, Stripe, PayPal</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="h50 w-100"></div>
    <!-- product row=================== -->
    <div class="container">
        <div class="row" style="border: 1px solid grey;">
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-06.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">AIR CONDITIONER</p>
                        <p class="fs3 cl fw4 m-0 p-0">4 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-08.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">AUDIO & VIDEO</p>
                        <p class="fs3 cl fw4 m-0 p-0">5 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-02.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">GADGETS</p>
                        <p class="fs3 cl fw4 m-0 p-0">6 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-07.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">HOME APPLIANCES</p>
                        <p class="fs3 cl fw4 m-0 p-0">5 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-05.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">KITCHEN APPLIANCES</p>
                        <p class="fs3 cl fw4 m-0 p-0">6 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-03.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">pcs & LAPTOP</p>
                        <p class="fs3 cl fw4 m-0 p-0">4 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-04.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">REFRIGERATOR</p>
                        <p class="fs3 cl fw4 m-0 p-0">4 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12">
                    <img src="img/electronic-store-category-image-01.jpg" alt="" class="h240 w-100">
                    <center>
                        <p class="fs cl fw7 p-0 m-0">SMART HOME</p>
                        <p class="fs3 cl fw4 m-0 p-0">5 PRODUCTS</p>
                    </center>
                </div>
            </div>
            <div class="h50 w-100"></div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="h50 w-100"></div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <img src="img/electronic-store-promotional-banner-2.jpg" alt="" class="h150 w-100">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <img src="img/electronic-store-promotional-banner-1.jpg" alt="" class="h150 w-100">
                </div>
            </div>
            <div class="h50 w-100"></div>
        </div>
    </div>

    <!-- todays deals in all category====================== -->

    <div class="container">
        <p class="fs2 fw5">Today's best deal</p>
        <div class="row">
<?php

        // $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE 1";

//         $sql="SELECT * FROM `p_data`
// LIMIT 10
// OFFSET 5";

$sql="SELECT *
FROM `p_data`
ORDER BY RAND()
LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>



        </div>
    </div>



    <!-- todays deals in home appliances==================== -->

    <div class="container">
        <p class="fs2 fw5">Home Appliances</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='HOME APPLIANCES' LIMIT 4 ";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>


    

    <!-- todays deals in gadgets==================== -->

    <div class="container">
        <p class="fs2 fw5">Gadgets</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='GADGETS' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>

    <!-- todays deals in PCS & LAPTOP==================== -->

    <div class="container">
        <p class="fs2 fw5">PCS & LAPTOPS</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='PCS & LAPTOP' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>

    <!-- todays deals in AUDIO & VIDEO==================== -->

    <div class="container">
        <p class="fs2 fw5">AUDIO & VIDEO</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='AUDIO & VIDEO' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>

        <!-- todays deals in AIR CONDITIONER==================== -->

        <div class="container">
        <p class="fs2 fw5">AIR CONDITIONER</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='AIR CONDITIONER' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>

        <!-- todays deals in KITCHEN APPLIANCES==================== -->

        <div class="container">
        <p class="fs2 fw5">KITCHEN APPLIANCES</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='KITCHEN APPLIANCES' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>
 
        <!-- todays deals in SMART HOME==================== -->

        <div class="container">
        <p class="fs2 fw5">SMART HOME</p>
        <div class="row">
<?php

        $sql="SELECT `id`, `product_image`, `product_name`, `delete_price`, `original_price`, `category` FROM `p_data` WHERE `category`='SMART HOME' LIMIT 4";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
            <div class="col-md-3">
                <img src="e_com/pic/<?php echo $row['product_image'] ?>" alt="" class="h240 w-100">
                <div class="h10 w-100"></div>
                <i class="fa-regular fa-star  text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <i class="fa-regular fa-star text-warning"></i>
                <p class="fs fw5">
                 <?php echo $row['product_name'] ?>
                </p>
                <p><del class="text-secondary fw5">$<?php echo $row['delete_price'] ?></del><span class="fw6">$<?php echo $row['original_price'] ?></span></p>
            </div>



<?php

}

?>


        </div>
    </div>

</body>

</html>