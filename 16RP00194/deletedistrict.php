<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM students WHERE District="rulindo"';
$statement = $connection->prepare($sql);
if ($statement->execute([':District' => $District])) {
  header("Location: retrive.php");
}