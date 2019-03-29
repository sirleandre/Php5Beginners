<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_database='users';
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database,$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$edittable=$_POST['selector'];
$N= count($edittable);
for ($i=0; $i < $N ; $i++) { 
	$result= $db->prepare("delete from member where id= :id");
	$result->bindParam(':id',$edittable[$i]);
	$result->execute();
}
header("location: retr.php");
mysql_close($con);
?>