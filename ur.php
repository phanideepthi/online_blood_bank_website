<html>
<head>

<title>Links Page</title>

</head>

<body>

<h2>Choose and delete selected links.</h2>

<?php

$dbc = mysqli_connect("$host", "$username", "$password")
or die('Error connecting to MySQL server');

$query = "select * from donor where Bloodgroup='$Bloodgroup'";
$result = mysqli_query($sql);
or die('Error querying database');

$count=mysqli_num_rows($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Bloodgroup</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>mobileno</strong></td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['link_id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['Bloodgroup']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['mobileno']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete"></td>
</tr>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
 <tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Bloodgroup</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>mobileno</strong></td>
 </tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['link_id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Bloodgroup']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['mobileno']; ?></td>

</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete"></td>
</tr>



<?php

// Check if delete button active, start this 

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM donor WHERE link_id='$del_name'";
$result = mysqli_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=view_links.php\">";
}
 }

mysqli_close($dbc);

?>

</table>
</form>
</td>
</tr>
</table>

</body>

</html>