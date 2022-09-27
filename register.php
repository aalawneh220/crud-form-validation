
<?php
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
        <form action="./register.php" method="post">
                
                <div class="mb-3">
                    <label class="form-label"> fName</label>
                    <input type="text" class="form-control" name="fname">
                </div>
                <div class="mb-3">
                    <label class="form-label">lname</label>
                    <input type="text" class="form-control" name="lname">
                </div>
                <div class="mb-3">
                    <label class="form-label">midname</label>
                    <input type="text" class="form-control" name="midname">
                </div>
                <div class="mb-3">
                    <label class="form-label">famname</label>
                    <input type="text" class="form-control" name="famname">
                </div>
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="mb-3">
                    <label class="form-label">mobile</label>
                    <input type="text" class="form-control" name="mobile" pattern="[0-9]{14}">
                </div>
                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="text" class="form-control" name="password" pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">

                </div>
                <div class="mb-3">
                    <label class="form-label">date</label>
                    <input type="date" class="form-control" name="date" max="2006-01-01">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="row">
        <div class="row">
            <table>
</body>
</html>
<?php

   if(isset($_POST['submit'])){
     
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $midname = $_POST['midname'];
     $famname = $_POST['famname'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];
     $date = $_POST['date'];
     $email = $_POST['email'];

    //  echo $name;


    $sql = "INSERT INTO users (role ,email ,fname , lname, midname, famname , mobile ,password ,date) VALUES ('member','$email','$fname' , '$lname', '$midname', '$famname' , '$mobile' ,'$password' ,'$date')";

    $query = $db->prepare($sql);

   
    $result = $query->execute();

    header("location: landing.php?em=$email");

   }



   ?>