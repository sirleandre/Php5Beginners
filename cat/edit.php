<?php

try
{
$dbh = new PDO("mysql:host=localhost;dbname=mywebpage", "root", "");

$sql = 'UPDATE users SET id= :?, name= :?, phone= :?,city= :?,date_added= :? where id= :?';




$query= $dbh ->prepare($sql);

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$city= $_POST['city'];
$date_added= $_POST['date_added'];

$userdata=['id1'=>$id,
		   'name1'=>$name,
		   'phone1'=>$phone,
		   'city1'=>$city,
		   'date_added1'=>$date_added];

$query->execute($sql);

if($query->rowCount()>0)
{
$count = $query -> rowCount();
echo $count. "rows were affected.";
}
else
{
    echo "no rows were affected.";
}
$dbh=null;

}
catch(PDOException $e)
{
    echo "Error:".$e->getMessage();
}
?>