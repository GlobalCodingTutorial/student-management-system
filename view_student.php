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
    <title>view student page</title>

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
  <h1>Student Data</h1>
  <br>
  <?php 
    if($_SESSION['message'])
    {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
  ?>
  <table border="1px">
    <tr>
        <th class="table_th">Username</th>
        <th class="table_th">E-mail</th>
        <th class="table_th">Phone</th>
        <th class="table_th">Password</th>
        <th class="table_th">Delete</th>
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
        <?php echo "{$info['email']}"; ?>
     </td>

     <td class="table_td">
        <?php echo "{$info['phone']}"; ?>
     </td>

     <td class="table_td">
        <?php echo "{$info['password']}"; ?>
     </td>
     
     <td class="table_td">
        <center>
            <?php echo "<a class='btn btn-danger' onclick=\"javascript:return confirm('Are you sure to delete this data?')\"href='delete.php?student_id={$info['id']}'>Delete</a>";?>
        </center>
     </td>

     <td class="table_td">
        <center>
            <?php echo "<a class='btn btn-success' href='update_student.php?student_id={$info['id']}'>Update</a>"; ?>
        </center>
     </td>
    
    </tr>
    <?php
    
    }

    ?>

  </table>
  </center>
</div>
</body>
</html>