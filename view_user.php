<html>
<head>
<?php
  include 'admin.html';
  ?>
<style>
select {
  border: none;
  color: #555;
  margin-bottom: 10px;
  height: 35px;
  padding: 5px;
  width: 100%;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

</style>

<script>
function view(str) {
      
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "view_user1.php?a="+str, true);
  xhttp.send();
}
</script>
</head>
<body>
<section id="aa-signin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-signin-area">
          <div class="aa-signin-form">
<form action="" method="post" class="contactform">
<label>Type</label>
<select name="s1" onChange="view(this.value);">
  <option>--select--</option>
<?php
include 'db.php';
$sql="select distinct(type) from tb_useracc";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <option value="<?php echo $row['type']?>">
<?php echo $row['type'] ?></option>
<?php
}?>
</select>
<div id="demo">

</div>

</form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>
