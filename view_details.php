<html>
<head>
<?php
session_start();
include 'user.html';
?>
</head>

<body>
<?php
 include 'db.php';
 $aid=$_REQUEST['id1'];

?>
   <br><br>
   <br>
   <br>
   <br>
   <section id="aa-signin">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-signin-area">
             <div class="aa-signin-form">
             
   <form action="#" method="post" class="contactform"><?php
           $sql="select *from tb_action where actn_no='$aid'";
           $r=mysqli_query($db,$sql);
           while($row=mysqli_fetch_assoc($r))
           {
               ?>
             <div class="col-md-6">
             <div class="aa-single-field"><label>Action_no</label>
   <input type="text" name="ano" value="<?php echo $row['actn_no']?>" readonly="readonly"></div></div>		  
   <div class="col-md-6">
          <div class="aa-single-field"><label>Complaint_no</label>
   <input type="text" name="cno" value="<?php echo $row['cmplnt_no']?>" readonly="readonly"></div></div>
   <div class="col-md-6">
   <div class="aa-single-field"><label>Act</label>
   <input type="text" name="act" value="<?php echo $row['act']?>" readonly="readonly"></div></div>
   <div class="col-md-6">
   <div class="aa-single-field"><label>Rule</label>
   <input type="text" name="rl" value="<?php echo $row['rule']?>" readonly="readonly"></div></div>
   <div class="col-md-6">
   <div class="aa-single-field"><label>Fine</label>
   <input type="text" name="fn" value="<?php echo $row['fine']?>" readonly="readonly"></div></div>
   <div class="col-md-6">
   <div class="aa-single-field"><label>Action</label>
   <input type="text" name="actn" value="<?php echo $row['action']?>" readonly="readonly"></div></div>
   <h1>class Details</h1>
   <div class="aa-single-field"><label>Date</label>
   <input type="text" name="dt" value="<?php echo $row['date']?>" readonly="readonly"></div>
   <div class="aa-single-field"><label>Time</label>
   <input type="text" name="tm" value="<?php echo $row['time']?>" readonly="readonly"></div>
   <div class="aa-single-field"><label>Venue</label>
   <input type="text" name="vn" value="<?php echo $row['venue']?>" readonly="readonly"></div>
   <div class="aa-single-submit">
   <input type="submit" name="bk" value="Back"></div>
   <?php 
   } 
   ?>
   
   </form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <?php
  if(isset($_POST['bk']))
  {?>
      <script>
      window.location="view_ucmplnt.php";
      </script>
      <?php
  }?>
</body>
</html>