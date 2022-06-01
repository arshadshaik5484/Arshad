<?php
$conn = mysqli_connect('localhost','root','','test');
if($conn)
{
    echo "connected";
}
else{
    echo "NOt connected";
}
?>
