<?php
// To connect to the Database made in Xampp
$conn = mysqli_connect('localhost', 'root', '', 'web bros');

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>
