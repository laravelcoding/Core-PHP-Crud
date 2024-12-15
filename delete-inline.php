<?php
include 'config.php';

$stu_id = mysqli_real_escape_string($conn,$_GET['id']); 

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: {$hostname}");

mysqli_close($conn);

?>
