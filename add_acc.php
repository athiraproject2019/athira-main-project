
<html>
<head>
<style>
select {
  border: none;
  color: #555;
  margin-bottom: 10px;
  height: 35px;
  padding: 5px;
  width: 100%;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}
input[type="number"]{
    border: none;
  color: #555;
  margin-bottom: 10px;
  height: 35px;
  padding: 5px;
  width: 100%;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}


</style>
<?php
session_start();
include 'admin.html';
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
<br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              
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
<form action="add_acc1.php" method="post"  name="facc" class="contactform">
<div class="col-md-6">
<div class="aa-single-field">
<label>User-id</label>
<input type="text" name="uid" value="<?php echo $u ?>" readonly="readonly"></div></div>
<div class="col-md-6">
<div class="aa-single-field">
<label>Type</label><select name="utype" required>
<option value="RTO">--select--</option>
<option value="RTO">RTO</option>
<option value="Traffic police">Taffic police</option>
<option value="Treasury">Treasury</option></select></div></div>
<div class="col-md-6">
<div class="aa-single-field">
<label>District</label><input type="text" name="dist" required></div></div>
<div class="col-md-6">
<div class="aa-single-field">
    <label>Address</label><textarea name="addr" required></textarea></div></div>
    <div class="col-md-6">
<div class="aa-single-field">
    <label>phone</label><input type="number" name="ph" required></div></div>
    <div class="col-md-6">
<div class="aa-single-field">
    <label>Email</label><input type="email" name="email" required></div></div>
  
<div class="aa-single-field">
    <label>password</label><input type="password" name="pass" required></div>
  
<div class="aa-single-field">
    <label>confirm password</label><input type="password" name="cpass" required></div>
<div class="aa-single-submit"><input type="submit" value="submit" onClick="return check()"></div>
</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body></html>