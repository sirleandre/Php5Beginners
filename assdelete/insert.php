<?php
require 'db.php';

if (isset ($_POST['Username'])  && isset($_POST['Password']) && isset($_POST['FirstName'])&& isset($_POST['LastName']) ) {
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  
  $sql = 'INSERT INTO member(Username,Password,FirstName,LastName) VALUES(:Username,:Password,:FirstName,:LastName)';
  $statement = $db->prepare($sql);
  if ($statement->execute([':Username' => $Username,':Password' => $Password,':FirstName' => $FirstName,':LastName' => $LastName])) {
    echo "data inserted successfully";
  }



}


 ?>

<center>
<div >
  <div >
    <div >
      <h2>ADD NEW RECORD</h2>
    </div>
    <div >
      
      <form method="post">
      <div >
          <label for="Username">Username:</label>
          <input type="text" name="Username" id="Username" required="" >
        </div><br>
        <div >
          <label for="Password">Password:</label>
          <input type="password" name="Password" id="Password" required="" >
        </div><br>
        <div >
          <label for="FirstName">FirstName:</label>
          <input type="text" name="FirstName" id="name" required="" >
        </div><br>
        <div >
          <label for="LastName">LastName:</label>
          <input type="text" name="LastName" id="LastName" required="" >
        </div><br>
        <div >
          <button type="submit" >Add</button>
          <button><a href="retr.php">DATA FROM DATA BASE</a></button>
        </div>
      </form>
    </div>
  </div>
</div></center>
