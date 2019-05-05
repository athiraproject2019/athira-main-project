<html>
    <head><?php
session_start(); 
include 'traffic.html'?>
<script type="text/javascript">
function msg()
{
    var x1=document.getElementById("x");
    x1.style.display='block';
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
             
 
            <form action="#" method="post" enctype="multipart/form-data" class="contactform">
<?php
include 'db.php';
    $sql="select *from id_gen";
$r=mysqli_query($db,$sql);
$l="";
while($row=mysqli_fetch_assoc($r))
{
    $l=$row['actn_no'];
}
$l1=$l+1;
$_SESSION['ac1']=$l1;
$a=$_REQUEST['id'];
$u="actn0".$l1;
$u1=$_SESSION['cmid'];
            $sql="select * from tb_rule where act='$a'";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{?>

			  
                <div class="aa-single-field"><label>Action_no</label>
                <input type="text" name="an" value="<?php echo $u?>"></div>
                		  
                <div class="aa-single-field"><label>complaint_no</label>
                <input type="text" name="cn" value="<?php echo $u1?>"></div>
                		  
                <div class="aa-single-field"><label>Act</label>
                <input type="text" name="act" value="<?php echo $row['act'] ?>"></div>
                		  
                <div class="aa-single-field"><label>Rule</label>
                <input type="text" name="rl" value="<?php echo $row['rule'] ?>"></div>
        		  
                <div class="aa-single-field"><label>fine</label>
                <input type="text" name="fn" value="<?php echo $row['fine']?>"></div>     
                <div class="col-md-4">			  
                <div class="aa-single-submit">
                    
                <input type="button" name="cls" value="CLASS" onClick="msg()"></div></div>
                <div class="col-md-4">			  
                <div class="aa-single-submit"><input type="submit" name="sve" value="SAVE"></div></div>
                <div class="col-md-4">
                <div class="aa-single-submit">		  
                <input type="submit" name="fnsh" value="FINISH"></div></div>
                <div id="x" style="display:none;">
     
                <div class="aa-single-field"><label>Date</label>
                <input type="date" name="dt" value=""></div>
                		  
                <div class="aa-single-field"><label>Time</label>
                <input type="time" name="tm" value=""></div>
                <div class="aa-single-field"><label>Venue</label>
                <input type="text" name="vne" value=""></div>
                <div class="col-md-4">			  
                <div class="aa-single-submit"><input type="submit" name="n1" value="SAVE"></div></div>
                <div class="col-md-4">
                <div class="aa-single-submit">		  
                <input type="submit" name="n2" value="FINISH"></div></div>
            
     </div>
             <?php   
                
     } ?>  </form>
     </div>
          </div>
        </div>
      </div>
    </div>
  </section>
     <?php
     if(isset($_POST['sve']))
     { $r=$_SESSION['ac1'];
         $a=$_POST['an'];
         $_SESSION['an']=$aa;

         $u1=$_SESSION['cmid'];
        $ac=$_POST['act'];
        $rl=$_POST['rl'];
        $fn=$_POST['fn'];
         
         $in=mysqli_query($db,"insert into tb_action(actn_no,cmplnt_no,act,rule,fine,action) values('$a','$u1','$ac',
         '$rl','$fn','fine')");
        
         $uu=mysqli_query($db,"update id_gen set actn_no='$r'");

         ?><script>
         alert('saved');

         window.location="action.php";
         </script>
         <?php
     }?>
     <?php
     if(isset($_POST['fnsh']))
     {
        $r=$_SESSION['ac1'];
        $a=$_POST['an'];
        $u1=$_SESSION['cmid'];
       $ac=$_POST['act'];
       $rl=$_POST['rl'];
       $fn=$_POST['fn'];
        $cc1=$_SESSION['u3'];
        $in=mysqli_query($db,"insert into tb_action(actn_no,cmplnt_no,act,rule,fine,action) values('$a','$u1','$ac',
        '$rl','$fn','fine')");
       
        $uu=mysqli_query($db,"update id_gen set actn_no='$r'");
        $uc=mysqli_query($db,"update id_gen set tcmp_no='$cc1'");
        ?><script>
         alert('sucessfully registered');
         window.location="payment.php";
         </script>
         <?php
     }?>


<?php
if(isset($_POST['n1']))
{
    $r=$_SESSION['ac1'];
        $a=$_POST['an'];
        $u1=$_SESSION['cmid'];
        $ac=$_POST['act'];
        $rl=$_POST['rl'];
        $fn=$_POST['fn'];
        $dt=$_POST['dt'];
        $tm=$_POST['tm'];
        $vn=$_POST['vne'];
        $in=mysqli_query($db,"insert into tb_action(actn_no,cmplnt_no,act,rule,fine,action,date,time,venue) 
        values('$a','$u1','$ac','$rl','$fn','fine+class','$dt','$tm','$vn')");
        
         $uu=mysqli_query($db,"update id_gen set actn_no='$r'");

         ?><script>
         alert('saved');
         window.location="action.php";
         </script>
         <?php
}   ?>
 <?php
     if(isset($_POST['n2']))
     {
        $r=$_SESSION['ac1'];
        $a=$_POST['an'];
        $u1=$_SESSION['cmid'];
       $ac=$_POST['act'];
       $rl=$_POST['rl'];
       $fn=$_POST['fn'];
       $dt=$_POST['dt'];
       $tm=$_POST['tm'];
       $vn=$_POST['vne'];
        $cc1=$_SESSION['u3'];
        $in=mysqli_query($db,"insert into tb_action(actn_no,cmplnt_no,act,rule,fine,action,date,time,venue)
         values('$a','$u1','$ac','$rl','$fn','fine+class','$dt','$tm','$vn')");
       
        $uu=mysqli_query($db,"update id_gen set actn_no='$r'");
        $uc=mysqli_query($db,"update id_gen set tcmp_no='$cc1'");
        ?><script>
         alert('sucessfully registered');
         window.location="payment.php";
         </script>
         <?php
     }?>
   </body></html>