<?php
$connection = mysqli_connect("localhost","root","","myproject");
if(!$connection){
  die('Could not connect: ' . mysqli_error($connection));
}
  $sql = "INSERT INTO donor(name,email,mobileno,Bloodgroup,Campaddress,City,State) VALUES ('".$_POST['name']."','".$_POST['Email']."','".$_POST['mobileno']."','".$_POST['Bloodgroup']."','".$_POST['Campaddress']."','".$_POST['City']."','".$_POST['State']."')";

  $result= mysqli_query($connection,$sql);
  if(!$result){
	echo "Error:".mysqli_error($connection);}
  if($result){
  echo"THANKYOU FOR SAVING LIVES";}
  else{
  echo "Failed";}
?>