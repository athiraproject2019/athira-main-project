<?php
include 'db.php';
$id=$_REQUEST['id'];
$d=mysqli_query($db,"delete from tb_rule where act='$id'");

header("location:view_rule.php");
?>