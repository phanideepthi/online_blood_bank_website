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
while($row=$result->fetch_assoc()){
echo "name:".$row["name"]."   "."Bloodgroup:".$row["Bloodgroup"]. "           ". "Mobilenumber:".
$row["mobileno"]." "."email:".$row["email"]."<br>";}
}
else{
echo "0 results";
}
$conn->close();
?>
</body>
</html>