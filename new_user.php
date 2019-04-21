<html>
<head>
<script type="text/javascript" >
function valid()
{
    var p=ff.pas.value;
    var cp=ff.cpas.value;
    if(p!=cp)
    {
        alert("Re-enter same password");
        ff.pas.focus();
        return false;
    }
    return true;
}
</script>
</head>
<body>
<form action="new_user1.php" method="post" name="ff">
<label>User ID</label><input type="text" name="id"></br>
<label>password</label><input type="text" name="pas"></br>
<label>confirm password</label><input type="text" name="cpas"></br>
<label>email</label><input type="text" name="email"></br>
<input type="submit" value="Register" onClick="return valid()" name="reg">
</form>

</body></html>