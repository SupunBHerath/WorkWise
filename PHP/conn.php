<?php 
$conn = mysqli_connect("localhost","root","","workwise");
if (!$conn) {
    die("Conntion fail". mysqli_connect_error());
}

?>