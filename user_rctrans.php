<html><head>
<?php session_start();
?> 
<script type="text/javascript">

function transfer(str) {
      
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "user_rctrans1.php?a="+str, true);
  xhttp.send();
}
</script>



</head>
<body>
  <?php include 'user1.html';
  ?>
  <br>
  <br><br>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="" method="post" class="contactform">
		  
                <div class="aa-single-field">
<label>RC No.</label>
<input type="text" name="rcno" onChange="transfer(this.value);"></div>
<div id="demo">

</div>
<?php
include 'db.php';
if(isset($_POST['ok']))
{
$nm=$_POST['nm'];
$adrs=$_POST['adrs'];
$rltn=$_POST['rltn'];
$an=$_POST['apno'];
$rc=$_POST['rcno'];
$id=$_SESSION['u'];
$rcup=$_SESSION['u4'];
$dt=$_POST['dt'];
$in=mysqli_query($db,"insert into tb_rc_trans(appno,rc_no,n_userid,name,adres,relatin,app_dt,status) values('$an',
'$rc','$id','$nm','$adrs','$rltn','$dt','applied')");
$upp=mysqli_query($db,"update id_gen set rc_trns='$rcup'");
}
?>
</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>