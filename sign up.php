<!DOCTYPE html>

<?php


if(isset($_POST['submit'])){
include('config.php');
$id=$_POST['id'];
$name=$_POST['uname'];
$mail=$_POST['mail'];
$pos=$_POST['pos'];
$pass=$_POST['psw'];
$cpass=$_POST['cpsw'];
if($id==""||$name==""||$mail==""||$pos==""||$pass==""){
echo "<span><i>Unsuccessful(fill all the fields)</i></span>";}
if(($pass==$cpass)&&($id!="")&&($name!="")&&($mail!="")&&($pos!="")&&($cpass!="")){
$sql="insert into staff_details (staff_id,staff_name,email,position,passcode) values ($id,'$name','$mail','$pos','$cpass')";
if(mysqli_query($con,$sql)){
echo "<script>alert('Registration Successfull'); location.href='sign in.php';</script>";}
else{
echo "Not yet";}}
}

?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.content {
  background-color: #34757b;
  padding: 10px;
  width: 30%;
  display: block;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
  border-radius:25px;
}
form {border: 3px solid #34757b;}

input{
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
img.avatar {
  width: 40%;
  border-radius: 50%;
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

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
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
<title>Sign up</title>
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
<h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif ;"><b>Sign Up</b></h1>
<form name="form" method="post">

  <div class="container">
    <label for="id"><b>Staff ID:</b></label><span id="staffid" style="color:red"></span>
    <input type="text" placeholder="Enter ID" name="id" oninput="staffid_valid()" >

    <label for="uname"><b>Name:</b></label><span id="name" style="color:red"></span>
    <input type="text" placeholder="Enter Name" name="uname" oninput="name_valid()">

    <label for="mail"><b>E-mail:</b></label><span id="email" style="color:red"></span>
    <input type="text" placeholder="Enter Email" name="mail" oninput="email_valid()">

    <label for="pos"><b>Position:</b></label><span id="position" style="color:red"></span>
    <input type="text" placeholder="Enter Position" name="pos" oninput="pos_valid()">
    
    <label for="psw"><b>Password:</b></label><span id="password" style="color:red"></span>
    <input type="password" placeholder="Password" name="psw" oninput="pwd_valid()">

    <label for="cpsw"><b>Confirm Password:</b></label><span id="conpassword" style="color:red"></span>
    <input type="password" placeholder="Confirm Password" name="cpsw" oninput="cpwd_valid()">

    <button type="submit" name="submit">Sign Up</button>

  </div>
</form>
</div>
<br><br><br><br>
<script type="text/javascript">
  function staffid_valid(){
    var n1=document.form.id.value;
    if(n1==""){
      document.getElementById("staffid").innerHTML="Please enter the Staff ID";
      return false;
    }
    if((n1.length<5) || (n1.length>6)){
      document.getElementById("staffid").innerHTML="Staff ID must be 5 or 6 digits";
      return false;
    }
    if(isNaN(n1)){
      document.getElementById("staffid").innerHTML="Enter numeric value";
      return false;
    }
    else document.getElementById("staffid").innerHTML="";
  }
  function name_valid(){
    var n2=document.form.uname.value;
    if(n2==""){
      document.getElementById("name").innerHTML="Please enter the name";
      return false;
    }
    if(!isNaN(n2)){
      document.getElementById("name").innerHTML="Numbers are not allowed";
      return false;
    }
    else document.getElementById("name").innerHTML="";
  }
  function email_valid(){
    var n3=document.form.mail.value;
    if(n3==""){
      document.getElementById("email").innerHTML="Please enter the Email";
      return false;
    }
    if(n3.indexOf('@')<=0){
      document.getElementById("email").innerHTML="Enter a valid E-mail";
      return false;
    }
    if((n3.charAt(n3.length-4)!='.') && (n3.charAt(n3.length-3)!='.')){
      document.getElementById("email").innerHTML="Enter a valid E-mail";
      return false;
    }
    else document.getElementById("email").innerHTML="";
  }
  function pos_valid(){
    var n6=document.form.pos.value;
    if(n6==""){
      document.getElementById("position").innerHTML="Please enter the position";
      return false;
    }
    if(!isNaN(n6)){
      document.getElementById("position").innerHTML="Numbers are not allowed";
      return false;
    }
    else document.getElementById("position").innerHTML="";
  }
  function pwd_valid(){
    var n4=document.form.psw.value;
    if(n4==""){
      document.getElementById("password").innerHTML="Please enter the password";
      return false;
    }
    if((n4.length<6) || (n4.length>20)){
      document.getElementById("password").innerHTML="Password must be between 6 to 20 digits";
      return false;
    }
    else document.getElementById("password").innerHTML="";
  }
  function cpwd_valid(){
    var n4=document.form.psw.value;
    var n5=document.form.cpsw.value;
    if(n5==""){
      document.getElementById("conpassword").innerHTML="Please enter confirm password";
      return false;
    }
    if(n4!=n5){
      document.getElementById("conpassword").innerHTML="Passwords do not match";
      return false;
    }
    else document.getElementById("conpassword").innerHTML="";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>