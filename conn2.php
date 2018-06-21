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
$sql="select name,Bloodgroup,Campaddress,mobileno,email from donor";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo"<center><table style=\"background-color:pink\"><tr><th>name</th><th>Bloodgroup</th><th>Campaddress</th><th>mobileno</th><th>email</th></tr>";
while($row=$result->fetch_assoc()){
echo "<tr><td>".$row["name"]."</td><td>".$row["Bloodgroup"]."</td><td>".$row["Campaddress"]."</td><td>".$row["mobileno"]."</td><td>".$row["email"]."</td></tr>";
}
echo "</table>";
}
else{
echo "0 results";
}
$conn->close();
?>
</body>
</html>