<?php
error_reporting(0);
$host="localhost"; // Host name 
$username = "root";
$password = "";
$dbname = "myproject";
$datatable = "donor"; // MySQL table name

 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$dbname") or die(mysql_error());
echo "Connected to Database<br />";
$bloodgroup=$_POST['Bloodgroup'];
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$sql = "SELECT * FROM $datatable WHERE bloodgroup='$Bloodgroup'";
$rs_result = $conn->query($sql); 
?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td><td bgcolor="#CCCCCC"><strong>Phone</strong></td></tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 
            <tr>
            <td><? echo $row["name"]; ?></td>
            <td><? echo $row["Bloodgroup"]; ?></td>
            <td><? echo $row["mobileno"]; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
