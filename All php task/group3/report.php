

			<?php
			include 'db.php';
			$result=$db->prepare("SELECT * FROM member ORDER BY id ASC");
			$result->execute();
		?>
		<form method="POST" ACTION="reps.php">
		<select name="idd">

		<?php
		while($row=$result->fetch())
		{
		?>
		<option name="idd">
			<?php 
echo $row['id']." ".$row['Username']; 
			 ?>
		</option>
		<?php 
		}
		 ?></select>
	
		 <input type="submit" name="submit" value="Generate PDF Approval">
				 </form>	 

				
				