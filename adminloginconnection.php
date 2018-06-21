<?php
$connection = mysqli_connect("localhost","root","","myproject");
if(!$connection){
  die('Could not connect: ' . mysqli_error($connection));
}
  $sql = "INSERT INTO adminlogin(username,password) VALUES ('".$_POST['username']."','".$_POST['password']."')";

  $result= mysqli_query($connection,$sql);
  if(!$result){
	echo "Error:".mysqli_error($connection);}
  if($result){
  echo "Succeded in first atempt";}
  else{
  echo "Failed";}
?>