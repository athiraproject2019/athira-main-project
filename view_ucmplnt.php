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
<th>complaint_id</th>
<th>compliant</th>
<th>Date</th>

<th>#</th>

</tr>
<tr>

<?php
include 'db.php';
$id=$_SESSION['u'];
$sql="select * from tb_tcmplnt_reg where user_id='$id' && status='registered' ";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['cmplntno'] ?></td>
     <td>
    <?php
    echo $row['cmplnt'] ?></td>
    <td>
    <?php 
    echo $row['cmp_dt'] ?></td>

    
    <td><a href="view_ucmplnt1.php?id=<?php echo $row['cmplntno']?>" >Action </a></td>    </tr>
    <?php
}
?>

</table>