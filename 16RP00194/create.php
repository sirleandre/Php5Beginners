<?php

try {
     $dbh = new PDO("mysql:host=localhost;dbname=cat_no2", "root", "");
     //echo 'connection has been established!'; 
     $sql="CREATE TABLE IF NOT EXISTS students ( id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      FirstName varchar(60) DEFAULT NULL,
       LastName varchar(14) DEFAULT NULL,
        District varchar(60) DEFAULT NULL,
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