<html>
    <head>
    <?php
session_start();
include 'user.html';
?>
</head>
<body>
<?php

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$l="";
while($row=mysqli_fetch_assoc($r))
{
    $l=$row['cmplnt_no'];
}
$l1=$l+1;
$_SESSION['u3']=$l1;
$user=$_SESSION['u'];

$u="cmp0".$l1;
?>
<br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              
<form action="add_pubcmplnt1.php" method="post"  name="facc" class="contactform">
<div class="aa-single-field">
    <label>complaint_No:</label><input type="text" name="no" value="<?php echo $u?>"></div>
    

<div class="aa-single-field">
    <label>name</label><input type="text" name="nm" value=""><div>

    <div class="aa-single-field">
    <label>address</label><input type="text" name="adrs" value=""><div>
    <div class="aa-single-field">
    <label>phone</label><input type="text" name="phn" value=""><div>
<div class="aa-single-field">
    <label>complaint</label><input type="text" name="cm" value=""><div>
    <div class="aa-single-submit"><input type="submit" value="register" name="ok"></div>
    </form>
    </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>