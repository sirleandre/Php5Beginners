
<?php
    function dbConnect(){
        try{
            $conn = new pdo("mysql:host=localhost;dbname=system;", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
?>