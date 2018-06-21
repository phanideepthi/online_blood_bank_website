<?php
$connection = mysqli_connect("localhost","root","","myproject");
if(!$connection){
  die('Could not connect: ' . mysqli_error($connection));
}
  $sql = "INSERT INTO feedback(username,email,mobileno,comments)VALUES('".$_POST[username']."','".$_POST['email']."','".$_POST['mobileno']."','".$_POST['comments']."')";

  $result= mysqli_query($connection,$sql);
  if(!$result){
	echo "Error:".mysqli_error($connection);}
  if($result){
  echo "Succeded in first atempt";}
  else{
  echo "Failed";}
?>