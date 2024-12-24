<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
} elseif($_SESSION['usertype']=='admin') {
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

$sql2="SELECT*FROM login  'username','course','description'  WHERE username = '$name' WHERE username='$name'";

$result2=mysqli_query($data,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'student_css.php'; ?>
    <title>Student Profile Page</title>
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
    <?php include 'student_sidebar.php'; ?>
    <div class="content">
    <center>
  <h1>View course</h1>
   <div class="table">
  <table border="1px">
    <tr> 
        <th class="table_th">Course Name</th>
        <th class="table_th">Description</th>
    </tr>
    <?php
    
    while($info=$result->fetch_assoc())
    {
    ?>
    <tr>

     <td class="table_td">
        <?php echo "{$info['course']}"; ?>
     </td>

     <td class="table_td">
        <?php echo "{$info['description']}"; ?>
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