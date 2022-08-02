<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family:  Helvetica, sans-serif;
}
.topnav s {
  float: right;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
	float:right;
}

.topnav {
  overflow: hidden;
  background-color: #555555;
  margin-left: auto;
  margin-right: auto;
	width:70%;

}

.topnav a {
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

.button1 {
    display: inline;
    margin-top: 80px;
    width: 150px;
    padding: 8px 5px;
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50px;
    outline: none;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color .5s ;
    transition: transform .5s;
    margin-left: 20%;
 }
 .button2{
    display: inline;
    margin-top: 80px;
    width: 150px;
    padding: 8px 5px;
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50px;
    outline: none;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color .5s ;
    transition: transform .5s;
    margin-right: 20%;
    float:right;
 }
 .button1:hover, .button2:hover{
     background-color: #34757b;
     transform: translateY(-2px);
 }

 .sign-up-form {
    background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url(bglibrary.jpg)  ;
    margin-left:15%;
    margin-right:auto;
    width: 70%;
    height:500px;
   display:inline-block;
    background-color: #232328;
    padding: 120px 50px;
    box-sizing: border-box;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }
</style>
</head>

<body style="background-color:#f1f1f1;">
<div class="header">
    <img src="anna univ logo.png" alt="annaunivlogo" style="width:100% " >
</div>
<div class="topnav">
  <a href="dashboard.php" style="color: white; float:left;border-right:2px solid rgb(213, 237, 253);">Dashboard</a>
  <a href="home page.html" style="color: white; border-left:2px solid rgb(213, 237, 253);">Log Out</a>

</div>
<div class="content">
  <h1 style="text-align: center;">Information Technology Department Library Portal</h1>
</div>
<style>
  .s1 {
  background-color:turquoise;
  border-style: double;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
 .s2{
   font-size:125%;
 }
 label,input,select,option{
   font-family: cursive;
   color:black;
 }
</style>
<center>
<form id="form" method="POST" class="form-anticlear" >
<label class="s2" for="search">Column Filter:</label>
    <select class="s2" name="search" id="search" >
    <option value="All">All</option>
    <option value="Book_id">Book Id</option>
    <option value="Book_name">Book name</option>
    <option value="Publisher">Publisher</option>
    <option value="Author">Author</option>
  </select>
  <label class="s2" for="search">Section:</label>
      <select class="s2"  class="ab" id="sec" name="sec" >
      <option value="All">All</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select><br><br>
  <label class="s2" for="fname">Search:</label>
  <input class="s2" type="search" id="fname" name="fname" autofocus="autofocus" >  <button class="s2" type="submit"><i class="fa fa-search"></i></button><br>
 <br><br><input class="s2" class="s1" type="button" onclick="reset1();" value="Reset" ><br><br>

</form>
</center>
<script>
 

  function reset1(){
    document.getElementById('search').selectedIndex='All';
    document.getElementById('sec').selectedIndex='All';
    document.getElementById('fname').value='';
    document.getElementById('form').submit();
   }
   function reset(){

    document.getElementById('form').reset();

   }
     
</script>
<script src="https://cdn.jsdelivr.net/gh/akjpro/form-anticlear/base.js"></script>
<?php
  error_reporting(0);
  $i=0;
  $k=0;
  $j=0;
  $m=0;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  $flag=0;
  $s=$_POST['search'];
  $f=$_POST['fname'];
  $sec=$_POST['sec'];
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql1 = "SHOW TABLES FROM {$dbname}";
  $result1 = mysqli_query($conn,$sql1);
  if (!$result1) {
    echo 'MySQL Error: ' . mysqli_error($conn);
    exit;
  }
    while ($row = mysqli_fetch_row($result1)) {

      if($sec=='All'){
             if($s!='All' and $s!='Author'){
                $sql = "SELECT * FROM $row[0] where $s like '%".$f."%' and Available=1";
            }
            elseif($s=='Author'){
              $sql = "SELECT * FROM  $row[0] where (Author1 like '%".$f."%' or  Author2 like '%".$f."%') and Available=1 ";
            }
            elseif($s=='All'){
                $sql = "SELECT * FROM  $row[0] where (Book_name like '%".$f."%' or Book_id like '%".$f."%' or  Publisher like '%".$f."%' or  Author1 like '%".$f."%' or  Author2 like '%".$f."%') and Available=1 ";
            }
            $result = mysqli_query($conn, $sql);
            $k=$k+1;
            $table=$row[0];
            if (mysqli_num_rows($result) > 0) {
              if($i==0){
                echo"<style>
                  .city {
  
                    text-align:center;
                    font-family: Arial, Helvetica, sans-serif;
                    color:red;
                  }
                  table,th,td {
                    border:1.5px solid #ddd;
                    border-collapse:collapse;
                    border-style: groove;
                  }
                  tr:nth-child(even){background-color: #f2f2f2;}
  
                  tr:hover {background-color: #ddd;}
                  th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: center;
                    background-color: #04AA6D;
                    color: white;
                  }
                  td {
                    padding:8px;
                    color:black;
                  } 
                  table{table-layout: fixed;
                    width: 75%;
                    
                      margin-left: auto;
                      margin-right: auto;
                    
                  }
                </style>
                <table class='city' cellpadding='0px' cellspacing='0px'>
                <thead >
                  <tr>
                    <th>Book id</th>
                    <th>Book name</th>
                    <th>Publisher</th>
                    <th>Author 1</th>
                    <th>Author 2</th>
                    <th>Borrow</th>
                  </tr>
                </thead>
                </table>";
              }
              echo "<h1 style='text-align:center'>$row[0]</h1>";
              $i=$i+1;
              while($row = mysqli_fetch_assoc($result)) {
            ?>
                <table class='city' cellpadding='34px' cellspacing='0px'>
                <tr>
                <td><?php echo $row['Book_id']; ?></td>
                <td><?php echo $row['Book_name']?></td>
                <td><?php echo $row['Publisher']?></td>
                <td><?php echo $row['Author1']?></td>
                <td><?php echo $row['Author2']?></td>
                <td><a href='val.php?val=<?php echo $row['Book_id']."/".$row['Book_name']."/".$table ?>'>Borrow</a></td>
                </tr>
                </table>
            <?php  
              }
            } 
            else{
                $j=$j+1;
        
            if($flag!=1 and $j==mysqli_num_rows($result1)-1 and  $k==mysqli_num_rows($result1)-1){
              echo "<h1 style='text-align:center'>No records</h1>";
            $flag=1;
          }
        }
      }
      else{ 
            $table=$row[0];
            if($s!='All' and $s!='Author'){
                $sql = "SELECT * FROM $row[0] where $s like '%".$f."%' and Available=1";
            }
            elseif($s=='Author'){
              $sql = "SELECT * FROM  $row[0] where  (Author1 like '%".$f."%' or  Author2 like '%".$f."%') and Available=1";
            }
            elseif($s=='All'){
                $sql = "SELECT * FROM  $row[0] where (Book_name like '%".$f."%' or Book_id like '%".$f."%' or  Publisher like '%".$f."%' or  Author1 like '%".$f."%' or  Author2 like '%".$f."%') and Available=1 ";
            }
            $result = mysqli_query($conn, $sql);
            $pos=strpos(strval($row[0]),strval($sec));
            if($pos==8){
              $k=$k+1;
            }
            $m=$m+1;
            if (mysqli_num_rows($result) > 0 and $pos==8) {
              if($i==0){
                echo"<style>
                  .city {
  
                    text-align:center;
                    font-family: Arial, Helvetica, sans-serif;
                    color:red;
                  }
                  table,th,td {
                    border:1.5px solid #ddd;
                    border-collapse:collapse;
                    border-style: groove;
                  }
                  tr:nth-child(even){background-color: #f2f2f2;}
  
                  tr:hover {background-color: #ddd;}
                  th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: center;
                    background-color: #04AA6D;
                    color: white;
                  }
                  td {
                    padding:8px;
                    color:black;
                  } 
                  table{table-layout: fixed;
                    width: 75%;
                    
                      margin-left: auto;
                      margin-right: auto;
                    
                  }
                </style>
                <table class='city' cellpadding='0px' cellspacing='0px'>
                <thead >
                  <tr>
                    <th>Book id</th>
                    <th>Book name</th>
                    <th>Publisher</th>
                    <th>Author 1</th>
                    <th>Author 2</th>
                    <th>Borrow</th>
                  </tr>
                </thead>
                </table>";
              }
              $i=$i+1;
              echo "<h1 style='text-align:center'>$row[0]</h1>";
              while($row = mysqli_fetch_assoc($result)) {
            ?>
                <table class='city' cellpadding='34px' cellspacing='0px'>
                  <tr>
                  <td><?php echo $row['Book_id']; ?></td>
                  <td><?php echo $row['Book_name']?></td>
                  <td><?php echo $row['Publisher']?></td>
                  <td><?php echo $row['Author1']?></td>
                  <td><?php echo $row['Author2']?></td>
                  <td><a href='val.php?val=<?php echo $row['Book_id']."/".$row['Book_name']."/".$table ?>'>Borrow</a></td>
                  </tr>
                </table>
            <?php  
              }
            }  
            
            else{
              if($pos==8){
                $j=$j+1;
              }
              if($flag!=1 and $j==$k and $m==(mysqli_num_rows($result1)-1)){
                  echo "<h1 style='text-align:center'>No records</h1>";
                $flag=1;
              }
            }
      }
    
}


?>
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