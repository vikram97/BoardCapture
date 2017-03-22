<?php include('conn.php'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Download pdf files</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>
<div id="header">
<label>Downloading PDF notes</label>
</div>
<div id="body">
 <table width="80%" border="1" align="center">
    <?php
    $inst_name=$_POST['college'];
var_dump($inst_name);
     $lecture_room=$_POST['lecture_room'];
     $date=$_POST['date'];
     $time=$_POST['time'];
    var_dump($lecture_room); 
     $query1="select mac from admin_mac where inst_name='$inst_name' and lecture_room='$lecture_room'";
	$mac1=mysqli_query($connection,$query1);
	$row=mysqli_fetch_assoc($mac1);
 $mac=$row['mac_address'];

	$sql="select file_name from admin_mac  inner join admin_inst i where m.mac='$mac' and m.date='$date' and m.time='$time'";
 $result_set=mysqli_query($connection,$sql);
 $row=mysqli_fetch_array($result_set);
 
  ?>
        <tr>
        <td><?php echo $row['file_name'] ?></td>
       
        
        <td><a href="uploads/<?php echo $row['file_name'] ?>" target="_blank">view file</a></td>
<td> &nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red"></i>  &nbsp;<a href="uploads/<?php echo $row['file_name'] ?>" download="Notes">Download the pdf</a></td>
        </tr>
        <?php
 
 ?>
    </table>
    
</div>
</body>
</html>


	