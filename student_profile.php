<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['usertype']=='admin')
{
    header('location:login.php');
}


$host="localhost";

$user="road";

$password="1234";

$db="sms project";

$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT*FROM login WHERE username='$name'";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
   $s_email=$_POST['email'];

   $s_phone=$_POST['phone'];
   
   $s_password=$_POST['password'];

   $sql2="UPDATE login set email='$s_email',phone='$s_phone',password='$s_password' WHERE username='$name' ";

   $result2=mysqli_query($data,$sql2);

   if($result2)
   {
    header('location:student_profile.php');
   }
}


?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
<?php

include 'student_css.php';

?>
     
    <title> student profile page</title>

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

include 'student_sidebar.php';

?>
       
<div class="content">

 <center>
  <h1>Update profile</h1>
   <br><br>
  <div class="div_deg">
   <form action="#" method="POST">

    <div>
        <label>E-mail</label>
        <input type="text" name="email" value="<?php echo "{$info['email']}"; ?>">
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
        <input class="btn btn-success" type="submit" name="update_profile" value="Update">
    </div>

   </form>

  </div>

 </center>

</div>

</body>
</html>