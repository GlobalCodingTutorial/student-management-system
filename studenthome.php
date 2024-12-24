<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['usertype']=='admin')
{
    header('location:login.php');
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
<?php

include 'student_css.php';

?>
     
    <title> student home page</title>

</head>

<body>

<?php

include 'student_sidebar.php';

?>
       
<div class="content">
<center>
  <h1>Student Dashboard</h1>
</center>
</div>
</body>
</html>