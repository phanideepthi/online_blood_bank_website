<?php
$connection = mysqli_connect("localhost","root","","myproject");
if(!$connection){
  die('Could not connect: ' . mysqli_error($connection));
}
  $sql = "SELECT * from donor";

  $result= mysqli_query($connection,$sql);
  if(!$result){
	echo "Error:".mysqli_error($connection);}
  if($result){
  echo $row['City'].;
}
  else{
  echo "Failed";}
?>