<DOCTYPE html>
<html>
<body>
<?php
error_reporting(0);
$host="localhost"; // Host name 
$username = "root";
$password = "";
$dbname = "myproject";
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
echo"<center><table style=\"background-color:pink\"><tr><th>name</th><th>Bloodgroup</th><th>mobileno</th><th>email</th></tr>";
while($row=$result->fetch_assoc()){
echo "<tr><td>".$row["name"]."/></td><td>".$row["Bloodgroup"]."</td><td>".$row["mobileno"]."</td><td>".$row["email"]."</td></tr>";
}
echo "</table></center>";
}
else {
echo "0 results";
}
$conn->close();
?>
</body>
</html>