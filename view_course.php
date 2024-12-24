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

$sql="SELECT*FROM login WHERE usertype='student'";

$result=mysqli_query($data,$sql);



?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
    include 'admin_css.php'; 
    
    ?>
    <title>Admin home page</title>

    <style type="text/css">
         .content
         {
           padding-left: 130px;
         }
         .table_th
         {
             padding: 20px;
             font-size: 18px;
         }
         .table_td
         {
             color: black;
             font-weight: 300;
             padding: 15px;
             background-color: skyblue;
         }
         .table_td a{
             color: white!important;
             font-size: 18px;
             font-weight: 400;
         }
         .table_td a:hover
         {
             color: black!important;
         }
       
     </style>

</head>

<body>

<?php

include 'admin_sidebar.php';

?>
<div class="content">
    <center>
  <h1>View all student's course</h1>
   <div class="table">
  <table border="1px">
    <tr>
        <th class="table_th">Username</th>  
        <th class="table_th">Course Name</th>
        <th class="table_th">Description</th>
        <th class="table_th">Update</th>
    </tr>
    <?php
    
    while($info=$result->fetch_assoc())
    {
    ?>
    <tr>

     <td class="table_td"> 
      <?php echo "{$info['username']}"; ?>
     </td>

     <td class="table_td">
        <?php echo "{$info['course']}"; ?>
     </td>

     <td class="table_td">
        <?php echo "{$info['description']}"; ?>
     </td>

     <td class="table_td">
        <center>
            <?php echo "<a class='btn btn-success' href='update_course.php?student_id={$info['id']}'>Update</a>"; ?>
        </center>
     </td>
    
    </tr>
    <?php
    
    }

    ?>

  </table>
  </div>
  </center>
</div>
    </center>
</div>
</body>