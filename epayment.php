<html>
    <head>


<?php
session_start();
include 'traffic.html'; 

?>
    </head>
    <body>
        <?php 
        include 'db.php';
        
        $sql="select *from id_gen";
        $r=mysqli_query($db,$sql);
        $li="";
        while($row=mysqli_fetch_assoc($r))
        {
            $li=$row['pay_id'];
        }
        $li1=$li+1;
        $_SESSION['u5']=$li1;
        $u="pid0".$li1;
        $u1=$_SESSION['c9'];
        $sql11="select sum(fine) as sum from tb_action where cmplnt_no='$u1'";
        $r11=mysqli_query($db,$sql11);
        $sum=0;
        while($row11=mysqli_fetch_assoc($r11))
        {
          $sum=$row11['sum'];
        }
        $dt=date("Y/m/d");
?>
  <br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form"> 
            <form action="#" method="post" class="contactform">
<div class="aa-single-field"><label>e_id</label>
                <input type="text" name="id" value="<?php echo $u ?>"></div>
                
                <div class="aa-single-field"><label>cmplnt_no</label>
                <input type="text" name="no" value="<?php echo $u1 ?>"></div>
         
                <div class="aa-single-field"><label>amount</label>
                <input type="text" name="amt" value="<?php echo $sum ?>"></div>   		         		  
                
                <div class="aa-single-field"><label>bank</label>
                <input type="text" name="bk" value=""></div>
                
                <div class="aa-single-field"><label>Account_no</label>
                <input type="text" name="acc" value=""></div>
                
                <div class="aa-single-field"><label>IFSC</label>
                <input type="text" name="ifsc" value=""></div>
                
                <div class="aa-single-field"><label>date</label>
                <input type="text" name="dt" value="<?php echo $dt?>"></div>
                		  
                <div class="aa-single-submit">
                <input type="submit" name="ok" value="ok"></div>
                		  
                </form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 		  		  
  <?php
if(isset($_POST['ok']))
{
  $pid=$_POST['id'];
  $pid1=$_SESSION['u5'];
  $cno=$_POST['no'];
  $amt=$_POST['amt'];
  $bk=$_POST['bk'];
  $acc=$_POST['acc'];
  $ifsc=$_POST['ifsc'];
  $dt=$_POST['dt'];
  $in=mysqli_query($db,"insert into tb_pay(pay_id,cmplnt_no,amount,bank,acc_no,ifsc,date) values('$pid','$cno',
  '$amt','$bk','$acc','$ifsc','$dt')");
  $up=mysqli_query($db,"update id_gen set pay_id='$pid1'");
  $uu=mysqli_query($db,"update tb_tcmplnt_reg set status='processing' where cmplntno='$cno'");
  ?>
  <script>
    alert('payment successfuly completed');
    window.location="user.html";</script>
    <?php
}?>
    </body>
    </html>