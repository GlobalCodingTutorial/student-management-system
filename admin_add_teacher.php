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

if(isset($_POST['add_teacher']))
{
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql="INSERT INTO teacher (name,description,image) VALUES ('$t_name','$t_description','$dst_db')";

    $result=mysqli_query($data,$sql);

   if ($result) 
   {
    # code... 
    header('location:admin_add_teacher.php');
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
    <title>Admin add teacher page</title>

    <style type="text/css">
          label
          {
            display: inline-block;
            text-align: right;
            width: 110px;
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
          input[type="file"] 
          {
            display: unset;
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
   <br><br>
  <div class="div_deg">

    <form action="#" method="POST" enctype="multipart/form-data">

      <div>
        <label>Teacher Name :</label>
        <input type="text" name="name">
      </div>
       <br>
      <div>
        <label>Description :</label>
        <textarea name="description" style="width: 180px; height: 80px;"></textarea>
      </div>
       <br>
      <div>
        <label>Image :</label>
        <input type="file" name="image">
      </div>
       <br>
      <div>
        <input class="btn btn-primary" type="submit" name="add_teacher"
        value="Add teacher">
      </div>

    </form>

  </div>

  </center>

</div>

</body>
</html>