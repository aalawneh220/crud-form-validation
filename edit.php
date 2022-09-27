<?php 
   require_once './connect.php';
   
   $id = $_GET['id'];

//    echo $id;

$sql ="SELECT * FROM users WHERE id =$id";

$getData = $db->query($sql);

$food = $getData->fetch();

print_r($food);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>

              
<div class="container mt-5">
        <div class="row">
        <form  method="post">
                
                <div class="mb-3">
                    <label class="form-label"> id</label>
                    <input type="text" class="form-control" name="id" value = "<?php echo $food['id'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">role</label>
                    <input type="text" class="form-control" name="role" value = "<?php echo $food['role'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">fname</label>
                    <input type="text" class="form-control" name="fname" value = "<?php echo $food['fname'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" name="email" value = "<?php echo $food['email'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="text" class="form-control" name="password" value = "<?php echo $food['password'] ?>">
                </div>
              
                <div class="mb-3">
                    <label class="form-label">mobile</label>
                    <input type="text" class="form-control" name="mobile" value = "<?php echo $food['mobile'] ?>">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">update</button>
            </form>
        </div>

</body>

</html>

<?php 

if(isset($_POST['submit'])){
     
    $id1 = $_POST['id'];
    $role = $_POST['role'];
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $sql = "UPDATE users SET id ='$id1', role='$role', fname='$fname' , mobile = '$mobile' , password = '$password' , email = '$email' WHERE id='$id'";


    $query = $db->query($sql);

   


    // $result = $query->execute();

    header("location: admin.php");
}



?>