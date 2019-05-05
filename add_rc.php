<html>
<head>
<?php
session_start();
?>
<script type="text/javascript">
function valid()
{
  if(!isNaN(ff.dn.value))
	    {
		alert('Enter Name in character Format.');
		    ff.dn.focus();
	return false;
		}
    if(!isNaN(ff.name.value))
	    {
		alert('Enter Name in character Format.');
		    ff.name.focus();
	return false;
		}
    
    return true;
}</script>
</head>
<body>
<?php
 
 include 'user.html';

include 'db.php';

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$l="";
while($row=mysqli_fetch_assoc($r))
{
    $l=$row['rc_apno'];
}
$l1=$l+1;
$_SESSION['u2']=$l1;
$user=$_SESSION['u'];
$u="RcApp".$l1;
?>
<br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              
                  
<form action="add_rc1.php" method="post" name="ff" class="contactform">
			  
                <div class="aa-single-field">
<label>App no.</label><input type="text" name="apn"  value="<?php echo $u ?>" readonly="readonly">
</div>

<div class="col-md-6">			  
                <div class="aa-single-field">
<label>Dealer name</label><input type="text" name="dn">
</div>
</div>
<div class="col-md-6">			  
                <div class="aa-single-field">
<label>Dealer_Address</label><textarea name="adr" required></textarea>
</div>
</div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<label>Owner name</label><input type="text" name="name">
</div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<label>S/W/F of</label><input type="text" name="rltn" required>
</div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<label>permenent address</label><textarea name="ad" required></textarea>
</div>
</div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<label>District</label><input type="text" name="dst" required>
</div>
</div>

<div class="col-md-4">			  
                <div class="aa-single-field">
<label>vehicle class</label><input type="text" name="vcls" required>
</div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<label>Vehicle_type:
<input type="radio" name="r1" value="new" >New

<input type="radio" name="r1" value="used">Used
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Makers_clsftn</label><input type="text" name="mc" required>
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Body type</label><input type="text" name="bt" required></div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Chessis No</label><input type="text" name="cn" required></div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Engine no</label><input type="text" name="en" required></div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>fuel</label><input type="text" name="fuel" required></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>color</label><input type="text" name="clr"required ></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Manufacture_month</label><input type="text" name="mnth" required>
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Manufacture_year</label><input type="text" name="yr" required>
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>Horse power</label><input type="text" name="pwr" required></div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>cubic capacity</label><input type="text" name="cc" required>
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>seat capacity</label><input type="text" name="sc" required></div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">
<label>No. of cylinder</label><input type="text" name="cyl" required>
</div>
</div>
<div class="col-md-3">			  
                <div class="aa-single-field">

<label>user id</label><input type="text" name="userid" value="<?php echo $user ?>" readonly="readonly">
</div></div>
		  
                <div class="aa-single-submit">
<input type="submit" value="ok" onclick="return valid()">
</div>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>
