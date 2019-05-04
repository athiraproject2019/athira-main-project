<html>
<head>
<?php 
session_start();
include 'public.html';
?>

</head>
<body>

  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
<form action="#" method="post" class="contactform">
		  
                <div class="aa-single-field">
<label>user ID</label>
<input type="text" name="uid" required></div>
			  
                <div class="aa-single-field">
<label>password</label><input type="password" name="pass" required></div>
<div class="col-md-6">	
<div class="aa-single-submit">
    <input type="submit" value="Login" name="log"></div></div>
    <div class="col-md-6">	
<div class="aa-single-submit">
<input type="submit" value="reset">
</div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<a href="forgot.php">Forget password</a></div></div>
<div class="col-md-4">			  
                <div class="aa-single-field">
<a href="new_user.php">New user</a></div></div>

<?php
include 'db.php';
if(isset($_POST['log']))
{
    $id=$_POST['uid'];
    $p=$_POST['pass'];
    $sql="select *from tb_login where u_id='$id' && password='$p'";
    $r=mysqli_query($db,$sql);
    $type="";
    if($row=mysqli_fetch_assoc($r))
    {
        $u=$row['u_id'];
        $_SESSION['u']=$u;
        $type=$row['type'];
    }
    if($type=="user")
    {
        ?>
        <script>
            window.location="user1.html";
            </script>
        <?php
    }
    elseif($type=="RTO")
    {
        ?>
        <script>
            window.location="rto1.html";
            </script>
            <?php
    }
    elseif($type=="Treasury")
    {
        ?>
        <script>
            window.location="treasury1.html";
            </script>
            <?php
    }
    elseif($type=="Traffic police")
    {
        ?>
        <script>
            window.location="traffic1.html";
            </script>
            <?php
    }
    elseif($type=="admin")
    {
        ?>
        <script>
            window.location="admin.html";
            </script>
            <?php
    }
    else
    {
        ?>
        <script>
        alert("invalid user");
        </script>
        <?php
    }}
    ?>
    </div>
          </div>
        </div>
      </div>
    </div>
   
</section>
</form>
</body></html>