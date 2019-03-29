<?php
require 'db.php';
$sql = 'SELECT * FROM students';
$statement = $connection->prepare($sql);
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<div >
  <div >
    <div >
      <h2>DATA FROM DATA BASE</h2>
    </div>
    <div >
      <table border="1" >
        <tr>
          <th>ID</th>
          <th>FastName</th>
          <th>LastName</th>
          <th>District</th>
          <th>Action</th>
        </tr>
        <?php foreach($students as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->FirstName; ?></td>
            <td><?= $person->LastName; ?></td>
            <td><?= $person->District; ?></td>
            <td>
              
              <a onclick="return confirm('Are you sure you want to remove this record?')" href="delete.php?id=<?= $person->id ?>" >Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div><br><br>
    <a href="insert.php">Add new</a>
  </div>
</div>

