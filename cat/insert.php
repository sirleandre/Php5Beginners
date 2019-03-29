<?php

try {
     $dbh = new PDO("mysql:host=localhost;dbname=mywebpage", "root", "");
     //echo 'connection has been established!'; 
//VALUES (:name,:phone,:city,:date)";
$sql="INSERT INTO users (name, phone, city, date_added) 
VALUES (?,?,?,?)";
$query=$dbh->prepare($sql); 
// $query->bindParam(':name',$name,PDO::PARAM_STR); 
// $query->bindParam(':phone',$phone,PDO::PARAM_INT); 
// $query->bindParam(':city',$city,PDO::PARAM_STR); 
// $query->bindParam(':date',$date,PDO::PARAM_STR);
$name = $_POST['name']; 
$phone = $_POST['phone']; 
$city = $_POST['city']; 
$date = $_POST['date']; 
 //$query->execute();
$query->execute(array($name,$phone,$city,$date));
$lastInsertId = $dbh->lastInsertId(); 
if($lastInsertId>0) 
{ 
echo "OK  "; 
} 
else 
{ 
echo "not OK"; 
} 
         echo 'User has been inserted successfully';
         } 
         catch (PDOException $e)    
          {    
           echo "Error: " .$e->getMessage(); 
               }


?>