
<?php
    $var=$_GET['id'];
    echo $var;
    $split=explode('/',$var);
	$current_date=date("Y-m-d");
    $conn = mysqli_connect("localhost","root","","ledger");
    $conn1 = mysqli_connect("localhost","root","","test");
    if($conn){
        $sql="update ledger_table set status=1,returned_date='".$current_date."' where Book_id=".$split[0];
        $sql1="update $split[1] set Available=1 where Book_id=$split[0]";
        $result1=mysqli_query($conn1,$sql1);
        $result=mysqli_query($conn,$sql);
        if($result){
		echo "<script>alert('Successful');location.href='dashboard.php';</script>";
        }
    }
?>


3001	UNIX Network Programming Volume 1	Pearson Education	W.Richard Stevens