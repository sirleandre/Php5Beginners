<?php

try {
     $dbh = new PDO("mysql:host=localhost;dbname=mywebpage", "root", "");
     //echo 'connection has been established!'; 
     $sql="CREATE TABLE IF NOT EXISTS users ( id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      name varchar(60) DEFAULT NULL,
       phone varchar(14) DEFAULT NULL,
        city varchar(60) DEFAULT NULL,
         date_added date DEFAULT NULL, 
         PRIMARY KEY (id))";
         $query=$dbh->prepare($sql); 
         $query->execute();
         echo 'table has been created';
         } 
         catch (PDOException $e)    
          {    
           echo "Error: " .$e->getMessage(); 
           //exit ("Error: " .$e->getMessage()); 
               }


?>