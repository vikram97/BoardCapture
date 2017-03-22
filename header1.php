<?php session_start(); ?>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="" alt="Board Capture"  /></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">
				
                    <li ><a href="index.php"> Home</a></li>
                     <li><a href="download.php"> Downloads</a></li>
             <!--       <li><a href="#faculty-sec"><i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i>&nbsp; Form</a></li>  -->
                     
<li><?php 
if(!isset($_SESSION['customer_email'])){
	echo "<a href='login.php' style='color:white; font-size:px;'>Login</a>";
}
else{
	echo "<a href='logout.php' style='color:white; font-size:px;'>Logout</a>";
}
?>
</li>                    <li><a href="#contact-sec">

 Contact </a></li>
			
					 
                </ul>
            </div>
           
        </div>
    </div>