
<?php 
include "con_db.php";
if(isset($_POST['submit'])){
    $fName=$_POST['firstname'];
    $lName=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $query="insert into `users` (`first_name`,`last_name`,`email`,`gender`) values ('$fName','$lName','$email','$gender')";
    $res=mysqli_query($con,$query);
    if($res){
        header('location:all_users.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font_aw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- <nav class='navbar navbar-light d-flex justify-content-center mb-5 fs-3'
  style='background-color:#00ff66;'
  >CRUD APP</nav> -->
  <a href="all_users.php" class='btn btn-success m-4'>All Users</a>

  <div class='text-center my-5'>
    <h5>Add New User</h5>
  </div>

<div class="container d-flex justify-content-center  ">
    <form action="" method='POST' style='width:50vw; min-width:300px' class='d-flex flex-column align-items-center justify-content-center'>
        <div class="row w-100">
            <div class="col">
                <input class="p-3 w-100" placeholder='First Name' type="text" name='firstname' required>
            </div>
            <div class="col">
               
                <input class="p-3 w-100" placeholder='Last Name' type="text" name='lastname' required>
            </div>

        </div>
        <div class="row my-4 w-100">
            <input class="p-3 w-100" placeholder='Email@example.com' type="email" name='email' required>
        </div>

        <div class="form-group my-1">
            <label for="">Gender : </label>
            <label for="male">Male</label>
            <input id='male' name='gender' type="radio" value='male' required>
            <label for="female">Female</label>
            <input id='female' name='gender' type="radio" value='female' required>

        </div>
        <div class="row w-100">
            
            <button class='btn btn-success p-3 my-4' name='submit'>Save</button>
        </div>
    </form>
</div>


<!-- botstrab js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>