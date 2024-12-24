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

$db="managegent project";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher']))
{
    $username =$_POST['name'];
    $user_email =$_POST['email'];
    $user_phone =$_POST['phone'];
    $user_password =$_POST['password'];
    $usertype="admin";

    $check="SELECT*FROM login WHERE username='$username' ";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

  if($row_count==1)
    {
        echo "<script type='text/javascript'>
            alert('Username already exist. so, try another one');
        </script>";    

    }
   else
   {
    $sql="INSERT INTO login (username,phone,email,usertype,password) VALUES('$username',' $user_phone',' $user_email','$usertype','$user_password')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo "<script type='text/javascript'>
        alert('Teacher data uploaded successfully');
        </script>";
    }
    else
    {
        echo "<script type='text/javascript'>
        alert('Teacher data uploading failed');
        </script>";
    }
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
    <title>Add Teacher page</title>

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

      <h1>Add teacher</h1>

      <div class="div_deg">

        <form action="#" method="POST">

           <div>
            <label>Username</label>
            <input type="text" name="name">
           </div>

           <div>
            <label>E-mail</label>
            <input type="email" name="email">
           </div>

           <div>
            <label>Phone</label>
            <input type="number" name="phone">
           </div>

           <div>
            <label>Password</label>
            <input type="text" name="password">
           </div>

           <div>
            <input class="btn btn-primary" type="submit" name="add_teacher" value="Add teacher">
           </div>
          
        </form>

      </div>

    </center>
 </div>
</body>
</html>