<html>
<head>
   <?php include('head.php'); ?>
  <link rel="stylesheet" href="ccs/style.css">	
</head>
<body >
   
 <?php include_once'header.php'; ?>

 

<div id="account">
<div id="sidebar">
<div id="sidebar_title">Super Admin</div>
<ul id="cats">

<?php

echo "<b >
	<img src='admin.png' width='150' hwight='150' style='border:5px solid white; border-radius:50%;  box-shadow:0px 5px 5px rgba(0,0,0,1);'/></b>";

?>
<li><a href="superadmin.php?college_info">College Info</a></li>
<li><a href="superadmin.php?addcollege">Add Account</a></li>


<li><a href="superadmin.php?delete_account">Delete Account</a></li>


		
</div>
<div id="con">
<h2></h2><br>
<?php
	if(!isset($_GET['my_orders'])){
		if(!isset($_GET['edit_account'])){
			if(!isset($_GET['change_pass'])){
				if(!isset($_GET['delete_account'])){
					echo "
					 
					<b>You can add new colleges id by clicking here <a href='superadmin.php?addcollege'>Add</a></b>";	
				}
			}
			
		}
	}
?>

<?php
	if(isset($_GET['addcollege'])){
		include("addcollege.php");
	}
	if(isset($_GET['delete_account'])){
		include("delete_account.php");
	}


?>
					

</div>
</div>





 
     <!-- CONTACT SECTION END-->
	 <div class="foo">
    <?php include'footer.php'; ?>
	</div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
