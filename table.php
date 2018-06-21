<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$donor="evenRow";
else
$donor="oddRow";
?>
<tr class="<?php if(isset($donor)) echo $donor;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["userId"]; ?>" ></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["Bloodgroup"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["units"]; ?></td>
<td><?php echo $row["mobileno"]; ?></td>
<td><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>