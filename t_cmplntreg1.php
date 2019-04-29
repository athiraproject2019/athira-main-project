<html>
    <head> <?php
        session_start();
        include 'traffic.html';
        ?>
</head>
<body>
<section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="#" method="post" name="fff" class="contactform">
			  
<?php
include 'db.php';

$rn=$_POST['rno'];
$vno=$_POST['vno'];
$no=$_POST['no'];
$n=$_POST['lno'];

$dt=date("Y/m/d");

if(isset($_POST['rno']))
{
   
    
    $s="select * from tb_rc where rc_no='$rn'";
    $r=mysqli_query($db,$s);
    while($row=mysqli_fetch_assoc($r))
    {
        echo $rn;
        ?>
     <div class="aa-single-field"><label>User_-id:</label>
        <input type="text" name="id"  value="<?php echo $row['User_id']?>"></div>
        
        <div class="aa-single-field"><label>Name:</label>
        <input type="text" name="nm"  value="<?php echo $row['owner_nm']?>"></div>
        
        <input type="hidden" name="rno"  value="<?php echo $rn ?>">
        
  
        <input type="hidden" name="lno"  value="<?php echo $n?>">
        <div class="aa-single-field"><label>Address:</label>
        <input type="text" name="ad"  value="<?php echo $row['adress'] ?>"></div>
        <div class="aa-single-field"><label>complaint:</label>
        <input type="text" name="cmp"  value=""></div>
        <input type="hidden" name="vno"  value="<?php echo $vno ?>">
        
        <input type="hidden" name="no"  value="<?php echo $no?>">
    <?php
    }

    

}

if(isset($_POST['lno'])) 
{ 
   // if(!isset($_POST['rno'])
   if($_POST['rno']=="")
{
    
    $s="select * from tb_d_licence where liscence_no='$n'";
    $r=mysqli_query($db,$s);
    while($row=mysqli_fetch_assoc($r))
    {?>
    <input type="hidden" name="rno"  value="<?php echo $rn ?>">
    <input type="hidden" name="lno"  value="<?php echo $n ?>">
    <div class="aa-single-field"><label>User_-id:</label>
        <input type="text" name="id"  value="<?php echo $row['User_id']?>"></div>
        
        <div class="aa-single-field"><label>Name:</label>
        <input type="text" name="nm"  value="<?php echo $row['name']?>"></div>
        <div class="aa-single-field"><label>Address:</label>
        <input type="text" name="ad"  value="<?php echo $row['address'] ?>"></div>
        <div class="aa-single-field"><label>complaint:</label>
        <input type="text" name="cmp"  value=""></div>
        <input type="hidden" name="vno"  value="<?php echo $vno ?>">
        
        <input type="hidden" name="no"  value="<?php echo $no?>">
    <?php
    }
}
}
if($rn=="" && $n=="")
{


    ?>
    <input type="hidden" name="rno"  value="<?php echo $rn ?>">
    <input type="hidden" name="lno"  value="<?php echo $n ?>">
        
        <div class="aa-single-field"><label>Name:</label>
        <input type="text" name="nm"  value=""></div>
        <div class="aa-single-field"><label>Address:</label>
        <input type="text" name="ad"  value=""></div>

        <div class="aa-single-field"><label>complaint:</label>
        <input type="text" name="cmp"  value=""></div>
        <input type="hidden" name="vno"  value="<?php echo $vno ?>">
        
        <input type="hidden" name="no"  value="<?php echo $no?>">
    <?php
    
} 
?>

<div class="aa-single-submit"><input type="submit" value="action" name="aok"></div>
<div class="aa-single-submit"><input type="submit" value="register" name="rok"></div>
</form>
<?php

if(isset($_POST['rok']))
{
    $c=$_POST['cmp'];
    $adrs=$_POST['ad'];
    $nm=$_POST['nm'];
    $vno=$_POST['vno'];
    $no=$_POST['no'];
    $rn=$_POST['rno'];
    $n=$_POST['lno'];
    $uid=$_POST['id'];
    $_SESSION['id']=$uid;
    $us=$_SESSION['u'];
    $cc=$_SESSION['u3'];
echo $rn;
echo $n;
echo "dddddddddddddddd";
    $in=mysqli_query($db,"insert into tb_tcmplnt_reg(cmplntno,lic_no,rc_no,veh_no,cmplnt,name,adrs,trff_id,cmp_dt,cmp_time,status,user_id)
     values('$no','$n','$rn','$vno','$c','$nm','$adrs','$us','$dt','4354','registered','$uid')");
     $u=mysqli_query($db,"update id_gen set tcmp_no='$cc'");

}
if(isset($_POST['aok']))
{
    $c=$_POST['cmp'];
    $adrs=$_POST['ad'];
    $nm=$_POST['nm'];
    $vno=$_POST['vno'];
    $no=$_POST['no'];
    $rn=$_POST['rno'];
    $n=$_POST['lno'];
    $uid=$_POST['id'];
    $us=$_SESSION['u'];
    $cc=$_SESSION['u3'];
    $_SESSION['cmid']=$no;
echo $rn;
echo $n;
echo "dddddddddddddddd";
    $in=mysqli_query($db,"insert into tb_tcmplnt_reg(cmplntno,lic_no,rc_no,veh_no,cmplnt,name,adrs,trff_id,cmp_dt,cmp_time,status,user_id)
     values('$no','$n','$rn','$vno','$c','$nm','$adrs','$us','$dt','4354','registered','$uid')");

?>


<script>
     alert("successfully registered");
     window.location="action.php";
     </script>
     <?php
}
?>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>
