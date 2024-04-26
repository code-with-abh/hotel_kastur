<?php
include("connect.php");
$query = "select * from booking";
$data = mysqli_query($conn,$query);

$totel = mysqli_num_rows($data);
$p = mysqli_fetch_assoc($data);

echo $p['room'];
?>