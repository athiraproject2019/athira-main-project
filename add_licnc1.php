<html>
<head>
<?php
session_start();
?></head>


<?php
include 'db.php';
if(isset($_POST['ok']))
{
$no=$_POST['no'];
$name=$_POST['name'];
$rltn=$_POST['rltn'];
$adrs=$_POST['address'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$d="";
foreach($_POST['li'] as $c)
{
    $d=$d.$c.",";
}

$date=date("Y/m/d");
$status="applied";
$li1=$_SESSION['u3'];
$id2=$_POST['userid'];
echo $li1;
$ad=mysqli_query($db,"insert into tb_application(application_no,name,relation,address,dob,blood_group,licnc_veh,status,apply_date,user_id) 
values('$no','$name','$rltn','$adrs','$dob','$bg','$d','$status','$date','$id2')");
if($ad>0)
{
$upd=mysqli_query($db,"update id_gen set apno='$li1'");
}
?>
<script>
     alert("successfully registered");
     window.location="user.php";
     </script>
     <?php
}
?>
</html>