<?php session_start();?>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
                <a class="navbar-brand" href="#"><img class="logo-custom" src="" alt="Board Capture"  /></a>
          
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
				
                    <li><a href="index.php"> Home</a></li>
                     <li><a href="admin.php">Admin</a></li>
             <!--       <li><a href="#faculty-sec"> Form</a></li>  
                     
                     <li><a href="#contact-sec"> Contact </a></li>-->
			<li><?php 
if(!isset($_SESSION['customer_'])){
	echo "<a href='login.php'> Login</a>";
}
else{
	echo "<a href='admin_logout.php'>Logout</a>";
}
?>
</li>	
					 
                </ul>
            </div>
           
        </div>
    </div>