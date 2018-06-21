<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myproject"; // Database name 
$tbl_name="donor"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$Bloodgroup=$_POST['Bloodgroup'];
$sql="SELECT * FROM $tbl_name where Bloodgroup='$Bloodgroup'";;
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Bloodgroup</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>moblieno</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value=""></td>
<td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Bloodgroup']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['mobileno']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>

<?php

// Check if delete button active, start this 
if($delete){
for($i=0;$i<$count;$i++){
$del_name= $checkbox[$i];
$sql = "DELETE FROM $tbl_name WHERE name='$del_name'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "thank you for the blood">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table>