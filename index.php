<html>
<head>
   <?php include('head.php'); ?>
	
</head>
<body>
   
 <?php include_once'header.php'; ?>
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" style="height:700px;">
           <div class="overlay">
 <div class="container" style="height:700px;">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me" style="padding-top:100px;"><p></p><p>
                        <!-- Slider 01 -->
                        <li>
                              <h3></h3>
                           <h1>Delivering Quality Notes</h1>
                            <a  href="#features-sec" class="btn btn-info btn-lg" >
                                Get Notes
                            </a>
                     <!--        <a  href="#features-sec" class="btn btn-success btn-lg" >
                                FEATURE LIST
                            </a>  -->
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                         
                           <h1>Board Capture</h1>

                             <a  href="#features-sec" class="btn btn-primary btn-lg" >
                               Get Notes
                            </a>
                            
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                           
                           <h1>Board Capture</h1>
                             <a  href="#features-sec" class="btn btn-warning btn-lg" >
                                Get Notes
                            </a>
                             
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
	   <div id="features-sec" style="height:700px;">
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> Welcome To The Board-Capture<i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->  
<!-- DOWNLOADS SECTION START-->	
         <div  class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Download Notes</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      Download Notes in form of PDF.
					  
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" style=":;" >
                
   <div class="col-lg  col-md col-sm" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                    <img src="pdf.gif" /></br><div><p></p></div>
                <?php  if(!isset($_SESSION['customer_email'])){
			echo "<a href='login.php' style='color:black; font-size:25px;'>Downloads</a>";
			
			
		}   
          else{
			  
			  
			  echo "<a href='download.php' style='color:black; font-size:25px;'>Downloads</a>";
			  
		  }        
		?>
		
                 
                </div>
                   </div>
				   </div>
             </div></center></div>
   <!-- DOWNLOADS SECTION END-->
   <!-- ADMIN SECTION  START-->

   
  
  <!-- ADMIN SECTION END-->

      <!-- CONTACT SEC START-->
    
	   <div id="contact-sec"   >
        <div class="overlay">
 <div class="container set-pad">  
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div ">
                        <h4>19th KM Stone, NH-24,</h4>
                        <h4>Ghaziabad, Uttar Pradesh 201009</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>boardcapture@shekhawat.esy.es</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Conectivity </strong></h2>
        <hr />
                    <div >
                        <a href="#">  <img src="assets/img/Social/facebook.png" alt="FACEBOOK" /> </a>
                     <a href="#"> <img src="assets/img/Social/google-plus.png" alt="GOOGLE-PLUS" /></a>
                     <a href="#"> <img src="assets/img/Social/twitter.png" alt="TWITTER" /></a>
                    </div>
                    </div>


                </div>
                 </div>
				 </div>

</div></div> 
     <!-- CONTACT SECTION END-->
    <?php include'footer.php'; ?>
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
