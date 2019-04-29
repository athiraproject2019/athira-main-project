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
<th>name</th>
<th>address</th>
<th>phone</th>
<th>date</th>
<th>complaint</th>
</tr>
<tr>

<?php
include 'db.php';
$sql="select * from tb_pub_cmplnt";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['name'] ?></td>
     <td>
    <?php
    echo $row['adrs'] ?></td>
    <td>
    <?php 
    echo $row['phn'] ?></td>
    <td>
    <?php 
    echo $row['cmplnt_dt'] ?></td>
    <td>
    <?php 
    echo $row['complaint'] ?></td>
    <?php
    }?>
    </table>