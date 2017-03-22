<? include('conn.php');?>
<!DOCTYPE html>


<html>
  <head>
    <meta charset="UTF-8">
    <title>Board Capture</title>
    
    
    <link rel="stylesheet" href="ccs/reset.css">


        <link rel="stylesheet" href="ccs/style.css">
<?php

include('head.php');
?>
</head>

  <body>
<?php
include('header1.php');
?>
    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">


</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">    <div class="tool"></div>
  </div>
  <div class="form">
    <h2>Login To Your Account</h2>
    <form method="post" >
      <input type="text" name="email" placeholder="Username" required/>
      <input type="password"name="pass" placeholder="Password" required/>
      <button name="login" type="submit">Login</button>
    </form>
  </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



        <script src="jjs/index.js"></script>

    
    
    
  </body>
</html>

<?php

if(isset($_POST['login'])&&!empty($_POST['email'])&&!empty($_POST['pass'])){
/* $con=mysqli_connect("mysql.hostinger.in","u516000884_board","123456789","u516000884_board"); */
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	if($email!=' '&&$pass!=' '){
	$sel_c="select * from a_signup where pass='$pass' AND u_name='$email'";
	
	$run_c=mysqli_query($connection,$sel_c);
	
	$check_customer=mysqli_num_rows($run_c);
	if($check_customer==0){
		echo "<script>alert('password or email is incorrect,plz try again')</script>";
		exit();
	}}
     else
{
	
	 echo "<script>alert('Enter both user name or password,Thanks!')</script>";
}
	   if(1){
		      $_SESSION['customer_']=$email;
		   echo "<script>alert('You loged in successfully,Thanks!')</script>";
		   echo "<script>window.open('admin.php','_self')</script>";
	  
	   }
	   else{
		      $_SESSION['customer_']=$email;
		   echo "<script>alert('you logged succesfully,Thanks')</script>";
		   echo "<script>window.open('','_self')</script>";
	  
	   }
	  
}

?>

<div class="foo">
<?php
include('footer.php');
?>
</div>