<html>
<head>
<?php
session_start();
?>


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;

  font-family: arial;
  background: #4ECDC4;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #556270, #4ECDC4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #556270, #4ECDC4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.title {
  color: black;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<?php 

 include('phpqrcode/qrlib.php'); 
 $text=$_SESSION['lno'];
 include 'db.php';
 $folder="images/";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 $sql="select * from tb_d_licence where User_id='$text'";
$retval=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($retval))
{
	
 QRcode::png("liscence number  :"."  ".$row['liscence_no']."<br><br>"."user id  :"."  ".$row['User_id']."<br><br>"."name  :"."  ".$row['name'].
 "<br><br>"."address  :"."  ".$row['address']."<br><br>"."relation  :"."  ".$row['relation']."<br><br>".
 "dob  :"."  ".$row['dob']."<br><br>"."blood group  :"."  ".$row['blood_group']."<br><br>"."expire date :"."  ".$row['expiery']."<br><br>".
 "liscence vehicle  :"."  ".$row['licnc_veh']."<br><br>"."issued date  :"."  ".$row['issue_date']."<br><br>",$file_name);
 
}
 
 $sql="select * from tb_d_licence where User_id='$text'";
$retval=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($retval))
{
	?>
	
	
	
	
	<div class="card">
  <h2 style="text-align:center;color:white;padding:15px ">INDIAN UNION</h2>
<h3 style="text-align:center;color:white;">KERALA STATE
<br>
DRIVING LICENCE</h3>
  
  <h4 class="title" >name    :<?php echo $row['name'] ?></h4>
  <p  style="color:white;">address    :<?php echo $row['address'] ?></p>
  
  <div style="margin: 24px 0;">
   <!-- <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> -->
   
   <img src="uploads/<?php echo $row['sign'] ?>" style="border:2px solid rgba(117,189,209,1);"width="60px" height="25px"> 
   
   
  </div>
  <br>
   
   <img src="images/qr.png" style="border:2px solid rgba(117,189,209,1);"width="100px" height="auto"> 
  
  <p><button onClick="window.print()"><?php echo $row['liscence_no'] ?></button></p>
  
</div>




	
	
	
	
<?php	
}
?>

</body>
</html>
