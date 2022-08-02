<!DOCTYPE html>
<html lang="en">
<head>
<title>home page
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	    <link rel="stylesheet" href="assets/css/style.css">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family:  Helvetica, sans-serif;
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

.content {
  background-color: #f1f1f1;
  padding: 10px;
  width: 70%;
  display: block;
  margin-left: auto;
  margin-right: auto;
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
.header {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
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
.content {
  background-color: #34757b;
  padding: 10px;
  width: 60%;
  display: block;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
  border-radius:25px;
}
</style>
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
<div>
  <h1 style="text-align: center;font: size 30px;">Information Technology Department Library Portal</h1>
</div>

<?php
$var=$_GET['val'];

$split=explode('/',$var);
$conn = mysqli_connect("localhost","root","","test");
?>
<?php


if(isset($_POST['submit'])){
include('config.php');
$id=$_POST['id'];
$name=$_POST['bname'];
$pub=$_POST['pub'];
$edi=$_POST['edi'];
$author1=$_POST['au1'];
$author2=$_POST['au2'];

if($id==""||$name==""||$pub==""||$author1==""){
echo "<span><i>Unsuccessful(fill all the fields)</i></span>";}
if(($id!="")&&($name!="")&&($pub!="")&&($author1!="")){
$sql="update ".$split[5]." set Book_id=".$id.",Book_name='".$name."',Publisher='".$pub."',Author1='".$author1."',Author2='".$author2."',Edition='".$edi."'where Book_id=".$split[0];
echo $sql;
if(mysqli_query($con,$sql)){ 
echo "<script>alert('Updation Successfull'); location.href='adminDashboard.php';</script>";
}
else{
echo "Not yet";}}
}

?>
<div class="content">
<form name="form" method="post">

<div class="container">
  <label for="id"><b>Book ID:</b></label><span id="staffid" style="color:red"></span>
  <input type="text" value=<?php echo $split[0];?> name="id"  >

  <label for="bname"><b>Book Name:</b></label><span id="name" style="color:red"></span>
  <input type="text" value=<?php echo '"'.$split[1].'"';?> name="bname" >

  <label for="pub"><b>Publisher:</b></label><span id="email" style="color:red"></span>
  <input type="text" value=<?php echo '"'.$split[2].'"';?> name="pub" >

  <label for="edi"><b>Edition:</b></label><span id="email" style="color:red"></span>
  <input type="text" value=<?php echo '"'.$split[6].'"';?> name="edi" >

  <label for="au1"><b>Author1:</b></label><span id="position" style="color:red"></span>
  <input type="text" value=<?php echo '"'.$split[3].'"';?> name="au1" >
  
  <label for="au2"><b>Author2:</b></label><span id="password" style="color:red"></span>
  <input type="text" value=<?php echo '"'.$split[4].'"';?> name="au2" >

  <button type="submit" name="submit">Update</button>

</div>
</form>
</div>
<br> <br>

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