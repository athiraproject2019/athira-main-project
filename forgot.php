<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php
session_start();
?>
<body>

  <?php
include 'public.html';

?>
<section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="forgot.php" method="post" class="contactform">
  
 <!-- <form id="contact" action="forgot.php" method="post">
    <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
					<br>-->
					<div class="aa-single-field"> 
	<label>Enter Your Hint</label>
	
      <input type="text" name="uname" required>
</div>
     
   
<div class="aa-single-submit">
      <input type="submit" value="ok" name="ok"></div>
	  
	 
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
	  
  
			$name=$_POST['uname'];
						

			include 'db.php';




$sql = "select hint from tb_login where hint='$name'";  
$retval=mysqli_query($db, $sql);  
  
 
if($row = mysqli_fetch_assoc($retval))
{
    

		$_SESSION['hint']=$name;
		?>
		<script>
	
	window.location="forgot1.php";
	
	</script>
	<?php
}		
	
	


else
{
	$_SESSION['hint']=$name;
?>
	<script>
	alert("invalid hint");
	window.location="forgot.php";
	
	</script>
	<?php
	}
  }
?>

	
	
</body>

</html>
