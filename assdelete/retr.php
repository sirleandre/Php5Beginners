<form action="delete.php" method="post">
	<table border="1" align="center" width="35%" cellpadding="1.5" cellspacing="0" border="white">
		<thead>
			<tr bgcolor="yellow">
				<th>&nbsp;</th>

				<th>User Name</th>
				
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'db.php';
			$result=$db->prepare("SELECT * FROM member ORDER BY id ASC");
			$result->execute();
			for ($i=0; $row=$result->fetch(); $i++) { 
				

				
				?>
				<tr class="record" style="background-color: skyblue;">
					<td><input type="checkbox" name="selector[]" value="<?php echo $row['id']; ?>"></td>
					<td><?php echo $row['Username']; ?></td>
					<td><?php echo $row['FirstName']; ?></td>
					<td><?php echo $row['LastName']; ?></td>
				</tr>

				<?php
				}
				?>
				<tr>
            <td colspan="6" align="center"bgcolor="yellow"><b><center><input type="submit" class="btn-warning"name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete thise rows?')" </input></td></center></b>
          </td>
        </tr>
		</tbody>
	</table>
	</form>