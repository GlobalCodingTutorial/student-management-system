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

if($_GET ['teacher_id'])
{
   $t_id=$_GET['teacher_id'];

   $sql="SELECT*FROM teacher WHERE id='$t_id' ";

   $result=mysqli_query($data,$sql);

   $info=$result->fetch_assoc();
}

if(isset($_POST['update_teacher']))
{
   $id=$_POST['id'];
   $t_name=$_POST['name'];
   $t_des=$_POST['description'];

   $file=$_FILES['image']['name'];

   $dst="./image/".$file;

   $dst_db="image/".$file;

   move_uploaded_file($_FILES['image']['tmp_name'],$dst);
 
   if($file)
   {
      $sql2="UPDATE teacher SET name='$t_name',description='$t_des',image='$dst_db' WHERE id='$id' ";
   }
   else
   {
      $sql2="UPDATE teacher SET name='$t_name',description='$t_description' WHERE id='$id' "; 
   }
   

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
    <title>Admin home page</title>
    
    <style type="text/css">
         label
         {
            display: inline-block;
            text-align: right;
            width: 130px;
            padding-top: 10px;
            padding-bottom: 10px;
         }
         .div_deg
         {
            background-color: darkgrey;
            width: 450px;
            border-radius: 15px;
            padding-top: 50px;
            padding-bottom: 50px;
         }
         input[type="file"] 
         {
           display: flex;
         }
    </style>

</head>

<body>

<?php

include 'admin_sidebar.php';

?>
<div class="content">

 <center>

   <h1 style="margin-top: 50px;">Update Teacher Data</h1>
   <br><br>
  <div class="div_deg">

   <form action="admin_update_teacher.php" method="POST" enctype="multipart/form-data">
     
     <input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>

     <div>
        <label>Teacher Name :</label>
        <input type="text" name="name" value="<?php echo "{$info['name']}" ?>">
     </div>
      <br>
     <div>
        <label>Description :</label>
        <textarea name="description" rows="2"> <?php echo "{$info['description']}" ?> </textarea>
     </div>
      <br>
     <div>
        <label>Teacher Old Image :</label>
        <img width="50px" height="40px" src="<?php echo "{$info['image']}" ?>">
     </div>
      <br>
     <div>
        <label>Teacher New Image :</label>
        <input type="file" name="image">
     </div>
      <br> 
     <div>
        <input class="btn btn-success" type="submit" name="update_teacher" value="Update">
     </div>
      <br>
   </form>

  </div>

 </center>

</div>

</body>

</html>