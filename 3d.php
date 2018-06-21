
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myproject"; // Database name 
$tbl_name="donor"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$blood = $_POST['Bloodgroup'];
$sql="SELECT * FROM $tbl_name WHERE Bloodgroup=$blood";
$result=mysql_query($sql);
?>

<script language="javascript">
function validation()
{
var chks=document.getElementsByName('checkbox[]');
var haschecked=false;
for(var i=0;i<chks.length;i++)
{
if(chks[i].checked)
{
haschecked=true;
break;
}
}
if(haschecked==false)
{
alert("please select alteast one");
return false;
}return true;
}</script>
<style>
body {
background-image:url("hands.jpg");
background-repeat:no-repeat;
background-size:1500px 900px;
background-position:center bottom; }
</style>
<body>
<center><table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#CD5C5C">&nbsp;</td>
<td colspan="4" bgcolor="#CD5C5C"><strong>Select require blood</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#DAA520">#</td>
<td align="center" bgcolor="#808000"><strong>name</strong></td>
<td align="center" bgcolor="#DAA520"><strong>Bloodgroup</strong></td>
<td align="center" bgcolor="#808000"><strong>moblieno</strong></td>
<td align="center" bgcolor="#DAA520"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center" bgcolor="#F0E68C"><input name="checkbox[]" type="checkbox" id="checkbox[]" $rows['name'] value=""></td>
<td bgcolor="pink"><?php echo $rows['name']; ?></td>

<td bgcolor="#ADD8E6"><?php echo $rows['Bloodgroup']; ?></td>
<td bgcolor="pink"><?php echo $rows['mobileno']; ?></td>
<td bgcolor="#ADD8E6"><?php echo $rows['email']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#D3D3D3"><input name="delete" type="submit" value="Delete" id="delete" ></td>
</tr>

<?php

// Check if delete button active, start this 
if(isset($_POST['delete'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
echo "Hello";
$del_name= $_POST['checkbox'][$i];
$sql = "DELETE FROM $tbl_name WHERE name='$del_name'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=3d.php\">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table></center></body>
