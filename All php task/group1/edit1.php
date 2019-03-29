
<?php

$connection=new PDO("mysql:host=localhost;dbname=assignment","root","");
 

$Student_Id = $_GET['Student_Id'];

$sql = 'SELECT * FROM students WHERE Student_Id=:Student_Id';

$statement = $connection->prepare($sql);

$statement->execute([':Student_Id' => $Student_Id ]);

$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['Student_Name'])  && isset($_POST['Student_email']) ) 
{
  $Student_Name = $_POST['Student_Name'];

  
  $Student_email = $_POST['Student_email'];

  $sql = 'UPDATE students SET Student_Name=:Student_Name, Student_email=:Student_email WHERE Student_Id=:Student_Id';

  $statement = $connection->prepare($sql);

  if ($statement->execute([':Student_Name' => $Student_Name, ':Student_email' => $Student_email, ':Student_Id' => $Student_Id])); 
  {
    header("Location: retrieve.php");
  }



}


 ?>

<div >
  <div >
    <div >
      <h2>Update person</h2>
    </div>
    <div >
      <?php 
      if(!empty($message)): ?>
        <div >
          <?= $message; ?>
        </div>
      <?php 
      endif; 
      ?>
      <form method="POST" >
        <div >
          <label for="name">Student_Name</label>
          <input value="<?= $person->Student_Name; ?>" type="text" name="Student_Name"  >
        </div>
        <div >
          <label for="Student_email">email</label>
          <input type="Student_email" value="<?= $person->Student_email; ?>" name="Student_email" >
        </div>
        <div >
          <button type="submit" >Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>

