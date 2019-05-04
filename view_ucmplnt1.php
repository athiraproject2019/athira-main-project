<!DOCTYPE html>
<html lang="en" >

<head>


<style>
.button {
  background-color: #000; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>







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
<th>Action_no</th>
<th>complaint_no</th>
<th>fine</th>
<th>#</th>


</tr>
<tr>

<?php

$cid=$_REQUEST['id'];
include 'db.php';
$sql="select * from tb_action where cmplnt_no='$cid' ";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['actn_no'] ?></td>
     <td>
    <?php
    echo $row['cmplnt_no'] ?></td>
    <td>
    <?php 
    echo $row['fine'] ?></td>

    <td><a href="view_details.php?id1=<?php echo $row['actn_no'] ?>" >Details</a></td>
   </tr>
    <?php
}
?>
<tr>
    <td>
</td>
<td>
    total</td>
    <td>
    <?php $sql12="select sum(fine) as sum from tb_action where cmplnt_no='$cid' ";
        $r11=mysqli_query($db,$sql12);
        $sum=0;
        while($row11=mysqli_fetch_assoc($r11))
        {
          $sum=$row11['sum'];
        }
        echo $sum;
        ?>
</td>
</tr>
</table>
<form action="#" method="post">
   <center>
        <button class="button button4" name="ok">ok</button>
		</center>
		</form>
        <?php
if(isset($_POST['ok']))
{
  ?>
<script>
    window.location="epayment.php";
    </script>
    <?php
}
?>
</body></html>
