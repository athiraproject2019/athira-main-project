<html><head>
<?php
session_start();
?>
  </head>
  <body>
  <?php
include 'db.php';
if(isset($_POST['ok']))
{
$r=$_POST['rapp'];
$uid=$_POST['uid'];
$lic=$_POST['lic'];
$dt=$_POST['dt'];
$u1=$_SESSION['u4'];
$ins=mysqli_query($db,"insert into tb_renue_lic(r_appno,user_id,lic_no,date,status) values('$r','$uid','$lic','$dt','applied')");
if($ins>0)
{
$upd=mysqli_query($db,"update id_gen set relic_appno='$u1'");
}
}?>
<script>
     alert("successfully applied");
     window.location="user.html";
     </script>
</body>
</html>