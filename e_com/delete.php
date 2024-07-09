<!-- server connection============ -->
<?php

include 'db.php';

?>
<!-- server connection complete ============-->

<?php

session_start();

if(!isset($_SESSION['login'])||$_SESSION['login']!=true){

    echo "<script>location.href='log_in.php'</script>";

    exit;
}


?>




<?php

$id=$_GET['id'];

$sql="DELETE FROM `p_data` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='show.php'</script>";
}
else{
    echo "Error";
}

?>