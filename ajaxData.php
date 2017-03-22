<?php
//Include database configuration file
include('conn.php');

if(isset($_POST["id"]) && !empty($_POST["id"])){
    //Get all state data
    $query ="SELECT * FROM lecture WHERE coll_id = ".$_POST['id']."";
    $result=mysqli_query($connection,$query);
    //Count total number of rows
    $rowCount =mysqli_num_rows($result);
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select lecture_room</option>';
        while($row =mysqli_fetch_assoc($result)){ 
            echo '<option value="'.$row['lect_id'].'">'.$row['lecture_room'].'</option>';
        }
    }else{
        echo '<option value="">lecture not available</option>';
    }
}


?>