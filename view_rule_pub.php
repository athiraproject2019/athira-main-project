<table border="2px">
<tr>
<th>Act</th>
<th>Rule</th>
<th>Fine</th>

</tr>
<tr>

<?php
include 'db.php';
$sql="select * from tb_rule ";
$r=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($r))
{
    ?>
    <td>
    <?php
    echo $row['act'] ?></td>
     <td>
    <?php
    echo $row['rule'] ?></td>
    <td>
    <?php 
    echo $row['fine'] ?></td>
</tr>
<?php
}
?></table>