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
    <a href="add_new.php" class='btn btn-dark m-4'>Add New</a>
    <div class='text-center my-5'>
    <h5>All Users</h5>
  </div>

<table class="table container">
  <thead class="table-dark">
    <tr>

        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Actions</th>
        </tr>
  </thead>
  <tbody>
  <?php
    include "con_db.php";
    $sql='select * from users';
    $result=mysqli_query($con,$sql);
    if($result){
        
        while($row=mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <td>$row[id]</td>
             <td> $row[first_name]</td>
             <td> $row[last_name]</td>
              <td> $row[email]</td>
              <td> $row[gender]</td>

              <td>
               <a href='edit.php?id=$row[id]' class='btn btn-warning'>Edit</a>
               <a href='delet.php?id=$row[id]' class='btn btn-danger'>Delete</a>
               </td>
              
             </tr>
             ";  
        }            

    }
    
    ?>
  </tbody>
</table>
</body>
</html>