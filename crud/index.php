<?php
require 'db.php';
$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<div >
  <div >
    <div >
      <h2>WELCOME. HERE IS THE AVAILABLE DATA</h2>
    </div>
    <div >
      <table border="1" >
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->email; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" >Edit</a>
              <a onclick="return confirm('Are you sure you want to remove this entry?')" href="delete.php?id=<?= $person->id ?>" >Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div><br><br>
    <a href="create.php">create new record</a>
  </div>
</div>

