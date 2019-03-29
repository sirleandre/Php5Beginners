<?php 
mysql_connect("localhost","root","");


$sql=mysql_query("select * from member");
$fetch=mysql_fetch_array($sql);
?>
<table>
	<tr><td>No</td><td>Username</td><td>Select mode</td></tr>
</table>
<?php 
while($fetch)
{
?>
	<tr><td><?php echo $fetch['Id']; ?></td><td><?php echo $fetch['Username']; ?></td><td><input type="checkbox" name="read"></td></tr>

<?php 
}
 ?>
 <tr><td colspan="3"><input type="submit" value="delete"></td></tr>