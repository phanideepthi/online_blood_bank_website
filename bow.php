<?php
  $con = mysql_connect("localhost","root","");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("myproject", $con);
  $result = mysql_query("SELECT * FROM donor ");
  echo "<table align='center' bgcolor='#F9F0F0' border='0' cellspacing='0'>
    <tr>
      <th><font color='red'>name</font></th>
    </tr>
<tr>
      <th><font color='red'>bloodroup</font></th>
    </tr>";
  while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td><a href='send.php'><img src='".$row['photo']."' \" width=\"150px\" height=\"150px\" /></a><br><br><br>";
    echo "<a href='send.php?".$row['name']."'><td align='center' style='vertical-align:text-top' width='200px'>" . $row['Bloodgroup'] . "</td>";
    
    echo "</tr>";
  }
  echo "</table>";
  mysql_close($con);
?>
