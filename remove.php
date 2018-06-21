<html>
<table>
<?php
include("recepientformwithimage.php");
 
     $get= @mysql_query("SELECT * FROM donor WHERE bloodgroup='$bloodgroup'")or die(mysql_error());
     $num = @mysql_num_rows($get);
	 $total=0.0;
     for($i=0;$i<$num;$i++)
     {
      $name= @mysql_result($get,$i,'name');
      $email= @mysql_result($get,$i,'email');
      $moblieno= @mysql_result($get,$i,'moblieno');
      $Bloodgroup= @mysql_result($get,$i,'bloodgroup');
  
 ?>
 <tr>
    <td align="center" width="40"><input type="checkbox" name="chk<?php echo $i; ?>" id="chk<?php echo $i; ?>" value="<?php echo $name; ?>">
    </td>
    <input type="hidden"  name="hdnrid<?php echo $i; ?>" id="hdnrid<?php echo $i; ?>" value="<?php echo $row; ?>"> 
    <td width="110"><p align="Center">Name<br/><?php echo $name;?></td></p>
 </tr>
<tr>
  <td align="center" colspan="10">
<a herf="recepientformwithimage.php">gggggggg</a>
 
  <input type="submit" name="btnremove" id="btnremove" value="Remove" </td>
 </tr>
</table>
</html>