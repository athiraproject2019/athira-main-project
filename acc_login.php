<html>
<head>
<?php 
session_start();

?>

</head>
<body>
<form action="#" method="post">
<label>user ID</label>
<input type="text" name="uid"></br>
<label>password</label><input type="password" name="pass"></br>
<input type="submit" value="submit" name="log">
<input type="submit" value="reset">
</br>
<a href="">Forget password</a>
<a href="new_user.php">New user</a>
</form>
<?php
include 'db.php';
if(isset($_POST['log']))
{
    $id=$_POST['uid'];
    $p=$_POST['pass'];
    $sql="select *from tb_login where u_id='$id' && password='$p'";
    $r=mysqli_query($db,$sql);
    $type="";
    if($row=mysqli_fetch_assoc($r))
    {
        $u=$row['u_id'];
        $_SESSION['u']=$u;
        $type=$row['type'];
    }
    if($type=="user")
    {
        header("location:user.php");
    }
    elseif($type=="RTO")
    {
        header("location:rto.php");
    }
    elseif($type=="treasury")
    {
       // header("location:");
    }
    elseif($type=="traffic")
    {
        //header("location:");
    }
    elseif($type=="admin")
    {
        //header("location:");
    }
    else
    {
        ?>
        <script>
        alert("invalid user");
        </script>
        <?php
    }}
    ?>
</body></html>