<?php 

$conn = mysqli_connect('localhost','newroot','localhost*','PHP Tutorial MySQL');
if (!$conn) {
   echo 'Connection error:' . mysqli_connect_error();
}
?>