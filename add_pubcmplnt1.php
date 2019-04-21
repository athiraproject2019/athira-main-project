<html>
    <head>
        <?php
        session_start();
        include 'user.html';
        ?>
    </head>
    <body>
    <?php
    include 'db.php';
    if(isset($_POST['ok']))
    {
    $date=date("Y/m/d");
    $status="registerd";
    $li1=$_SESSION['u3'];
    $id2=$_POST['nm'];
    $ads=$_POST['adrs'];
    $ph=$_POST['phn'];
    $no=$_POST['no'];
    $nm=$_POST['nm'];
    $cm=$_POST['cm'];
    
    $in=mysqli_query($db,"insert into tb_pub_cmplnt(cmplnt_no,complaint,cmplnt_dt,name,adrs,phn,status) 
    values('$no','$cm','$date','$nm','$ads','$ph','$status')");
    if($in>0)
    {
        $up=mysqli_query($db,"update id_gen set pubcmplnt_no='$li1'");
    }

    }
    ?>
    </body>
    </html>
