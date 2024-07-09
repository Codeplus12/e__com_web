

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


<form action="" method="post">
<input type="text" name="id" id="">
<input type="password" name="pass" id="">
<button type="submit" name="send">log</button>

</form>


if