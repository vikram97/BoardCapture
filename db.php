<?php
include 'conn.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 $data = file_get_contents('php://input');





    //echo $data->date;
    //echo $data;
    $obj =json_decode($data);
if($obj){

// $id=$obj->id;
$mac=$obj->mac;

//$institute_name=$obj->institute_name;
// $lecture_room=$obj->lecture_room; 
$date=$obj->date;
$time=$obj->time;
$file_url=$obj->file_url;
$mac=mysqli_real_escape_string($connection,$mac);
$date=mysqli_real_escape_string($connection,$date);
$time=mysqli_real_escape_string($connection,$time);
$file_url=mysqli_real_escape_string($connection,$file_url);

$sql1="INSERT INTO `admin_mac` (`mac`,`date`,`time`,`file_url`) VALUES ('$mac','$date','$time','$file_url');";
if ($connection->query($sql1))

 {
$msg = array("status" =>1 , "msg" => "Your record inserted successfully");

} else {
echo "Error: " . $sql1 . "<br>" . mysqli_error($connection);
}
}
//$sql2="INSERT INTO `admin_timeslot`(`inst_id`,`lecture_room`,`time_slots`) VALUES('$inst_id','$lecture_room','$timeslots');";


$json = $msg;

header('content-type: application/json');
echo json_encode($json);
@mysqli_close($conn);

?>