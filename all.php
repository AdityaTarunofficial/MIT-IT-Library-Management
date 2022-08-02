<?php


include('connect.php');
session_start();

$query = "SELECT * FROM staff_details order by id";
$st=mysqli_query($conn,$query);
$result = mysqli_fetch_all($st,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
   <head>
     <title>Details</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
   <body>
     <div class="container">
      <br />
      <h3 align="center">STAFF DETAILS</h3>
      <br />
      <div class="table-responsive">
       <form method="POST" id="convert_form" action="">
            <table class="table table-striped table-bordered" id="table_content">
              <tr>
                <th>ID</th>
                <th>Program</th>
                <th>Starting date</th>
                <th>Ending date</th>
                <th>Name</th>
              </tr>
              <?php
              foreach($result as $row)
              {
                $id=$row["id"];
                $program=$row["program"];
                $sdate=$row["sdate"];
                $edate=$row["edate"];
                $name=$row["name"];
                echo"
                <tr>
                  <td>$id</td>
                  <td>$program</td>
                  <td>$sdate</td>
                  <td>$edate</td>
                  <td>$name</td>
                  <td><button id='d'><a href='udelete.php?id=$id&program=$program'.>DELETE</a></button></td>
                  <td><button id='u'><a href='update.php?id=$id&program=$program'.>UPDATE</a></button></td>
                </tr>
                ";
              }
              ?>
            </table>
            <input type="hidden" name="file_content" id="file_content" />
            <button type="button" name="convert" id="convert" class="btn btn-primary" onclick="window.location.href='uexcel.php'">Download Excel file</button>
          </form>
          <br />
          <button type="b" name="convert" id="convert" class="btn btn-primary" onclick="window.location.href='home.php'">Back</button>
    
          <br />
      </div>
      
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <style>
         #d a{
            text-decoration: none;
       color: white;
         }
     #u a{
       text-decoration: none;
       color: white;
     }
       #d{
         background-color:orange;
         color: white;
         border-radius: 5px;
         border:solid 2px black;
       }
       #u{
         background-color:greenyellow;
         color: white;
         border-radius: 5px;
         border:solid 2px black;
       }
     </style>
  </body>
</html>