<?php include 'conn.php'; ?>
<?php
function getinstitue(){
	global $connection;
	$result="select * from college";
	$result1=mysqli_query($connection,$result);
	while($result2=mysqli_fetch_array($result1))
	{
	$institute_name=$result2['college'];
		echo "<option>$institute_name</option>";
	}
}



function getlecture(){
	global $connection;
        $inst_name=$_POST['institute_name'];
	$result="select * from admin_inst";
	
	
	$result1=mysqli_query($connection,$result);
	while($result2=mysqli_fetch_array($result1))
	{
		
		$lecture_room=$result2['lecture_room'];
		echo "<option>$lecture_room</option>";
	}
}
function getpdate(){
	global $connection;
        $inst_name=$_POST['institute_name'];
	$result="select * from admin_mac";
	$result1=mysqli_query($connection,$result);
	while($result2=mysqli_fetch_array($result1))
	{
		
		$date=$result2['date'];
		echo "<option>$date</option>";
	}
}
function gettime(){
	global $connection;
       $inst_name=$_POST['institute_name'];
	$result="select * from admin_mac";
	$result1=mysqli_query($connection,$result);
	while($result2=mysqli_fetch_array($result1))
	{
		
		$time=$result2['time'];
		echo "<option>$time</option>";
	}
}



?>

