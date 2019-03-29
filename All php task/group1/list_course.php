<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$dbh = new PDO("mysql:host=localhost;dbname=assignment","root","");

$sql = "SELECT * FROM courses where student_name=:student_name";
$query = $dbh -> prepare($sql);
?>
<h1 align="center">LIST OF courses</h1>
<table border="1" align="center" bgcolor="violet" cellpadding="5" height="56%">
<tr>
<th>courses ID</th>
<th>courses NAME</th>
<!-- <th>STUDENT email</th>
<th>STUDENT CITY</th> -->
<th>Action</th>
</tr>
<?php

$dbh = new PDO("mysql:host=localhost;dbname=assignment","root","");


$query -> execute(array(student_name=>$student_name));
$query = $dbh -> prepare($sql);
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
print "<tr><td>";
echo $result -> Course_No . "";
print "</td>";
print "<td>";
echo $result -> course_Name . "";

print "</td>";

print "<td><a href='delete.php?id=" . $result->Course_No. "'>Delete</a></td>";

}
} 
?>

</body>
</html>