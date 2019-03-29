
<?php

try {
     $dbh = new PDO("mysql:host=localhost;dbname=users", "root", "");
     //echo 'connection has been established!'; 
     $sql="CREATE TABLE member(id int(10) unsigned auto_increment,
     Username varchar(20)  DEFAULT NULL,
     Password varchar(20) DEFAULT NULL,
      FirstName varchar(20) DEFAULT NULL,
       LastName varchar(20) DEFAULT NULL,
         PRIMARY KEY (id))";
         $query=$dbh->prepare($sql); 
         $query->execute();
         echo 'table has been created';
         } 
         catch (PDOException $e)    
          {    
           echo "Error: " .$e->getMessage(); 
           
               }


?>







