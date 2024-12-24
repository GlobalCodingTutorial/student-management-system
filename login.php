<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
    
<style type="text/css">
  body
{
  margin: 0px;
  padding: 0px;
}
.header {
    overflow: hidden;
    background-color: gainsboro!important;
    padding: 3px 10px;
  }
  
  /* Style the header links */
  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none!important;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }
  
  /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
    text-decoration: none;
  }
  
 /* Change the background color on mouse-over */
  .header-right a:hover{
    background-color: white;
    color: white;
    line-height: 13px !important;
    margin-top: 4px !important;
    border-radius: 4px;
  }
  
  /* Style the active/current link*/
  .header a.active
  {
    background-color: #337ab7;
    color: white;
    line-height: 10px !important;
    margin-top: 7px !important;
    text-decoration: none;
  }
  a.active:hover
  {
    background-color: #1f66a3;
  }
  /* Float the link section to the right */
  .header-right {
    float: right;
    position: relative;
    right: 15px;
  }


    .header a.home
  {
    background-color: #337ab7;
    color: white;
    line-height: 10px !important;
    margin-top: 7px !important;
    text-decoration: none;
  }
  a.home:hover
  {
    background-color: #1f66a3;
  }
  .form_deg
  {
    background-color: black;
    width: 350px;
    margin-top: 220px;
    height: 285px;
    border-radius: 15px;
  }
  .title_deg
  {
    font-weight: 700;
    font-size: 20px;
    background-color: gainsboro;
    color: black;
    padding-top: 10px;
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;
    height: 60px;
  }
  h4
  {
    font-size: medium;
    font-weight: 600;
    color: red;
    margin-top: 0px;
  }
  .login_form
  {
    padding-top: 25px; 
  }
  .label_deg
  {
    margin-top: 25px;
    color: white;
  }
  input[class="btn btn-success"] 
  {
    margin-top: 25px;
  }
  
  .body_deg
  {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }
</style>
</head>
<body background="https://e1.pxfuel.com/desktop-wallpaper/407/1022/desktop-wallpaper-website-backgrounds-login-page.jpg" class="body_deg">
<nav>
    <div class="header">
      <a class="logo">G.T.B.I.T - Collage</a>
      <div class="header-right">
        <a class="home" href="index.php">Home</a>
      </div>
    </div> 
  </nav>
  <center>

    <div class="form_deg">
        <center class="title_deg">
            Login form

            <h4>
              <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
              ?>
            </h4>
        </center>
        <form action="login_check.php" method="POST" class="login_form">

           <div>
            <label class="label_deg">Username</label>
            <input type="text" name="username">
           </div>

           <div>
            <label class="label_deg">Password</label>
            <input type="password" name="password">
           </div>

           <div>
            <input class="btn btn-success" type="submit" name="submit" value="Login">
           </div>

        </form>
    </div>
  </center>
</body>
</html>












