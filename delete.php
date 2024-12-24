<?php

session_start();

$host="localhost";

$user="road";

$password="1234";

$db="sms project";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];

    $sql="DELETE FROM login WHERE id='$user_id' ";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']='Student data deleted successfully';

        header("location:view_student.php");
    }
    
}


?>