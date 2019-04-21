<?php
include 'db.php';
$id=$_REQUEST['id'];
$d=mysqli_query($db,"delete from tb_useracc where u_id='$id'");
$d1=mysqli_query($db,"delete from tb_login where u_id='$id'");
header("location:chnge_acc.php");
?>