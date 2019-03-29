<html>
<head>
<?php
session_start();
?></head>
<body>
<?php
include 'user.html';
include 'db.php';

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$l="";
while($row=mysqli_fetch_assoc($r))
{
    $l=$row['apno'];
}
$l1=$l+1;
$_SESSION['u3']=$l1;
$user=$_SESSION['u'];
$u="app10".$l1;

?>
<br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              
                  
<form action="add_licnc1.php" method="post" class="contactform">
			  
                <div class="aa-single-field">
<label>AppNO.:</label><input type="text" name="no" value="<?php echo $u ?>"></div>

<div class="col-md-6">			  
                <div class="aa-single-field">
<label>Owner name</label><input type="text" name="name" required></div>
</div>
<div class="col-md-6">			  
                <div class="aa-single-field">
<label>S/W/D of:</label><input type="text" name="rltn" required></div>
</div>
<div class="col-md-6">			  
                <div class="aa-single-field">
                    <label>Address</label><textarea name="address" required></textarea></div>
</div>
                <div class="col-md-6">			  
                <div class="aa-single-field">
                    <label>DOB</label><input type="date" name="dob" required></div>
</div>
                <div class="col-md-6">			  
                <div class="aa-single-field">
                    <label>Blood group</label><input type="text" name="bg" required></div>
</div>
                <div class="col-md-6">			  
                <div class="aa-single-field">
                    <label>Licenced Vehicle</label><input type="checkbox" name="li[]" value='car'>car
<input type="checkbox" name="li[]" value='mv'>MV</div>
</div>
<div class="col-md-6">			  
                <div class="aa-single-field">
                    <label>user id</label><input type="text" name="userid" value="<?php echo $user ?>"></div>
</div>
                			  
                <div class="aa-single-submit"><input type="submit" value="submit" name="ok"></div>

</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>
