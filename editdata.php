<?php
include 'config.php';

$stu_id = mysqli_real_escape_string($conn,$_POST['sid']);
$stu_name = mysqli_real_escape_string($conn,$_POST['sname']);
$stu_address = mysqli_real_escape_string($conn,$_POST['saddress']);
$stu_class = mysqli_real_escape_string($conn,$_POST['sclass']);
$stu_phone = mysqli_real_escape_string($conn,$_POST['sphone']);

// die($stu_phone);

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}',sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";


// $result = mysqli_query($conn, $sql);
// print_r($sql);
// die();

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: {$hostname}");

mysqli_close($conn);

?>
