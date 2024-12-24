<?php

session_start();

error_reporting(0);

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

$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);

  if($_GET['teacher_id']) 
 {
   $t_id=$_GET['teacher_id'];

   $sql2="DELETE FROM teacher WHERE id='$t_id'";

   $result2=mysqli_query($data,$sql2);
   
   if($result2)
   {
       header('location:admin_view_teacher.php');
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
    <title>view teacher data page</title>

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

   <h1> View All Teacher Data</h1>
   <br>
       <table border="1px">

         <tr>
            <th class="table_th">Teacher Name</th>
            <th class="table_th">About Teacher</th>
            <th class="table_th">Teacher Image</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
         </tr>
         <?php
    
          while($info=$result->fetch_assoc())
         {
         ?>
         <tr>
            <td class="table_td">
                <?php echo "{$info['name']}"; ?>
            </td>

            <td class="table_td">
                <?php echo "{$info['description']}"; ?>
            </td>

            <td class="table_td">
               <center>
                <img height="70px" width="80px" src="<?php echo "{$info['image']}"; ?>">
               </center>
            </td>

            <td class="table_td">
             <center>
              <?php
               echo "<a onclick=\"javascript:return confirm('Are you sure to delete this data');\" class='btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>"
              ?>          
             </center>
            </td>

            <td class="table_td">
             <center>
              <?php 
               echo "<a class='btn btn-success' href='admin_update_teacher.php?teacher_id={$info['id']}'>Update</a>";
              ?>         
             </center>
            </td>
          
         <?php
          }
         ?>

       </table>

 </center>

</div>

</body>
</html>