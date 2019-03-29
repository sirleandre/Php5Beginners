<?php
try 
{ 
$dbh = new PDO("mysql:host=localhost;dbname=mywebpage","root",""); 
//echo 'connecton has been established!';
/*$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit'])){
	$name = $_POST['name']; 
$phone = $_POST['phone']; 
$city = $_POST['city']; 
$date = $_POST['date']; 
$stmt=$dbh->prepare("SELECT * FROM users WHERE name=:name");
if($stmt->rowCount()>0){
	echo "exist";
}
else{*/
	$sql="SELECT * FROM users"; 
$query=$dbh->prepare($sql); 

//$query->bindParam(':name',$name,PDO::PARAM_STR); 
//$query->bindParam(':phone',$phone,PDO::PARAM_INT); 
////$query->bindParam(':city',$city,PDO::PARAM_STR); 
//$query->bindParam(':date',$date,PDO::PARAM_STR);
//$name = $_POST['name']; 
//$phone = $_POST['phone']; 
//$city ="kibungo"; 
//$date = $_POST['date'];
$query->execute();
echo "<table border=1>";
echo"<tr>";
echo"<th>id</th>";
echo"<th>name</th>";
echo"<th>city</th>";
echo"<th>date</th>";
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
echo "<td>".$result->city."</td>";
echo "<td>".$result->date_added;
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