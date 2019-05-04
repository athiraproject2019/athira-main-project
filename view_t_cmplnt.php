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
<th>complaint_no</th>
<th>Traffic_id</th>
<th>Date</th>
<th>#</th>


</tr>
<tr>

<?php
include 'db.php';
$sql="select * from tb_tcmplnt_reg ";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['cmplntno'] ?></td>
     <td>
    <?php
    echo $row['trff_id'] ?></td>
    <td>
    <?php 
    echo $row['cmp_dt'] ?></td>

    <td><a href="view_t_cmplnt1.php?id=<?php echo $row['cmplntno'] ?>" >View</a></td>
       </tr>
    <?php
}
?>

</table>