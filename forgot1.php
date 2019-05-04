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
</head>
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
<form action="forgot1.php" method="post" class="contactform">
 <!-- <form id="contact" action="forgot1.php" method="post">
    <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
					<br>-->
    
          <div class="aa-single-field"> 
            <label>password</label>
	
      <input type="text" name="uname" required></div>
    
     
   
   
      <div class="aa-single-submit"> 
      <input type="submit" value="ok" name="ok"></div>
	  
  </form>
  </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <?php
  if(isset($_POST['ok']))
  {
	  
  
			$name=$_POST['uname'];
			$hint=$_SESSION['hint'];			

			include 'db.php';


$reg=mysqli_query($db,"update tb_login set password='$name' where hint='$hint'");

?>
<script>
	
	window.location="index.html";
	
	</script>
<?php
		
  }
?>
	
	
	
</body>

</html>
