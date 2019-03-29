<?php
require 'db.php';
$message = '';
if (isset ($_POST['FirstName'])  && isset($_POST['LastName']) && isset($_POST['District']) ) {
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $District = $_POST['District'];
  $sql = 'INSERT INTO students(FirstName, LastName,District) VALUES(:FirstName, :LastName,:District)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':FirstName' => $FirstName, ':LastName' => $LastName, ':District' => $District])) {
    $message = 'data inserted successfully';
  }



}


 ?>

<center>
<div >
  <div >
    <div >
      <h2>ADD INFORMATION TO ADD NEW RECORD</h2>
    </div>
    <div >
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div >
          <label for="FirstName">FirstName:</label>
          <input type="text" name="FirstName" id="name" >
        </div><br>
        <div >
          <label for="LastName">LastName:</label>
          <input type="text" name="LastName" id="LastName" >
        </div><br>
        <div >
          <label for="District">District:</label>
          <input type="text" name="District" id="District" >
        </div><br>
        <div >
          <button type="submit" >Add</button>
          <button><a href="retrive.php">DATA FROM DATA BASE</a></button>
        </div>
      </form>
    </div>
  </div>
</div></center>
