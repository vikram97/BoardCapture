




<?php include('conn.php'); ?>

<html>
<head>
<style>
body
{
   background-color:#E6E6E6;
   font-family:helvetica;
}
#heading
{
   text-align:center;
   margin-top:150px;
   font-size:30px;
   color:blue;
}
#select_box
{
   width:500px;
   background-color:#819FF7;
   padding:10px;
   height:200px;
   border-radius:5px;
   box-shadow:0px 0px 10px 0px grey;
}
select
{
   width:400px;
   height:50px;
   border:1px solid #BDBDBD;
   margin-top:20px;
   padding:10px;
   font-size:20px;
   color:grey;
   border-radius:5px;
}
</style>
<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
}

</script>

    </head>

   <body>
     <p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
	 <center>
	   <div id="select_box">

         <select onchange="fetch_select(this.value);">
           <option>
              Select state
           </option>
           
           <?php
             global $connection;
           
             $select=mysqli_query($connection,"select college from college group by college");
             while($row=mysqli_fetch_array($select))
             {
              echo "<option>".$row['college']."</option>";
             }
           ?>

         </select>

         <select id="new_select">
         </select>
	  
       </div>     
	 </center>
	  
   
   </body>
</html>