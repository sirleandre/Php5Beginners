<?php

//multiple_update.php

include('db.php');

if(isset($_POST['hidden_id']))
{
 $username = $_POST['username'];
 $password = $_POST['password'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':username'   => $username[$count],
   ':password'  => $password[$count],
   ':firstname'  => $firstname[$count],
   ':lastname' => $lastname[$count],
   
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE member 
  SET username = :username, password = :password, firstname = :firstname, lastname = :lastname WHERE id = :id ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>