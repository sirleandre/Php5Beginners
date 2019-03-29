
<?php
$db = new PDO("mysql:host=localhost;dbname=system","root","");
$sql = "INSERT INTO user(username, password)
VALUES (?,?)";
$x = $db -> prepare($sql);
$username=$_POST['username'];
$password=md5($_POST['password']);
$x->execute(array($username,$password));
$lastinsertid = $db->lastInsertId();
if($lastinsertid>0)
{
echo "<script type='text/javascript'>alert('you are intered now we can login as User');window.location='login.php';</script>";


}
else
{

echo "not OK try again ";
}

?>
