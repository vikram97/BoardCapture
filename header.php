<?php session_start();?>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
                <a class="navbar-brand" href="#"><img class="logo-custom" src="" alt="Board Capture"  /></a>
          
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
				
                    <li><a href="#home"> Home</a></li>
                     <li><a href="#features-sec"> Downloads</a></li>
                
                     
                     <li><a href="#contact-sec"> Contact </a></li>
			<li><?php 
if(!isset($_SESSION['customer_email'])){
	echo "<a href='login.php'> Login</a>";
}
else{
	echo "<a href='logout.php'>Logout</a>";
}
?>
</li>	
					 
                </ul>
            </div>
           
        </div>
    </div>