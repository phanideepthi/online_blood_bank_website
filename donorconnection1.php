<?php
$connection = mysqli_connect("localhost","root","","myproject");
if(!$connection){
  die('Could not connect: ' . mysqli_error($connection));
}
  $sql = "INSERT INTO customer(name,email,phone_number,password,reenter_password,gender) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone_number']."','".$_POST['password']."','".$_POST['reenter_password']."','".$_POST['gender']."')";

  $result= mysqli_query($connection,$sql);
  if(!$result){
	echo "Error:".mysqli_error($connection);}
  if($result){
  echo "you registered successfully";}
  else{
  echo "Failed";}
?>