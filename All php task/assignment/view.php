<?php

$db=new PDO("mysql:host=localhost;dbname=assignment","root","");

$sql='SELECT * FROM students';

$statement= $db->prepare($sql);

$statement->execute();

$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<html>
<body>
    <h1>LIST OF ALL STUDENT</h1>
<table border="2" cellpadding="5" color="purple">
        <tr>
            <th>Student_Id</th>
            <th>Student_Name</th>
            <th>Student_Email</th>
            <th>Student_city</th>
        </tr>
        <?php foreach ($people as $person): ?>
                <tr>
                 
                    <td><?=$person->Student_Id;?></td>
                    <td><a href="edit1.php?Student_Name=<?=$person->Student_Name?>"><?=$person->Student_Name;?></a></td>
                    <td><?=$person->Student_email;?></td>
                    <td><?=$person->Student_city;?></td>
                                
        
                        
                       
                
                </tr>
        <?php endforeach;?>
        
</table>
</body>
</html>
