<!DOCTYPE html>
<html lang="en" >

<head>
     <?php
    session_start();
    ?>

  
      <link rel="stylesheet" href="css2/style1.css">

</head>

<body>
   
<br>
    <br><br><br>
 
<table class="responstable">
<tr>
<th>userid</th>
<th>type</th>
<th>district</th>
<th></th>
<th></th>
</tr>
<tr>




<?php
include 'db.php';

$sql="select * from tb_useracc";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['u_id'] ?></td>
     <td>
    <?php
    echo $row['type'] ?></td>
    <td>
    <?php 
    echo $row['district'] ?></td>
    <td><a href="chnge_acc1.php?id=<?php echo $row['u_id'] ?>" >Update</a></td>
    <td><a href="remv_acc.php?id=<?php echo $row['u_id']?>" >Remove</a></td>
    </tr>
    <?php
  
}
?>