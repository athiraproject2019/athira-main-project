<html>
<head>
<?php
session_start();
?>
</head>
<?php
include 'db.php';
$an=$_POST['apn'];
$dnm=$_POST['dn'];
$ad=$_POST['adr'];
$on=$_POST['name'];
$rltn=$_POST['rltn'];
$pa=$_POST['ad'];
$dst=$_POST['dst'];
$vcls=$_POST['vcls'];
$vtyp=$_POST['r1'];
$mc=$_POST['mc'];
$bt=$_POST['bt'];
$cn=$_POST['cn'];
$eng=$_POST['en'];
$fuel=$_POST['fuel'];
$clr=$_POST['clr'];
$mnth=$_POST['mnth'];
$yr=$_POST['yr'];
$hpwr=$_POST['pwr'];
$c_cpty=$_POST['cc'];
$s_cpty=$_POST['sc'];
$cyl=$_POST['cyl'];

$_SESSION['a1']=$an;
$id2=$_POST['userid'];
$status="applied";
$li1=$_SESSION['u2'];

$in=mysqli_query($db,"insert into tb_rc_application(app_no,dealer_name,d_adrs,owner_nm,rltn,adress,dst,v_class,v_type,
m_classftn,body_typ,chesis_no,engine_no,fuel,clr,mnth,yr,h_pwr,cubic_cpty,seat_cpty,cylndr,status,user_id) values
('$an','$dnm','$ad','$on','$rltn','$pa','$dst','$vcls','$vtyp','$mc','$bt','$cn','$eng','$fuel','$clr','$mnth',
'$yr','$hpwr','$c_cpty','$s_cpty','$cyl','$status','$id2')");
if($in>0)
{
$upd=mysqli_query($db,"update id_gen set rc_apno='$li1'");
}
header("location:user1.html");

?>
</html>