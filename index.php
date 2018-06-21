<?php
 include_once 'ta1.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert, Update, Delete(CRUD) using PHP & MySQLi</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>
<form method="post" name="frm">
<table width="50%" align="center" border="0">
<tr>
<td colspan="3"><a href="generate.php">add new records...</a></td>
</tr>
<tr>
<th>##</th>
<th>Name</th>
<th>Blood group</th>
<th>moblieno</th>
<th>units</th>
</tr>
<?php
 $res = $MySQLiconn->query("SELECT * FROM donor");
 $count = $res->num_rows;

 if($count > 0)
 {
  while($row=$res->fetch_array())
  {
   ?>
   <tr>
   <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['Bloodgroup']; ?></td>
   <td><?php echo $row['mobileno']; ?></td>

   <td><?php echo $row['units']; ?></td>

   </tr>		
   <?php
  } 
 }
 else
 {
  ?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
 }
?>

<?php

if($count > 0)
{
 ?>
 <tr>
    <td colspan="3">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
    <label id="actions">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit();" alt="edit" />edit</span> 
    <span><img src="delete.png" onClick="delete_rec();" alt="delete" />delete</span>
    </label>
    </td>
 </tr>    
    <?php
}

?>

</table>
</form>
</body>
</html>
