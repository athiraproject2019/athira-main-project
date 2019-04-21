<?php
include 'db.php';
$id=$_REQUEST['id'];
$sql="select *from tb_rule where act='$id'";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
<form action="#" method="post">
<label>Act</label>
<input type="text" name="act" value="<?php echo $row['act']?>" readonly="readonly"></br>
<label>Rule</label>
<input type="text" name="rule" value="<?php echo $row['rule']?>"></br>
<label>Fine</label>
<input type="text" name="fne" value="<?php  echo $row['fine']?>"></br>
<input type="submit" value="update" name="upd">
</form>
<?php
}
if(isset($_POST['upd']))
{   $u=$_POST['act'];
    $u1=$_POST['rule'];
    $u2=$_POST['fne'];
    $r=mysqli_query($db,"update tb_rule set rule='$u1',fine='$u2' where act='$u'");
    header("location:view_rule.php");
}
?>