<?php

session_start();

?>

<?php
    $var=$_GET['val'];
    echo $var;
    $split=explode('/',$var);
    	$bdate=date("Y-m-d");
	$day=10;
	$rdate=date('Y-m-d', strtotime("+$day days"));
    $conn = mysqli_connect("localhost","root","","ledger");
    $conn1 = mysqli_connect("localhost","root","","test");
    if($conn){
        $sql="insert into ledger_table values (".$split[0].",'".$split[1]."',".$_SESSION['staffid'].",'".$bdate."','".$rdate."',null,0,'".$split[2]."');";
        $sql1="update $split[2] set Available=0 where Book_id=$split[0]";
        $result1=mysqli_query($conn1,$sql1);
        $result=mysqli_query($conn,$sql);
        if($result){
		echo "<script>alert('Successful');location.href='dashboard.php';</script>";
        }

    }
?>
