<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <a href="logout.php" style="color: white;border-left:2px solid rgb(213, 237, 253);">Log Out</a>

</div>
<div class="content">
  <h1 style="text-align: center;">Information Technology Department Library Portal</h1>
</div>
<div class="center">
    <form class="sign-up-form" method="post">
    <input type="button" onclick="window.location.href='return_books.php'" value="RETURN BOOKS " class="button1">
    <input type="button" onclick="window.location.href='borrow_books.php'" value="BORROW BOOKS " class="button2">
</form>
</div>

<br>
<?php
session_start();
  $i=0;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ledger";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM  ledger_table where status=0 and Staff_id=".$_SESSION['staffid'];
  $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
              echo"<style>
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
                padding:8px;
                color:black;
              } 
              table{table-layout: fixed;
                width: 55%;
                
                  margin-left: auto;
                  margin-right: auto;
                
              }
            </style>
		<h1 style='text-align:center;'>Ledgerboard</h1>
            <table class='city' cellpadding='0px' cellspacing='0px'>
              <tr>
                <th>Book id</th>
                <th>Book name</th>
                <th>Borrow date</th>
                <th>Return date</th>
              </tr>
            </table>";
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <table class='city' cellpadding='34px' cellspacing='0px'>
                <tr>
                <td><?php echo $row['Book_id']; ?></td>
                <td><?php echo $row['Book_name']?></td>
                <td><?php echo $row['borrow_date']; ?></td>
                <td><?php echo $row['return_date']?></td>

                </tr>
                </table>
            <?php  
              } 
		echo '</br></br>';
	}
	else{
		echo "<h1 style='text-align:center;'>Ledgerboard</h1><h2 style='text-align:center;'>No records found</h2></br></br>";
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