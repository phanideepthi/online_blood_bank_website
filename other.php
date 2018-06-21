<?php
$con = mysqli_connect("localhost","root","","myproject");
if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
  
$sql="SELECT * FROM customer WHERE name='$username'";
$result=mysqli_query($con,$query);
if(!$result)
{
echo'already username exist';
}
if(mysqli_num_rows($result)==0)
{

  $sql = "INSERT INTO 'customer'('name','email','phone_number','password','reenter_password','gender') VALUES ('$name','$email','$phone_number','$password','$reenter_password','$gender')";
  $result=mysqli_query($con,$sql);
  if(!$result)
{
  echo "failed";
}
?>