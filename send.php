<?php
$con = mysql_connect("localhost","root","");
      if (!$con) {
        die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("myproject", $con);
      $sql = "SELECT * FROM donor where bloodgroup='$Bloodgroup'";
      $result = mysql_query($sql);
?>