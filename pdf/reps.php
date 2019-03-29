<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.all
		{
			background: white;
			border:2px solid black;
			margin: 30px auto;
			width: 300px;
			height: 200px;
			font-size: 24px;
		}
	</style>
</head>
<body>




			<?php
			include 'db.php';
			require('fpdf17/fpdf.php');
			$idd=$_POST['idd'];
			$result=$db->prepare("SELECT * FROM member where id='$idd'");
			$result->execute();
			$row=$result->fetch();

			?>
			<div class="all">
			<CENTER>REPORT OF<B> <?php echo $row['Username']; ?> </B><BR></CENTER>
			<HR>

			This student has ID of<B> <?php echo $row['id']; ?> </B>
			with username of<B> <?php echo $row['Username']; ?></B>
			his/her Firstname is<B> <?php echo $row['FirstName']; ?></B>
			His /her Lastname is<B> <?php echo $row['LastName']; ?></B>
			is addressed to be in my database
			</div>

				
			<center><a href="#" onclick="window.print();">Export PDF DOCUMENT</a> | <a href="report.php">Exit me</a></center>	
			



</body>
</html>