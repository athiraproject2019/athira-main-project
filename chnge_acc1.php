<?php
include 'db.php';
$id=$_REQUEST['id'];
$sql="select *from tb_useracc where u_id='$id'";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
<form action="#" method="post">
<label>Name</label>
<input type="text" name="uid" value="<?php echo $row['u_id']?>" readonly="readonly"></br>
<label>Type</label>
<input type="text" name="type" value="<?php echo $row['type']?>"></br>
<label>District</label>
<input type="text" name="dist" value="<?php  echo $row['district']?>"></br>
<label>Address</label>
<input type="text" name="adr" value="<?php echo $row['adress']?>"></br>
<label>Phone</label>
<input type="number" name="ph" value="<?php echo $row['phone']?>"></br>
<label>Email</label>
<input type="text" name="email" value="<?php echo $row['email']?>">
<input type="submit" value="update" name="upd">
</form>
<?php
}
if(isset($_POST['upd']))
{   $u=$_POST['uid'];
    $u1=$_POST['adr'];
    $u2=$_POST['ph'];
    $u3=$_POST['email'];
    $r=mysqli_query($db,"update tb_useracc set adress='$u1',phone='$u2', email='$u3' where u_id='$u'");
    header("location:chnge_acc.php");
}
?>