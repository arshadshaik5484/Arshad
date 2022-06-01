<?php
require_once 'connection.php';
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$rno = $_POST['rollnumber'];

$insert = "insert into form(username , password,email,rollnumber) values ('$Username','$Password','$Email','$rno')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 

?>
