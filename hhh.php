<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myproject"; // Database name 
$tbl_name="donor"; // Table name 

$conn=new
mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
$Bloodgroup=$_POST['Bloodgroup'];
$sql="SELECT name,Bloodgroup,mobileno,email FROM donor where Bloodgroup='$Bloodgroup'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
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
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Lastname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
<td bgcolor="#FFFFFF"><? echo $rows['name']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Bloodgroup']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['moblieno']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['email']; ?></td>
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
$del_id = $checkbox[$i];
$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table>