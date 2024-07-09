<!-- database connection =============-->
<?php

$servername="localhost";
$username="root";
$password="";
$databasename="e_com";

$con=mysqli_connect($servername,$username,$password,$databasename);

if($con){
    echo "success";
}else{
    echo "not success";
}


?>