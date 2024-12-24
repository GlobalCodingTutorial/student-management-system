<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="road";
$password="1234";
$db="sms project";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * from admission";

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
    <title>Admission page</title>
</head>
<body>
 <?php

    include 'admin_sidebar.php';

?>
    <center>
    <div class="content">
        
        <h1>Applied for admission</h1>
        <br>
    <table border="1px">
        <tr style="font-size: 25px;">
            <th style="padding: 20px; font: size 10px;">name</th>
            <th style="padding: 20px; font: size 10px;">email</th>
            <th style="padding: 20px; font: size 10px;">phone</th>
            <th style="padding: 20px; font: size 10px;">message</th>
        </tr>
            <?php
                while($info=$result->fetch_assoc())
             {
            ?>
        <tr style="background-color:skyblue;">
            <td style="padding: 20px;"><?php echo "{$info['name']}"?></td>
            <td style="padding: 20px;"><?php echo "{$info['email']}"?></td>
            <td style="padding: 20px;"><?php echo "{$info['phone']}"?></td>
            <td style="padding: 20px;"><?php echo "{$info['message']}"?></td>
        </tr>

        <?php
             }

        ?>
    </table>
    </div>
    </center>

   
</body>
</html>