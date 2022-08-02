<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family:  Helvetica, sans-serif;
}

.city {
  
        text-align:center;
        font-family: Arial, Helvetica, sans-serif;
        color:red;
	width:70%;
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
                    padding:5px;
		text-align:center;
                    color:black;
                  } 
                  table{table-layout: fixed;
                    width: 75%;
                    
                      margin-left: auto;
                      margin-right: auto;
                    
                  }
table tr #mail{
	width:300px;
}
table tr #sname{
	width:200px;
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

</style>
</head>
<body style="background-color:#f1f1f1;">
<div class="header">
    <img src="anna univ logo.png" alt="annaunivlogo" style="width:100% " >
</div>
<div class="topnav">
  <a href="logout.php" style="color: white;border-left:2px solid rgb(213, 237, 253);">Log Out</a>
</div>
<div class="content">
  <h1 style="text-align: center;">Information Technology Department Library Portal</h1>
</div>
<h1 style="text-align:center;">Master Ledger</h1>
<table class='city'>
<tr><th>Book ID</th><th>Book name</th><th>Staff ID</th><th>Borrow date</th><th>Expected Return date</th><th>Actual return date</th><th>Status</th></tr>
<?php

	$con=mysqli_connect("localhost","root","","ledger");
	if($con){
		$sql="select*from ledger_table";
		$result=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($result)){
			if($row['status']==0){
				$status="Not Returned";}
			else{
				$status="Returned";}
			echo "<tr><td>".$row['Book_id']."</td><td>".$row['Book_name']."</td><td>".$row['Staff_id']."</td><td>".$row['borrow_date']."</td><td>".$row['return_date']."</td><td>".$row['returned_date']."</td><td>".$status."</td><tr>";
}
}

?>
</table>
</br>
<h1 style="text-align:center;">Staff Details</h1>
<table class='city'>
<tr><th>Staff ID</th><th id='sname'>Staff name</th><th id='mail'>Email</th><th>Designation</th><th>Passcode</th></tr>
<?php

	$con=mysqli_connect("localhost","root","","test");
	if($con){
		$sql="select*from staff_details";
		$result=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['staff_id']."</td><td id='sname'>".$row['staff_name']."</td><td id='mail'>".$row['email']."</td><td>".$row['position']."</td><td>".$row['passcode']."</td><tr>";
}
}

?>
</table>
</br>
</br>

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
  <br>
 <br><input class="s2" class="s1" type="button" onclick="reset1();" value="Reset" ><br><br>
 <br>

</form>

<div style = "le">
      <a href = "insertBook.php"><button class="button-30" role="button" style = "width:15%;">Add Books</button></a>
</div>
<br><br>
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
                    <th>Update</th>
                    <th>Delete</th>
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
                
                <td><a href='update.php?val=<?php echo $row['Book_id']."/".$row['Book_name']."/".$row['Publisher']."/".$row['Author1']."/".$row['Author2']."/".$table."/".$row['Edition'] ?>'>Update</a></td>
                  <td><a href='delete.php?val=<?php echo $row['Book_id']."/".$table ?>'>Delete</a></td>
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
                    <th>Update</th>
                    <th>Delete</th>
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
                  <td><a href='update.php?val=<?php echo $row['Book_id']."/".$row['Book_name']."/".$row['Publisher']."/".$row['Author1']."/".$row['Author2']."/".$table ?>'>Update</a></td>
                  <td><a href='delete.php?val=<?php echo $table ?>'>Delete</a></td>
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

