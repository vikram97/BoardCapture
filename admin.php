<?php include'conn.php'; ?>
<?php include'function.php'; ?>
<?php/*
   session_start();
   
   if( !isset( $_SESSION['customer_'] ) ) {
header('location:admin_login.php');
      
   }else {
      $_SESSION['customer_'] = 1;
   }*/?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>ADMIN</title>
<script src="assets/form.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link href="assets/main.css" rel="stylesheet" type="text/css" media="screen" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


<link href="assets/css/bootstrap.css" rel="stylesheet" />
	
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    
<?php include('head.php');  ?>


	</head>


<!--<![endif]-->
<body class="body" >


       <!-- NAV SECTION -->
<?php
include('header_admin.php');
?>  
<div class="container">
<div class="heading1"><h3>Modify Mac-Address And Lecture-Room</h3></div>
<form action="admin.php" method="POST">
<fieldset class="form-group"  class="col-sm-offset-2 col-sm-10">
    <label for="inst">Institute</label>
    <select class="form-control" id="inst" name="institute_name" required>
	<option selected>Institute Name <?php getinstitue(); ?></option>
     
    </select>
	</fieldset>
<div class="table-responsive">
	<TABLE id="dataTable" width="350px" border="1" class="table table-inverse">
	
	<tr table-inverse>
	<th></th>
    <th>Mac-Address</th> 
    <th>Lecture-Room</th>
	<TH><INPUT type="button" value="Click To Insert" onclick="addRow('dataTable')" class="btn-sample" /></TH>
	<TH><INPUT type="button" value="Delete Data" onclick="deleteRow('dataTable')" class="btn-sample" /></TH>
  </tr>
		<TR>
			<TD><INPUT type="checkbox" name="chk"/></TD>
			<TD> <input type="text" name="mac_add" required/> </TD>
			<TD> <INPUT type="text" name="lecture_r" required/> </TD>
	
		</TR>
		
	</TABLE>
	<INPUT type="submit" value="Submit" name="submit" class="btn-sample"  />
	</div>
</form>
</div>

<div class="container">
<div class="heading2"><h3>Insert Time-Slots</h3></div>
<form method="POST" action="admin.php">
<TABLE id="timeSlot" width="350px" border="1" class="table table-inverse">
	
	<tr>
	<th></th>
    <th>Start-Time</th> 
    <th>End-Time</th>
	<TH><INPUT type="button" value=" Click To Insert" onclick="inserttime('timeSlot')" class="btn-sample"  /></TH>
	<TH><INPUT type="button" value="Delete Data" onclick="deleteRow('timeSlot')"  class="btn-sample" /></TH>
  </tr>
		<TR>
			<TD><INPUT type="checkbox" name="chk"/></TD>
			<TD> <input type="time" name="time_s" required/> </TD>
                        <TD> <input type="time" name="time_e" required/> </TD>
		
		</TR>
		
	</TABLE>
	<INPUT type="submit" value="Submit" name="submittime" class="btn-sample"  />
	
</form>
</div>


<?php

if(isset($_POST['submit'] ) && !empty($_POST['institute_name']) && ($_POST['institute_name'] !='Institute Name')) {
$institute_name=$_POST['institute_name'];


/*$sqlw="select college from college where college=$institute_name";
    echo $sqlw;*/
$query ="SELECT * FROM college where college=$institute_name";
$res=mysqli_query($connection,$query);
//Count total number of rows
$rowCount = mysqli_num_rows($res);

           if($rowCount > 0){
               while($row =mysqli_fetch_assoc($res)){
                    $first=row["college_id"];
                   echo $first;
               }
           }else{
               echo 'college not available';
           }


       $time_id=4;
    $ma=$_POST['mac_add'];
    $lecture_ro=$_POST['lecture_r'];
    $sql="INSERT INTO `lecture` (`mac_address`,`lecture_room`,`coll_id`,`time_id`) VALUES('$ma','$lecture_ro','$coll_id','$time_id');";
    $resul = mysqli_query($connection,$sql);
$mac=$_POST['mac_address'];
$lecture_room=$_POST['lecture_room'];

for($x=0; $x<count($mac); $x++)
{
$sql="INSERT INTO `lecture` (`mac_address`,`lecture_room`,`coll_id`,`time_id`) VALUES('$mac[$x]','$lecture_room[$x]','$coll_id','$time_id');";
    $result = mysqli_query($connection,$sql);
}
if ($result)
{
echo "<script>alert('Your Mac-Add And Lecture-Room Data Insert Succesfully')</script>";
    echo "<script>window.open('admin.php','_self')</script>";

} else {
echo "<script>alert('Your Data Not Insert Succesfully Please TRY Again')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
}
}



if(isset($_POST['submittime'] )&& !empty($_POST['time_start']) && !empty($_POST['time_end']) ) {

$time_s=$_POST['time_s'];
$time_e=$_POST['time_e'];
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];



for($x=0; $x<count($time_start); $x++)
{

}
$sql="INSERT INTO `time` (`start_time`,`end_time`,`start_time1`,`end_time1`,`start_time2`,`end_time2`,`start_time3`,`end_time3`,`start_time4`,`end_time4`,`start_time5`,`end_time5`) VALUES ('$time_s','$time_e','$time_start[0]','$time_end[0]','$time_start[1]','$time_end[1]','$time_start[2]','$time_end[2]','$time_start[3]','$time_end[3]','$time_start[4]','$time_end[4]');";
if ($connection->query($sql))

 {
echo "<script>alert('Your Time-Slots Data Insert Succesfully')</script>";
    echo "<script>window.open('admin.php','_self')</script>";

} else {
echo "<script>alert('Your Data Not Inserted Please TRY Again')</script>";
    echo "<script>window.open('admin.php','_self')</script>";
}


}


?>








</div>

<?php include('footer.php'); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js">
</body>

</html>


