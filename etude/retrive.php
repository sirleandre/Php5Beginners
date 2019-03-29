<?php
try 
{ 
$dbh = new PDO("mysql:host=localhost;dbname=etude","root",""); 

	$sql="SELECT * FROM cat"; 
$query=$dbh->prepare($sql); 
$query->execute();
echo "<table border=1>";
echo"<tr>";
echo"<th>id</th>";
echo"<th>name</th>";
echo"<th>level</th>";
echo"<th colspan=2>Action</th>";

echo"</tr>";
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0) 
{ 
foreach ($results as $result)
{
print"<tr>";
echo "<td>".$result->id."</td>";
echo "<td>".$result->name."</td>";
echo "<td>".$result->level."</td>";

echo '<td> <a href="edit.php?id='.$result->id.'">Edit</a></td>';
echo '<td> <a href="delete.php?id='.$result->id.'">Delete</a></td>';

print"</tr>";
}
} 
$dbh=null; 
}
catch (PDOException $e) 
{ 
echo("connection failed");
} 
?>