<form action="#" method="post">
<input type="radio" value="already" name="b">already user
<input type="radio" value="new" name="b">new user
<input type="submit" value="save" name="b1">
</form>
<?php
if(isset($_POST['b1']))
{
    $type=$_POST['b'];
    if($type=="already")
    {
        header("location:add_rc.php");
    }
    else
    {
        header("location:add_rc3.php");
    }
}