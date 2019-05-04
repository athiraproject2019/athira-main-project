<html>
<head>
<?php
session_start();
?>


<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<style>
	body{
		margin: 0px;
		padding: 10px;
	}
	.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    height: auto;
    max-width: 640px; // orginal twitter width: 290px;
}
.twPc-bg {
    background-image: url("rcbg.jpg");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}
.twPc-button {
    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 100px;
    width: 100px;
}
.twPc-divUser {
    margin: 5px 0 0;
}
.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divName a {
    color: inherit !important;
}
.twPc-divStats {
    margin-left: 11px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 14px;
    transition: color 0.15s ease-in-out 0s;
    color:	#2f5788;
}
.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}
</style>
<body>

<?php 

 include('phpqrcode/qrlib.php'); 
 $text=$_SESSION['rno'];
 include 'db.php';
 $folder="images1/";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 $sql="select * from tb_rc where User_id='$text'";
$retval=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($retval))
{
    QRcode::png("Rc number  :"."  ".$row['rc_no']."<br><br>"."Dealer name  :"."  ".$row['dealer_name']."<br><br>".
    "Dealer address  :"."  ".$row['d_adrs']."<br><br>"."Owner name  :"."  ".$row['owner_nm']."<br><br>".
    "Owner address  :"."  ".$row['adress']."<br><br>"."District  :"."  ".$row['dst']."<br><br>".
    "Vehicle class  :"."  ".$row['v_class']."<br><br>"."Body type  :"."  ".$row['body_typ']."<br><br>"."Chesis number  :
    "."  ".$row['chesis_no']."<br><br>"."Engine number  :"."  ".$row['engine_no']."<br><br>"."fuel  :"."  ".$row['fuel'].
    "<br><br>"."Color :"."  ".$row['clr']."<br><br>"."Month  :"."  ".$row['mnth']."<br><br>"."Year  :"."  ".$row['yr'].
    "<br><br>"."seat capacity  :"."  ".$row['seat_cpty']."<br><br>",$file_name);
}
 
$sql="select * from tb_rc where User_id='$text'";
$retval=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($retval))
{
   ?>
   
   
   
   
   <div class="container">
<div class="row">
<!-- code start -->
<div class="twPc-div">
    <a class="twPc-bg twPc-block"></a>

	<div>
		<div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
            <h4  style="color: white;"><b><big><big>C</big></big>ERTIFICATE OF <big><big>R</big></big>EGISTRATION<b></h4>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Twitter Button -->   
		</div>

		<a  class="twPc-avatarLink">
    
      <img src="images1/qr.png" class="twPc-avatarImg" alt="QRcode"> 
 
		</a>

		<div class="twPc-divUser">
			<div class="twPc-divName">
        <?php
			echo $row['owner_nm'];?>
			</div>
			<span>
        <span><?php 
        echo $row['adress'];?>
         </span>
			</span>
		</div>

		<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					
						<span class="twPc-StatLabel twPc-block ">Registration No</span>
						<span class="twPc-StatValue"> <?php echo $row['rc_no'];?> </span>
					
				</li>
				<li class="twPc-ArrangeSizeFit">
					
						<span class="twPc-StatLabel twPc-block">Dealer Name</span>
						<span class="twPc-StatValue"><?php   echo $row['dealer_name']; ?></span>
					
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Dealer address</span>
						<span class="twPc-StatValue"><?php echo $row['d_adrs']; ?></span>
					</a>
				</li>
			</ul>
		</div>
		<h5 style="padding: 3px;text-align: center;background-color: grey;color: white;"><b>Discription</b></h5>
		<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
						<span class="twPc-StatLabel twPc-block">class of vehicle</span>
						<span class="twPc-StatValue"><?php echo $row['v_class']; ?> </span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/following" title="885 Following">
						<span class="twPc-StatLabel twPc-block">engine no</span>
						<span class="twPc-StatValue"><?php echo $row['engine_no']; ?></span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Fuel</span>
						<span class="twPc-StatValue"><?php echo $row['fuel']; ?></span>
					</a>
				</li>
			</ul>
		</div>
				<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
						<span class="twPc-StatLabel twPc-block">Color</span>
						<span class="twPc-StatValue"><?php echo $row['clr']; ?></span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/following" title="885 Following">
						<span class="twPc-StatLabel twPc-block">Seat capacity</span>
						<span class="twPc-StatValue"><?php echo $row['seat_cpty']; ?></span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Fuel</span>
						<span class="twPc-StatValue">Petrol</span>
					</a>
				</li>
			</ul>
		</div>
				<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
						<span class="twPc-StatLabel twPc-block">class of vehicle</span>
						<span class="twPc-StatValue">LMV-MOTOR</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/following" title="885 Following">
						<span class="twPc-StatLabel twPc-block">engin no</span>
						<span class="twPc-StatValue">DA36466</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Fuel</span>
						<span class="twPc-StatValue">Petrol</span>
					</a>
				</li>
			</ul>
		</div>
				<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
						<span class="twPc-StatLabel twPc-block">class of vehicle</span>
						<span class="twPc-StatValue">LMV-MOTOR </span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/following" title="885 Following">
						<span class="twPc-StatLabel twPc-block">engin no</span>
						<span class="twPc-StatValue">DA36466</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Fuel</span>
						<span class="twPc-StatValue">Petrol</span>
					</a>
				</li>
			</ul>
    </div>
    <center>
    <button onClick="window.print()"><?php echo $row['rc_no'] ?></button>
 
            </center>
   
	</div>
</div>
<!-- code end -->
</div>
</div>

  
 
   
   
   
<?php	
}
?>

</body>
</html>
