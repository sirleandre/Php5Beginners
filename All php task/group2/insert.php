<?php

try{

$db=new PDO("mysql:host=localhost;dbname=user","root","");

$sql = "INSERT INTO member(username, password, firstname, lastname) VALUES (?,?,?,?)";
$x = $db -> prepare($sql);
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$x -> execute(array($username,$password,$firstname,$lastname));

if($x)
{
	header("Location: retrieve.php");	
}
}
catch(PDOException $e)
{
		exit("Error:".$e->getMessage());
}

?>