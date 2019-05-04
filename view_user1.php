<table border="2px">
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
$a=$_GET['a'];
$sql="select * from tb_useracc where type='$a'";
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
    </tr>
    <?php
}
?>

</table>