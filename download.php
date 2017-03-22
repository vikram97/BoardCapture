<?php include('function.php') ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Board Capture</title>
    
    
    
    
        <link rel="stylesheet" href="assets/css/style2.css">

    
   <?php
include('head.php');
?>  

<script src="jquery.min.js"></script>
<script type="text/javascript">
function getState(val) {
	$.ajax({
	type: "POST",
	url: "ajaxData.php",
	data:'id='+val,
	success: function(data){
		$("#lecture").html(data);
	}
	});
}
</script>

    
  </head>

  <body>
  <?php
include('header1.php');
?>


    <link href='http://fonts.googleapis.com/css?family=sans-serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <h1></h1>

  <form class="form" method="post" action="">
    <fieldset class="form-group"  class="col-sm-offset-2 col-sm-10">
     <?php
    //Include database configuration file
   /* $conn = mysqli_connect("mysql.hostinger.in", "u516000884_board", "123456789", "u516000884_board");*/
    include('conn.php');
    //Get all country data
    $query ="SELECT * FROM college GROUP by college";
    $res=mysqli_query($connection,$query);
    //Count total number of rows
    $rowCount = mysqli_num_rows($res);
    ?>
    
	
    <select name="college" style="color:white;;" id="college" onChange="getState(this.value);" required>Select College
	<option>Select College </option>
 
     <?php
        if($rowCount > 0){
            while($row =mysqli_fetch_assoc($res)){ 
        echo '<option value="'.$row['college'].'">'.$row['college'].'</option>';
            }
        }else{
            echo '<option value="">college not available</option>';
        }
        ?>
</select>  

<p></p><p></p><p></p><p></p>
    <select class="lecture" style="color:white;"  id="lecture" name="lecture" required>
	<option>Select Lecture Room </option>
      </select>
	
	<p></p><p></p><p></p><p></p>    
	<input type="date" class="date"   id="date" name="date" placeholder="DD/MM/YYYY" required>

	


  <select class="lecture" style="color:white;"  id="lecture" name="lecture" required>
	<option>Select Start Time </option>
	<option value="">8:30 </option>
	<option value="">9:30 </option>
	<option value="">10:20 </option>
	<option value="">11:20 </option>
<option value="">12:10 </option>
	
<option value="">1:50 </option>
	<option value="">2:40 </option>
	<option value="">3:30 </option>
</select>

<p></p><p></p><p></p><p></p>    
  <select class="lecture" style="color:white;"  id="lecture" name="lecture" required>
	<option>Select End Time </option>
	
	<option value="">9:30 </option>
	<option value="">10:20 </option>
	<option value="">11:20 </option>
<option value="">12:10 </option>
	
<option value="">1:50 </option>
	<option value="">2:40 </option>
	<option value="">3:30 </option>
<option value="">4:40 </option>
</select>	





	
	
      
	  
<p></p><p></p>
<div align="center">	
    <input type="submit"  value="Submit" name="submit" >
</div>
  </form>
</div>

<p class="optimize">
  </p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="assets/js/index2.js"></script>

    
    
     <div class="foo"><?php
include('footer.php');
?></div>
  </body>
</html>