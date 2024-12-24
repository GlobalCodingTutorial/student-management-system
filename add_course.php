<?php

error_reporting(0);

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


if(isset($_POST['add_course']))
{
  $name = $_POST['username'];
$newCourse =$_POST['course'];
$newDescription =$_POST['description'];

// SQL query to update data in the 'course' table
$sql= "UPDATE login SET course = '$newCourse',  description = '$newDescription' WHERE username = '$name'";

$resul=mysqli_query($data,$sql);

if($result)
    {
     header('view_course.php');
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
    <title>Add course page</title>

    <style type="text/css">
          label
          {
            display: inline-block;
            text-align: right;
            width: 150px;
            padding-top: 10px;
            padding-bottom: 10px;
          }
          .div_deg
          {
            background-color: darkgrey;
            width: 440px;
            border-radius: 15px;
            padding-top: 50px;
            padding-bottom: 50px;
        
          }
          textarea[name="description"] 
          {
            display: inline;
          }
    </style>

</head>

<body>

<?php

include 'admin_sidebar.php';

?>
<div class="content">

  <center>
    
    <h2>Add Course</h2>

   <div class="div_deg">

    <form action="add_course.php" method="POST">

     <div>
        <label>Username :</label>
        <input type="text" name="username">
     </div>

       <br>

     <div>
        <label for="course">Course Name :</label>
        <input type="text" id="course" name="course">
     </div>

      <br>

     <div>  
        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" cols="50" style="width: 180px; height: 80px;"></textarea>
     </div>

      <br>

     <div>
       <input class="btn btn-primary" type="submit" name="add_course" value="Add course">
     </div>

    </form>

    </div>

    </center>
</div>
</body>