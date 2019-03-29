 <?php
require "db.php";
if(isset($_POST['delete']))
{
$id=$_GET['id'];
$sql="DELETE from member where id=:id";
$statement=$connection->prepare($sql);
if($statement->execute([':id'=>$id])){
echo"deleted successfull";
header("Location:retrieve.php");
}
}
?> 


