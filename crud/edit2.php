
<?php
try{

    $db=new PDO("mysql:host=localhost;dbname=crud","root","");
    $id=$_GET['id'];
    $sql = 'SELECT * FROM info WHERE id=:id';
    $statement=$db->prepare($sql);
    $statement->execute([':id'=>$id]);
    $person = $statement->fetch(PDO::FETCH_OBJ);


    if(isset($_POST['name']) && isset($_POST['address']))
    {
        $query='UPDATE info SET name=:name,address=:address WHERE id=:id';
    // $query='INSERT INTO info(name,address)VALUES(?,?)';
    
    
    $name=$_POST['name'];
    $address=$_POST['address'];
    
       $sql=$db->prepare($query);
    
       if($sql->execute([':name'=>$name,'address'=>$address,':id'=>$id]));
        {
        
            // $message="data updated successfuly";
            header('Location: index.php');
        } 
        
    //     $query1='SELECT * FROM info';
    // $results=$db->prepare($query1);
    }
}
    
    //RETRIEVE DATA FROM DATABASE
    
    
    catch(PDOException $e)
    {
        exit('Error:'.$e->getMessage());
    }
    
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="crud.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>EDIT PERSON</h1>
<!-- <table>
    <thead>
        <tr>
            <th>name</th>
            <th>address</th>
            <th colspan="2">action</th>
        </tr>
    </thead>
   <tbody>
        
        <tr>
            <td>john</td>
            <td>ngoma</td>
            <td><a href="#">edit</a></td>
            <td><a href="#">delete</a></td>
        </tr>
    </tbody>
 </table> -->
<?php if(!empty($message)):?>
<?=$message;?>
<?php endif; ?>
<form  method="POST">
    
        <div class="input-group">
            <label>Name</label>
            <input value="<?=$person->name;?>" type="text" name="name">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input value="<?=$person->address;?>"type="text" name="address">
        </div>
        <div class="input-group">
           
            <button type="submit" name="save" class="btn">save</button>
        </div>
    
</form>

</body>
</html>