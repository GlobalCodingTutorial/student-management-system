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
  $updated_Course =$_POST['course'];

  $updated_Description =$_POST['description'];
  
  // SQL query to update data in the 'course' table
  $query= "UPDATE login SET course = '$updated_Course',   description = '$updated_Description' WHERE id='$id'";

 $result2=mysqli_query($data,$query);

 if($result2)
 {

  header("location:view_course.php");

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
      <label for="course">Course Name :</label>
      <input type="text" id="course" name="course" value="<?php echo "{$info['course']}"; ?>">
   </div>

   <div>
      <label for="description">Description :</label>
      <textarea id="description" name="description" rows="4" cols="50" style="width: 180px; height: 80px;"><?php echo "{$info['description']}"; ?></textarea>
   </div>

   <div>
    <input class="btn btn-success" type="submit" name="update" value="Update Course">
   </div>

  </form>

  </div>

 </center>

</div>

</body>
</html>
