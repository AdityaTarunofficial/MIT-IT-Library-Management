<!DOCTYPE html>
<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
  include('config.php');
  $b_id=$_POST['b_id'];
  $b_name=$_POST['b_name'];
  $b_edition=$_POST['b_edition'];
  $b_publisher=$_POST['b_publisher'];
  $author_1=$_POST['author_1'];
  $author_2=$_POST['author_2'];
  $section=$_POST['sec'];
  $row=$_POST['row'];
  $table="section_".$section."_row_".$row;
 
 
  if($b_id==""||$b_name==""){
  echo "<span><i>Unsuccessful(fill all the fields)</i></span>";}
  if(strcmp("Upper Cupboard", $row)&& $section == 3){
  $sql="insert into section_3_upper_cupboard (Book_id, Book_name, Edition, Publisher, Author1, Author2) values ($b_id,'$b_name','$b_edition','$b_publisher','$author_1','$author_2')";
  if(mysqli_query($con,$sql)){
  echo "<script>alert('Book Added'); location.href='adminDashboard.php';</script>";}
  else{
  echo "Add Book Failed!";}}
  else{
    if($author_2 == "" || $author_2 == NULL){
      if($b_edition == "" || $b_edition == NULL){
           $sql="insert into $table (Book_id, Book_name, Edition, Publisher, Author1, Author2) values ($b_id,'$b_name', NULL,'$b_publisher','$author_1', NULL)";
            if(mysqli_query($con,$sql)){
            echo "<script>alert('Book Added'); location.href='adminDashboard.php';</script>";}
            else{
            echo "Add Book Failed!";}
      }
      else{
            $sql="insert into $table (Book_id, Book_name, Edition, Publisher, Author1, Author2) values ($b_id,'$b_name', '$b_edition','$b_publisher','$author_1', NULL)";
            if(mysqli_query($con,$sql)){
            echo "<script>alert('Book Added'); location.href='adminDashboard.php';</script>";}
            else{
            echo "Add Book Failed!";}
      }
    }
    else{
            $sql="insert into $table (Book_id, Book_name, Edition, Publisher, Author1, Author2) values ($b_id,'$b_name', '$b_edition','$b_publisher','$author_1', '$author_2')";
            if(mysqli_query($con,$sql)){
            echo "<script>alert('Book Added'); location.href='adminDashboard.php';</script>";}
            else{
            echo "Add Book Failed!";}
    }
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

.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}

</style>
<title>Add Books</title>
<script>
  function verify()
  {
var id=document.form.b_id.value;  
var author = document.form.author_1.value;
var name = document.form.b_name.value;
var section = document.form.sec.value;
var row = document.form.row.value;
if (id==null || id==""){  
  alert("Book ID can't be blank");  
  return false;  
}else if(author.length<1){  
  alert("Password must be at least 8 characters long.");  
  return false;  
}else if(section==0){
    alert("Please select section to insert the book in");
    return false;
}
else if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if (row==0){  
  alert("Please select row to insert the book in");  
  return false;  
}
else if(section!=3 && row == 5){
  alert("Upper Cupboard is only available in section 3, Please select again!");
  return false;
  }
  }
</script>
</head>
<body style="background-color:#f1f1f1;">
<div class="header">
    <img src="anna univ logo.png" alt="annaunivlogo" style="width:100% " >
</div>
<div class="topnav">
<a href="logout.php" style="color: white;border-left:2px solid rgb(213, 237, 253);">Log Out</a>
  <a href="home page.html" style="color: white; border-right:2px solid rgb(213, 237, 253);float: left;">Home</a>
</div>
<div class="content1">
  <h1 style="text-align: center;">Information Technology Department Library Portal</h1>
</div>
<br>
<div class="content1">
  <h1 style="text-align: center;"><i>Enter Book Information</i></h1>
</div>
<form class="form-style-9" name = "form" method="POST" onsubmit="return verify();">
<ul>
<li>
    <input type="text" name="b_name" class="field-style field-full align-none" placeholder="Book Name" />

</li>
<li>
<input type="text" name="b_id" class="field-style field-full align-none" placeholder="Book ID" />
</li>
<li>
    <input type="text" name="b_edition" class="field-style field-full align-none" placeholder="Edition" />
</li>
<li>
<input type="text" name="b_publisher" class="field-style field-full align-none" placeholder="Publisher" />
</li>
<li>
<input type="text" name="author_1" class="field-style field-full align-none" placeholder="Author-1 Name" />
</li>
<li>
<input type="text" name="author_2" class="field-style field-full align-none" placeholder="Author-2 Name*" />
</li>
<li>
    <div style="float:left;padding-right:10px;">
<label>Section:</label>
      <select id="sec" name="sec" >
      <option value="0">None</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
</div>
<div>
<label>Row:</label>
<select id="row" name="row" >
<option value="0">None</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">Upper Cupboard</option>
      </select>
</div>
</li>
<li>
<input type="submit" value="Add Book" name="submit"/>
</li>
<li>
<label>*Other Author names can be ignored if not present</label>
</li>
</ul>
</form>


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


</body>
</html>