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
			width: 500px;
			height: 400px;
			font-size: 30px;
		}
	</style>
</head>
<body>




			<?php
			include 'db.php';
			$idd=$_POST['idd'];
			$result=$db->prepare("SELECT * FROM member where id='$idd'");
			$result->execute();
			$row=$result->fetch();

			?>
			<div class="all">
			<CENTER>APPROVAL TO<B> <?php echo $row['Username']; ?> </B><BR></CENTER>
			<HR>

			This student has ID of<B> <?php echo $row['id']; ?> </B></HR><br>
			Username of<B> <?php echo $row['Username']; ?></B><br>
			His/her Firstname is<B> <?php echo $row['FirstName']; ?></B><br>
			His/her Lastname is<B> <?php echo $row['LastName']; ?></B><br>
			He/She is addressed to be in my database
			</div>

				
			<center><a href="#" onclick="window.print();">SAVE PDF DOCUMENT</a> | <a href="report.php">Exit me</a></center>	
			



</body>
</html>