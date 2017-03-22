<?php
   
      include('conn.php');     
   if(isset($_POST['get_option']))
   {
global $connection;
    
     $state = $_POST['get_option'];
     $find=mysqli_query($connection,"select lecture_room from lecture where coll_id='.$_POST['id']'");
     while($row=mysql_fetch_array($find))
     {
       echo "<option>".$row['lecture_room']."</option>";
     }
   
     exit;
   }

?>