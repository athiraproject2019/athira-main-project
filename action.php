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
<th>Act</th>
<th>Rule</th>
<th>Fine</th>

</tr>
<tr>

<?php
include 'db.php';
$sql="select * from tb_rule ";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['act'] ?></td>
     <td>
    <?php
    echo $row['rule'] ?></td>
    <td>
    <?php 
    echo $row['fine'] ?></td>
     <td><a href="action1.php?id=<?php echo $row['act'] ?>" >ok</a></td>
</tr>
<?php
}
?></table>