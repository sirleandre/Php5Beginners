
 <?php
require "db.php";
if(isset($_POST['delete']))
{
//$id=$_GET['id'];
while(1<=$limits)
{
$user=$_POST['username['$limit']'];
$d=$_POST['username'];
$sql="DELETE FROM member where id in($user)";
//$sql="DELETE from member where Username=:Username";
$statement=$connection->prepare($sql);
$limit--;
}
if($statement->execute([':id'=>$d]))
{
echo"Deleted successfull";
header("Location:retrieve.php");
}
}
?> 

?>


<!--
<script type="text/javascript">
  function setDeleteAction(){
    if(confirm("Are you sure you want to delete the selected rows?"))
    {
      document.frmUser.action="delete.php";
      document.frmUser.submit();
    }
  }

</script>
-->
<html>
<body>
      <h2 align="center"></h2>
      <form method="POST" action="retrieve.php">
      <table border="1" align="center" width="35%" cellpadding="1.5" cellspacing="0" border="white">
        <tr bgcolor="yellow">
          <th></th>
          <th>Username</th>
          <th>FirstName</th>
          <th>LastName</th>
        </tr>
          <?php require 'db.php';
$sql = 'SELECT * FROM member';
$statement = $connection->prepare($sql);
$statement->execute();
$i=0;
while($row=$statement->fetch(PDO::FETCH_ASSOC)){
 ?>       <tr  style="background-color: skyblue;">
          <td><input type="checkbox" class="checkboxId" name="username['<?php echo $row['Username']; ?>']" id="checkboxAll" value="<?php echo $row['id']; ?>"></td>
            <td style="background-color: white;"><?php echo $row['Username']; ?></td>
            <td style="background-color: skyblue;"><?php echo $row['FirstName']; ?></td>
            <td style="background-color: white;"><?php echo $row['LastName']; ?></td>
          </tr>

            <?php
            $i++;
          }
          $limit=$i;
          ?>
        </tr> 
        <tr>
            <td colspan="6" align="center"bgcolor="yellow"><b><center>

<a href="retrieve.php">
            <input type="submit" class="btn-warning" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete the selected rows?')"> </a></center></b> 
          </td>
        </tr>
      </table>
    </form>
</body>
</html>