<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$dbh = new PDO("mysql:host=localhost;dbname=assignment","root","");

$sql = "SELECT * FROM students";
?>
<h1 align="center">LIST OF ENROLMENTS</h1>
<table border="1" align="center" bgcolor="violet" cellpadding="5" height="56%">
<tr>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<!-- <th>STUDENT email</th>
<th>STUDENT CITY</th> -->
<!--<th colspan="2">Action</th>-->
</tr>
<?php

$dbh = new PDO("mysql:host=localhost;dbname=assignment","root","");

$query = $dbh -> prepare($sql);
$query -> execute();

$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
print "<tr><td>";
echo $result -> Student_Id . "";
print "</td>";
print "<td>";
//echo $result -> Student_Name . ", ";

print "<a href='list_course.php?Student_Id=" . $result->Student_Id . "'>" . $result -> Student_Name . "";


print "</td>";


//print "<td><a href='delete.php?id=" . $result->id . "'>Delete</a></td>";

}
} 
?>

</body>
</html>