<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `user` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if(isset($_POST['submit'])){
   $name=$_POST["name"];
   $email=$_POST["email"];
   $mobile=$_POST["mob"];
   $password=$_POST["password"];
   $sql="UPDATE `user` SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
   if($result){
    // echo "Updated Successfully";
       header('location:display.php');
   }else{
      die(mysqli_connect_error());
   }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-color: aqua;">
    
    <div class="container mt-5">
    <form  method="post">
  <div class="mb-3">
  <form>
  <div class="mb-3">
    <label >Name</label>
    <input type="name" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php
    echo $name;?>>
    
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"value=<?php
    echo $email;?>>
  </div>
  <div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mob" autocomplete="off"value=<?php
    echo $mobile;?>>
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off"value=<?php
    echo $password;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>
