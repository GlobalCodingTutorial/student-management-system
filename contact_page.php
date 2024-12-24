<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">/* Style the header with a grey background and some padding */
*
body
{
  margin: 0px;
  padding: 0px;
  background-image: url(https://img.freepik.com/free-vector/circles-background-dark-tones_60389-166.jpg?size=626&ext=jpg&ga=GA1.1.553209589.1714521600&semt=ais);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
.header {
    overflow: hidden;
    background-color: gainsboro;
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
  .header a.logo:hover
  {
    color: #337ab7;
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
    color:  white;
    line-height: 10px!important;
    margin-top: 7px!important;
    text-decoration: none;
  }
 .header a.active:hover
  {
    background-color: #145996;
  }
  /* Float the link section to the right */
  .header-right {
    float: right;
    position: relative;
    right: 15px;
  }
  

  .container {
	width: 950px;
	margin: 80px auto;
	color: white;
	line-height: -1.5;
}

.text-center {
	text-align: center;
}

.content {
	display: flex;
	margin-top: 40px;
}

.icon {
	background-color: white;
	border-radius: 120px;
	
	vertical-align: top;
  width: 30px;
  height: 30px;
}

.contact-info {
	display: inline-block;
	padding: 4px 20px 0px 20px;
}

.address-line {
	margin-top: 40px;
}

.col-1 {
	width: 530px;
}

.col-2 {
	flex: 1 1 auto;
	background-color: white;
}

.form-container {
	color: #fff;
	padding: 45px;
}

.contact-info-title {
	color: #01bdd4;
}

input[type=text],
select,
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #eeeeee;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 8px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4cd9c6;
  color: #ffffff;
  padding: 12px 20px;
  border: none;
  border-radius: 7px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #6fe8d7;
}
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 0px 0;
  position: fixed;
  right: 0px;
  bottom: 0;
  width: 100%;
  padding-top: 10px;
  font-size: large;
}
@media all and (max-width: 1024px) {
	.container {
		width: auto;
		padding: 30px;
	}
	 .col-1 {
		width: 360px;
	} 
}

@media all and (max-width: 700px) {
	.content {
		display: block;
	}
	.col-2 {
		margin-top: 40px;
	} 
	.col-1{
	width:100%;
	}
}

@media all and (max-width: 500px) {
	.container {
		padding: 10px;
	}
}</style>

<title>Document</title>
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
 <main>
    <div class="container">
    <div class="text-center">
			<h1>Contact Us</h1>
		</div>
		<div class="content">
			<div class="col-1">

				<div class="address-line">
					<img alt="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzoKhpBbxObbwEL0cVNKbGRlwni2UYj5MBjXXOVxblnA&s" class="icon">
		            <div class="contact-info">
						<div class="contact-info-title">Address</div>
						<div>G-8 Area, Press Colony, </div>
						<div> Rajouri Garden, New Delhi, Delhi, </div>
						<div>110064.</div>
					</div>
				</div>

				<div class="address-line">
					<img alt="location" src="https://thumbs.dreamstime.com/b/phone-icon-black-white-telephone-symbol-vector-illustration-black-handset-icon-white-background-vector-illustration-132728225.jpg" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Phone</div>
						<div>+91-1145599900</div>
					</div>
				</div>

				<div class="address-line">
					<img alt="location" src="https://thumbs.dreamstime.com/b/email-icon-outline-isolated-white-background-vector-illustration-eps-125272630.jpg" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Email</div>
						<div>gtbit rediffmail.com</div>
					</div>
				</div>

        <div class="address-line">
					<img alt="location" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpgfHxIrtsLtEipR485O5nkuJXOQ9HoGTEQZ9_28SZVac6PJN_3ptOW8vOImaQylWC44&usqp=CAU" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Official website</div>
						<div>	https://www.gtbit.org/</div>
					</div>
				</div>
			</div>
		</div>
 </main>
 <footer>
	<p style="color: white">&copy; All @copyright reserved by our web application</p>
</footer>
</body>
</html>
</body>
</html>