<html>
<head>
    <?php
session_start();
    ?>
</head>
<body>
<?php
include 'user1.html';
?>
<br>
  <br><br>
  
    
            <form action="user_rctrans.php" method="post" class="contactform">
			  
<?php
include 'db.php';
$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$li="";
while($row=mysqli_fetch_assoc($r))
{
    $li=$row['rc_trns'];
}
$li1=$li+1;
$_SESSION['u4']=$li1;
$u="rctrans0".$li1;
$user=$_SESSION['u'];

$dt=date("Y/m/d");
$rc=$_GET['a'];
$sql="select * from tb_rc where rc_no='$rc'";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{?>


<div class="col-md-4">			  
                <div class="aa-single-field">
                    <label>app no</label><input type="text" name="apno" value="<?php echo $u ?>" readonly="readonly">
</div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
                    <label>Dealer name</label>
                    <input type="text" name="dn" value="<?php echo $row['dealer_name'];?>" readonly="readonly"></div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
                    <label>D_Address</label>
                    <input type="text" name="adr" value="<?php echo $row['d_adrs'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field">
                    <label>Owner name</label>
                    <input type="text" name="name" value="<?php echo $row['owner_nm'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field">
                    <label>S/W/F of</label>
                    <input type="text" name="rltn" value="<?php echo $row['rltn'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field">
                    <label>permenent address</label>
                    <input type="text" name="ad" value="<?php echo $row['adress'];?>" readonly="readonly"></div></div>

<div class="col-md-3">			  
                <div class="aa-single-field"><label>vehicle class</label>
                <input type="text" name="vcls" value="<?php echo $row['v_class'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>vehicle type</label>
                <input type="text" name="vt"value="<?php echo $row['v_type'];?>" readonly="readonly"> </div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Makers_clsftn</label>
                <input type="text" name="mcf" value="<?php echo $row['m_clssftn'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Body type</label>
                <input type="text" name="bt" value="<?php echo $row['body_typ'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Chessis No</label>
                <input type="text" name="cn" value="<?php echo $row['chesis_no'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Engine no</label>
                <input type="text" name="en" value="<?php echo $row['engine_no'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>fuel</label>
                <input type="text" name="fuel" value="<?php echo $row['fuel'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>color</label>
                <input type="text" name="clr" value="<?php echo $row['clr'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Manufacture_month</label>
                <input type="text" name="mnth" value="<?php echo $row['mnth'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Manufacture_year</label>
                <input type="text" name="yr" value="<?php echo $row['yr'];?>" readonly="readonly"></div></div>               
 <div class="col-md-3">
                <div class="aa-single-field"><label>Horse power</label>
                <input type="text" name="pwr" value="<?php echo $row['h_pwr'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>cubic capacity</label>
                <input type="text" name="cc" value="<?php echo $row['cubic_cpty'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>seat capacity</label>
                <input type="text" name="sc" value="<?php echo $row['seat_cpty'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>No. of cylinder</label>
                <input type="text" name="cy" value="<?php echo $row['cylndr'];?>" readonly="readonly"></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>User Id</label>
                <input type="text" name="uid" value="<?php echo $user ?>" readonly="readonly"></div></div>

			  
                <div class="aa-single-field"><label> name</label><input type="text" name="nm" value="" required></div></div>
 <div class="aa-single-field"><label>address</label><input type="text" name="adrs" value="" required></div>
 <div class="aa-single-field"><label>s/w/f of</label><input type="text" name="rltn" value="" required></div>
 <div class="aa-single-field"><label>date</label><input type="text" name="dt" value="<?php echo $dt ?>" readonly="readonly"></div>
 <div class="aa-single-submit"><input type="submit" value="apply" name="ok"></div>

<?php
}
?>
</form>

  
</body>
</html>




