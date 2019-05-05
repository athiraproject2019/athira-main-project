<html>
<head>
<?php
session_start();
?>
</head>
<body>
<?php
include 'user.html';
?>
<br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="user_renuelic1.php" method="post" class="contactform">
			  
<?php

include 'db.php';

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$li="";
while($row=mysqli_fetch_assoc($r))
{
    $li=$row['relic_appno'];
}
$li1=$li+1;
$_SESSION['u4']=$li1;
$u="relic0".$li1;
$user=$_SESSION['u'];

$sql="select * from tb_d_licence where User_id='$user'";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
   
                <div class="aa-single-field">
<label>App_no:</label><input type="text" name="rapp" value="<?php echo $u ?>" readonly="readonly"></div>
			  
                <div class="aa-single-field">
                    <label>user id</label>
                    <input type="text" name="uid" value="<?php echo $user ?>" readonly="readonly"></div>		  
                <div class="aa-single-field">
                    <label>licence_no:</label>
                    <input type="text" name="lic" value="<?php echo $row['liscence_no'] ?>" readonly="readonly">
                  </div>
		  
                <div class="aa-single-field">
                    <label>date:</label>
                    <input type="date" name="dt" value="<?php echo date("Y/m/d") ?>" readonly="readonly"></div>			  
                <div class="aa-single-submit"><input type="submit" value="APPLY" name="ok"></div>

<?php
} ?>
</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 

</body></html>