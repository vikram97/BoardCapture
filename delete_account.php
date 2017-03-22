 <html>
 <head>
<link rel="stylesheet" href="css/style1.css">	
 </head>
 <body>
 
  <table style="margin-left:120px;" cellspacing="50px">
  <div class="form">
    <h2>Add college admin info</h2>
    <form method="post">
	<tr><td><select style="color:;"  name="college" required><?php
//Include database configuration file
include('conn.php');

    //Get all state data
    $query ="SELECT * FROM a_signup";
    $result=mysqli_query($connection,$query);
    //Count total number of rows
    $rowCount =mysqli_num_rows($result);
    
    //Display states list
    if($rowCount > 0){
        echo '<option >Select College Name</option>';
        while($row =mysqli_fetch_assoc($result)){ 
            echo '<option >'.$row['c_name'].'</option>';
        }
    }


?></select></td></tr>
     	
		
	
    <tr><td colspan="2" align="center">  <button name="login" type="submit">Delete College Account</button></td></tr>
    </form>
  
  </div>
  </table>
</body>
 </html>
 <?php



if(isset($_POST['login'])){
	

$con=mysqli_connect("localhost","root","","chatdb");



	
	 $c_name=$_POST['college'];
	 

	 
	
	

	
	   $insert_c="delete from a_signup where c_name='$c_name'";
	   
	   $run_c=mysqli_query($con,$insert_c);
	   
	   
}
	   
	   
	   

?>
