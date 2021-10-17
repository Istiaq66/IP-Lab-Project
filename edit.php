<?php
include 'Connection.php';

$id=$_REQUEST['id'];
$studentName = $_POST['studentName'];
$roll = $_POST['roll'];
$password = $_POST['password'];
$date = $_POST['Date'];
$gender = $_POST['gender'];

$update_query="UPDATE student set studentName='$studentName',roll='$roll',password='$password',Date='$date',gender='$gender' WHERE id='$id'";

$result=mysqli_query($connection,$update_query);

if($result)
{
    echo 'Data has been updated successfully';
}else{
    echo 'Update faiiled!!';
}
header('Location:registration.php');