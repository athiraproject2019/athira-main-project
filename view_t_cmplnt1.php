<html>
    <head>
        <?php session_start();
        include 'rto.html';
        ?>
    </head>
    <body>
        <?php include 'db.php';
$id=$_REQUEST['id'];?>    <br><br>
<section id="aa-signin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-signin-area">
          <div class="aa-signin-form">
          
<form action="#" method="post" class="contactform"><?php
        $sql="select *from tb_tcmplnt_reg where cmplntno='$id'";
        $r=mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($r))
        {
            ?>
          
            <div class="col-md-6">			  
                <div class="aa-single-field"><label>complaint_no</label>
<input type="text" name="cmp" value="<?php echo $row['cmplntno']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>Traffic_id</label>
<input type="text" name="lno" value="<?php echo $row['trff_id']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>lic_no</label>
<input type="text" name="lno" value="<?php echo $row['lic_no']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>rc_no</label>
<input type="text" name="lno" value="<?php echo $row['rc_no']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>veh_no</label>
<input type="text" name="lno" value="<?php echo $row['veh_no']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>name</label>
<input type="text" name="lno" value="<?php echo $row['name']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>Address</label>
<input type="text" name="lno" value="<?php echo $row['adrs']?>" readonly="readonly"></div></div>
<div class="col-md-6">			  
                <div class="aa-single-field"><label>complaint_date</label>
        <input type="text" name="lno" value="<?php echo $row['cmp_dt']?>" readonly="readonly"></div></div><?php } ?>
        <?php
$sql="select *from tb_action where cmplnt_no='$id'";
        $r=mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($r))
        {
            ?>
            
            <div class="col-md-3">			  
                <div class="aa-single-field"><label>Act</label>
<input type="text" name="act" value="<?php echo $row['act']?>" ></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>rule</label>
<input type="text" name="rl" value="<?php echo $row['rule']?>" ></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>fine</label>
<input type="text" name="rn" value="<?php echo $row['fine']?>" ></div></div>
<div class="col-md-3">			  
                <div class="aa-single-field"><label>Action</label>
<input type="text" name="ac" value="<?php echo $row['action']?>" ></div></div>

        
        <?php } ?></form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>
