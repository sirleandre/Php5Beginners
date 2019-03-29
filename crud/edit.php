<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM people WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = 'UPDATE people SET name=:name, email=:email WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email, ':id' => $id])); {
    header("Location: index.php");
  }



}


 ?>

<div >
  <div >
    <div >
      <h2>Update person</h2>
    </div>
    <div >
      <?php if(!empty($message)): ?>
        <div >
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="POST" >
        <div >
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name"  >
        </div>
        <div >
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email"  >
        </div>
        <div >
          <button type="submit" >Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>

