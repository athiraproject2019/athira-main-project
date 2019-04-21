<?php
include 'db.php';
$a=$_POST['act'];
$r=$_POST['rl'];
$f=$_POST['fn'];
$in=mysqli_query($db,"insert into tb_rule(act,rule,fine) values('$a','$r','$f')");
header("location:add_rule.php");
?>