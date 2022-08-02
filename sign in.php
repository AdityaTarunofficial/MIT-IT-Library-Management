<!DOCTYPE html>
<?php
session_start();
?>
<?php

if(isset($_POST['submit'])){
include('config.php');
$email=$_POST['uname'];
$pass=$_POST['psw'];

if(($email=='admin')&&($pass=='admin')){
	header('location:adminDashboard.php');
}

$sql="select*from staff_details where email='$email' and passcode='$pass'";
$re=mysqli_query($con,$sql);
$res=mysqli_fetch_array($re);
$count=mysqli_num_rows($re);
if($count>0){
	$_SESSION["staffid"]=$res['staff_id'];
	header('location:dashboard.php');
}
else{
	echo "<script>alert('Invalid username/password');</script>";
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
form {border: 3px solid #34757b; }

input[type=text], input[type=password] {
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
  margin: 12px 0 12px 0;
}

img.avatar {
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

.button-30 {
  align-items: center;
  appearance: none;
  background-color: #B4083E;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: white;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
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
<title>Sign in</title>
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
<h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif ;"><b>Sign In</b></h1>
<form name="form" method="post" onsubmit="return Validation()">
  <div class="imgcontainer">
    <img src="profile pic.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username:</b></label><span id="name" style="color:red"></span>
    <input type="text" placeholder="Enter Username" name="uname" oninput="uname_valid()">

    <label for="psw"><b>Password:</b></label><span id="password" style="color:red"></span>
    <input type="password" placeholder="Enter Password" name="psw" oninput="pwd_valid()">

    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#34757b">
    <button type="button" class="cancelbtn" onclick="location.href='forgot_password.php'";>Forgot Password</button>
  </div>
</form>
</div>
<script>
  function uname_valid(){
    var n1=document.form.uname.value;
    if(n1==""){
      document.getElementById("name").innerHTML="Please enter the Username";
      return false;
    }
    if(n1.indexOf('@')<=0){
      document.getElementById("name").innerHTML="Enter a valid Username";
      return false;
    }
    if((n1.charAt(n1.length-4)!='.') && (n1.charAt(n1.length-3)!='.')){
      document.getElementById("name").innerHTML="Enter a valid Username";
      return false;
    }
    else document.getElementById("name").innerHTML="";
  }
  function pwd_valid(){
    var n2=document.form.psw.value;
    if(n2==""){
      document.getElementById("password").innerHTML="Please enter the password";
      return false;
    }
    if((n2.length<6) || (n2.length>20)){
      document.getElementById("password").innerHTML="Password must be between 6 to 20 digits";
      return false;
    }
    else document.getElementById("password").innerHTML="";
  }
</script>

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
    <br><br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>