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
        $u="dpid0".$li1;
        $u1=$_SESSION['c9'];
        $sql11="select sum(fine) as sum from tb_action where cmplnt_no='$u1'";
        $r11=mysqli_query($db,$sql11);
        $sum=0;
        while($row11=mysqli_fetch_assoc($r11))
        {
          $sum=$row11['sum'];
        }
        $us=$_SESSION['u'];
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
<div class="aa-single-field"><label>d_id</label>
                <input type="text" name="did" value="<?php echo $u ?>"></div>
                <div class="aa-single-field"><label>complaint_no</label>
                <input type="text" name="cid" value="<?php echo $u1 ?>"></div>
                <div class="aa-single-field"><label>traffic_id</label>
                <input type="text" name="tid" value="<?php echo $us ?>"></div>
                <div class="aa-single-field"><label>Amount</label>
                <input type="text" name="amt" value="<?php echo $sum ?>"></div>
                <div class="aa-single-field"><label>Date</label>
                <input type="text" name="dt" value="<?php echo $dt ?>"></div>
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
    $id=$_POST['did'];
    $cid=$_POST['cid'];
    $tid=$_POST['tid'];
    $amt=$_POST['amt'];
    $dt=$_POST['dt'];
    $pp=$_SESSION['u5'];

    $ins=mysqli_query($db,"insert into tb_dpay(pay_id,cmplnt_id,trfff_id,amount,date,status) values
    ('$id','$cid','$tid','$amt','$dt','not-processed')");
    $up=mysqli_query($db,"update id_gen set pay_id='$pp' ");
    $uu=mysqli_query($db,"update tb_tcmplnt_reg set status='processing' where cmplntno='$cid'");
    ?>
    <script>
    alert('payment completed');
    window.location="t_cmplntreg.php";
    </script>
    <?php
  }
?>
</body>
</html>