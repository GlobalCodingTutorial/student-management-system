<?php
 
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
  $message=$_SESSION['message'];

  echo "<script type='text/javascript'>

      alert('$message');

  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.70">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style type="text/css">
/* Style the header with a grey background and some padding */
*
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
    color: black;
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
    
  .header a.logo:hover
  {
    color: #337ab7;
  }
  .col-md-5
  {
    width: 33.33333333%;
    float: right;
  }
 .next_img1
{width: 100%;
  height: 190px;
  position: relative;
  right: 0px;
  border-radius: 15px;
}
.col-md-9
  {
    width: 33.33333333%;
    float: left;
  }
  


  /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    .header-right {
      float: none;
    }
  }

  .main_img
{
  width: 100%;
  height: 260px;
}
.img_text
{
  background-color: transparent;
  color: white;
  font-size: 4vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 70%;
  text-align: center;
  position: absolute;
  top: 25%!important;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}

.welcome_img
{
  width: 100%;
  height: 190px;
  position: relative;
  right: 0px;
  border-radius: 15px;
}
.container
{
  padding-top: 70px;
}
.teacher
{
  width: 100%;
  height: 215px;
  border-radius: 15px;
}
.courses
{
  width: 100%;
  height: 215px;
  border-radius: 15px;
}

.label_text
{
  display: inline-block;
  width: 100px;
  text-align: right;
  padding-right: 10px;
}

.input_deg
{
  width: 30%;
  height: 40px;
  border-radius: 10px;
  border: 1px solid black;
}

.adm_int
{
  padding-top: 10px;
}
.input_txt
{
  width: 30%;
  height: 120px;
  border-radius: 10px;
  border: 1px solid black; 
}

#submit
{
  position: relative;
  width: 15%;
  left: 4%;
}
.adm
{
  padding-top: 30px;
  padding-bottom: 30px;
}
.footer_text
{
  color: white;
  text-align: center;
  bottom: -18px;
  position: relative;
  background-color: black;
  font-size: 28px;
  padding-top: 14px;
  height: 60px;
}


/*login page css code*/

.body_deg
{
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
  <body>
   <nav>
    <div class="header">
      <a class="logo">G.T.B.I.T - Collage</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a href="contact_page.php">Contact</a>
        <a class="active" href="login.php">Login</a>
      </div>
    </div> 
  </nav>
  <div class="section1">

    <img class="main_img" src="https://img.freepik.com/premium-photo/empty-classroom_410516-1769.jpg">

      <label class="img_text">We teach student with care.</label>

     <div class="container">

    <div class="row">

      <div class="col-md-4">
        
        <img class="welcome_img" src="https://edufever.in/colleges/wp-content/uploads/2021/07/Guru-Tegh-Bahadur-Institute-of-Technology-Delhi.jpg">

      </div>

      <div class="col-md-8">

         <h1>Welcome to G.T.B.I.T collage</h1>
         <p>GTBIT is a degree level technical institute, approved by AICTE and affiliated to Guru Gobind Singh Indraprastha University, Delhi. GGSIPU was established by Government of NCT of Delhi under provisions of Guru Gobind Singh University Act, 1998 read with its Amendment in 1999.</p>

      </div>
    </div>
  </div>
  <br>
  <center>
    <h1>Our teachers</h1>
  </center>

  <div class="container">

     <div class="row">

       <div class="col-md-4">

         <img class="teacher" src="https://www.cns-partners.com/hubfs/IT-System-Blog-Images/Slide1.jpg">
         <p>Teachers ask questions and help students find answers. Yet learning isn’t only about finding the right answer, but also creating the road that leads to the answer. Learning with every step is the true sign of progress.</p>

       </div>
       
       <div class="col-md-4">

         <img  class="teacher" src="https://img.freepik.com/free-photo/smiling-young-female-teacher-standing-front-blackboard-holding-stranded-board-showing-thumb-up-classroom_141793-106344.jpg?size=626&ext=jpg&ga=GA1.1.1700460183.1709510400&semt=ais">
         <p>Teachers ask questions and help students find answers. Yet learning isn’t only about finding the right answer, but also creating the road that leads to the answer. Learning with every step is the true sign of progress.</p>

       </div>
       
       <div class="col-md-4">

         <img  class="teacher" src="https://www.educationworld.in/wp-content/uploads/2021/01/College-classroom.jpg">
         <p>Teachers ask questions and help students find answers. Yet learning isn’t only about finding the right answer, but also creating the road that leads to the answer. Learning with every step is the true sign of progress.</p>

       </div>


     </div>

  </div>

<br>
  <center>
    <h1>Our courses</h1>
  </center>

  <div class="container">

     <div class="row">

       <div class="col-md-4">

         <img class="courses" src="https://thumbs.dreamstime.com/b/animation-multicolored-flowchart-computer-application-against-blue-background-animation-multicolored-flowchart-255904060.jpg">
         <h3>Computer Applications and IT</h3>

         
       </div>
       
       <div class="col-md-4">

         <img  class="courses" src="https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/1293655/retina_1708x683_cover-0321-dark-ui-Waldek_Newsletter-65cd3439dabe22ebe035c149b3304331-84799896ab23542a78cfdb9728a0aea6.png">
         <h3>Engineering and Architecture</h3>
        

       </div>
       
       <div class="col-md-4">

         <img  class="courses" src="https://img.freepik.com/free-vector/flat-design-science-concept-with-microscope_23-2148527588.jpg">
         <h3>Sciences</h3>
         

       </div>


     </div>

  </div>

  <center>
    <h1 class="adm">Admission form</h1>
  </center>

  <div align="center" class="admission form">

   <form action="data_check.php" method="POST">

     <div class="adm_int">
      <label class="label_text">Name</label>
      <input class="input_deg" type="text" name="name">
     </div>

     <div class="adm_int">
      <label class="label_text">Email</label>
      <input  class="input_deg" type="text" name="email">
     </div>

     <div class="adm_int">
      <label class="label_text">Phone</label>
      <input class="input_deg" type="text" name="phone">
     </div>

     <div class="adm_int">
      <label class="label_text">Message</label>
      <textarea class="input_txt" name="message"></textarea> 
     </div>

     <div class="adm_int">
      <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
     </div>
   </form>
  </div>
  <br>
  &nbsp;  
  <footer>
    <h2 class="footer_text">All @copyright reserved by our web application</h2>
  </footer>
	<script src="script.js"></script>
  </body>
</html>