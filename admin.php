<!-- <?php
require_once './connect.php';
$sql = 'SELECT * FROM signup';

// $getData = $conn->query($sql);

// $user = $getData->fetchAll(PDO::FETCH_OBJ);

//    print_r( $user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
<table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>date created </th>
                    <th>date last login </th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
</table>
</body>
</html> -->


<?php 

   require_once './connect.php';

   $sql = 'SELECT * FROM users';

   $getData = $db->query($sql);

   $food = $getData->fetchAll(PDO::FETCH_OBJ);

//    print_r( $food);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
  
            <table>
                <tr>
                   
                
                    <th>Id</th>
                    <th>role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>date created </th>
                    <th>mobile </th>
                    <th>Edit</th>
                    <th>Delete</th>
                
                </tr>
                <?php foreach($food as $type) { ?>
                    <tr>         
                        
                        <td><?php echo $type->id ?></td>
                        <td><?php echo $type->role ?></td>
                        <td><?php echo $type->fname ?></td>
                        <td><?php echo $type->email ?></td>
                        <td><?php echo $type->password ?></td>
                        <td><?php echo $type->date ?></td>
                        <td><?php echo $type->mobile ?></td>
                        
                        <td><a href="edit.php?id=<?php echo $type->id ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $type->id ?>" >Delete</a></td>
                    </tr>

                <?php } ?>
        

            </table>

        </div>


        </div>
    </div>
 

</body>

</html>