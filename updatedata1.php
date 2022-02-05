<?php
$stu_id = $_POST['rno'];
$stu_name = $_POST['name'];
$sub1 = $_POST['p1'];
$sub2 = $_POST['p2'];
$sub3 = $_POST['p3'];
$sub4 = $_POST['p4'];
$sub5 = $_POST['p5'];
$total = $_POST['marks'];
$percentage = $_POST['percentage'];
$total=$sub1+$sub2+$sub3+$sub4+$sub5;
        $percentage=$total/5;


include('init.php');
include('session.php');

$sql = "UPDATE result SET name = '{$stu_name}', p1 = '{$sub1}',p2 = '{$sub2}', p3 = '{$sub3}' , p4 = '{$sub4}' , p5 = '{$sub5}' , marks = '{$total}' , percentage = '{$percentage}' WHERE rno = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
echo "Success";

header("Location: update1.php");

mysqli_close($conn);

?>