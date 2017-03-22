<?php include('conn.php'); ?>
 <html>
 <head>
<link rel="stylesheet" href="ccs/style1.css">	
 </head>
 <body>
 
  <table style="margin-left:120px;" cellspacing="50px">
  <div class="form">
    <h2>Add college admin info</h2>
    <form method="post">
	<tr><td>College Name</td><td> <input type="text" name="collegename" placeholder="collegename"/></td></tr>
     	<tr><td>User Name </td><td><input type="text" name="username" placeholder="username"/></td></tr>
    <tr><td>Password  </td><td><input type="password"name="pass" placeholder="Password"/></td></tr><p></p>
	
    <tr><td colspan="2" align="center">  <button name="login" type="submit">Register</button></td></tr>
    </form>
  
  </div>
  </table>
</body>
 </html>
 <?php



if(isset($_POST['login'])){
	





	
	 $c_name=$_POST['collegename'];
	 

	 
	$u_name=$_POST['username'];
	 $pass=$_POST['pass'];
	
	

	
	   $insert_c="insert into a_signup(c_name,u_name,pass)
	   values('$c_name','$u_name','$pass')";
	   
	   $run_c=mysqli_query($connection,$insert_c);
	   
	   
}
	   
	   
	   

?>
