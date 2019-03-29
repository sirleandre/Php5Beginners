<?php

try {
     $db = new PDO("mysql:host=localhost;dbname=etude", "root", "");
     //echo 'connection has been established!'; 
     $sql="CREATE TABLE IF NOT EXISTS cat( id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      name varchar(60) NOT NULL,
       level varchar(14) NOT NULL,
         
         PRIMARY KEY (id))";
         $query=$db->prepare($sql); 
         $query->execute();
         echo 'table has been created';
         } 
         catch (PDOException $e)    
          {    
           //echo "Error: " .$e->getMessage(); 
           exit ("Error: " .$e->getMessage()); 
               }


?>