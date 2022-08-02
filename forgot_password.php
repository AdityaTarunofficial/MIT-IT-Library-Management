<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
include('config.php');
$email=$_POST['mail'];
$sql="select*from staff_details where email='$email'";
$re=mysqli_query($con,$sql);
$res=mysqli_fetch_array($re);
$count=mysqli_num_rows($re);
if($count>0){
	$sub="email using localhost";
	$body="Your password for IT Library Portal Account is: ".$res['passcode']." ";
	$sen="From:pradeesh.03012003@gmail.com";

	if(mail($email,$sub,$body,$sen)){
		echo "<script>alert('Your Password is sent to your E-mail id');location.href='sign in.php';</script>";
}
	else{
		echo "unsuccessful";
}
}
else{
	echo "<script>alert('Email id not Registered');</script>";
	}
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.topnav {
  overflow: hidden;
  background-color: #555555;
  margin-left: auto;
  margin-right: auto;
	width:70%;

}

.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
	float:right;
}

.topnav a:hover {
	background-color:#34757b;
}
.header {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
.content1 {
  background-color: #f1f1f1;
  padding-top: 10px;
  padding-bottom: 10px;
  width: 70%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.content {
  background-color: #34757b;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-top: 3px;
  width: 30%;
  display: block;
  border-radius:25px;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
}
form {border: 3px solid #34757b;}

input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(15, 207, 118);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

.footer {
  background-color: #555555;
  padding: 10px;
  width: 70%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  padding: 20px 20px 20px 20px;
}
a:link {
  color: rgb(173, 171, 171);
  text-decoration: none;
}

a:visited {
  color: rgb(173, 171, 171);
  text-decoration: none;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}
</style>
<title>Forgot Password</title>
</head>
<body style="background-color:#f1f1f1;">
<div class="header">
    <img src="anna univ logo.png" alt="annaunivlogo" style="width:100% " >
</div>
<div class="topnav">
  <a href="sign in.php" style="color: white; border-left:2px solid rgb(213, 237, 253);">Sign in</a>
  <a href="sign up.php" style="color: white;border-left:2px solid rgb(213, 237, 253) ; ">Sign up</a>
  <a href="home page.html" style="color: white; border-right:2px solid rgb(213, 237, 253);float: left;">Home</a>
</div>
<div class="content1">
  <h1 style="text-align: center;">Information Technology Department Library Portal</h1>
</div>
<br><br><br><br>
<div class="content">
<h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif ;"><b>Forgot Password</b></h1>
<form method="post">
  <div class="imgcontainer">
    <img src="profile pic.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="mail"><b>Enter Registered E-mail:</b></label>
    <input type="email" placeholder="Enter E-mail" name="mail" required>
    <button type="submit" name="submit">Send Password to Email</button>
  </div>
</form>
</div>
<br><br><br><br>

<div class="footer" style="color: white;" >
   <b style="font-size:large  ;"></b>
   <ul class="l" style="text-decoration: none">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Quick links:</h3>
                        <ul>
                            <li><a href="https://www.annauniv.edu/">Anna University</a></li>
                            <li><a href="https://acoe.annauniv.edu/">ACOE</a></li>
                            <li><a href="https://www.aukdc.edu.in/">AUKDC</a></li>
                            <li><a href="https://www.mitindia.edu/en/">MIT</a></li>
                        </ul>
                        </div>
 <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            
                        </ul>
                    </div>

 <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            
                        </ul>
                    
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contact Details:</h3>
                        <ul>
                            <li><a>Telephone:2252 6020</a></li>
                            <li><a>Email: aucmitit@gmail.com</a></li>
                            <li><a>Department Of IT, MIT, Anna University, Chennai-600044</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>