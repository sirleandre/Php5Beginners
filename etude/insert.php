<?php

try {
     $dbh = new PDO("mysql:host=localhost;dbname=etude", "root", "");
    
$sql="INSERT INTO cat (name, level) 
VALUES (?,?)";
$query=$dbh->prepare($sql); 

$name = $_POST['name']; 
$level = $_POST['level']; 
$query->execute(array($name,$level));
$lastInsertId = $dbh->lastInsertId(); 
if($lastInsertId>0) 
{ 
echo "yes  "; 
} 
else 
{ 
echo "no"; 
} 
         echo 'User has been inserted successfully';
         } 
         catch (PDOException $e)    
          {    
           echo "Error: " .$e->getMessage(); 
               }


?>