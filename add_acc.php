
<html>
<head>
<?php
session_start();
?>
<script type="text/javascript">
function check()
{
    var a=facc.pass.value;
    var b=facc.cpass.value;
    if(a!=b)
    {
        alert("re-enter password");
        facc.cpass.focus();
        return false;
    }
    
    var p=facc.ph.value.length;
    if(p!=10)
    {
        alert("phone should be 10 digits");
        facc.ph.focus();
        return false;
    }
    return true;
}</script>
</head>
<body>
<?php
include 'db.php';

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$user="";
while($row=mysqli_fetch_assoc($r))
{
    $user=$row['user'];
}
$user1=$user+1;
$_SESSION['u']=$user1;
$u="user_".$user1;

?>
<form action="add_acc1.php" method="post"  name="facc">

<label>User-id</label>
<input type="text" name="uid" value="<?php echo $u ?>"</br>

<label>Type</label><select name="utype" required>
<option value="RTO">RTO</option>
<option value="Traffic police">Taffic police</option>
<option value="Treasury">Treasury</option></select></br>
<label>District</label><input type="text" name="dist" required></br>
<label>Address</label><input type="textarea" name="addr" required></br>
<label>phone</label><input type="number" name="ph" required></br>
<label>Email</label><input type="email" name="email" required></br>
<label>password</label><input type="password" name="pass" required></br>
<label>confirm password</label><input type="password" name="cpass" required></br>
<input type="submit" value="submit" onClick="return check()">
</form>
</body></html>