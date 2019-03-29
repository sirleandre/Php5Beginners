<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = 'INSERT INTO people(name, email) VALUES(:name, :email)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email])) {
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
          <label for="name">Name</label>
          <input type="text" name="name" id="name" >
        </div><br>
        <div >
          <label for="email">Email</label>
          <input type="email" name="email" id="email" >
        </div><br>
        <div >
          <button type="submit" >Create a person</button>
          <button><a href="index.php">LIST OF PEOPLE</a></button>
        </div>
      </form>
    </div>
  </div>
</div></center>
