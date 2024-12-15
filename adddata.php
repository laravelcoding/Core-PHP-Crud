<?php 
include 'config.php';

 $stu_name = mysqli_real_escape_string($conn,$_POST['sname']);
 $stu_address = mysqli_real_escape_string($conn,$_POST['saddress']);
 $stu_class = mysqli_real_escape_string($conn,$_POST['class']); 
 $stu_phone = mysqli_real_escape_string($conn,$_POST['sphone']);

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: {$hostname}");

mysqli_close($conn);

?>
