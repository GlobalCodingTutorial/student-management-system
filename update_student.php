<?php

session_start();

if(!isset($_SESSION['username']))
{

    header('location:login.php');

}
elseif($_SESSION['usertype']=='student')
{

    header('location:login.php');

}

$host="localhost";

$user="road";

$password="1234";

$db="sms project";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT * FROM login WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result -> fetch_assoc();

if(isset($_POST['update']))
{
  $name=$_POST['name'];

  $email=$_POST['email'];

  $phone=$_POST['phone'];

  $password=$_POST['password'];

 $query="UPDATE login SET username='$name', email='$email', phone='$phone', password='$password' WHERE id='$id'";

 $result2=mysqli_query($data,$query);

 if($result2)
 {

   header("location:view_student.php");

 }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
    include 'admin_css.php'; 
    
    ?>
    <title>update student page</title>

    
    <style type="text/css">
          label
          {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
          }
          .div_deg
          {
            background-color: darkgrey;
            width: 400px;
            border-radius: 15px;
            padding-top: 50px;
            padding-bottom: 50px;
          }
    </style>
</head>

<body>

<?php

include 'admin_sidebar.php';

?>

<div class="content">

 <center>

  <h1>Update student</h1>

  <div class="div_deg">

  <form action="#" method="POST">

   <div>
    <label>Username</label>
    <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
   </div>

   <div>
    <label>E-mail</label>
    <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
   </div>

   <div>
    <label>Phone</label>
    <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
   </div>

   <div>
    <label>Password</label>
    <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
   </div>

   <div>
    <input class="btn btn-success" type="submit" name="update" value="Update student">
   </div>

  </form>

  </div>

 </center>

</div>

</body>
</html>