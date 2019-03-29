<html>
<head>
<?php
session_start();
?>
</head>
<?php
include 'db.php';

$uacc=$_POST['uid'];
$type=$_POST['utype'];
$dist=$_POST['dist'];
$adress=$_POST['addr'];
$ph=$_POST['ph'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$status="ok";
$u1=$_SESSION['u'];
$add=mysqli_query($db,"insert into tb_useracc values('$uacc','$type','$dist','$adress','$ph',
'$email','$pass','$status')");
$ad=mysqli_query($db,"insert into tb_login values('$uacc','$pass','$type','$email')");
$upd=mysqli_query($db,"update id_gen set user='$u1'");
header("location:add_acc.php");
?>
</html>