<html>
    <head>
        <?php
        session_start();
        ?>
    </head>
    <body>
    <?php
include 'traffic.html';
include 'db.php';

$sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$l="";
while($row=mysqli_fetch_assoc($r))
{
    $l=$row['tcmp_no'];
}
$l1=$l+1;
$_SESSION['u3']=$l1;
$user=$_SESSION['u'];
$u="tcm0".$l1;

    ?>
    <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="t_cmplntreg1.php" method="post" name="fff" class="contactform">
			  
    <div class="aa-single-field"><label>Complaint_no:</label>
        <input type="text" name="no"  value="<?php echo $u ?>"></div>
        <div class="aa-single-field"> <label>RC_no:</label>
        <input type="text" name="rno">     </div>   
        <div class="aa-single-field"> <label>licence_no:</label>
        <input type="text" name="lno"></div>
        
        <div class="aa-single-field"> <label>vehicle_no:</label>
        <input type="text" name="vno">     </div>   
        <div class="aa-single-submit"><input type="submit" value="ok" name="ok"></div>
</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>