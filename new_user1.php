<html>
<haed>
<?php
session_start();
?>
</head>

<?php

include 'db.php';

    $id=$_POST['id'];
    $p=$_POST['pas'];
    $em=$_POST['email'];
    
    $sql="select count(u_id) as c from tb_login where u_id='$id'";
    $r=mysqli_query($db,$sql);
    $s="";
    if($row=mysqli_fetch_assoc($r))
    {
        $s=$row['c'];
    }
    if($s==0)
    {
    
        $_SESSION['u']=$id;
        $i=mysqli_query($db,"insert into tb_login(u_id,password,type,email) values('$id','$p','user','$em')");
        header("location:acc_login.php");
    }
    else
    {
    ?>
    <script>
    alert("userid already exiting");
    window.location="new_user.php";
    </script>
<?php
    }
    ?>
    </html>